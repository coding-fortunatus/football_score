@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item breadcrumb-active" aria-current="page">Players</li>
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
														<div class="card-title">Players</div>
														<div class="card-options">
																<a href="{{ route('players.create') }}" class="btn btn-primary btn-sm">
																		<i class="bi bi-plus"></i> New Player
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
																						<th>Phone</th>
																						<th>Position</th>
																						<th>wing</th>
																						<th>Skill Level</th>
																						<th>Team</th>
																						<th>Picture</th>
																				</tr>
																		</thead>
																		<tbody>
																				@if ($message === true)
																						<tr>
																								<td colspan="8" class="text-center">No players found</td>
																						</tr>
																				@else
																						@foreach ($players as $player)
																								<tr>
																										<td>{{ $loop->iteration }}</td>
																										<td>{{ $player->fullname }}</td>
																										<td>{{ $player->phone }}</td>
																										<td>{{ $player->position }}</td>
																										<td>{{ $player->wing }}</td>
																										<td>{{ $player->skill_level }}</td>
																										<td>{{ $player->team->name }}</td>
																										<td>
																												<div class="activity-user">
																														<img src="{{ asset('storage/' . $player->photo) }}" alt="Activity User">
																												</div>
																										</td>
																										<td class="text-danger">
																												<a href="{{ route('players.edit', $player->player_uuid) }}" title="edit">
																														<i class="bi bi-pencil-fill"></i>
																												</a>
																										</td>
																										<td class="text-danger">
																												<a href="{{ route('players.destroy', $player->player_uuid) }}" title="delete">
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
