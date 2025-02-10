@extends('layout.app')

@section('title', 'About - Mapoly Football match score stats')

@section('content')
		<section class="sub-main-banner float-start w-100">

				<div class="sub-banner">
						<div class="container">
								<h1 class="text-center"> The Club</h1>
								<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="#">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page">The Club</li>
										</ol>
								</nav>
						</div>
				</div>

				<div class="cart-sec-ban">
						<ul class="list-unstyled">
								<li>
										<a href="cart.html" class="btn"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
														<path
																d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
												</svg>
										</a>
								</li>
								<li>
										<a href="wishlist.html" class="btn"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
														<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
												</svg>
										</a>
								</li>
						</ul>
				</div>

		</section>

		<section class="body-part-total float-start w-100">

				<div class="about-page-main comon-sub-page-main">

						<div class="about-club-top">
								<div class="container">
										<div class="row row-cols-1 row-cols-lg-2 g-lg-5">
												<div class="col position-relative">
														<figure class="big-img">
																<img src="images/2821048.webp" alt="pic">
														</figure>
														<figure class="small-img">
																<img src="images/pexels-photo-12460951.jfif" alt="pic2">
														</figure>
												</div>
												<div class="col">
														<h5 class="samll-sub mb-1 mt-0"> Our Story </h5>
														<h2 class="comon-heading m-0"> About The FC Club </h2>
														<p class="mt-3"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
																has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
																of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
																the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
																with the release of Letraset sheets containing Lorem Ipsum passages, and more
																recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is
																a long established fact that a
																reader will be distracted by the readable content of a page when looking at its layout. The point of
																using Lorem Ipsum
														</p>

												</div>
										</div>
								</div>
						</div>

				</div>

				<div class="our-history-div">

						<div class="container">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item" role="presentation">
												<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
														role="tab" aria-controls="home" aria-selected="true"> <i class="fas fa-calendar-alt"></i> Our History
												</button>
										</li>
										<li class="nav-item" role="presentation">
												<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
														role="tab" aria-controls="profile" aria-selected="false"> <i class="fas fa-flag-checkered"></i>
														Our Mission </button>
										</li>
										<li class="nav-item" role="presentation">
												<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
														role="tab" aria-controls="contact" aria-selected="false"> <i class="far fa-eye"></i> Our Vision
												</button>
										</li>
								</ul>
						</div>
						<div class="tab-content mna-bg" id="myTabContent">
								<div class="container">
										<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

												<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
														<li class="nav-item" role="presentation">
																<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#yd-hom1"
																		type="button" role="tab" aria-controls="pills-home" aria-selected="true"> <i
																				class="fas fa-calendar-alt"></i> 1990</button>
														</li>
														<li class="nav-item" role="presentation">
																<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#yd-hom2"
																		type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i
																				class="fas fa-calendar-alt"></i>1995</button>
														</li>
														<li class="nav-item" role="presentation">
																<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#yd-hom3"
																		type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
																		<i class="fas fa-calendar-alt"></i> 2005</button>
														</li>

														<li class="nav-item" role="presentation">
																<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#yd-hom4"
																		type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
																		<i class="fas fa-calendar-alt"></i> 2015</button>
														</li>

														<li class="nav-item" role="presentation">
																<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#yd-hom5"
																		type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
																		<i class="fas fa-calendar-alt"></i> 2022</button>
														</li>

												</ul>
												<div class="tab-content" id="pills-tabContent">
														<div class="tab-pane fade show active" id="yd-hom1" role="tabpanel" aria-labelledby="pills-home-tab">
																<div class="comon-fild-ads1 d-lg-flex align-items-center">
																		<figure>
																				<img src="images/bg-ms2.jpeg" alt="bg" />
																		</figure>

																		<div class="left-history">
																				<h2>It is a long established fact that a reader </h2>
																				<p> It is a long established fact that a reader will be distracted by the readable content of a page
																						when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
																						distribution of letters, as opposed to using 'Content here, content here', making it look like
																						readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
																						their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
																						their infancy. Various versions have evolved over the years, sometimes by
																						accident, sometimes on purpose (injected humour and the like).</p>
																		</div>
																</div>
														</div>
														<div class="tab-pane fade" id="yd-hom2" role="tabpanel" aria-labelledby="pills-profile-tab">
																<div class="comon-fild-ads1 d-lg-flex align-items-center">
																		<figure>
																				<img src="images/bg-ms2.jpeg" alt="bg" />
																		</figure>

																		<div class="left-history">
																				<h2>It is a long established fact that a reader </h2>
																				<p> It is a long established fact that a reader will be distracted by the readable content of a page
																						when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
																						distribution of letters, as opposed to using 'Content here, content here', making it look like
																						readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
																						their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
																						their infancy. Various versions have evolved over the years, sometimes by
																						accident, sometimes on purpose (injected humour and the like).</p>
																		</div>
																</div>
														</div>
														<div class="tab-pane fade" id="yd-hom3" role="tabpanel" aria-labelledby="pills-contact-tab">
																<div class="comon-fild-ads1 d-lg-flex align-items-center">
																		<figure>
																				<img src="images/2821048.webp" alt="bg" />
																		</figure>

																		<div class="left-history">
																				<h2>It is a long established fact that a reader </h2>
																				<p> It is a long established fact that a reader will be distracted by the readable content of a page
																						when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
																						distribution of letters, as opposed to using 'Content here, content here', making it look like
																						readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
																						their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
																						their infancy. Various versions have evolved over the years, sometimes by
																						accident, sometimes on purpose (injected humour and the like).</p>
																		</div>
																</div>
														</div>
														<div class="tab-pane fade" id="yd-hom4" role="tabpanel" aria-labelledby="pills-contact-tab">
																<div class="comon-fild-ads1 d-lg-flex align-items-center">
																		<figure>
																				<img src="images/win.jfif" alt="bg" />
																		</figure>

																		<div class="left-history">
																				<h2>It is a long established fact that a reader </h2>
																				<p> It is a long established fact that a reader will be distracted by the readable content of a page
																						when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
																						distribution of letters, as opposed to using 'Content here, content here', making it look like
																						readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
																						their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
																						their infancy. Various versions have evolved over the years, sometimes by
																						accident, sometimes on purpose (injected humour and the like).</p>
																		</div>
																</div>
														</div>
														<div class="tab-pane fade" id="yd-hom5" role="tabpanel" aria-labelledby="pills-contact-tab">
																<div class="comon-fild-ads1 d-lg-flex align-items-center">
																		<figure>
																				<img src="images/wine2.jpg" alt="bg" />
																		</figure>

																		<div class="left-history">
																				<h2>It is a long established fact that a reader </h2>
																				<p> It is a long established fact that a reader will be distracted by the readable content of a page
																						when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
																						distribution of letters, as opposed to using 'Content here, content here', making it look like
																						readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
																						their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
																						their infancy. Various versions have evolved over the years, sometimes by
																						accident, sometimes on purpose (injected humour and the like).</p>
																		</div>
																</div>
														</div>
												</div>

										</div>
										<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
										<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
								</div>
						</div>

				</div>

				<div class="our-mangent-sft py-5">
						<div class="container">
								<h2 class="comon-heading m-0"> Our Management Staff </h2>
								<div class="mangemnet-sf owl-carousel owl-theme mt-4">
										<div class="items-man">
												<figure>
														<img src="images/manages-st.jpg" alt="pmg" />
												</figure>
												<div class="name">
														<h5> Jores Leperto
																<span class="d-block"> President </span>
														</h5>
												</div>
										</div>

										<div class="items-man">
												<figure>
														<img src="images/manages-st2.jpg" alt="pmg" />
												</figure>
												<div class="name">
														<h5> Jores Leperto
																<span class="d-block"> Vice President (House & Admin)</span>
														</h5>
												</div>
										</div>

										<div class="items-man">
												<figure>
														<img src="images/manages-st3.jpg" alt="pmg" />
												</figure>
												<div class="name">
														<h5> Jores Leperto
																<span class="d-block"> Hony. Treasurer & Sponsorship</span>
														</h5>
												</div>
										</div>

										<div class="items-man">
												<figure>
														<img src="images/manages-st4.jpg" alt="pmg" />
												</figure>
												<div class="name">
														<h5> Jores Leperto
																<span class="d-block"> Member - Entertainment</span>
														</h5>
												</div>
										</div>

								</div>
						</div>
				</div>

				<div class="achivement-div py-5">

						<div class="container">
								<h2 class="comon-heading m-0"> Our achievement </h2>
								<div class="achivent-slide owl-carousel owl-theme mt-5">
										<div class="items-achiv">
												<figure>
														<img src="images/award-img1.png" alt="ad1" />
												</figure>
												<div class="achiv-titel">
														<h5> 2010 world FC cup champion </h5>
												</div>
										</div>

										<div class="items-achiv">
												<figure>
														<img src="images/award-img3.png" alt="ad1" />
												</figure>
												<div class="achiv-titel">
														<h5> 2012 United CD cup champion </h5>
												</div>
										</div>

										<div class="items-achiv">
												<figure>
														<img src="images/award-img4.png" alt="ad1" />
												</figure>
												<div class="achiv-titel">
														<h5> 2014 world cup champion </h5>
												</div>
										</div>

										<div class="items-achiv">
												<figure>
														<img src="images/award-img1.png" alt="ad1" />
												</figure>
												<div class="achiv-titel">
														<h5> 2015 FC cup champion </h5>
												</div>
										</div>

										<div class="items-achiv">
												<figure>
														<img src="images/award-img4.png" alt="ad1" />
												</figure>
												<div class="achiv-titel">
														<h5> 2014 world cup champion </h5>
												</div>
										</div>
								</div>
						</div>
				</div>

				<div class="our-triners py-5">
						<div class="container">
								<h2 class="comon-heading m-0"> Our Coaching Staff </h2>
								<figure class="achive-div1">
										<img src="images/bg-6.webp" alt="bg" />
								</figure>
								<div class="coaching-slide owl-carousel owl-theme mt-5">

										<div class="items-coach-man">
												<figure>
														<img src="images/co1.jpg" alt="pmg" />
												</figure>
												<div class="name">
														<h5> Jores Leperto
																<span class="d-block">Trainer</span>
														</h5>
												</div>
										</div>

										<div class="items-coach-man">
												<figure>
														<img src="images/co4.jpg" alt="pmg" />
												</figure>
												<div class="name">
														<h5> Jores Leperto
																<span class="d-block">Trainer</span>
														</h5>
												</div>
										</div>

										<div class="items-coach-man">
												<figure>
														<img src="images/co2.jpg" alt="pmg" />
												</figure>
												<div class="name">
														<h5> Jores Leperto
																<span class="d-block">Trainer</span>
														</h5>
												</div>
										</div>

										<div class="items-coach-man">
												<figure>
														<img src="images/co3.jpg" alt="pmg" />
												</figure>
												<div class="name">
														<h5> Jores Leperto
																<span class="d-block">Trainer</span>
														</h5>
												</div>
										</div>

								</div>
						</div>
				</div>

				<div class="our-sponcer py-5">
						<div class="container">
								<h2 class="comon-heading m-0"> Our Sponcer </h2>
								<div class="sponcer-slide owl-carousel owl-theme mt-5">
										<div class="itesm-sp">
												<figure>
														<img src="images/sp1.jpg" alt="sp" />
												</figure>
										</div>
										<div class="itesm-sp">
												<figure>
														<img src="images/sp2.jpg" alt="sp" />
												</figure>
										</div>
										<div class="itesm-sp">
												<figure>
														<img src="images/sp3.jpg" alt="sp" />
												</figure>
										</div>
										<div class="itesm-sp">
												<figure>
														<img src="images/sp1.jpg" alt="sp" />
												</figure>
										</div>
										<div class="itesm-sp">
												<figure>
														<img src="images/sp3.jpg" alt="sp" />
												</figure>
										</div>
								</div>
						</div>
				</div>

		</section>
@endsection
