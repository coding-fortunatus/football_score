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
								<li>
										<a href="{{ route('teams.index') }}">
												<i class="bi bi-ui-checks"></i>
												<span class="menu-text">Teams</span>
										</a>
								</li>
								{{-- Players --}}
								<li>
										<a href="{{ route('players.index') }}">
												<i class="bi bi-people"></i>
												<span class="menu-text">Players</span>
										</a>
								</li>
								{{-- Officials --}}
								<li>
										<a href="{{ route('officials.index') }}">
												<i class="bi bi-person-check"></i>
												<span class="menu-text">Officials</span>
										</a>
								</li>
								{{-- Fields --}}
								<li>
										<a href="{{ route('fields.index') }}">
												<i class="bi bi-square-half"></i>
												<span class="menu-text">Fields</span>
										</a>
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
								<li>
										<a href="{{ route('leagues.index') }}">
												<i class="bi bi-life-preserver"></i>
												<span class="menu-text">Leagues</span>
										</a>
								</li>
						</ul>
				</div>
		</div>
		<!-- Sidebar menu ends -->
</nav>
<!-- Sidebar wrapper end -->
