@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item"><a href="{{ route('scorers.index') }}">Goal Scorers</a></li>
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
														<div class="card-title">Edit Goal Scorer</div>
												</div>
												<div class="card-body">
														<!-- Form start -->
														<form action="{{ route('scorers.update', $scorer->id) }}" method="POST">
																@csrf
																@method('PATCH')
																<div class="row">
																		<div class="col-12">
																				<div class="form-section-title">Goal Scorer Details</div>
																		</div>

																		@if (session('error'))
																				<div class="alert alert-danger">{{ session('error') }}</div>
																		@endif

																		<!-- Match Selection -->
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="match_id" class="form-label">Match</label>
																						<select class="form-select" id="match_id" name="match_id">
																								<option selected disabled>Select Match</option>
																								@foreach ($matches as $match)
																										<option value="{{ $match->id }}" {{ $scorer->match_id == $match->id ? 'selected' : '' }}>
																												{{ $match->schedule->league->title }}:
																												{{ $match->schedule->team1->short_name }} vs
																												{{ $match->schedule->team2->short_name }}
																												({{ $match->schedule->match_time }})
																										</option>
																								@endforeach
																						</select>
																						@error('match_id')
																								<small class="text-danger">{{ $message }}</small>
																						@enderror
																				</div>
																		</div>

																		<!-- Player Selection -->
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="player_id" class="form-label">Player</label>
																						<select class="form-select" id="player_id" name="player_id">
																								<option selected disabled>Select Player</option>
																								@foreach ($players as $player)
																										<option value="{{ $player->id }}" {{ $scorer->player_id == $player->id ? 'selected' : '' }}>
																												{{ $player->fullname }} ({{ $player->team->short_name }})
																										</option>
																								@endforeach
																						</select>
																						@error('player_id')
																								<small class="text-danger">{{ $message }}</small>
																						@enderror
																				</div>
																		</div>

																		<!-- Goal Minute Input -->
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="minute" class="form-label">Minute Scored</label>
																						<input type="number" class="form-control" id="minute" name="minute"
																								value="{{ old('minute', $scorer->minute) }}" placeholder="Enter the minute goal was scored">
																						@error('minute')
																								<small class="text-danger">{{ $message }}</small>
																						@enderror
																				</div>
																		</div>

																		<!-- Form actions footer start -->
																		<div class="form-actions-footer">
																				<button type="submit" class="btn btn-success">Update</button>
																				<a href="{{ route('scorers.index') }}" class="btn btn-secondary">Cancel</a>
																		</div>
																		<!-- Form actions footer end -->
																</div>
														</form>
														<!-- Form end -->
												</div>
										</div>
										<!-- Card end -->
								</div>
						</div>
						<!-- Row end -->
				</div>
		</div>
@endsection
