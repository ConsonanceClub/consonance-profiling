<?php
/**
 *
 * Description
 *
 * @package        Consonance
 * @category       Source
 * @author         Michael Akanji <matscode@gmail.com> {@link http://michaelakanji.com}
 * @date           2017-10-26
 *
 */
?>

{{--headConten File houses all Resources for Layouts/Templates--}}

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
<link rel="stylesheet" href="/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/ionicons.min.css">
<link rel="stylesheet" href="/css/styles.css">
<link rel="stylesheet" href="/css/theme.css">
<link rel="stylesheet" href="/css/style.css">
{{--Using png as a fix for favicon ico format--}}
<link rel="icon" href="/images/logo-32x33.png">
@endpush

@push('scripts')
{{--Default Javascript Files--}}
<script src="{{asset('/js/jquery-3.1.1.min.js')}}"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/angular.min.js"></script>
<script src="/js/holder.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/scripts.js"></script>
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

