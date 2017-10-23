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

		@push('metas')
		{{--Default Meta Data--}}
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		@endpush

		@push('styles')
		{{--Default CSS Files--}}
		<link rel="stylesheet" href="/css/bootstrap.css">
		<link rel="stylesheet" href="/css/style.css">
		{{--Using png as a fix for favicon ico format--}}
		<link rel="icon" href="/images/logo-32x33.png">
		@endpush

		@push('scripts')
		{{--Default Javascript Files--}}
		<script src="/js/angular.min.js"></script>
		<script src="/js/jquery-3.1.1.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/holder.min.js"></script>
		@endpush

		@push('scripts')
		{{--HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries--}}
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		@endpush

		{{--Additional Meta Data Current--}}
		@stack('metas')
		{{-- CSS Definitions --}}
		@stack('styles')
		{{-- Client Side Scripts--}}
		@stack('scripts')

	</head>

	<body>
		{{--bring in the nav bar--}}
		@include('Elements.navigation')

		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="jumbotron">
			<div class="container">
				<h1>Hello, world!</h1>
				<p>This is a template for a simple marketing or informational website. It includes a large callout
				   called a jumbotron and three supporting pieces of content. Use it as a starting point to create
				   something more unique.</p>
				<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
			</div>
		</div>

		<div class="container">
			<!-- Example row of columns -->
			<div class="row">
				<div class="col-md-4">
					<h2>Heading</h2>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
					   mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
					   mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				</div>
				<div class="col-md-4">
					<h2>Heading</h2>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
					   mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
					   mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				</div>
				<div class="col-md-4">
					<h2>Heading</h2>
					<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id
					   ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris
					   condimentum nibh, ut fermentum massa justo sit amet risus.</p>
					<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				</div>
			</div>

			<hr>

			<footer>
				<p>&copy; 2016 Company, Inc.</p>
			</footer>
		</div> <!-- /container -->

		<div class="container">
			@yield('content')
		</div>

	</body>
</html>
