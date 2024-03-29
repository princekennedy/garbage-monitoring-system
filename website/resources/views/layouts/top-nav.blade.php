<nav class="navbar navbar-expand navbar-light navbar-bg">
	<a class="sidebar-toggle js-sidebar-toggle">
		<i class="hamburger align-self-center"></i>
	</a>

	<div class="navbar-collapse collapse">
		<ul class="navbar-nav navbar-align">
			<li class="nav-item dropdown">
				<a class="nav-icon dropdown-toggle" href="#" id="bin-alerts" data-bs-toggle="dropdown">
					<div class="position-relative">
						<i class="align-middle" data-feather="bell"></i>
						<span class="indicator">0</span>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="bin-alerts">
					<div class="dropdown-menu-header">
						0 New Notifications
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item">
							<div class="row g-0 align-items-center">
								<div class="col-2">
									<i class="text-danger" data-feather="alert-circle"></i>
								</div>
								<div class="col-10">
									<div class="text-dark">Update completed</div>
									<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
									<div class="text-muted small mt-1">30m ago</div>
								</div>
							</div>
						</a>
					</div>
					<div class="dropdown-menu-footer">
						<a href="#" class="text-muted">Show all notifications</a>
					</div>
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
					<i class="align-middle" data-feather="settings"></i>
				</a>

				<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
					<img src="{{ asset('assets/img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1" alt="{{ Auth::user()->name }}" />
					<span class="text-dark text-capitalize">{{ Auth::user()->name }}</span>
				</a>

				<div class="dropdown-menu dropdown-menu-end">
					<a class="dropdown-item" href="{{ route("user.show", auth()->id())}}"><i class="align-middle me-1" data-feather="user"></i> My Profile</a>
					<div class="dropdown-divider"></div>
					<!-- Authentication -->
					<form method="POST" action="{{ route('logout') }}">
						@csrf

						<x-dropdown-link :href="route('logout')"
								onclick="event.preventDefault();
											this.closest('form').submit();">
							{{ __('Log Out') }}
						</x-dropdown-link>
					</form>
				</div>
			</li>
		</ul>
	</div>
</nav>