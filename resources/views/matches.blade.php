@extends('layout.app')

@section('title', 'All matches report')

@section('content')
		<section class="sub-main-banner float-start w-100">
				<div class="sub-banner">
						<div class="container">
								<h1 class="text-center"> Matches</h1>
								<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="{{ route('Home') }}">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page">Matches</li>
										</ol>
								</nav>
						</div>
				</div>
		</section>

		<section class="body-part-total float-start w-100">

				<div class="matech-div-main my-5">
						<div class="mn-next-part">
								<div class="container">
										<h2 class="comon-heading m-0"> Fixtures </h2>

										<ul class="nav nav-pills mb-3 mt-4" id="pills-tab" role="tablist">
												<li class="nav-item" role="presentation">
														<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
																type="button" role="tab" aria-controls="pills-home" aria-selected="true">First Team</button>
												</li>
												<li class="nav-item" role="presentation">
														<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
																type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
																Under 21s</button>
												</li>

										</ul>
										<div class="tab-content" id="pills-tabContent">
												<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
														<div class="comon-mateches">
																<h3 class="com-in-head"> Next Matches </h3>
																<div class="cmimatch">
																		<div class="m-date text-center">
																				<h5> 28
																						<span class="d-block"> Aug </span>
																				</h5>
																		</div>
																		<div class="m-dal d-flex justify-content-between align-items-center">
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-1.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																				<span> VS </span>
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-2.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																		</div>
																		<p class="loct">
																				<i class="fas fa-map-marker-alt"></i> SGF Stadium, London
																				/<span> 19:20</span>
																		</p>

																		<a href="matches-details.html" class="btn details-btn"> View Details <svg
																						xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
																						class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																				</svg> </a>
																</div>
														</div>

														<div class="comon-mateches">
																<h3 class="com-in-head"> Oct-Nov 2022 </h3>

																<div class="cmimatch">
																		<div class="m-date text-center">
																				<h5> 05
																						<span class="d-block"> Oct </span>
																				</h5>
																		</div>
																		<div class="m-dal d-flex justify-content-between align-items-center">
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-1.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																				<span> VS </span>
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-2.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																		</div>
																		<p class="loct">
																				<i class="fas fa-map-marker-alt"></i> SGF Stadium, London
																				/<span> 19:20</span>
																		</p>

																		<a href="#" class="btn details-btn"> View Details <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																				</svg> </a>
																</div>

																<div class="cmimatch">
																		<div class="m-date text-center">
																				<h5> 08
																						<span class="d-block"> Oct </span>
																				</h5>
																		</div>
																		<div class="m-dal d-flex justify-content-between align-items-center">
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-1.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																				<span> VS </span>
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-2.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																		</div>
																		<p class="loct">
																				<i class="fas fa-map-marker-alt"></i> SGF Stadium, London
																				/<span> 19:20</span>
																		</p>

																		<a href="#" class="btn details-btn"> View Details <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																				</svg> </a>
																</div>

																<div class="cmimatch">
																		<div class="m-date text-center">
																				<h5> 12
																						<span class="d-block"> Oct </span>
																				</h5>
																		</div>
																		<div class="m-dal d-flex justify-content-between align-items-center">
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-1.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																				<span> VS </span>
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-2.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																		</div>
																		<p class="loct">
																				<i class="fas fa-map-marker-alt"></i> SGF Stadium, London
																				/<span> 19:20</span>
																		</p>

																		<a href="#" class="btn details-btn"> View Details <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																				</svg> </a>
																</div>

														</div>

														<div class="comon-mateches">
																<h3 class="com-in-head"> Jan-Mar 2023 </h3>

																<div class="cmimatch">
																		<div class="m-date text-center">
																				<h5> 05
																						<span class="d-block"> Jan </span>
																				</h5>
																		</div>
																		<div class="m-dal d-flex justify-content-between align-items-center">
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-1.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																				<span> VS </span>
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-2.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																		</div>
																		<p class="loct">
																				<i class="fas fa-map-marker-alt"></i> SGF Stadium, London
																				/<span> 19:20</span>
																		</p>

																		<a href="#" class="btn details-btn"> View Details <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																				</svg> </a>
																</div>

																<div class="cmimatch">
																		<div class="m-date text-center">
																				<h5> 12
																						<span class="d-block"> Jan </span>
																				</h5>
																		</div>
																		<div class="m-dal d-flex justify-content-between align-items-center">
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-1.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																				<span> VS </span>
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-2.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																		</div>
																		<p class="loct">
																				<i class="fas fa-map-marker-alt"></i> SGF Stadium, London
																				/<span> 19:20</span>
																		</p>

																		<a href="#" class="btn details-btn"> View Details <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																				</svg> </a>
																</div>

																<div class="cmimatch">
																		<div class="m-date text-center">
																				<h5> 20
																						<span class="d-block"> Mar </span>
																				</h5>
																		</div>
																		<div class="m-dal d-flex justify-content-between align-items-center">
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-1.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																				<span> VS </span>
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-2.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																		</div>
																		<p class="loct">
																				<i class="fas fa-map-marker-alt"></i> SGF Stadium, London
																				/<span> 19:20</span>
																		</p>

																		<a href="#" class="btn details-btn"> View Details <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																				</svg> </a>
																</div>

														</div>

												</div>
												<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
														<div class="comon-mateches">
																<h3 class="com-in-head"> Next Matches </h3>
																<div class="cmimatch">
																		<div class="m-date text-center">
																				<h5> 28
																						<span class="d-block"> Aug </span>
																				</h5>
																		</div>
																		<div class="m-dal d-flex justify-content-between align-items-center">
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-1.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																				<span> VS </span>
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-2.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																		</div>
																		<p class="loct">
																				<i class="fas fa-map-marker-alt"></i> SGF Stadium, London
																				/<span> 19:20</span>
																		</p>

																		<a href="#" class="btn details-btn"> View Details <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																				</svg> </a>
																</div>
														</div>

														<div class="comon-mateches">
																<h3 class="com-in-head"> Oct-Nov 2022 </h3>

																<div class="cmimatch">
																		<div class="m-date text-center">
																				<h5> 05
																						<span class="d-block"> Oct </span>
																				</h5>
																		</div>
																		<div class="m-dal d-flex justify-content-between align-items-center">
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-1.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																				<span> VS </span>
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-2.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																		</div>
																		<p class="loct">
																				<i class="fas fa-map-marker-alt"></i> SGF Stadium, London
																				/<span> 19:20</span>
																		</p>

																		<a href="#" class="btn details-btn"> View Details <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																				</svg> </a>
																</div>

																<div class="cmimatch">
																		<div class="m-date text-center">
																				<h5> 08
																						<span class="d-block"> Oct </span>
																				</h5>
																		</div>
																		<div class="m-dal d-flex justify-content-between align-items-center">
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-1.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																				<span> VS </span>
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-2.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																		</div>
																		<p class="loct">
																				<i class="fas fa-map-marker-alt"></i> SGF Stadium, London
																				/<span> 19:20</span>
																		</p>

																		<a href="#" class="btn details-btn"> View Details <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																				</svg> </a>
																</div>

																<div class="cmimatch">
																		<div class="m-date text-center">
																				<h5> 12
																						<span class="d-block"> Oct </span>
																				</h5>
																		</div>
																		<div class="m-dal d-flex justify-content-between align-items-center">
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-1.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																				<span> VS </span>
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-2.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																		</div>
																		<p class="loct">
																				<i class="fas fa-map-marker-alt"></i> SGF Stadium, London
																				/<span> 19:20</span>
																		</p>

																		<a href="#" class="btn details-btn"> View Details <svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill"
																						viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																				</svg> </a>
																</div>

														</div>

														<div class="comon-mateches">
																<h3 class="com-in-head"> Jan-Mar 2023 </h3>

																<div class="cmimatch">
																		<div class="m-date text-center">
																				<h5> 05
																						<span class="d-block"> Jan </span>
																				</h5>
																		</div>
																		<div class="m-dal d-flex justify-content-between align-items-center">
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-1.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																				<span> VS </span>
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-2.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																		</div>
																		<p class="loct">
																				<i class="fas fa-map-marker-alt"></i> SGF Stadium, London
																				/<span> 19:20</span>
																		</p>

																		<a href="matches-details.html" class="btn details-btn"> View Details <svg
																						xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
																						class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																				</svg> </a>
																</div>

																<div class="cmimatch">
																		<div class="m-date text-center">
																				<h5> 12
																						<span class="d-block"> Jan </span>
																				</h5>
																		</div>
																		<div class="m-dal d-flex justify-content-between align-items-center">
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-1.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																				<span> VS </span>
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-2.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																		</div>
																		<p class="loct">
																				<i class="fas fa-map-marker-alt"></i> SGF Stadium, London
																				/<span> 19:20</span>
																		</p>

																		<a href="matches-details.html" class="btn details-btn"> View Details <svg
																						xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
																						class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																				</svg> </a>
																</div>

																<div class="cmimatch">
																		<div class="m-date text-center">
																				<h5> 20
																						<span class="d-block"> Mar </span>
																				</h5>
																		</div>
																		<div class="m-dal d-flex justify-content-between align-items-center">
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-1.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																				<span> VS </span>
																				<figure class="d-flex align-items-center m-0">
																						<img src="images/fc-2.jpg" alt="ft" />
																						<figcaption class="ms-2">
																								France FC
																						</figcaption>
																				</figure>
																		</div>
																		<p class="loct">
																				<i class="fas fa-map-marker-alt"></i> SGF Stadium, London
																				/<span> 19:20</span>
																		</p>

																		<a href="matches-details.html" class="btn details-btn"> View Details <svg
																						xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
																						class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
																						<path
																								d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z" />
																				</svg> </a>
																</div>

														</div>
												</div>

										</div>

								</div>
						</div>
				</div>

		</section>
@endsection
