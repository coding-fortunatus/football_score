<!-- Page header starts -->
<div class="page-header">

		<!-- Toggle sidebar start -->
		<div class="toggle-sidebar" id="toggle-sidebar"><i class="bi bi-list"></i></div>
		<!-- Toggle sidebar end -->

		<!-- Logo sm starts -->
		<a href="index.html" class="d-lg-none d-md-block">
				<img src="{{ asset('admin/images/logo.svg') }}" class="logo-sm" alt="Bootstrap Gallery">
		</a>
		<!-- Logo sm ends -->

		<!-- Breadcrumb start -->
		<ol class="breadcrumb d-lg-flex d-none">
				<li class="breadcrumb-item">
						<i class="bi bi-house"></i>
						<a href="{{ route('Dashboard') }}">Home</a>
				</li>
				<li class="breadcrumb-item breadcrumb-active" aria-current="page">Dashboard</li>
		</ol>
		<!-- Breadcrumb end -->

		<!-- Header actions ccontainer start -->
		<div class="header-actions-container">

				<!-- Search container start -->
				<div class="search-container d-lg-block d-none">

						<!-- Search input group start -->
						<div class="input-group">
								<input type="text" class="form-control" id="searchAny" placeholder="Search anything">
								<button class="btn" type="button">
										<i class="bi bi-search"></i>
								</button>
						</div>
						<!-- Search input group end -->

				</div>
				<!-- Search container end -->

				<!-- Header actions start -->
				<ul class="header-actions">
						<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
										<span class="user-name d-none d-md-block">Admin User</span>
										<span class="avatar">
												<img src="{{ asset('admin/images/user.png') }}" alt="Admin Templates">
												<span class="status online"></span>
										</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
										<div class="header-profile-actions">
												<a href="#">Profile</a>
												{{-- <a href="#">Settings</a> --}}
												<a href="#">Logout</a>
										</div>
								</div>
						</li>
				</ul>
				<!-- Header actions end -->
		</div>
		<!-- Header actions ccontainer end -->
</div>
<!-- Page header ends -->
