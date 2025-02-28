@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item breadcrumb-active" aria-current="page">Leagues</li>
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
														<div class="card-title">Leagues</div>
														<div class="card-options">
																<a href="{{ route('leagues.create') }}" class="btn btn-primary btn-sm">
																		<i class="bi bi-plus"></i> New League
																</a>
														</div>
												</div>
												<div class="card-body">
														<div class="table-responsive">
																<table class="table m-0">
																		<thead>
																				<tr>
																						<th>#</th>
																						<th>Title</th>
																						<th>Season</th>
																						<th>Teams</th>
																						<th class="text-right">Starts</th>
																						<th class="text-right">Ends</th>
																						<th>Status</th>
																						<th>Photo</th>
																				</tr>
																		</thead>
																		<tbody>
																				@if ($message === true)
																						<tr>
																								<td colspan="8" class="text-center">No leagues found</td>
																						</tr>
																				@else
																						@foreach ($leagues as $league)
																								<tr>
																										<td>{{ $loop->iteration }}</td>
																										<td>{{ $league->title }}</td>
																										<td>{{ $league->semester_season }}</td>
																										<td>{{ $league->teams }}</td>
																										<td class="text-right">{{ $league->start_date }}</td>
																										<td class="text-right">{{ $league->end_date }}</td>
																										<td><span class="badge shade-blue">
																														@if ($league->status === '1')
																																Active
																														@else
																																Inactive
																														@endif
																												</span></td>
																										<td>
																												<div class="activity-user">
																														<img src="{{ asset('storage/' . $league->photo) }}" alt="Activity league">
																												</div>
																										</td>
																										<td class="text-danger">
																												<a href="{{ route('leagues.edit', $league->league_uuid) }}" title="edit">
																														<i class="bi bi-pencil-fill"></i>
																												</a>
																										</td>
																										<td class="text-danger">
																												<a href="{{ route('leagues.destroy', $league->league_uuid) }}" title="delete">
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
