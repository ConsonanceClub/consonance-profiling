<!DOCTYPE html>
<html>
<head>
    @include('admin.layouts.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('admin.layouts.header')

        @include('admin.layouts.sidebar')

        @yield('content')

        @include('admin.layouts.footer')


    </div>
</body>
</html>
