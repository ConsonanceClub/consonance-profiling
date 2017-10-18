<?php
/**
 *
 * Description
 *
 * @package        Consonance
 * @category       View
 * @author         Michael Akanji <matscode@gmail.com> {@link http://michaelakanji.com}
 * @date           2017-10-18
 *
 */
?>
<html>

	<head>
		<title>Consonance - @yield('title')</title>

		@push('styles')
		{{--Default CSS Files--}}
		<link rel="stylesheet" href="/css/bootstrap.css">
		<link rel="stylesheet" href="/css/style.css">
		@endpush

		@push('scripts')
		{{--Default Javascript Files--}}
		<script src="/js/angular.min.js"></script>
		<script src="/js/jquery-3.1.1.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/holder.min.js"></script>
		@endpush

		{{--Additional Meta Data Current--}}
		@stack('metas')
		{{-- CSS Definitions --}}
		@stack('styles')
		{{-- Client Side Scripts--}}
		@stack('scripts')


	</head>

	<body>

		<div class="container">
			@yield('content')
		</div>

	</body>
</html>
