@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item"><a href="{{ route('matches.index') }}">Matches</a></li>
		<li class="breadcrumb-item breadcrumb-active" aria-current="page">Edit</li>
@endsection

@section('content')
		<div class="content-wrapper-scroll">
				<div class="content-wrapper">
						<div class="row">
								<div class="col-sm-12 col-12">
										<div class="card">
												<div class="card-header">
														<div class="card-title">Edit Match</div>
												</div>
												<div class="card-body">
														<form action="{{ route('matches.update', $match->match_uuid) }}" method="POST">
																@csrf
																@method('PATCH')
																<div class="row">
																		<div class="col-12">
																				<div class="form-section-title">Match Details</div>
																		</div>

																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="schedule" class="form-label">Schedule</label>
																						<select class="form-select" name="schedule_id" id="schedule">
																								<option selected>Select Schedule</option>
																								@foreach ($schedules as $schedule)
																										<option value="{{ $schedule->id }}"
																												{{ $match->schedule_id == $schedule->id ? 'selected' : '' }}>
																												{{ $schedule->match_time }}
																										</option>
																								@endforeach
																						</select>
																				</div>
																		</div>

																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="winner_team" class="form-label">Winner Team</label>
																						<select class="form-select" name="winner_team_id" id="winner_team">
																								<option value="">Select Winner Team (Optional)</option>
																								@foreach ($teams as $team)
																										<option value="{{ $team->id }}" {{ $match->winner_team_id == $team->id ? 'selected' : '' }}>
																												{{ $team->name }}
																										</option>
																								@endforeach
																						</select>
																				</div>
																		</div>

																		@php
																				$stats = [
																				    'team_1_score' => 'Team 1 Score',
																				    'team_2_score' => 'Team 2 Score',
																				    'team_1_possession' => 'Team 1 Possession (%)',
																				    'team_2_possession' => 'Team 2 Possession (%)',
																				    'team_1_shots_on_target' => 'Team 1 Shots on Target',
																				    'team_2_shots_on_target' => 'Team 2 Shots on Target',
																				    'team_1_fouls' => 'Team 1 Fouls',
																				    'team_2_fouls' => 'Team 2 Fouls',
																				    'team_1_corners' => 'Team 1 Corners',
																				    'team_2_corners' => 'Team 2 Corners',
																				    'team_1_yellow_cards' => 'Team 1 Yellow Cards',
																				    'team_2_yellow_cards' => 'Team 2 Yellow Cards',
																				    'team_1_red_cards' => 'Team 1 Red Cards',
																				    'team_2_red_cards' => 'Team 2 Red Cards',
																				];
																		@endphp

																		@foreach ($stats as $key => $label)
																				<div class="col-xl-4 col-sm-6 col-12">
																						<div class="mb-3">
																								<label for="{{ $key }}" class="form-label">{{ $label }}</label>
																								<input type="number" class="form-control" name="{{ $key }}" id="{{ $key }}"
																										value="{{ old($key, $match->$key) }}" min="0">
																						</div>
																				</div>
																		@endforeach

																		<div class="form-actions-footer">
																				<button type="submit" class="btn btn-primary">Update</button>
																				<a href="{{ route('matches.index') }}" class="btn btn-secondary">Cancel</a>
																		</div>
																</div>
														</form>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
@endsection
