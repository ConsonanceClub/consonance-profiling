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


		<div class="container-fluid">
			<div class="row">

				{{--Side Menu--}}
				<div class="col-sm-3">
					{{--Feasibility to Append or Override--}}
					@section('TopLevelMenu')
						@include('Elements.topLevelMenu')
					@show
				</div>

				{{--Main Content--}}
				<div class="col-sm-6">
					@yield('content')
				</div>

				{{--Events--}}
				<div class="col-sm-3">
					{{--Feasibility to Append or Override--}}
					@section('Events')
						@include('Elements.events')
					@show
				</div>

			</div>

		</div>

		{{--call on footer--}}
		@include('Elements.footer')
	</body>
</html>
