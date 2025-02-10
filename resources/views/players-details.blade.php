@extends('layout.app')

@section('title', 'Player details - Mapoly Football match score stats')

@section('content')
		<section class="sub-main-banner float-start w-100">
				<div class="sub-banner">
						<div class="container">
								<h1 class="text-center"> Players details </h1>
								<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="index.html">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page"> Players details </li>
										</ol>
								</nav>
						</div>
				</div>
		</section>

		<section class="body-part-total float-start w-100">

				<div class="playerrs-details-div-total py-5">
						<div class="top-details-palya">
								<div class="container">
										<div class="row g-lg-5">
												<div class="col-lg-4">
														<figure>
																<img src="images/goal1.jpg" alt="gps1" />
														</figure>
												</div>
												<div class="col-lg-8">
														<div class="players-details-div">
																<h2 class="comon-heading m-0"> Harry Deo
																		<span class="d-block mt-2">
																				Goalkeeper
																		</span>
																</h2>

																<ul class="list-unstyled mt-2">
																		<li>
																				<span> Nationality :</span>
																				<span> American </span>
																		</li>
																		<li>
																				<span> DateOfBith :</span>
																				<span> 25/02/1988 </span>
																		</li>
																		<li>
																				<span> Height :</span>
																				<span> 190cm </span>
																		</li>
																		<li>
																				<span> Weight :</span>
																				<span> 90kh </span>
																		</li>
																</ul>
																<h2 class="comon-heading mt-3 mb-3"> Biography</h2>
																<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
																		industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
																		scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
																		into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
																		release of Letraset sheets containing Lorem Ipsum passages, and more recently with
																		desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

																<h2 class="comon-heading mt-4"> Players Performance </h2>

																<div class="perform-div mt-4">
																		<div class="comonper-m">
																				<div class="d-flex justify-content-between align-items-center">
																						<h5> Attack </h5>
																						<span>25%</span>
																				</div>

																				<div class="progress">

																						<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
																								aria-valuemax="100"></div>
																				</div>
																		</div>
																		<div class="comonper-m">
																				<div class="d-flex justify-content-between align-items-center">
																						<h5> Defence </h5>
																						<span>25%</span>
																				</div>

																				<div class="progress">

																						<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
																								aria-valuemax="100"></div>
																				</div>
																		</div>
																		<div class="comonper-m">
																				<div class="d-flex justify-content-between align-items-center">
																						<h5> Kick </h5>
																						<span>25%</span>
																				</div>

																				<div class="progress">

																						<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
																								aria-valuemax="100"></div>
																				</div>
																		</div>

																</div>
														</div>
												</div>
										</div>

								</div>
						</div>
				</div>

		</section>
@endsection
