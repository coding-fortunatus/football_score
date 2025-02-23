<header class="float-start w-100">
		<nav class="navbar navbar-expand-lg navbar-light " style="background-color: white;">
				<div class="container">
						<a class="navbar-brand" href="{{ route('Home') }}">
								<img width="50%" src="{{ asset('client/images/logo.png') }}" alt="logo" />
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightmobile">
								<i class="fa fa-bars"></i>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
										<li class="nav-item">
												<a class="nav-link" href="{{ route('matches') }}">Matches</a>
										</li>
										<li class="nav-item">
												<a class="nav-link " href="{{ route('clubs') }}">Teams</a>
										</li>
										<li class="nav-item">
												<a class="nav-link " href="{{ route('schedule') }}">Schedule</a>
										</li>
										<li class="nav-item">
												<a class="nav-link " href="{{ route('news') }}">News</a>
										</li>
										<li class="nav-item">
												<a class="nav-link " href="{{ route('players') }}">Players</a>
										</li>
										<li class="nav-item">
												<a class="nav-link " href="{{ route('media') }}">Media</a>
										</li>
										<li class="nav-item">
												<a class="nav-link " href="{{ route('contact') }}">Contact</a>
										</li>
										{{-- <li class="nav-item">
												<a class="nav-link btn bar-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightmobile"><i
																class="fas fa-bars"></i></a>
										</li> --}}
								</ul>
						</div>
				</div>
		</nav>

</header>
