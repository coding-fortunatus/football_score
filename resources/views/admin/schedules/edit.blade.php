@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item"><a href="{{ route('schedules.index') }}">Schedules</a></li>
		<li class="breadcrumb-item breadcrumb-active" aria-current="page">Edit</li>
@endsection

@section('content')
		<div class="content-wrapper-scroll">
				<div class="content-wrapper">
						<div class="row">
								<div class="col-sm-12 col-12">
										<div class="card">
												<div class="card-header">
														<div class="card-title">Edit Schedule</div>
												</div>
												<div class="card-body">
														<form action="{{ route('schedules.update', $schedule->schedule_uuid) }}" method="POST">
																@csrf
																@method('PATCH')
																<div class="row">
																		<div class="col-12">
																				<div class="form-section-title">Fixture Details</div>
																		</div>

																		@if (session('error'))
																				<div class="alert alert-danger">{{ session('error') }}</div>
																		@endif

																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="team1" class="form-label">Team 1</label>
																						<select class="form-select" name="team_1_id" id="team1">
																								<option disabled> Select Team 1 </option>
																								@foreach ($teams as $team)
																										<option value="{{ $team->id }}"
																												{{ old('team_1_id', $schedule->team_1_id) == $team->id ? 'selected' : '' }}>
																												{{ $team->name }}
																										</option>
																								@endforeach
																						</select>
																				</div>
																				@error('team_1_id')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>

																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="team2" class="form-label">Team 2</label>
																						<select class="form-select" name="team_2_id" id="team2">
																								<option disabled> Select Team 2 </option>
																								@foreach ($teams as $team)
																										<option value="{{ $team->id }}"
																												{{ old('team_2_id', $schedule->team_2_id) == $team->id ? 'selected' : '' }}>
																												{{ $team->name }}
																										</option>
																								@endforeach
																						</select>
																				</div>
																				@error('team_2_id')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>

																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="field" class="form-label">Field</label>
																						<select class="form-select" name="field_id" id="field">
																								<option disabled> Select Match Field </option>
																								@foreach ($fields as $field)
																										<option value="{{ $field->id }}"
																												{{ old('field_id', $schedule->field_id) == $field->id ? 'selected' : '' }}>
																												{{ $field->name }}
																										</option>
																								@endforeach
																						</select>
																				</div>
																				@error('field_id')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="league" class="form-label">League</label>
																						<select class="form-select" name="league_id" id="league">
																								<option disabled> Select Match League </option>
																								@foreach ($leagues as $league)
																										<option value="{{ $league->id }}"
																												{{ old('league_id', $schedule->league_id) == $league->id ? 'selected' : '' }}>
																												{{ $league->title }}
																										</option>
																								@endforeach
																						</select>
																				</div>
																				@error('league_id')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="official" class="form-label">Referee</label>
																						<select class="form-select" name="official_id" id="official">
																								<option disabled> Select Match Referee </option>
																								@foreach ($officials as $official)
																										<option value="{{ $official->id }}"
																												{{ old('official_id', $schedule->official_id) == $official->id ? 'selected' : '' }}>
																												{{ $official->fullname }}
																										</option>
																								@endforeach
																						</select>
																				</div>
																				@error('official_id')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="status" class="form-label">Status</label>
																						<select class="form-select" name="status" id="status">
																								<option disabled> Select schedule status </option>
																								<option value="Scheduled"
																										{{ old('status', $schedule->status) == 'Scheduled' ? 'selected' : '' }}>Scheduled</option>
																								<option value="Completed"
																										{{ old('status', $schedule->status) == 'Completed' ? 'selected' : '' }}>Completed</option>
																								<option value="Cancelled"
																										{{ old('status', $schedule->status) == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
																						</select>
																				</div>
																				@error('status')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="date" class="form-label">Match Date Time</label>
																						<input type="datetime-local" class="form-control" name="match_time" id="date"
																								value="{{ old('match_time', \Carbon\Carbon::parse($schedule->match_time)->format('Y-m-d\TH:i')) }}">
																				</div>
																				@error('match_time')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="form-actions-footer">
																				<button type="submit" class="btn btn-success">Update</button>
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
