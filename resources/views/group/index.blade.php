@extends('Layouts.default')

{{--set Title--}}
@section('title', 'Consonance - Groups')

@section('styles')

    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins-css.css')}}" />

    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/typography.css')}}" />

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/shortcodes/shortcodes.css')}}" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style_new.css')}}" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />

@endsection

{{--set content--}}
@section('content_new')

    <div class="wrapper">

        <!--=================================
         header



       =================================
          header -->

        <section class="page-section-ptb">
            <div class="container">
                <div class="row">

                    <!-- ======================
                      grid-layout -->

                    <div class="col-lg-12 col-md-12">
                        <div class="group-title mb-10">
                            <h5 class="title-crumb">GROUPS</h5>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="activity.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Groups</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-9 col-md-9">
                                <div class="isotope columns-3 no-title">
                                    @foreach($groups as $group)
                                    <div class="grid-item">
                                        <div class="portfolio-item">
                                            <img src="/GroupProfilePic/{{$group->icon_url ? $group->icon_url : "No photo"}}" alt="" class="img-size">
                                            <div class="portfolio-overlay">
                                                <h4 class="text-gray">
                                                    <a href="{{route('groupn.show', $group->slug)}}">{{$group->name}}</a>
                                                </h4>

                                            </div>
                                            <a class="popup portfolio-img" href="{{route('groupn.show', $group->slug)}}">
                                                <i class="fa fa-angle-right"></i>
                                            </a>

                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-lg-12 col-md-12 mt-20 text-center">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="next" style="">
                                                {{$groups->links()}}
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                            </div>

                            <!-- ================
                              side bar =========== -->
                            <div class="col-lg-3 col-md-3 sm-mt-30 blog-sidebar">
                                {{--<div class="row">--}}

                            @include('includes.sidebar')

                            </div>

                        </div>

                        <!-- ======================
                                  grid-layout -->

                    </div>
                </div>
                </div>
        </section>




    </div>


@endsection

@section('scripts')


    <script type="text/javascript" src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins-jquery.js')}}"></script>
    <script type="text/javascript">var plugin_path = 'js/';</script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>



@endsection
