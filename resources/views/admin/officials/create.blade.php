@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item"><a href="{{ route('officials.index') }}">Officials</a></li>
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
														<div class="card-title">Register Official</div>
												</div>
												<div class="card-body">
														<!-- Row start -->
														<form action="{{ route('officials.store') }}" method="POST" enctype="multipart/form-data">
																@csrf
																<div class="row">
																		<div class="col-12">
																				<div class="form-section-title">Official Details</div>
																		</div>
																		@session('error')
																				<div class="alert alert-danger">{{ session('error') }}</div>
																		@endsession
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputName" class="form-label">Full Name</label>
																						<input type="text" class="form-control" id="inputName" value="{{ old('fullname') }}"
																								name="fullname" placeholder="Enter Full Name">
																				</div>
																				@error('fullname')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputEmail" class="form-label">Email</label>
																						<input type="email" class="form-control" name="email" id="inputEmail" placeholder="Enter Email"
																								value="{{ old('email') }}">
																				</div>
																				@error('email')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputNumber" class="form-label">Phone</label>
																						<input type="number" class="form-control" name="phone" id="inputNumber"
																								placeholder="Enter Phone Number" value="{{ old('phone') }}">
																				</div>
																				@error('phone')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputCompanyName" class="form-label">Official Role</label>
																						<input type="text" class="form-control" name="role" id="inputCompanyName"
																								placeholder="Line Referee, Referee, etc" value="{{ old('role') }}">
																				</div>
																				@error('role')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputPhoto" class="form-label">Profession picture</label>
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
