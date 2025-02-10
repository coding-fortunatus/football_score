@extends('layout.app')

@section('title', 'Index - Mapoly Football match score stats')

@section('content')
		<section class="sub-main-banner float-start w-100">
				<div class="sub-banner">
						<div class="container">
								<h1 class="text-center"> Schedule </h1>
								<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="#">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page"> Schedule </li>
										</ol>
								</nav>
						</div>
				</div>
		</section>

		<section class="body-part-total float-start w-100">

				<div class="schedule-main-div my-5">

						<div class="container">
								<div class="table-div-left mt-4">

										<table id="seri3" class="display" style="width:100%">
												<thead>
														<tr>
																<th>Date</th>
																<th>Event</th>
																<th>Time</th>
																<th>League</th>
																<th> Season </th>
																<th>Venue</th>
																<th>Action</th>
														</tr>
												</thead>
												<tbody>
														<tr>
																<td>
																		Nov 10, 2022
																</td>
																<td>
																		<a href="matches-details.html" class="btn ms-ti"> Royal FC <span>vs</span> GS FC </a>

																</td>
																<td>12:00</td>
																<td>FC Cup</td>
																<td>2022</td>
																<td>GST Stadium</td>
																<td>
																		<a href="booking.html" class="btn details-btn"> buy ticket <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z">
																						</path>
																				</svg> </a>
																</td>
														</tr>

														<tr>
																<td>
																		Nov 15, 2022
																</td>
																<td>
																		<a href="matches-details.html" class="btn ms-ti"> Italy <span>vs</span> GS FC </a>

																</td>
																<td>19:00</td>
																<td>FC Cup</td>
																<td>2022</td>
																<td>GST Stadium</td>
																<td>
																		<a href="booking.html" class="btn details-btn"> buy ticket <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z">
																						</path>
																				</svg> </a>
																</td>
														</tr>

														<tr>
																<td>
																		Nov 05, 2022
																</td>
																<td>
																		<a href="matches-details.html" class="btn ms-ti"> Italy <span>vs</span> Raido FC </a>

																</td>
																<td>19:00</td>
																<td>FC Cup</td>
																<td>2022</td>
																<td>GST Stadium</td>
																<td>
																		<a href="booking.html" class="btn details-btn"> buy ticket <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z">
																						</path>
																				</svg> </a>
																</td>
														</tr>

														<tr>
																<td>
																		Nov 12, 2022
																</td>
																<td>
																		<a href="matches-details.html" class="btn ms-ti"> Raido FC <span>vs</span> GS FC </a>

																</td>
																<td>24:00</td>
																<td>FC Cup</td>
																<td>2022</td>
																<td>GST Stadium</td>
																<td>
																		<a href="booking.html" class="btn details-btn"> buy ticket <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z">
																						</path>
																				</svg> </a>
																</td>
														</tr>

														<tr>
																<td>
																		Nov 18, 2022
																</td>
																<td>
																		<a href="matches-details.html" class="btn ms-ti"> Italy <span>vs</span> France CG </a>

																</td>
																<td>19:00</td>
																<td>Ro Cup</td>
																<td>2022</td>
																<td>GST Stadium</td>
																<td>
																		<a href="booking.html" class="btn details-btn"> buy ticket <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z">
																						</path>
																				</svg> </a>
																</td>
														</tr>

														<tr>
																<td>
																		Nov 16, 2022
																</td>
																<td>
																		<a href="matches-details.html" class="btn ms-ti"> Italy <span>vs</span> GS FC </a>

																</td>
																<td>19:00</td>
																<td>FC Cup</td>
																<td>2022</td>
																<td>GST Stadium</td>
																<td>
																		<a href="booking.html" class="btn details-btn"> buy ticket <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z">
																						</path>
																				</svg> </a>
																</td>
														</tr>

														<tr>
																<td>
																		Dec 01, 2022
																</td>
																<td>
																		<a href="matches-details.html" class="btn ms-ti"> Italy FC <span>vs</span> Rayal FC </a>

																</td>
																<td>19:00</td>
																<td>FC Cup</td>
																<td>2022</td>
																<td>GST Stadium</td>
																<td>
																		<a data-bs-toggle="modal" data-bs-target="#bookModal" class="btn details-btn"> buy ticket <svg
																						xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
																						class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z">
																						</path>
																				</svg> </a>
																</td>
														</tr>

														<tr>
																<td>
																		Dec 05, 2022
																</td>
																<td>
																		<a href="matches-details.html" class="btn ms-ti"> Italy <span>vs</span> Raido FC </a>

																</td>
																<td>19:00</td>
																<td>FC Cup</td>
																<td>2022</td>
																<td>GST Stadium</td>
																<td>
																		<a data-bs-toggle="modal" data-bs-target="#bookModal" class="btn details-btn"> buy ticket <svg
																						xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
																						class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z">
																						</path>
																				</svg> </a>
																</td>
														</tr>

														<tr>
																<td>
																		Nov 28, 2022
																</td>
																<td>
																		<a href="matches-details.html" class="btn ms-ti"> Italy <span>vs</span> Raido FC </a>

																</td>
																<td>19:00</td>
																<td>FC Cup</td>
																<td>2022</td>
																<td>GST Stadium</td>
																<td>
																		<a href="booking.html" class="btn details-btn"> buy ticket <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z">
																						</path>
																				</svg> </a>
																</td>
														</tr>

												</tbody>
												<tfoot>
														<tr>
																<th>Date</th>
																<th>Event</th>
																<th>Time</th>
																<th>League</th>
																<th> Season </th>
																<th>Venue</th>
																<th>Action</th>
														</tr>
												</tfoot>
										</table>

								</div>

						</div>

				</div>

		</section>
@endsection
