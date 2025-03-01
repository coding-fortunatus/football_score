@extends('layout.app')

@section('title', 'Index - Mapoly FootHub')

@section('content')
		<section class="banner float-start w-100">
				<div class="container">

						<!-- banner part start  -->

						<div class="banner-part">
								<div class="css-slider-wrapper">
										<!-- Slider #1 -->
										<div class="slider slide-1">
										</div>
								</div>
						</div>

						<!-- silder ends -->

						<div class="next-match-banner">
								<a class="top-next-mc text-center">
										<h5 class="mn-mc-titel"> Next Matches </h5>
										<hr />
										@foreach ($nextMatches as $nextMatch)
												<h4> {{ $nextMatch->league->title }}</h4>
												<div class="d-flex align-items-center justify-content-center mt-2">

														<figure>
																<img src="{{ asset('client/' . $nextMatch->team1->logo) }}" alt="Team 1" />
														</figure>
														<div class="mc-details-top text-center">

																<p class="time"> {{ \Carbon\Carbon::parse($nextMatch->match_time)->format('h:i A') }} </p>
																<h5 class="date">
																		{{ \Carbon\Carbon::parse($nextMatch->match_time)->format('d M, Y') }}
																</h5>
																<p class="location-mc">{{ $nextMatch->field->name }}</p>
														</div>

														<figure>
																<img src="{{ asset('client/' . $nextMatch->team2->logo) }}" alt="Team 2" />
														</figure>

												</div>
												<hr />
										@endforeach
								</a>
						</div>
				</div>
		</section>

		<section class="body-part-total float-start w-100">
				<div class="latest-news-div">
						<div class="container">
								<div class="row">
										<div class="col-lg-3">
												<h2 class="py-3"> Match Updates </h2>
										</div>
										<div class="col-lg-9">
												<div class="latest-news owl-carousel owl-theme mt-3 py-3">
														<a href="#" class="comon-news-links">
																<i class="far fa-dot-circle"></i>Stay updated with real-time scores,
														</a>
														<a href="#" class="comon-news-links">
																<i class="far fa-dot-circle"></i>player statistics, and exciting football action!
														</a>
												</div>
										</div>
								</div>
						</div>
				</div>

				<div class="result-div1 mt-5">
						<div class="container">
								<h2 class="comon-heading m-0"> Latest Results & Team Stats</h2>
								<div class="row gx-lg-5">
										<div class="col-lg-6 col-xl-6">
												<div class="latest-result-div mt-5 mt-lg-0">
														<div class="ltest-divbm mt-4">
																@foreach ($matches as $match)
																		<a href="#" class="comon-items-div">
																				<div class="d-flex justify-content-between align-items-center">
																						<div class="cm-culb">
																								<figure class="d-flex align-items-center">
																										<figcaption class="me-2"> {{ $match->schedule->team1->short_name }}</figcaption>
																										<img src="{{ $match->schedule->team1->logo }}" alt="" />

																								</figure>

																						</div>
																						<h5 class="m-0"> {{ $match->team_1_score }} - {{ $match->team_2_score }}
																						</h5>
																						<div class="cm-culb">
																								<figure class="d-flex align-items-center">
																										<figcaption class="me-2">{{ $match->schedule->team2->short_name }}</figcaption>
																										<img src="{{ $match->schedule->team2->logo }}" alt="" />

																								</figure>

																						</div>
																				</div>
																				<p class="text-center"> <i class="fas fa-map-marker-alt"></i>
																						{{ \Carbon\Carbon::parse($match->schedule->match_time)->format('d M') }} /
																						{{ $match->schedule->field->name }}</p>
																		</a>
																@endforeach
														</div>
												</div>
										</div>
										<div class="col-lg-6">
												<div class="table-div-left mt-4">
														<h4> Team Stats </h4>

														<table id="seri1" class="display" style="width:100%">
																<thead>
																		<tr>
																				<th>Team</th>
																				<th>Wins</th>
																				<th>Draws</th>
																				<th>Losses</th>
																		</tr>
																</thead>
																<tbody>
																		@foreach ($teamStats as $stat)
																				<tr>
																						<td>
																								<div class="comon-ft-cl">
																										<figure class="d-flex align-items-center">
																												<figcaption>
																														{{ $stat->team_name }}
																												</figcaption>
																										</figure>
																								</div>
																						</td>
																						<td>{{ $stat->wins }}</td>
																						<td>{{ $stat->draws }}</td>
																						<td>{{ $stat->losses }}</td>
																				</tr>
																		@endforeach
																</tbody>
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
																<img src="{{ asset('client/' . $player->photo) }}" alt="{{ $player->fullname . 'picture' }}" />
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
		</section>
@endsection
