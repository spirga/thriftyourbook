<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Thrift Your Book</title>

	<!-- Fonts -->


	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Elsie&family=Fasthand&display=swap" rel="stylesheet">

	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
	<div class="min-h-screen">
		@include('layouts.navigation')

		<!-- Page Heading -->
		<header class="bg-transparent mt-16 mb-4">
			<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
				{{ $header }}
			</div>
		</header>

		<!-- Page Content -->
		<main>
			{{ $slot }}
		</main>
	</div>
</body>

</html>