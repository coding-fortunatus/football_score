<!doctype html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Football Admin Panel">
		<meta name="author" content="Fortunatus Adegoke" />
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
		<title>@yield('title', 'Admin Panel')</title>
		@include('admin.partials.headers')
</head>

<body>
		<!-- Loading start -->
		@php
				if (Route::currentRouteName() === 'Dashboard') {
				    echo '
                    <div id="loading-wrapper">
                            <div class="spinner">
                                    <div class="line1"></div>
                                    <div class="line2"></div>
                                    <div class="line3"></div>
                                    <div class="line4"></div>
                                    <div class="line5"></div>
                                    <div class="line6"></div>
                            </div>
                    </div>';
				}
		@endphp
		<!-- Loading end -->
		<!-- Page wrapper start -->
		<div class="page-wrapper">
				@include('admin.partials.sidebar')
				<!-- ************* Main container start ************ -->
				<div class="main-container">
						@include('admin.partials.page-header')
						@yield('content')
				</div>
				<!-- ************* Main container end ************ -->
		</div>
		<!-- Page wrapper end -->
		{{-- Footer --}}
		@include('admin.partials.footer')
</body>

</html>
