@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item breadcrumb-active" aria-current="page">Dashboard</li>
@endsection

@section('content')
		<!-- Content wrapper scroll start -->
		<div class="content-wrapper-scroll">
				<!-- Content wrapper start -->
				<div class="content-wrapper">
						<!-- System Statistics -->
						<div class="row">
								<div class="col-xxl-3 col-sm-6 col-12">
										<div class="stats-tile">
												<div class="sale-icon shade-red">
														<i class="bi bi-life-preserver"></i>
												</div>
												<div class="sale-details">
														<h3 class="text-red">{{ $leagues }}</h3>
														<p>Leagues</p>
												</div>
										</div>
								</div>

								<div class="col-xxl-3 col-sm-6 col-12">
										<div class="stats-tile">
												<div class="sale-icon shade-blue">
														<i class="bi bi-person-check"></i>
												</div>
												<div class="sale-details">
														<h3 class="text-blue">{{ $officials }}</h3>
														<p>Officials</p>
												</div>
										</div>
								</div>

								<div class="col-xxl-3 col-sm-6 col-12">
										<div class="stats-tile">
												<div class="sale-icon shade-yellow">
														<i class="bi bi-ui-checks"></i>
												</div>
												<div class="sale-details">
														<h3 class="text-yellow">{{ $teams }}</h3>
														<p>Teams</p>
												</div>
										</div>
								</div>

								<div class="col-xxl-3 col-sm-6 col-12">
										<div class="stats-tile">
												<div class="sale-icon shade-green">
														<i class="bi bi-people"></i>
												</div>
												<div class="sale-details">
														<h3 class="text-green">{{ $players }}</h3>
														<p>Players</p>
												</div>
										</div>
								</div>
						</div>
						{{-- Coaches --}}
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
														<div class="card-title">Team Coaches</div>
														<div class="card-options">
																<a href="{{ route('coaches.create') }}" class="btn btn-primary btn-sm">
																		<i class="bi bi-plus"></i> New Coach
																</a>
														</div>
												</div>
												<div class="card-body">
														<div class="table-responsive">
																<table class="table m-0">
																		<thead>
																				<tr>
																						<th>#</th>
																						<th>Full Name</th>
																						<th>Email</th>
																						<th>Description</th>
																						<th class="text-right">Success Rate</th>
																						<th class="text-right">Team</th>
																						<th>Picture</th>
																				</tr>
																		</thead>
																		<tbody>
																				@if ($message === true)
																						<tr>
																								<td colspan="7" class="text-center">No coach found</td>
																						</tr>
																				@else
																						@foreach ($coaches as $coach)
																								<tr>
																										<td>{{ $loop->iteration }}</td>
																										<td>{{ $coach->fullname }}</td>
																										<td>{{ $coach->email }}</td>
																										<td>{{ $coach->description }}</td>
																										<td><span class="badge shade-blue">{{ $coach->success_rate }}</span></td>
																										<td><span class="badge shade-blue">{{ $coach->team->name }}</span></td>
																										<td>
																												<div class="activity-user">
																														<img src="{{ asset('storage/' . $coach->logo) }}" alt="Activity User">
																												</div>
																										</td>
																										<td class="text-danger">
																												<a href="{{ route('coaches.edit', $coach->coach_uuid) }}" title="edit">
																														<i class="bi bi-pencil-fill"></i>
																												</a>
																										</td>
																										<td class="text-danger">
																												<a href="{{ route('coaches.destroy', $coach->coach_uuid) }}" title="delete">
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
						<!-- Officials, Leagues -->
						<div class="row">
								{{-- Officils --}}
								<div class="col-sm-6 col-12">
										<div class="card">
												<div class="card-header">
														<div class="card-title">Available Refrees</div>
												</div>
												<div class="card-body">
														<div class="scroll370">
																<ul class="user-messages">
																		@foreach ($refrees as $refree)
																				<li>
																						<div class="customer shade-blue">RF</div>
																						<div class="delivery-details">
																								<span class="badge shade-blue">{{ $refree->role }}</span>
																								<h5>{{ $refree->fullname }}</h5>
																								<p>{{ $refree->phone }}</p>
																						</div>
																				</li>
																		@endforeach
																</ul>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
				<!-- Content wrapper end -->
		</div>
		<!-- Content wrapper scroll end -->
@endsection
