@extends('admin.layout.admin')

@section('breadcrumb')
		{{-- <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li> --}}
		<li class="breadcrumb-item breadcrumb-active" aria-current="page">Coach</li>
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
														<div class="card-title">Update Team Coach</div>
												</div>
												<div class="card-body">
														<!-- Row start -->
														<form action="{{ route('coaches.update', $coach->coach_uuid) }}" method="POST"
																enctype="multipart/form-data">
																@csrf
																@method('PUT')
																<div class="row">
																		<div class="col-12">
																				<div class="form-section-title">Coach Details</div>
																		</div>
																		@session('error')
																				<div class="alert alert-danger">{{ session('error') }}</div>
																		@endsession
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputName" class="form-label">Full Name</label>
																						<input type="text" class="form-control" id="inputName" value="{{ $coach->fullname }}"
																								name="fullname">
																				</div>
																				@error('fullname')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="email" class="form-label">Email</label>
																						<input type="email" class="form-control" name="email" id="email"
																								value="{{ $coach->email }}">
																				</div>
																				@error('email')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="phone" class="form-label">Phone Number</label>
																						<input type="number" class="form-control" name="phone" id="phone"
																								value="{{ $coach->phone }}">
																				</div>
																				@error('phone')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="description" class="form-label">Description - (coach, manager, trainer)</label>
																						<input type="text" class="form-control" name="description" id="description"
																								value="{{ $coach->description }}">
																				</div>
																				@error('description')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="SuccessRate" class="form-label">Success Rate</label>
																						<input type="text" class="form-control" name="success_rate" id="SuccessRate"
																								value="{{ $coach->success_rate }}">
																				</div>
																				@error('success_rate')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="Picture" class="form-label">Picture</label>
																						<input type="file" class="form-control" name="photo" id="Picture"
																								value="{{ old('photo') }}">
																				</div>
																				@error('photo')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputPhoto" class="form-label">Team or Club</label>
																						<select class="form-select" name="team_id" id="inputPhoto">
																								<option disabled>Select Team or Club</option>
																								@foreach ($teams as $team)
																										<option value="{{ $team->id }}"
																												{{ $team->id == ($coach->team_id ?? '') ? 'selected' : '' }}>
																												{{ $team->name }}
																										</option>
																								@endforeach
																						</select>

																				</div>
																				@error('team_id')
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
