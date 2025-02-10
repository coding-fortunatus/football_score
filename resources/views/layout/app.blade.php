<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>@yield('title', 'Mapoly Sport Update System')</title>
		@include('partials.header')
</head>

<body>
		<!-- Navbar -->
		@include('partials.navbar')
		{{-- Content --}}
		@yield('content')
		<!-- Footer -->
		@include('partials.footer')
</body>

</html>
