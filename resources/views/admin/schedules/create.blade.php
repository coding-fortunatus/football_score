@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item"><a href="{{ route('schedules.index') }}">Schedules</a></li>
		<li class="breadcrumb-item breadcrumb-active" aria-current="page">Create</li>
@endsection
@section('content')
		<div class="content-wrapper-scroll">

				<!-- Content wrapper start -->
				<div class="content-wrapper">
						<!-- Row start -->
						<div class="row">
								<div class="col-sm-12 col-12">

										<!-- Card start -->
										<div class="card">
												<div class="card-header">
														<div class="card-title">Create Schedule</div>
												</div>
												<div class="card-body">
														<!-- Row start -->
														<form action="{{ route('schedules.store') }}" method="POST">
																@csrf
																<div class="row">
																		<div class="col-12">
																				<div class="form-section-title">Fixture Details</div>
																		</div>
																		@session('error')
																				<div class="alert alert-danger">{{ session('error') }}</div>
																		@endsession
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="team1" class="form-label">Team 1</label>
																						<select class="form-select" name="team_1_id" id="team1">
																								<option selected disabled> Select Team 1 </option>
																								@foreach ($teams as $team)
																										<option value="{{ $team->id }}">{{ $team->name }}</option>
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
																								<option selected disabled> Select Team 2 </option>
																								@foreach ($teams as $team)
																										<option value="{{ $team->id }}">{{ $team->name }}</option>
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
																								<option selected disabled> Select Match Field </option>
																								@foreach ($fields as $field)
																										<option value="{{ $field->id }}">{{ $field->name }}</option>
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
																								<option selected disabled> Select Match League </option>
																								@foreach ($leagues as $league)
																										<option value="{{ $league->id }}">{{ $league->title }}</option>
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
																								<option selected disabled> Select Match Referee </option>
																								@foreach ($officials as $official)
																										<option value="{{ $official->id }}">{{ $official->fullname }}</option>
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
																						<select class="form-select" name="status" id="TeamClub">
																								<option selected disabled> Select schedule status </option>
																								<option value="Scheduled">Scheduled</option>
																								<option value="Completed">Completed</option>
																								<option value="Cancelled">Cancelled</option>
																						</select>
																				</div>
																				@error('status')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="date" class="form-label">Match Date Time</label>
																						<input type="datetime-local" class="form-control" name="match_time" id="date">
																				</div>
																				@error('match_time')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<!-- Form actions footer start -->
																		<div class="form-actions-footer">
																				<button type="submit" class="btn btn-success">Submit</button>
																		</div>
																		<!-- Form actions footer end -->
														</form>
												</div>
												<!-- Row end -->
										</div>
								</div>
						</div>
				</div>
				<!-- Card end -->
		</div>
@endsection
