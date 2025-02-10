@extends('layout.app')

@section('title', 'News - Mapoly Football match score stats')

@section('content')
		<section class="sub-main-banner float-start w-100">
				<div class="sub-banner">
						<div class="container">

								<h1 class="text-center"> News </h1>

								<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="index.html">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page"> News </li>
										</ol>
								</nav>
						</div>
				</div>
		</section>

		<section class="body-part-total float-start w-100">

				<div class="our-news-div-main py-5">
						<div class="container">

								<div class="d-flex align-items-center justify-content-between">
										<h2 class="comon-heading"> Our News </h2>
										<div class="d-lg-flex align-items-center">
												<p class="me-3"> Showing 1-4 of 13 results </p>
												<div class="dropdown">
														<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
																aria-expanded="false">
																Sort by Latest
														</button>
														<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
																<li><a class="dropdown-item" href="#">A-Z</a></li>
																<li><a class="dropdown-item" href="#">Best Selling</a></li>
																<li><a class="dropdown-item" href="#">Most Popular</a></li>
														</ul>
												</div>
										</div>

								</div>

								<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-5 gx-md-5 gy-lg-0 gx-lg-5 mt-0">
										<div class="col">
												<a href="news-details.html" class="comon-blogs1">
														<figure>
																<img src="images/bg-mc.jpg" alt="bn" />
																<figcaption>
																		<b class="d-block">06</b>
																		june
																</figcaption>
														</figure>
														<div class="news-items-del">
																<h5>Ireland qualification In 10 Racking</h5>
																<ul class="list-unstyled d-flex align-items-center my-2">
																		<li>
																				<i class="far fa-user"></i> Thomas Wills
																		</li>
																		<li>
																				<i class="far fa-comment"></i> 125
																		</li>
																		<li>
																				<i class="far fa-clock"></i> 1 Day ago
																		</li>
																</ul>

																<p class="mt-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
																		Lorem Ipsum has been the industry's </p>

																<h6 class="btn reda-btn mt-3"> Read more <svg xmlns="http://www.w3.org/2000/svg" width="16"
																				height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
																				<path fill-rule="evenodd"
																						d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z" />
																		</svg> </h6>
														</div>

												</a>
										</div>

										<div class="col">
												<a href="news-details.html" class="comon-blogs1">
														<figure>
																<img src="images/bg-mc3.jpeg" alt="bn" />
																<figcaption>
																		<b class="d-block">16</b>
																		june
																</figcaption>
														</figure>
														<div class="news-items-del">
																<h5>Ireland FC In 10 Racking</h5>
																<ul class="list-unstyled d-flex align-items-center my-2">
																		<li>
																				<i class="far fa-user"></i> Thomas Wills
																		</li>
																		<li>
																				<i class="far fa-comment"></i> 125
																		</li>
																		<li>
																				<i class="far fa-clock"></i> 1 Day ago
																		</li>
																</ul>

																<p class="mt-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
																		Lorem Ipsum has been the industry's </p>

																<h6 class="btn reda-btn mt-3"> Read more <svg xmlns="http://www.w3.org/2000/svg" width="16"
																				height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
																				<path fill-rule="evenodd"
																						d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z" />
																		</svg> </h6>
														</div>

												</a>
										</div>

										<div class="col">
												<a href="news-details.html" class="comon-blogs1">
														<figure>
																<img src="images/fgh.jpg" alt="bn" />
																<figcaption>
																		<b class="d-block">06</b>
																		june
																</figcaption>
														</figure>
														<div class="news-items-del">
																<h5>Brazil Win 3-0</h5>
																<ul class="list-unstyled d-flex align-items-center my-2">
																		<li>
																				<i class="far fa-user"></i> Thomas Wills
																		</li>
																		<li>
																				<i class="far fa-comment"></i> 125
																		</li>
																		<li>
																				<i class="far fa-clock"></i> 1 Day ago
																		</li>
																</ul>

																<p class="mt-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
																		Lorem Ipsum has been the industry's </p>

																<h6 class="btn reda-btn mt-3"> Read more <svg xmlns="http://www.w3.org/2000/svg" width="16"
																				height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
																				<path fill-rule="evenodd"
																						d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z" />
																		</svg> </h6>
														</div>

												</a>
										</div>

										<div class="col">
												<a href="news-details.html" class="comon-blogs1">
														<figure>
																<img src="images/gfs.jpg" alt="bn" />
																<figcaption>
																		<b class="d-block">06</b>
																		june
																</figcaption>
														</figure>
														<div class="news-items-del">
																<h5>Ireland qualification In 10 Racking</h5>
																<ul class="list-unstyled d-flex align-items-center my-2">
																		<li>
																				<i class="far fa-user"></i> Thomas Wills
																		</li>
																		<li>
																				<i class="far fa-comment"></i> 125
																		</li>
																		<li>
																				<i class="far fa-clock"></i> 1 Day ago
																		</li>
																</ul>

																<p class="mt-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
																		Lorem Ipsum has been the industry's </p>

																<h6 class="btn reda-btn mt-3"> Read more <svg xmlns="http://www.w3.org/2000/svg" width="16"
																				height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
																				<path fill-rule="evenodd"
																						d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z" />
																		</svg> </h6>
														</div>

												</a>
										</div>

										<div class="col">
												<a href="news-details.html" class="comon-blogs1">
														<figure>
																<img src="images/blogs-tg.webp" alt="bn" />
																<figcaption>
																		<b class="d-block">16</b>
																		june
																</figcaption>
														</figure>
														<div class="news-items-del">
																<h5>Ireland FC In 10 Racking</h5>
																<ul class="list-unstyled d-flex align-items-center my-2">
																		<li>
																				<i class="far fa-user"></i> Thomas Wills
																		</li>
																		<li>
																				<i class="far fa-comment"></i> 125
																		</li>
																		<li>
																				<i class="far fa-clock"></i> 1 Day ago
																		</li>
																</ul>

																<p class="mt-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
																		Lorem Ipsum has been the industry's </p>

																<h6 class="btn reda-btn mt-3"> Read more <svg xmlns="http://www.w3.org/2000/svg" width="16"
																				height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
																				<path fill-rule="evenodd"
																						d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z" />
																		</svg> </h6>
														</div>

												</a>
										</div>

										<div class="col">
												<a href="news-details.html" class="comon-blogs1">
														<figure>
																<img src="images/wine2.jpg" alt="bn" />
																<figcaption>
																		<b class="d-block">06</b>
																		june
																</figcaption>
														</figure>
														<div class="news-items-del">
																<h5>Brazil Win 3-0</h5>
																<ul class="list-unstyled d-flex align-items-center my-2">
																		<li>
																				<i class="far fa-user"></i> Thomas Wills
																		</li>
																		<li>
																				<i class="far fa-comment"></i> 125
																		</li>
																		<li>
																				<i class="far fa-clock"></i> 1 Day ago
																		</li>
																</ul>

																<p class="mt-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
																		Lorem Ipsum has been the industry's </p>

																<h6 class="btn reda-btn mt-3"> Read more <svg xmlns="http://www.w3.org/2000/svg" width="16"
																				height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
																				<path fill-rule="evenodd"
																						d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z" />
																		</svg> </h6>
														</div>

												</a>
										</div>

										<div class="col">
												<a href="news-details.html" class="comon-blogs1">
														<figure>
																<img src="images/win.jfif" alt="bn" />
																<figcaption>
																		<b class="d-block">06</b>
																		june
																</figcaption>
														</figure>
														<div class="news-items-del">
																<h5>France FC open to Serie A return</h5>
																<ul class="list-unstyled d-flex align-items-center my-2">
																		<li>
																				<i class="far fa-user"></i> Thomas Wills
																		</li>
																		<li>
																				<i class="far fa-comment"></i> 125
																		</li>
																		<li>
																				<i class="far fa-clock"></i> 1 Day ago
																		</li>
																</ul>

																<p class="mt-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
																		Lorem Ipsum has been the industry's </p>

																<h6 class="btn reda-btn mt-3"> Read more <svg xmlns="http://www.w3.org/2000/svg" width="16"
																				height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
																				<path fill-rule="evenodd"
																						d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z" />
																		</svg> </h6>
														</div>

												</a>
										</div>

										<div class="col">
												<a href="news-details.html" class="comon-blogs1">
														<figure>
																<img src="images/news-2.jpg" alt="bn" />
																<figcaption>
																		<b class="d-block">16</b>
																		june
																</figcaption>
														</figure>
														<div class="news-items-del">
																<h5>Ireland FC In 10 Racking</h5>
																<ul class="list-unstyled d-flex align-items-center my-2">
																		<li>
																				<i class="far fa-user"></i> Thomas Wills
																		</li>
																		<li>
																				<i class="far fa-comment"></i> 125
																		</li>
																		<li>
																				<i class="far fa-clock"></i> 1 Day ago
																		</li>
																</ul>

																<p class="mt-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
																		Lorem Ipsum has been the industry's </p>

																<h6 class="btn reda-btn mt-3"> Read more <svg xmlns="http://www.w3.org/2000/svg" width="16"
																				height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
																				<path fill-rule="evenodd"
																						d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z" />
																		</svg> </h6>
														</div>

												</a>
										</div>

										<div class="col">
												<a href="#" class="comon-blogs1">
														<figure>
																<img src="images/news1.jpg" alt="bn" />
																<figcaption>
																		<b class="d-block">06</b>
																		june
																</figcaption>
														</figure>
														<div class="news-items-del">
																<h5>Brazil Win 3-0</h5>
																<ul class="list-unstyled d-flex align-items-center my-2">
																		<li>
																				<i class="far fa-user"></i> Thomas Wills
																		</li>
																		<li>
																				<i class="far fa-comment"></i> 125
																		</li>
																		<li>
																				<i class="far fa-clock"></i> 1 Day ago
																		</li>
																</ul>

																<p class="mt-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
																		Lorem Ipsum has been the industry's </p>

																<h6 class="btn reda-btn mt-3"> Read more <svg xmlns="http://www.w3.org/2000/svg" width="16"
																				height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
																				<path fill-rule="evenodd"
																						d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z" />
																		</svg> </h6>
														</div>

												</a>
										</div>
								</div>

								<div class="next-buuton-div d-flex flex-column flex-md-row justify-content-between align-items-center">
										<div class="left-page-number order-3 order-lg-1 d-flex align-items-center">
												Users per page

												<select class="form-select" aria-label="Default select example">
														<option selected="">23</option>
														<option value="1">22</option>
														<option value="2">20</option>
														<option value="3">10</option>
												</select>
										</div>

										<button type="text" class="btn new-btn order-1  order-lg-2"> Next page <i class="fas fa-angle-right"></i>
										</button>
										<div class="right-arrow-btn d-flex align-items-center order-2 my-4 my-lg-0 order-lg-3">

												<input type="text" class="form-control num-box" placeholder="23">
												<div class="arrow-buuton-div">
														<span class="me-2">of 1,761 </span>
														<button type="button" class="btn cm-arrow-2">
																<i class="fas fa-angle-left"></i>
														</button>
														<button type="button" class="btn ms-2 cm-arrow-2">
																<i class="fas fa-angle-right"></i>
														</button>
												</div>
										</div>
								</div>

						</div>
				</div>

		</section>
@endsection
