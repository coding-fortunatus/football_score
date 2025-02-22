@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item"><a href="{{ route('players.index') }}">Players</a></li>
		<li class="breadcrumb-item breadcrumb-active" aria-current="page">Edit</li>
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
														<div class="card-title">Register Player</div>
												</div>
												<div class="card-body">
														<!-- Row start -->
														<form action="{{ route('players.update', $player->player_uuid) }}" method="POST"
																enctype="multipart/form-data">
																@csrf
																@method('PUT')
																<div class="row">
																		<div class="col-12">
																				<div class="form-section-title">Player Details</div>
																		</div>
																		@session('error')
																				<div class="alert alert-danger">{{ session('error') }}</div>
																		@endsession
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputName" class="form-label">Full Name</label>
																						<input type="text" class="form-control" id="inputName" value="{{ $player->fullname }}"
																								name="fullname" placeholder="Enter full name">
																				</div>
																				@error('fullname')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="Phine" class="form-label">Phone number</label>
																						<input type="number" class="form-control" name="phone" id="Phine"
																								placeholder="Enter team short name" value="{{ $player->phone }}">
																				</div>
																				@error('phone')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="position" class="form-label">Player Position</label>
																						<input type="number" class="form-control" name="position" id="position"
																								placeholder="Enter player position" value="{{ $player->position }}">
																				</div>
																				@error('position')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="wing" class="form-label">Player Wing</label>
																						<input type="number" class="form-control" name="wing" id="wing"
																								placeholder="Enter player wing" value="{{ $player->wing }}">
																				</div>
																				@error('wing')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="skillLevel" class="form-label">Player Skill Level</label>
																						<input type="number" class="form-control" name="skill_level" id="skillLevel"
																								placeholder="Enter player skill Level" value="{{ $player->skill_level }}">
																				</div>
																				@error('skill_level')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="TeamClub" class="form-label">Team or Club</label>
																						<select class="form-select" name="team_id" id="TeamClub">
																								<option disabled> Select Team or Club </option>
																								@foreach ($teams as $team)
																										<option value="{{ $team->id }}"
																												{{ $team->id == ($player->team_id ?? '') ? 'selected' : '' }}>
																												{{ $team->name }}
																										</option>
																								@endforeach
																						</select>
																				</div>
																				@error('team_id')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputPhoto" class="form-label">Team picture or logo</label>
																						<input type='file' name="logo" class="form-control" id="inputPhoto">
																				</div>
																				@error('logo')
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
