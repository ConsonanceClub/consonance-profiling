<?php
/**
 *
 * Description
 *
 * @package        Consonance
 * @category       Source
 * @author         Ani Kenechi <anikenechi.c@gmail.com> {@link http://anikenechi.remote.com}
 * @date           2018-03-07
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
        <div class="col-sm-2">

        </div>

        {{--Main Content--}}
        <div class="col-sm-7">
            @yield('content')
        </div>

        {{--Events--}}
        <div class="col-sm-3">
            {{--Feasibility to Append or Override--}}
            @section('Events')
                @include('Elements.postTicker')
            @show
        </div>

    </div>

</div>

{{--call on footer--}}
@include('Elements.footer')
</body>
</html>
