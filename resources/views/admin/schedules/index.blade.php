@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item breadcrumb-active" aria-current="page">Schedules</li>
@endsection
@section('content')
		<!-- Content wrapper scroll start -->
		<div class="content-wrapper-scroll">
				<!-- Content wrapper start -->
				<div class="content-wrapper">
						<!-- Row start -->
						<div class="row">
								<div class="col-12">
										<div class="card">
												@session('success')
														<div class="alert alert-success alert-dismissible fade show" role="alert">
																{{ session('success') }}
																<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
														</div>
												@endsession
												@session('error')
														<div class="alert alert-danger alert-dismissible fade show" role="alert">
																{{ session('error') }}
																<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
														</div>
												@endsession
												<div class="card-header">
														<div class="card-title">Schedules</div>
														<div class="card-options">
																<a href="{{ route('schedules.create') }}" class="btn btn-primary btn-sm">
																		<i class="bi bi-plus"></i> New Schedule
																</a>
														</div>
												</div>
												<div class="card-body">
														<div class="table-responsive">
																<table class="table m-0">
																		<thead>
																				<tr>
																						<th>#</th>
																						<th>Team 1</th>
																						<th>Team 2</th>
																						<th>Field</th>
																						<th>Official</th>
																						<th>League</th>
																						<th>Status</th>
																						<th>Date-Time</th>
																				</tr>
																		</thead>
																		<tbody>
																				@if ($message === true)
																						<tr>
																								<td colspan="8" class="text-center">No schedules found</td>
																						</tr>
																				@else
																						@foreach ($schedules as $schedule)
																								<tr>
																										<td>{{ $loop->iteration }}</td>
																										<td>{{ $schedule->team1->short_name }}</td>
																										<td>{{ $schedule->team2->short_name }}</td>
																										<td>{{ $schedule->field->name }}</td>
																										<td>{{ $schedule->official->fullname }}</td>
																										<td>{{ $schedule->league->title }}</td>
																										<td>{{ $schedule->status }}</td>
																										<td>{{ $schedule->match_time }}</td>
																										<td class="text-danger">
																												<a href="{{ route('schedules.edit', $schedule->schedule_uuid) }}" title="edit">
																														<i class="bi bi-pencil-fill"></i>
																												</a>
																										</td>
																										<td class="text-danger">
																												<a href="{{ route('schedules.destroy', $schedule->schedule_uuid) }}" title="delete">
																														<i class="bi bi-trash-fill"></i>
																												</a>
																										</td>
																								</tr>
																						@endforeach
																				@endif
																		</tbody>
																</table>
														</div>
												</div>
										</div>

								</div>
						</div>
						<!-- Row end -->
				</div>
				<!-- Content wrapper end -->

		</div>
		<!-- Content wrapper scroll end -->
@endsection
