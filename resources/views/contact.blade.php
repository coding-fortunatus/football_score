@extends('layout.app')

@section('title', 'Contact Us - Mapoly Football match score stats')

@section('content')
		<section class="sub-main-banner float-start w-100">

				<div class="sub-banner">
						<div class="container">
								<h1 class="text-center"> Contact</h1>
								<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="{{ route('Home') }}">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page">Contact</li>
										</ol>
								</nav>
						</div>
				</div>

		</section>

		<section class="body-part-total float-start w-100">

				<div class="contact-us-page my-5">
						<div class="top-contact-div">
								<div class="container">
										<div class="row row-cols-1 row-cols-lg-3 gy-5 g-lg-5">
												<div class="col">
														<div class="comon-div-cont">
																<h5> Club enquiries </h5>
																<ul class="list-unstyled mt-4">
																		<li>
																				<span class="icm"> <i class="fas fa-phone-alt"></i> </span>
																				<span> 1800-250-356</span>
																		</li>
																		<li>
																				<span class="icm"> <i class="fas fa-envelope"></i> </span>
																				<span> example@gmail.com</span>
																		</li>
																		<li>
																				<span class="icm"> <i class="fas fa-map-marker-alt"></i> </span>
																				<span> 31 Scotsburn Rd, Talyllyn, UK </span>
																		</li>
																</ul>
														</div>
												</div>

												<div class="col">
														<div class="comon-div-cont">
																<h5> Media enquiries </h5>
																<ul class="list-unstyled mt-4">
																		<li>
																				<span class="icm"> <i class="fas fa-phone-alt"></i> </span>
																				<span> 1800-250-356</span>
																		</li>
																		<li>
																				<span class="icm"> <i class="fas fa-envelope"></i> </span>
																				<span> example@gmail.com</span>
																		</li>
																		<li>
																				<span class="icm"> <i class="fas fa-map-marker-alt"></i> </span>
																				<span> 31 Scotsburn Rd, Talyllyn, UK </span>
																		</li>
																</ul>
														</div>
												</div>

												<div class="col">
														<div class="comon-div-cont">
																<h5> Head Office </h5>
																<ul class="list-unstyled mt-4">
																		<li>
																				<span class="icm"> <i class="fas fa-phone-alt"></i> </span>
																				<span> 2500-250-356</span>
																		</li>
																		<li>
																				<span class="icm"> <i class="fas fa-envelope"></i> </span>
																				<span> example@gmail.com</span>
																		</li>
																		<li>
																				<span class="icm"> <i class="fas fa-map-marker-alt"></i> </span>
																				<span> 89 Mounthoolie Lane, Sutton Bassett, UK </span>
																		</li>
																</ul>
														</div>
												</div>

										</div>
								</div>
						</div>

						<div class="blog-page comon-services-pge mt-5">

								<div class="container">

										<div class="row g-lg-5">

												<div class="col-md-7">
														<div class="conatct-form-div mb-5">

																<h2 class="comon-heading m-0"> Leave Us for Your Info </h2>
																<div class="row mt-4">
																		<div class="col-lg-6">
																				<input type="text" class="form-control" placeholder="Name">
																		</div>
																		<div class="col-lg-6">
																				<input type="text" class="form-control" placeholder="Email">
																		</div>
																		<div class="col-lg-6">
																				<input type="text" class="form-control" placeholder="Phone">
																		</div>
																		<div class="col-lg-6">
																				<input type="text" class="form-control" placeholder="Subject">
																		</div>
																		<div class="col-lg-12">
																				<textarea class="form-control" placeholder="Message"></textarea>
																		</div>
																		<div class="col-lg-12">
																				<input type="submit" class="btn subimt-message" value="Submit">
																		</div>
																</div>
														</div>
												</div>

												<div class="col-md-5 cm-text-n">

														<h2 class="comon-heading m-0"> Location </h2>

														<div class="map-div1 mt-4">
																<iframe
																		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9478108.126193948!2d-4.4737716!3d54.55127985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2sin!4v1661586996997!5m2!1sen!2sin"
																		height="350" style="border:0;" allowfullscreen="" loading="lazy"
																		referrerpolicy="no-referrer-when-downgrade"></iframe>
														</div>

												</div>
										</div>

								</div>

						</div>
				</div>

		</section>
@endsection
