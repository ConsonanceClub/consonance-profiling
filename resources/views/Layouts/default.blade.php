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
		@include('Elements.headContent')
	</head>

	<body>
		{{--bring in the nav bar--}}
		@include('Elements.navigation')

		<div class="container">

			@yield('content')

		</div>

		{{--call on footer--}}
		@include('Elements.footer')
	</body>
</html>
