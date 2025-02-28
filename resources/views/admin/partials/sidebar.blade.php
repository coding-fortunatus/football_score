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
								<li class="{{ Route::currentRouteName() === 'Dashboard' ? 'active' : '' }}">
										<a href="{{ route('Dashboard') }}">
												<i class="bi bi-house"></i>
												<span class="menu-text">Dashboards</span>
										</a>
								</li>
								{{-- Schedules --}}
								<li class="{{ Route::currentRouteName() === 'schedules.index' ? 'active' : '' }}">
										<a href="{{ route('schedules.index') }}">
												<i class="bi bi-calendar-week"></i>
												<span class="menu-text">Schedules</span>
										</a>
								</li>
								{{-- Matches --}}
								<li class="{{ Route::currentRouteName() === 'matches.index' ? 'active' : '' }}">
										<a href="{{ route('matches.index') }}">
												<i class="bi bi-diagram-2"></i>
												<span class="menu-text">Matches</span>
										</a>
								</li>
								{{-- Teams --}}
								<li class="{{ Route::currentRouteName() === 'teams.index' ? 'active' : '' }}">
										<a href="{{ route('teams.index') }}">
												<i class="bi bi-ui-checks"></i>
												<span class="menu-text">Teams</span>
										</a>
								</li>
								{{-- Players --}}
								<li class="{{ Route::currentRouteName() === 'players.index' ? 'active' : '' }}">
										<a href="{{ route('players.index') }}">
												<i class="bi bi-people"></i>
												<span class="menu-text">Players</span>
										</a>
								</li>
								{{-- Officials --}}
								<li class="{{ Route::currentRouteName() === 'officials.index' ? 'active' : '' }}">
										<a href="{{ route('officials.index') }}">
												<i class="bi bi-person-check"></i>
												<span class="menu-text">Officials</span>
										</a>
								</li>
								{{-- Fields --}}
								<li class="{{ Route::currentRouteName() === 'fields.index' ? 'active' : '' }}">
										<a href="{{ route('fields.index') }}">
												<i class="bi bi-square-half"></i>
												<span class="menu-text">Fields</span>
										</a>
								</li>
								{{-- Leagues --}}
								<li class="{{ Route::currentRouteName() === 'leagues.index' ? 'active' : '' }}">
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
