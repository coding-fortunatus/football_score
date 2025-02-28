@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item breadcrumb-active" aria-current="page">Goal Scorers</li>
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
												@if (session('success'))
														<div class="alert alert-success alert-dismissible fade show" role="alert">
																{{ session('success') }}
																<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
														</div>
												@endif
												@if (session('error'))
														<div class="alert alert-danger alert-dismissible fade show" role="alert">
																{{ session('error') }}
																<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
														</div>
												@endif
												<div class="card-header">
														<div class="card-title">Goal Scorers</div>
														<div class="card-options">
																<a href="{{ route('scorers.create') }}" class="btn btn-primary btn-sm">
																		<i class="bi bi-plus"></i> New Goal Scorer
																</a>
														</div>
												</div>
												<div class="card-body">
														<div class="table-responsive">
																<table class="table m-0">
																		<thead>
																				<tr>
																						<th>#</th>
																						<th>Match</th>
																						<th>Player</th>
																						<th>Minute</th>
																				</tr>
																		</thead>
																		<tbody>
																				@if ($message === true)
																						<tr>
																								<td colspan="5" class="text-center">No goal scorers found</td>
																						</tr>
																				@else
																						@foreach ($scorers as $scorer)
																								<tr>
																										<td>{{ $loop->iteration }}</td>
																										<td>{{ $scorer->match->schedule->team1->short_name }} vs
																												{{ $scorer->match->schedule->team2->short_name }}
																												({{ $scorer->match->schedule->match_time }})
																										</td>
																										<td>{{ $scorer->player->fullname }}</td>
																										<td>{{ $scorer->minute }}'</td>
																										<td>
																												<a href="{{ route('scorers.edit', $scorer->id) }}" title="edit">
																														<i class="bi bi-pencil-fill"></i>
																												</a>
																										</td>
																										<td>
																												<a href="{{ route('scorers.destroy', $scorer->id) }}" title="delete" class="text-danger">
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
