@extends('layout.app')

@section('title', 'match details')

@section('content')
		<section class="sub-main-banner float-start w-100">
				<div class="sub-banner">
						<div class="container">
								<h1 class="text-center"> Matches Details</h1>
								<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="#">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page">Matches Details</li>
										</ol>
								</nav>
						</div>
				</div>
		</section>

		<section class="body-part-total float-start w-100">
				<div class="matech-div-details-main my-5">
						<div class="mn-next-part">
								<div class="container">

										<div class="d-lg-flex align-items-start">
												<div class="col-lg-6">
														<h2 class="comon-heading m-0 "> About Match Details </h2>
														<p class="mt-3 pe-lg-3"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
																Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
																a galley of type and scrambled it to make a type specimen book.</p>

														<button type="button" class="buy-now-btn" name="button"> Buy Ticket
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
																		class="bi bi-arrow-right" viewBox="0 0 16 16">
																		<path fill-rule="evenodd"
																				d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
																		</path>
																</svg> </button>
												</div>

												<div class="col-lg-6">
														<div class="items-matchs py-5 mt-5 mt-lg-0">
																<figure class="m-0 bg-mc-1">
																		<img src="images/bg-ms2.jpeg" alt="bg-ms">
																</figure>
																<div class="matches-div-home">

																		<div class="d-flex align-items-center justify-content-between ">

																				<figure>
																						<img src="images/9.png" alt="cl2">
																						<figcaption>Rayal FC </figcaption>
																				</figure>
																				<h4>VS</h4>
																				<figure>
																						<img src="images/8.png" alt="cl2">
																						<figcaption>Italy FC.</figcaption>
																				</figure>
																		</div>
																</div>
														</div>
												</div>
										</div>

										<div class="datails-table mt-4">
												<table class="table">
														<thead>
																<tr>
																		<th scope="col">Date</th>
																		<th scope="col">Time</th>
																		<th scope="col">League</th>
																		<th scope="col">Season</th>
																		<th scope="col">Full Time</th>
																</tr>
														</thead>
														<tbody>
																<tr>
																		<td>Aug 28, 2022</td>
																		<td>19:25</td>
																		<td>FC League</td>
																		<td>2022</td>
																		<td>90</td>
																</tr>
																<tr>
																		<td>Aug 28, 2022</td>
																		<td>19:25</td>
																		<td>FC League</td>
																		<td>2022</td>
																		<td>90</td>
																</tr>
																<tr>
																		<td>Aug 28, 2022</td>
																		<td>19:25</td>
																		<td>FC League</td>
																		<td>2022</td>
																		<td>90</td>
																</tr>

														</tbody>
												</table>
										</div>

								</div>
						</div>

						<div class="st-dtadium-part mt-5">
								<div class="container">
										<h2 class="comon-heading m-0"> Stadium Location </h2>

										<iframe class="mt-4 w-100"
												src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12144.017759916967!2d-3.6883337!3d40.4530387!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa8fff6d26e2b1988!2sSantiago%20Bernab%C3%A9u%20Stadium!5e0!3m2!1sen!2sin!4v1661437221958!5m2!1sen!2sin"
												height="450" style="border:0;" allowfullscreen="" loading="lazy"
												referrerpolicy="no-referrer-when-downgrade"></iframe>

								</div>
						</div>

						<div class="both-players-div mt-5">
								<div class="container">
										<div class="row row-cols-1 row-cols-lg-2 g-lg-5">
												<div class="col">
														<div class="tem-payers">
																<h3 class="comon-heading mt-0 mb-3"> France FC </h3>

																<div class="comon-tema-n">
																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">09</span>
																						<h5 class="m-0 ms-4"> John Montgomery
																								<span class="d-block"> goalkeeper</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-mitten"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">30</span>
																						<h5 class="m-0 ms-4"> Benjamin Mendoza
																								<span class="d-block"> Defernder</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">60</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Striker</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">11</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Striker</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">89</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Striker</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">40</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Striker</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">20</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Striker</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">32</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Striker</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">15</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Striker</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">99</span>
																						<h5 class="m-0 ms-4"> Admas Smith
																								<span class="d-block"> forward</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">21</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Forward</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																</div>

														</div>
												</div>

												<div class="col">
														<div class="tem-payers mt-5 mt-lg-0">
																<h3 class="comon-heading mt-0 mb-3"> Italy </h3>

																<div class="comon-tema-n">
																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">99</span>
																						<h5 class="m-0 ms-4"> Steven Webb
																								<span class="d-block"> goalkeeper</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-mitten"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">50</span>
																						<h5 class="m-0 ms-4"> Joe Perez
																								<span class="d-block"> Defernder</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">60</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Striker</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">11</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Striker</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">89</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Striker</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">40</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Striker</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">20</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Striker</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">32</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Striker</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">15</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Striker</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">99</span>
																						<h5 class="m-0 ms-4"> Admas Smith
																								<span class="d-block"> forward</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																		<div class="playssm">
																				<div class="d-flex align-items-start">
																						<span class="js-no1">21</span>
																						<h5 class="m-0 ms-4"> Johnny Thompson
																								<span class="d-block"> Forward</span>
																						</h5>
																				</div>

																				<span> <i class="fas fa-futbol"></i> </span>
																		</div>

																</div>

														</div>
												</div>
										</div>
								</div>
						</div>
				</div>

				<div class="official-div mt-4">
						<div class="container">
								<h2 class="comon-heading mt-0 mb-3"> Official</h2>

								<div class="datails-table mt-4">
										<table class="table">
												<thead>
														<tr>
																<th scope="col">referee</th>
																<th scope="col">Assistant Referree</th>
																<th scope="col">Timekeepers</th>
														</tr>
												</thead>
												<tbody>
														<tr>
																<td>Jone Due</td>
																<td>Parrow Smath</td>
																<td>
																		<span class="d-block"> Petter Tell </span>
																		<span class="d-block"> Gomes Tell </span>
																</td>
														</tr>

												</tbody>
										</table>
								</div>
						</div>

				</div>

		</section>
@endsection
