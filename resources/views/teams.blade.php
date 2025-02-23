@extends('layout.app')

@section('title', 'About - Mapoly FootHub')

@section('content')
		<section class="sub-main-banner float-start w-100">
				<div class="sub-banner">
						<div class="container">
								<h1 class="text-center"> Teams </h1>
								<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="{{ route('client.index') }}">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page"> Teams </li>
										</ol>
								</nav>
						</div>
				</div>
		</section>
		<section class="body-part-total float-start w-100">
				<div class="playerrs-div-total py-5">
						<div class="golaskipers-div">
								<div class="container">
										<h1 class="comon-heading m-0"> Teams or Clubs </h1>
										<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 mt-0 mt-lg-0 g-4 g-lg-4">
												@foreach ($teams as $team)
														<div class="col">
																<a href="players-details.html" class="cmonon-plyaars">
																		<figure>
																				<img src="{{ asset('client/' . $team->logo) }}" alt="gl1" />
																				<figcaption>
																						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
																								class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
																								<path
																										d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z">
																								</path>
																						</svg>
																				</figcaption>
																		</figure>
																		<div class="d-flex align-items-center justify-content-between">

																				<h5> {{ $team->name }}
																						<span class="d-block"> {{ $team->short_name }}</span>
																				</h5>
																				<span class="text-center"> {{ $team->faculty }} </span>
																		</div>

																</a>
														</div>
												@endforeach
										</div>
								</div>
						</div>
				</div>

		</section>
@endsection
