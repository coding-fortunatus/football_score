@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item breadcrumb-active" aria-current="page">Teams</li>
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
														<div class="card-title">Teams</div>
														<div class="card-options">
																<a href="{{ route('teams.create') }}" class="btn btn-primary btn-sm">
																		<i class="bi bi-plus"></i> New Team
																</a>
														</div>
												</div>
												<div class="card-body">
														<div class="table-responsive">
																<table class="table m-0">
																		<thead>
																				<tr>
																						<th>#</th>
																						<th>Team Name</th>
																						<th>Short Name</th>
																						<th>Faculty</th>
																						<th class="text-right">Date Added</th>
																						<th>Picture</th>
																				</tr>
																		</thead>
																		<tbody>
																				@if ($message === true)
																						<tr>
																								<td colspan="7" class="text-center">No teams found</td>
																						</tr>
																				@else
																						@foreach ($teams as $team)
																								<tr>
																										<td>{{ $loop->iteration }}</td>
																										<td>{{ $team->name }}</td>
																										<td>{{ $team->short_name }}</td>
																										<td>{{ $team->faculty }}</td>
																										<td class="text-right">{{ $team->created_at }}</td>
																										<td>
																												<div class="activity-user">
																														<img src="{{ asset('storage/' . $team->logo) }}" alt="Activity User">
																												</div>
																										</td>
																										<td class="text-danger">
																												<a href="{{ route('teams.edit', $team->team_uuid) }}" title="edit">
																														<i class="bi bi-pencil-fill"></i>
																												</a>
																										</td>
																										<td class="text-danger">
																												<a href="{{ route('teams.destroy', $team->team_uuid) }}" title="delete">
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
