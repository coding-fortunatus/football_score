@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item breadcrumb-active" aria-current="page">Officials</li>
@endsection
@section('content')
		<!-- Content wrapper scroll start -->
		<div class="content-wrapper-scroll">
				<!-- Content wrapper start -->
				<div class="content-wrapper">
						<!-- Row start -->
						<div class="row">
								<div class="col-12">
										<div class="card">
												@session('success')
														<div class="alert alert-success alert-dismissible fade show" role="alert">
																{{ session('success') }}
																<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
														</div>
												@endsession
												@session('error')
														<div class="alert alert-danger alert-dismissible fade show" role="alert">
																{{ session('error') }}
																<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
														</div>
												@endsession
												<div class="card-header">
														<div class="card-title">Officials</div>
														<div class="card-options">
																<a href="{{ route('officials.create') }}" class="btn btn-primary btn-sm">
																		<i class="bi bi-plus"></i> New Official
																</a>
														</div>
												</div>
												<div class="card-body">
														<div class="table-responsive">
																<table class="table m-0">
																		<thead>
																				<tr>
																						<th>#</th>
																						<th>Full Name</th>
																						<th>Email</th>
																						<th>Phone</th>
																						<th>Role</th>
																						<th class="text-right">Date Join</th>
																						<th>Picture</th>
																				</tr>
																		</thead>
																		<tbody>
																				@if ($message === true)
																						<tr>
																								<td colspan="7" class="text-center">No official found</td>
																						</tr>
																				@else
																						@foreach ($officials as $official)
																								<tr>
																										<td>{{ $loop->iteration }}</td>
																										<td>{{ $official->fullname }}</td>
																										<td>{{ $official->email }}</td>
																										<td>{{ $official->phone }}</td>
																										<td><span class="badge shade-red">{{ $official->role }}</span></td>
																										<td class="text-right">{{ $official->created_at }}</td>
																										<td>
																												<div class="activity-user">
																														<img src="{{ asset('storage/' . $official->photo) }}" alt="Activity User">
																												</div>
																										</td>
																										<td class="text-danger">
																												<a href="{{ route('officials.edit', $official->official_uuid) }}" title="edit">
																														<i class="bi bi-pencil-fill"></i>
																												</a>
																										</td>
																										<td class="text-danger">
																												<a href="{{ route('officials.destroy', $official->official_uuid) }}" title="delete">
																														<i class="bi bi-trash-fill"></i>
																												</a>
																										</td>
																								</tr>
																						@endforeach
																				@endif
																		</tbody>
																</table>
														</div>
												</div>
										</div>

								</div>
						</div>
						<!-- Row end -->
				</div>
				<!-- Content wrapper end -->

		</div>
		<!-- Content wrapper scroll end -->
@endsection
