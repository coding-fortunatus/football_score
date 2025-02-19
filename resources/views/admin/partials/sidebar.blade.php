<!-- Sidebar wrapper start -->
<nav class="sidebar-wrapper">
		<div class="sidebar-brand">
				<a href="{{ route('Dashboard') }}" class="logo">
						<img src="{{ asset('client/images/logo.png') }}" alt="Admin Dashboard" />
				</a>
		</div>
		<!-- Sidebar menu starts -->
		<div class="sidebar-menu">
				<div class="sidebarMenuScroll">
						<ul>
								{{-- Dashboard --}}
								<li class="active">
										<a href="{{ route('Dashboard') }}">
												<i class="bi bi-house"></i>
												<span class="menu-text">Dashboards</span>
										</a>
								</li>
								{{-- Schedules --}}
								<li class="sidebar-dropdown">
										<a href="#">
												<i class="bi bi-calendar-week"></i>
												<span class="menu-text">Schedules</span>
										</a>
										<div class="sidebar-submenu">
												<ul>
														<li>
																<a href="#">Schedule list</a>
														</li>
														<li>
																<a href="#">Create Schedule</a>
														</li>
												</ul>
										</div>
								</li>
								{{-- Matches --}}
								<li class="sidebar-dropdown">
										<a href="#">
												<i class="bi bi-diagram-2"></i>
												<span class="menu-text">Matches</span>
										</a>
										<div class="sidebar-submenu">
												<ul>
														<li>
																<a href="#">Add new match</a>
														</li>
														<li>
																<a href="#">Match list</a>
														</li>
												</ul>
										</div>
								</li>
								{{-- Teams --}}
								<li class="sidebar-dropdown">
										<a href="#">
												<i class="bi bi-ui-checks"></i>
												<span class="menu-text">Teams</span>
										</a>
										<div class="sidebar-submenu">
												<ul>
														<li>
																<a href="#">Create team</a>
														</li>
														<li>
																<a href="#">Team list</a>
														</li>
												</ul>
										</div>
								</li>
								{{-- Players --}}
								<li class="sidebar-dropdown">
										<a href="#">
												<i class="bi bi-people"></i>
												<span class="menu-text">Players</span>
										</a>
										<div class="sidebar-submenu">
												<ul>
														<li>
																<a href="#">Create Player</a>
														</li>
														<li>
																<a href="#">Player List</a>
														</li>
												</ul>
										</div>
								</li>
								{{-- Officials --}}
								<li>
										<a href="{{ route('officials.index') }}">
												<i class="bi bi-person-check"></i>
												<span class="menu-text">Officials</span>
										</a>
								</li>
								{{-- Fields --}}
								<li class="sidebar-dropdown">
										<a href="#">
												<i class="bi bi-square-half"></i>
												<span class="menu-text">Fields</span>
										</a>
										<div class="sidebar-submenu">
												<ul>
														<li>
																<a href="#">Create Field</a>
														</li>
														<li>
																<a href="#">Field List</a>
														</li>
												</ul>
										</div>
								</li>
								{{-- News --}}
								<li class="sidebar-dropdown">
										<a href="#">
												<i class="bi bi-newspaper"></i>
												<span class="menu-text">News</span>
										</a>
										<div class="sidebar-submenu">
												<ul>
														<li>
																<a href="#">Create News</a>
														</li>
														<li>
																<a href="#">News List</a>
														</li>
												</ul>
										</div>
								</li>
								{{-- Leagues --}}
								<li class="sidebar-dropdown">
										<a href="#">
												<i class="bi bi-life-preserver"></i>
												<span class="menu-text">Leagues</span>
										</a>
										<div class="sidebar-submenu">
												<ul>
														<li>
																<a href="#">Create League</a>
														</li>
														<li>
																<a href="#">View Leagues</a>
														</li>
												</ul>
										</div>
								</li>
						</ul>
				</div>
		</div>
		<!-- Sidebar menu ends -->
</nav>
<!-- Sidebar wrapper end -->
