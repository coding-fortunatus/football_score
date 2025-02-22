@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item"><a href="{{ route('teams.index') }}">Teams</a></li>
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
														<div class="card-title">Update Team</div>
												</div>
												<div class="card-body">
														<!-- Row start -->
														<form action="{{ route('teams.update', $team->team_uuid) }}" method="POST" enctype="multipart/form-data">
																@csrf
																@method('PUT')
																<div class="row">
																		<div class="col-12">
																				<div class="form-section-title">Team Details</div>
																		</div>
																		@session('error')
																				<div class="alert alert-danger">{{ session('error') }}</div>
																		@endsession
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputName" class="form-label">Team Name</label>
																						<input type="text" class="form-control" id="inputName" value="{{ $team->name }}" name="name"
																								placeholder="Enter Team Name">
																				</div>
																				@error('name')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputShort" class="form-label">Short Name</label>
																						<input type="text" class="form-control" name="short_name" id="inputShort"
																								placeholder="Enter team short name" value="{{ $team->short_name }}">
																				</div>
																				@error('short_name')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputFaculty" class="form-label">Faculty</label>
																						<input type="text" class="form-control" name="faculty" id="inputFaculty"
																								placeholder="Enter team faculty" value="{{ $team->faculty }}">
																				</div>
																				@error('faculty')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputPhoto" class="form-label">Team picture or logo</label>
																						<input type='file' name="logo" class="form-control" id="inputPhoto"
																								value="{{ old('logo') }}">
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
