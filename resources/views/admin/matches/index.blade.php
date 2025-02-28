@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item breadcrumb-active" aria-current="page">Football Matches</li>
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
														<div class="card-title">Football Matches</div>
														<div class="card-options">
																<a href="{{ route('matches.create') }}" class="btn btn-primary btn-sm">
																		<i class="bi bi-plus"></i> New Match
																</a>
																<a href="{{ route('scorers.index') }}" class="btn btn-warning btn-sm">
																		<i class="bi bi-clock"></i> Goal Scorers
																</a>
														</div>
												</div>
												<div class="card-body">
														<div class="table-responsive">
																<table class="table m-0">
																		<thead>
																				<tr>
																						<th>T 1</th>
																						<th>T 2</th>
																						<th>Winner</th>
																						<th>Scores (T1 - T2)</th>
																						<th>Possession (T1 - T2)</th>
																						<th>Yellow Cards (T1 - T2)</th>
																						<th>Red Cards (T1 - T2)</th>
																						<th>Goal Scorers</th>
																						<th>Date-Time</th>
																				</tr>
																		</thead>
																		<tbody>
																				@if ($message === true)
																						<tr>
																								<td colspan="15" class="text-center">No matches found</td>
																						</tr>
																				@else
																						@foreach ($matches as $match)
																								<tr>
																										<td>{{ $match->schedule->team1->short_name }}</td>
																										<td>{{ $match->schedule->team2->short_name }}</td>
																										<td>{{ $match->winner?->short_name ?? 'Draw' }}</td>
																										<td>{{ $match->team_1_score }} - {{ $match->team_2_score }}</td>
																										<td>{{ $match->team_1_possession }}% - {{ $match->team_2_possession }}%</td>
																										<td>{{ $match->team_1_yellow_cards }} - {{ $match->team_2_yellow_cards }}</td>
																										<td>{{ $match->team_1_red_cards }} - {{ $match->team_2_red_cards }}</td>
																										<td>
																												@if ($match->goalScorers->isNotEmpty())
																														<ul class="list-unstyled">
																																@foreach ($match->goalScorers as $scorer)
																																		<li>
																																				{{ $scorer->player->fullname ?? 'Unknown Player' }}
																																				@if ($scorer->player && $scorer->player->team)
																																						({{ $scorer->player->team->short_name }})
																																				@else
																																						(Unknown Team)
																																				@endif
																																				- {{ $scorer->minute }}'
																																		</li>
																																@endforeach
																														</ul>
																												@else
																														<span class="text-muted">Not available</span>
																												@endif
																										</td>

																										<td>{{ $match->schedule->match_time }}</td>
																										<td>
																												<a href="{{ route('matches.edit', $match->match_uuid) }}" class="text-primary"
																														title="Edit">
																														<i class="bi bi-pencil-fill"></i>
																												</a>
																												<a href="{{ route('matches.destroy', $match->match_uuid) }}" class="text-danger"
																														title="Delete">
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
