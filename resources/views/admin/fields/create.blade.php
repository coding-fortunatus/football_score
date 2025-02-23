@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item"><a href="{{ route('fields.index') }}">Fields</a></li>
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
														<div class="card-title">Register Field</div>
												</div>
												<div class="card-body">
														<!-- Row start -->
														<form action="{{ route('fields.store') }}" method="POST" enctype="multipart/form-data">
																@csrf
																<div class="row">
																		<div class="col-12">
																				<div class="form-section-title">Field Details</div>
																		</div>
																		@session('error')
																				<div class="alert alert-danger">{{ session('error') }}</div>
																		@endsession
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputName" class="form-label">Field Name</label>
																						<input type="text" class="form-control" id="inputName" value="{{ old('name') }}" name="name"
																								placeholder="Enter Team Name">
																				</div>
																				@error('name')
																						<small class="text-danger">{{ $message }}</small>
																				@enderror
																		</div>
																		<div class="col-xl-4 col-sm-6 col-12">
																				<div class="mb-3">
																						<label for="inputShort" class="form-label">Location on campus</label>
																						<input type="text" class="form-control" name="location" id="inputShort"
																								placeholder="Enter team short name" value="{{ old('location') }}">
																				</div>
																				@error('location')
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
