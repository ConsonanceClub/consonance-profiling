
{{--headContent File houses all Resources for Layouts/Templates--}}

<title>Consonance - @yield('title')</title>

@push('metas')
{{--Default Meta Data--}}
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Consonance" />
<meta name="description" content="Consonance Web Responsive" />
<meta name="author" content="Nwafor Kenechukwu" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
@endpush

@push('styles')
{{--Default CSS Files--}}
<!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins-css.css')}}" />

    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/typography.css')}}" />

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/shortcodes/shortcodes.css')}}" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style_new.css')}}" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />
{{--Using png as a fix for favicon ico format--}}
<link rel="icon" href="/images/logo-32x33.png">
@endpush

@push('scripts')
{{--Default Javascript Files--}}
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/plugins-jquery.js"></script>
<script type="text/javascript">var plugin_path = 'js/';</script>
<script type="text/javascript" src="js/custom.js"></script>
@endpush

@push('scripts')
{{--HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries--}}
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
@endpush

@push('styles')
{{--CSS for datatbles too--}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endpush

@push('scripts')
{{--scripts for datatables--}}
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="/js/components/members.js"></script>
@endpush

{{--Additional Meta Data Current--}}
@stack('metas')
{{-- CSS Definitions --}}
@stack('styles')
{{-- Client Side Scripts--}}
@stack('scripts')

