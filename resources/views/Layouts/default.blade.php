<html>

	<head>
		{{--<link href="{{asset('css/app.css')}}" rel="stylesheet">--}}

		@yield('styles')

		@include('Elements.headContent')

	</head>

	<body>
		{{--bring in the nav bar--}}
		@include('Elements.navigation')

			@yield('content')
			@yield('content_new')

		{{--call on footer--}}
		@include('Elements.footer')

		@yield('scripts')

	</body>
</html>
