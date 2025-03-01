<!--right silde-bar-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightmobile" aria-labelledby="offcanvasRightLabel">
		<div class="offcanvas-header py-0">
				<button type="button" class="close-menu mt-4" data-bs-dismiss="offcanvas" aria-label="Close">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-x-circle-fill" viewBox="0 0 16 16">
								<path
										d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
						</svg>
				</button>
		</div>
		<div class="offcanvas-body">
				<div class="head-contact d-block d-lg-none">
						<a href="{{ route('client.index') }}" class="logo-side">
								<img src="{{ asset('client/images/logo.png') }}" alt="Mapoly FootHub">
						</a>
						<div class="mobile-menu-sec mt-3">
								<ul>
										<li class="{{ Route::currentRouteName() === 'matches' ? 'active-m' : '' }}">
												<a href="{{ route('client.matches') }}"> Matches </a>
										</li>
										<li class="{{ Route::currentRouteName() === 'client.teams' ? 'active-m' : '' }}">
												<a href="{{ route('client.teams') }}"> Teams </a>
										</li>
										<li class="{{ Route::currentRouteName() === 'client.schedules' ? 'active-m' : '' }}">
												<a href="{{ route('client.schedules') }}"> Schedule </a>
										</li>
										<li class="{{ Route::currentRouteName() === 'client.players' ? 'active-m' : '' }}">
												<a href="{{ route('client.players') }}"> Players </a>
										</li>
								</ul>
						</div>
				</div>
		</div>
</div>

<footer class="py-5 float-start w-100">
		<div class="container">
				<p class="text-center copy-t"> Copyright {{ date('Y') }} Mapoly FootHub, All Right Reserved</p>
		</div>
</footer>

<script src="{{ asset('client/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('client/js/jquery.min.js') }}"></script>
<script src="{{ asset('client/js/custom.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
<script src="{{ asset('client/js/owl.carousel.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('client/js/jquery.fancybox.min.js') }}"></script>

<script>
		AOS.init({
				offset: 100,
				easing: 'ease',
				delay: 0,
				once: true,
				duration: 800,

		});
</script>

<script>
		$(document).ready(function() {
				var TIMEOUT = 6000;

				var interval = setInterval(handleNext, TIMEOUT);

				function handleNext() {
						var $radios = $('input[class*="slide-radio"]');
						var $activeRadio = $('input[class*="slide-radio"]:checked');

						var currentIndex = $activeRadio.index();
						var radiosLength = $radios.length;

						$radios.attr("checked", false);

						if (currentIndex >= radiosLength - 1) {
								$radios.first().attr("checked", true);
						} else {
								$activeRadio.next('input[class*="slide-radio"]').attr("checked", true);
						}
				}
		});
</script>
