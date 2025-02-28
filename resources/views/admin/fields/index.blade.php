@extends('admin.layout.admin')

@section('breadcrumb')
		<li class="breadcrumb-item breadcrumb-active" aria-current="page">Fields</li>
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
														<div class="card-title">Fields</div>
														<div class="card-options">
																<a href="{{ route('fields.create') }}" class="btn btn-primary btn-sm">
																		<i class="bi bi-plus"></i> New Field
																</a>
														</div>
												</div>
												<div class="card-body">
														<div class="table-responsive">
																<table class="table m-0">
																		<thead>
																				<tr>
																						<th>#</th>
																						<th>Field Name</th>
																						<th>Field Location</th>
																						<th>Match Count</th>
																				</tr>
																		</thead>
																		<tbody>
																				@if ($message === true)
																						<tr>
																								<td colspan="5" class="text-center">No fields found</td>
																						</tr>
																				@else
																						@foreach ($fields as $field)
																								<tr>
																										<td>{{ $loop->iteration }}</td>
																										<td>{{ $field->name }}</td>
																										<td>{{ $field->location }}</td>
																										<td>0</td>
																										{{-- <td>{{ optional($field->schedule)->count() ?? 0 }}</td> --}}
																										<td class="text-danger">
																												<a href="{{ route('fields.edit', $field->field_uuid) }}" title="edit">
																														<i class="bi bi-pencil-fill"></i>
																												</a>
																										</td>
																										<td class="text-danger">
																												<a href="{{ route('fields.destroy', $field->field_uuid) }}" title="delete">
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
