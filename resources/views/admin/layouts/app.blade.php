<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('admin-css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('admin-css/blog-post.css')}}" rel="stylesheet">
    <link href="{{asset('admin-css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('admin-css/metisMenu.css')}}" rel="stylesheet">
    <link href="{{asset('admin-css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('admin-css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('admin-css/timeline.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin-css/AdminLTE.min.css')}}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="admin-page">

<div id="wrapper">

    <!-- Navigation -->
    @include('admin.layouts.nav')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                    @yield('content')
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('admin-js/bootstrap.js')}}"></script>
<script src="{{asset('admin-js/jquery.js')}}"></script>
<script src="{{asset('admin-js/metisMenu.js')}}"></script>
<script src="{{asset('admin-js/sb-admin-2.js')}}"></script>

</body>

</html>
