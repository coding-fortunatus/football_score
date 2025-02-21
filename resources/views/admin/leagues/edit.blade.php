@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item"><a href="{{ route('leagues.index') }}">Leagues</a></li>
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
														<div class="card-title">Update League</div>
												</div>
												<div class="card-body">
														<!-- Row start -->
														<form action="{{ route('leagues.update', $league->league_uuid) }}" method="POST"
																enctype="multipart/form-data">
																@csrf
																@method('PUT')
																<div class="row">
																		<div class="col-12">
																				<div class="form-section-title">League Details</div>
																		</div>
																		@session('error')
																				<div class="alert alert-danger">{{ session('error') }}</div>
																		@endsession
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputName" class="form-label">League Title</label>
																						<input type="text" class="form-control" id="inputName" value="{{ $league->title }}"
																								name="title" placeholder="Enter league title">
																				</div>
																				@error('title')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputSeason" class="form-label">League Season | Semester</label>
																						<input type="text" class="form-control" name="semester_season" id="inputSeason"
																								placeholder="Enter League Season | Semester" value="{{ $league->semester_season }}">
																				</div>
																				@error('semester_season')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputTeams" class="form-label">Playing Team Capacity</label>
																						<input type="number" class="form-control" name="teams" id="inputTeams"
																								placeholder="Enter Playing Team Capacity" value="{{ $league->teams }}">
																				</div>
																				@error('teams')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputStart" class="form-label">Start Date</label>
																						<input type="date" class="form-control" name="start_date" id="inputStart"
																								placeholder="12/02/2025" value="{{ $league->start_date }}">
																				</div>
																				@error('start_date')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputEnd" class="form-label">End Date</label>
																						<input type="date" class="form-control" name="end_date" id="inputEnd" placeholder="12/02/2025"
																								value="{{ $league->end_date }}">
																				</div>
																				@error('end_date')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputStatus" class="form-label">League Status</label>
																						<select class="form-select" name="status" id="inputStatus" value="{{ $league->status }}">
																								<option>Select League Status</option>
																								<option value="1">Active</option>
																								<option value="0">Inactive</option>
																						</select>
																				</div>
																				@error('status')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputPhoto" class="form-label">League picture</label>
																						<input type='file' name="photo" class="form-control" id="inputPhoto"
																								value="{{ old('photo') }}">
																				</div>
																				@error('photo')
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
