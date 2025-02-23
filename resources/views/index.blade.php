@extends('layout.app')

@section('title', 'Index - Mapoly FootHub')

@section('content')
		<section class="banner float-start w-100">
				<div class="container">

						<!-- banner part start  -->

						<div class="banner-part">
								<div class="css-slider-wrapper">
										<input type="radio" name="slider" class="slide-radio1" checked id="slider_1" />
										<input type="radio" name="slider" class="slide-radio2" id="slider_2" />
										<input type="radio" name="slider" class="slide-radio3" id="slider_3" />

										<!-- Slider Pagination -->
										<div class="slider-pagination">
												<label for="slider_1" class="page1">

												</label>
												<label for="slider_2" class="page2">

												</label>
												<label for="slider_3" class="page3">

												</label>

										</div>

										<!-- Slider #1 -->
										<div class="slider slide-1">

												<div class="slider-content">
														<h3> Welcome To SC Club </h3>
														<h2>WE ARE PROFESSIONAL
																<span class="d-block"> FOOTBALL CLUB </span>
														</h2>
														<p> Ticket prices for the international challenge match between FC United and Spain have been confirmed
																for October's encounter. </p>
														<button type="button" class="buy-now-btn" name="button"> About Club
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
																		class="bi bi-arrow-right" viewBox="0 0 16 16">
																		<path fill-rule="evenodd"
																				d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
																		</path>
																</svg> </button>
												</div>
												<div class="number-pagination">
														<span>1</span>
												</div>
										</div>

										<!-- Slider #2 -->
										<div class="slider slide-2">

												<div class="slider-content">
														<h2>National Leagues 2023
																<span class="d-block"> Season Begins</span>
														</h2>
														<p> Ticket prices for the international challenge match between FC United and Spain have been confirmed
																for October's encounter. </p>
														<button type="button" class="buy-now-btn" name="button"> Buy Tickit
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
																		class="bi bi-arrow-right" viewBox="0 0 16 16">
																		<path fill-rule="evenodd"
																				d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
																		</path>
																</svg> </button>
												</div>
												<div class="number-pagination">
														<span>2</span>
												</div>
										</div>

										<!-- Slider #3 -->
										<div class="slider slide-3">

												<div class="slider-content">
														<h2> Upcoming Match <span class="d-block">Tickit Booking </span></h2>
														<p> Ticket prices for the international challenge match between FC United and Spain have been confirmed
																for October's encounter. </p>
														<button type="button" class="buy-now-btn" name="button"> Buy Tickit
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
																		class="bi bi-arrow-right" viewBox="0 0 16 16">
																		<path fill-rule="evenodd"
																				d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
																		</path>
																</svg> </button>
												</div>
												<div class="number-pagination">
														<span>3</span>
												</div>
										</div>

								</div>
						</div>

						<!-- silder ends -->

						<div class="next-match-banner">
								<a class="top-next-mc text-center">
										<h5 class="mn-mc-titel"> Next Match </h5>
										<hr />
										<h4> 2022-2023 UEFA Champions League</h4>
										<div class="d-flex align-items-center justify-content-center mt-2">

												<figure>
														<img src="images/clubs-logo1.png" alt="cl1" />
												</figure>
												<div class="mc-details-top text-center">

														<p class="time"> 19:20pm </p>
														<h5 class="date">
																24/ 11/ 2022
														</h5>
														<p class="location-mc">GD Stadium, London</p>
												</div>

												<figure>
														<img src="images/clubs-lgo2.png" alt="cl2" />
												</figure>

										</div>
								</a>

								<a class="top-mc-starts mt-4">
										<h5 class="mn-mc-titel text-center"> 2022 Premier League Starts </h5>
										<hr />

										<ul class="list-unstyled d-flex flex-column justify-content-center w-100">
												<li class="d-flex align-items-center justify-content-between w-100">
														<span class="ct-2"> <i class="far fa-futbol"></i> Goals </span>
														<span>12 </span>
												</li>

												<li class="d-flex align-items-center justify-content-between">
														<span class="ct-2"> <i class="fas fa-mitten"></i> Assists </span>
														<span>54 </span>
												</li>

												<li class="d-flex align-items-center justify-content-between">
														<span class="ct-2"> <i class="fas fa-running"></i> Apperarences </span>
														<span>34 </span>
												</li>

										</ul>

								</a>

						</div>

				</div>
		</section>

		<section class="body-part-total float-start w-100">
				<div class="latest-news-div">
						<div class="container">
								<div class="row">
										<div class="col-lg-3">
												<h2 class="py-3"> Latest News </h2>
										</div>
										<div class="col-lg-9">
												<div class="latest-news owl-carousel owl-theme mt-3 py-3">
														<a href="#" class="comon-news-links">
																<i class="far fa-dot-circle"></i> Egals St Club 1 - 0 Defeat to FC Main
														</a>
														<a href="#" class="comon-news-links">
																<i class="far fa-dot-circle"></i> Live Football Scores, Fixtures & Results
														</a>
												</div>
										</div>
								</div>
						</div>
				</div>

				<div class="result-div1 mt-5">
						<div class="container">

								<div class="row gx-lg-5">
										<div class="col-lg-7 col-xl-8">
												<div class="d-flex justify-content-between align-items-center">
														<h2 class="comon-heading m-0"> Fixtures & Results </h2>
														<a href="#" class="btn all-cm-btn"> All Matches <svg xmlns="http://www.w3.org/2000/svg"
																		width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
																		<path fill-rule="evenodd"
																				d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
																</svg> </a>
												</div>
												<div class="row row-cols-1 row-cols-lg-2 gy-5 g-lg-4 mt-0 mt-lg-0">
														<div class="col">
																<a href="#" class="items-matchs">
																		<figure class="m-0 bg-mc-1">
																				<img src="images/bg-mc.jpg" alt="bg-ms" />
																		</figure>
																		<div class="matches-div-home">
																				<h5> Central Olympic Stadium
																						<span class="d-block"> April 02, 2019 </span>
																				</h5>
																				<div class="d-flex align-items-center justify-content-between">

																						<figure>
																								<img src="images/1.png" alt="cl2" />
																								<figcaption>Istanbul </figcaption>
																						</figure>
																						<h4>VS</h4>
																						<figure>
																								<img src="images/8.png" alt="cl2" />
																								<figcaption>Italy FC.</figcaption>
																						</figure>
																				</div>
																		</div>
																</a>
														</div>

														<div class="col">
																<a href="#" class="items-matchs">
																		<figure class="m-0 bg-mc-1">
																				<img src="images/bg-ms2.jpeg" alt="bg-ms" />
																		</figure>
																		<div class="matches-div-home">
																				<h5> Central Olympic Stadium
																						<span class="d-block"> April 02, 2019 </span>
																				</h5>
																				<div class="d-flex align-items-center justify-content-between">

																						<figure>
																								<img src="images/9.png" alt="cl2" />
																								<figcaption>Rayal FC </figcaption>
																						</figure>
																						<h4>VS</h4>
																						<figure>
																								<img src="images/8.png" alt="cl2" />
																								<figcaption>Italy FC.</figcaption>
																						</figure>
																				</div>
																		</div>
																</a>
														</div>

														<div class="col">
																<a href="#" class="items-matchs">
																		<figure class="m-0 bg-mc-1">
																				<img src="images/bg-mc3.jpeg" alt="bg-ms" />
																		</figure>
																		<div class="matches-div-home">
																				<h5> Central Olympic Stadium
																						<span class="d-block"> April 02, 2019 </span>
																				</h5>
																				<div class="d-flex align-items-center justify-content-between">

																						<figure>
																								<img src="images/3.png" alt="cl2" />
																								<figcaption>DC Unfo.</figcaption>
																						</figure>
																						<h4>VS</h4>
																						<figure>
																								<img src="images/9.png" alt="cl2" />
																								<figcaption>Italy FC.</figcaption>
																						</figure>
																				</div>
																		</div>
																</a>
														</div>

														<div class="col">
																<a href="#" class="items-matchs">
																		<figure class="m-0 bg-mc-1">
																				<img src="images/bg-mc.jpg" alt="bg-ms" />
																		</figure>
																		<div class="matches-div-home">
																				<h5> Central Olympic Stadium
																						<span class="d-block"> April 02, 2019 </span>
																				</h5>
																				<div class="d-flex align-items-center justify-content-between">

																						<figure>
																								<img src="images/1.png" alt="cl2" />
																								<figcaption>Istanbul</figcaption>
																						</figure>
																						<h4>VS</h4>
																						<figure>
																								<img src="images/8.png" alt="cl2" />
																								<figcaption>Italy FC.</figcaption>
																						</figure>
																				</div>
																		</div>
																</a>
														</div>

												</div>

										</div>
										<div class="col-lg-5 col-xl-4">
												<div class="latest-result-div mt-5 mt-lg-0">
														<div class="d-flex align-items-center justify-content-between">
																<h2 class="comon-heading m-0"> Latest Results</h2>
																<a href="#" class="btn viw-btn">
																		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
																				class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
																				<path
																						d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																		</svg>
																</a>
														</div>

														<div class="ltest-divbm mt-4">
																<a href="#" class="comon-items-div">
																		<div class="d-flex justify-content-between align-items-center">
																				<div class="cm-culb">
																						<figure class="d-flex align-items-center">
																								<figcaption class="me-2">Italy FC.</figcaption>
																								<img src="images/fc-1.jpg" alt="cl2" />

																						</figure>

																				</div>
																				<h5 class="m-0"> 1 - 2 </h5>
																				<div class="cm-culb">
																						<figure class="d-flex align-items-center">
																								<figcaption class="me-2">Italy FC.</figcaption>
																								<img src="images/fc-2.jpg" alt="cl2" />

																						</figure>

																				</div>
																		</div>
																		<p class="text-center"> <i class="fas fa-map-marker-alt"></i> Nov 2, 2022/ SGM Stadium</p>
																</a>

																<a href="#" class="comon-items-div">
																		<div class="d-flex justify-content-between align-items-center">
																				<div class="cm-culb">
																						<figure class="d-flex align-items-center">
																								<figcaption class="me-2">Italy FC.</figcaption>
																								<img src="images/fc-1.jpg" alt="cl2" />

																						</figure>

																				</div>
																				<h5 class="m-0"> 2 - 0 </h5>
																				<div class="cm-culb">
																						<figure class="d-flex align-items-center">
																								<figcaption class="me-2">Italy FC.</figcaption>
																								<img src="images/fc-2.jpg" alt="cl2" />

																						</figure>

																				</div>
																		</div>
																		<p class="text-center"> <i class="fas fa-map-marker-alt"></i> Nov 2, 2022/ SGM Stadium</p>
																</a>

																<a href="#" class="comon-items-div">
																		<div class="d-flex justify-content-between align-items-center">
																				<div class="cm-culb">
																						<figure class="d-flex align-items-center">
																								<figcaption class="me-2">Italy FC.</figcaption>
																								<img src="images/fc-1.jpg" alt="cl2" />

																						</figure>

																				</div>
																				<h5 class="m-0"> 1 - 0 </h5>
																				<div class="cm-culb">
																						<figure class="d-flex align-items-center">
																								<figcaption class="me-2">Italy FC.</figcaption>
																								<img src="images/fc-2.jpg" alt="cl2" />

																						</figure>

																				</div>
																		</div>
																		<p class="text-center"> <i class="fas fa-map-marker-alt"></i> Nov 2, 2022/ SGM Stadium</p>
																</a>

																<a href="#" class="comon-items-div">
																		<div class="d-flex justify-content-between align-items-center">
																				<div class="cm-culb">
																						<figure class="d-flex align-items-center">
																								<figcaption class="me-2">Italy FC.</figcaption>
																								<img src="images/fc-1.jpg" alt="cl2" />

																						</figure>

																				</div>
																				<h5 class="m-0"> 1 - 0 </h5>
																				<div class="cm-culb">
																						<figure class="d-flex align-items-center">
																								<figcaption class="me-2">Italy FC.</figcaption>
																								<img src="images/fc-2.jpg" alt="cl2" />

																						</figure>

																				</div>
																		</div>
																		<p class="text-center"> <i class="fas fa-map-marker-alt"></i> Nov 2, 2022/ SGM Stadium</p>
																</a>

																<a href="#" class="comon-items-div">
																		<div class="d-flex justify-content-between align-items-center">
																				<div class="cm-culb">
																						<figure class="d-flex align-items-center">
																								<figcaption class="me-2">Italy FC.</figcaption>
																								<img src="images/fc-1.jpg" alt="cl2" />

																						</figure>

																				</div>
																				<h5 class="m-0"> 1 - 0 </h5>
																				<div class="cm-culb">
																						<figure class="d-flex align-items-center">
																								<figcaption class="me-2">Italy FC.</figcaption>
																								<img src="images/fc-2.jpg" alt="cl2" />

																						</figure>

																				</div>
																		</div>
																		<p class="text-center"> <i class="fas fa-map-marker-alt"></i> Nov 2, 2022/ SGM Stadium</p>
																</a>

														</div>

												</div>
										</div>
								</div>
						</div>
				</div>

				<div class="home-about-part">
						<div class="container">
								<h5> Our History </h5>
								<h2 class="comon-heading m-0"> About the
										Club SC United</h2>

								<p class="col-lg-7 my-4"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
										Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
										of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
										leap into electronic
										typesetting, remaining essentially unchanged.</p>
								<a href="#" class="btn all-cm-btn"> About More <svg xmlns="http://www.w3.org/2000/svg" width="16"
												height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
												<path fill-rule="evenodd"
														d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
												</path>
										</svg> </a>
						</div>
				</div>

				<div class="table-ag-div py-5">
						<div class="container">
								<h2 class="comon-heading m-0"> League Table & Schedule </h2>

								<div class="row g-lg-5">
										<div class="col-lg-5">
												<div class="table-div-left mt-4">
														<h4> Serie A </h4>

														<table id="seri1" class="display" style="width:100%">
																<thead>
																		<tr>
																				<th>Club</th>
																				<th>W</th>
																				<th>D</th>
																				<th>L</th>
																		</tr>
																</thead>
																<tbody>
																		<tr>
																				<td>

																						<div class="comon-ft-cl">
																								<figure class="d-flex align-items-center">
																										<img src="images/fc-1.jpg" alt="fbn" />
																										<figcaption>
																												France FC
																										</figcaption>
																								</figure>
																						</div>

																				</td>
																				<td>13</td>
																				<td>01</td>
																				<td>61</td>
																		</tr>
																		<tr>
																				<td>
																						<div class="comon-ft-cl">
																								<figure class="d-flex align-items-center">
																										<img src="images/fc-2.jpg" alt="fbn" />
																										<figcaption>
																												France FC
																										</figcaption>
																								</figure>
																						</div>
																				</td>
																				<td>12</td>
																				<td>20</td>
																				<td>61</td>
																		</tr>
																		<tr>
																				<td>
																						<div class="comon-ft-cl">
																								<figure class="d-flex align-items-center">
																										<img src="images/fc-1.jpg" alt="fbn" />
																										<figcaption>
																												France FC
																										</figcaption>
																								</figure>
																						</div>
																				</td>
																				<td>25</td>
																				<td>36</td>
																				<td>61</td>
																		</tr>

																		<tr>
																				<td>
																						<div class="comon-ft-cl">
																								<figure class="d-flex align-items-center">
																										<img src="images/fc-1.jpg" alt="fbn" />
																										<figcaption>
																												France FC
																										</figcaption>
																								</figure>
																						</div>
																				</td>
																				<td>25</td>
																				<td>36</td>
																				<td>61</td>
																		</tr>

																		<tr>
																				<td>
																						<div class="comon-ft-cl">
																								<figure class="d-flex align-items-center">
																										<img src="images/fc-1.jpg" alt="fbn" />
																										<figcaption>
																												France FC
																										</figcaption>
																								</figure>
																						</div>
																				</td>
																				<td>12</td>
																				<td>36</td>
																				<td>61</td>
																		</tr>

																</tbody>
																<tfoot>
																		<tr>
																				<th>Club</th>
																				<th>W</th>
																				<th>D</th>
																				<th>L</th>
																		</tr>
																</tfoot>
														</table>

												</div>
										</div>
										<div class="col-lg-7">
												<div class="table-div-left mt-4">
														<h4> Serie A </h4>

														<table id="seri2" class="display" style="width:100%">
																<thead>
																		<tr>
																				<th>Date</th>
																				<th>Event</th>
																				<th>Time</th>
																				<th>Venue</th>
																		</tr>
																</thead>
																<tbody>
																		<tr>
																				<td>
																						Nov 10, 2022
																				</td>
																				<td> Royal FC <span>vs</span> GS FC</td>
																				<td>12:00</td>
																				<td>GST Stadium</td>
																		</tr>
																		<tr>
																				<td>
																						Nov 11, 2022
																				</td>
																				<td> Royal FC <span>vs</span> GS FC</td>
																				<td>14:00</td>
																				<td>GST Stadium</td>
																		</tr>
																		<tr>
																				<td>
																						Nov 12, 2022
																				</td>
																				<td> Royal FC <span>vs</span> GS FC</td>
																				<td>14:30</td>
																				<td>GST Stadium</td>
																		</tr>

																		<tr>
																				<td>
																						Nov 14, 2022
																				</td>
																				<td> Royal FC <span>vs</span> GS FC</td>
																				<td>15:30</td>
																				<td>GST Stadium</td>
																		</tr>

																		<tr>
																				<td>
																						Nov 15, 2022
																				</td>
																				<td> Royal FC <span>vs</span> GS FC</td>
																				<td>19:30</td>
																				<td>GST Stadium</td>
																		</tr>

																		<tr>
																				<td>
																						Nov 15, 2022
																				</td>
																				<td> Royal FC <span>vs</span> GS FC</td>
																				<td>19:30</td>
																				<td>GST Stadium</td>
																		</tr>

																</tbody>
																<tfoot>
																		<tr>
																				<th>Date</th>
																				<th>Event</th>
																				<th>Time</th>
																				<th>Venue</th>
																		</tr>
																</tfoot>
														</table>

												</div>
										</div>
								</div>
						</div>
				</div>

				<div class="team-div-1">
						<div class="container">
								<div class="d-flex align-items-center justify-content-between">
										<h2 class="comon-heading m-0"> Players </h2>
										<a href="#" class="btn all-cm-btn"> Show All <svg xmlns="http://www.w3.org/2000/svg" width="16"
														height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
														<path fill-rule="evenodd"
																d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
														</path>
												</svg> </a>
								</div>

								<div class="team-slid owl-carousel owl-theme mt-5">
										@foreach ($players as $player)
												<a href="#" class="comon-plyaers">
														<figure>
																<img src="{{ asset('client/' . $player->photo) }}" alt="team1" />
																<figcaption>
																		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
																				class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
																				<path
																						d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																		</svg>
																</figcaption>
														</figure>
														<div class="name d-flex align-items-center justify-content-between">
																<h5> {{ $player->fullname }}
																		<span class="d-block"> {{ strtoupper($player->position) }}</span>
																</h5>
																<span class="num"> {{ $player->wing }} </span>
														</div>
														<span>{{ $player->team->name }}</h6>
												</a>
										@endforeach

								</div>
						</div>
				</div>

				<div class="join-us-div">
						<div class="container">
								<div class="d-lg-flex justify-content-between">
										<h1 class="comon-heading m-0"> Here we bring you live updates on campus football matches.
										</h1>
								</div>
						</div>
				</div>

				{{-- <div class="newd-blogs-div py-5">
						<div class="container">
								<div class="d-flex align-items-center justify-content-between">

										<h2 class="comon-heading m-0"> News & Media Gallery </h2>

										<a href="#" class="btn all-cm-btn"> View All <svg xmlns="http://www.w3.org/2000/svg" width="16"
														height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
														<path fill-rule="evenodd"
																d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
														</path>
												</svg> </a>

								</div>

								<div class="row g-lg-5 mt-5 mt-lg-0">
										<div class="col-lg-8">
												<a href="#" class="left-cm-blogs">
														<figure class="m-0">
																<img src="images/blogs-tg.webp" alt="blogs" />
														</figure>
														<div class="blogs-ps-right ps-lg-4 pt-lg-4">
																<h5> Draymond Green had bizarre reason </h5>
																<ul class="list-unstyled d-flex align-items-center mt-2">
																		<li>
																				<i class="fas fa-calendar-alt"></i> 27 June, 2020
																		</li>
																		<li>
																				<i class="far fa-comment-dots"></i> 89 Comments
																		</li>
																</ul>
																<p class="mt-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
																		the printing and typesetting industry.
																</p>
																<h4 class="btn mt-4"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
																				fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
																				<path
																						d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																		</svg> </h4>
														</div>
												</a>

												<a href="#" class="left-cm-blogs">
														<figure class="m-0">
																<img src="images/pso.webp" alt="blogs" />
														</figure>
														<div class="blogs-ps-right ps-lg-4 pt-lg-4">
																<h5> Draymond Green had bizarre reason </h5>
																<ul class="list-unstyled d-flex align-items-center mt-2">
																		<li>
																				<i class="fas fa-calendar-alt"></i> 27 June, 2020
																		</li>
																		<li>
																				<i class="far fa-comment-dots"></i> 89 Comments
																		</li>
																</ul>
																<p class="mt-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. the
																		printing and typesetting industry.
																</p>
																<h4 class="btn mt-4"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
																				fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
																				<path
																						d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																		</svg> </h4>
														</div>
												</a>

										</div>

										<div class="col-lg-4 right-home-blogs">
												<a href="#" class="left-cm-blogs">
														<figure class="m-0">
																<img src="images/gfs.jpg" alt="blogs" />
														</figure>
														<div class="blogs-ps-right ps-lg-4 pt-lg-1">
																<h5 class="mt-0"> Draymond Green had bizarre reason </h5>
																<ul class="list-unstyled d-flex align-items-center mt-2">
																		<li>
																				<i class="fas fa-calendar-alt"></i> 27 June, 2020
																		</li>
																		<li>
																				<i class="far fa-comment-dots"></i> 89 Comments
																		</li>
																</ul>

														</div>
												</a>

												<a href="#" class="left-cm-blogs">
														<figure class="m-0">
																<img src="images/fgh.jpg" alt="blogs" />
														</figure>
														<div class="blogs-ps-right ps-lg-4 pt-lg-1">
																<h5 class="mt-0"> Draymond Green had bizarre reason </h5>
																<ul class="list-unstyled d-flex align-items-center mt-2">
																		<li>
																				<i class="fas fa-calendar-alt"></i> 27 June, 2020
																		</li>
																		<li>
																				<i class="far fa-comment-dots"></i> 89 Comments
																		</li>
																</ul>

														</div>
												</a>
										</div>
								</div>
						</div>
				</div> --}}
		</section>
@endsection
