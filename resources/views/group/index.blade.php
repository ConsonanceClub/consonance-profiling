@extends('Layouts.default')

{{--set Title--}}
@section('title', 'Consonance - Groups')

@section('styles')

    <link rel="stylesheet" type="text/css" href="{{asset('css_group/plugins-css.css')}}" />

    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="{{asset('css_group/typography.css')}}" />

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{asset('css_group/shortcodes/shortcodes.css')}}" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css_group/style_group.css')}}" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('css_group/responsive.css')}}" />

@endsection

{{--set content--}}
@section('content')

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
                                        <a href="#">Home</a>
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
                                                    <a href="{{route('groupn.show', $group->id)}}">{{$group->name}}</a>
                                                </h4>
                                                <span class="text-white">
                                                <a href="#"> HTML5 </a>|
                                                <a href="#">CSS3 </a>|
                                                <a href="#">JavaScript </a>
                                              </span>
                                            </div>
                                            <a class="popup portfolio-img" href="{{route('groupn.show', $group->id)}}">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                        @endforeach

                                </div>
                            </div>

                            <!-- ================
                              side bar =========== -->

                            <div class="col-lg-3 col-md-3 sm-mt-30 blog-sidebar">
                                <div class="row">

                                    <div class="sidebar-widget search-body">
                                        <div class="widget-search">
                                            <i class="fa fa-search"></i>
                                            <input type="search" class="form-control" placeholder="Search...." />
                                        </div>
                                    </div>

                                    <div class="sidebar-widget">
                                        <h6 class="mt-40 mb-10">Recent Events </h6>
                                        <div class="recent-event">
                                            <div class="recent-event-image">
                                                <img class="img-responsive" src="assets/07.jpg" alt="">
                                            </div>
                                            <div class="recent-event-info">
                                                <a href="#"><strong>Social Media Week Lagos</strong></a>
                                                <span>
                        <i class="fa fa-calendar"></i> 26th Feb - 2nd Mar, 2018
                      </span>
                                                <span class="view-events"><a href="#">view</a></span>
                                            </div>
                                        </div>
                                        <div class="recent-event">
                                            <div class="recent-event-image">
                                                <img class="img-responsive" src="assets/07.jpg" alt="">
                                            </div>
                                            <div class="recent-event-info">
                                                <a href="#">
                                                    <strong>GDG Hackathon Lagos</strong>
                                                </a>
                                                <span>
                        <i class="fa fa-calendar"></i> 7th Mar - 14th Mar, 2018
                      </span>
                                                <span class="view-events">
                        <a href="#">view</a>
                      </span>
                                            </div>
                                        </div>
                                        <div class="recent-event">
                                            <div class="recent-event-image">
                                                <img class="img-responsive" src="assets/07.jpg" alt="">
                                            </div>
                                            <div class="recent-event-info">
                                                <a href="#">
                                                    <strong>GDG Hackathon Lagos</strong>
                                                </a>
                                                <span>
                        <i class="fa fa-calendar"></i> 7th Mar - 14th Mar, 2018
                      </span>
                                                <span class="view-events">
                        <a href="#">view</a>
                      </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sidebar-widget">
                                        <h6 class="mt-40 mb-20">Recent Posts </h6>
                                        <div class="recent-post clearfix">
                                            <div class="recent-post-image">
                                                <img class="img-responsive" src="assets/01.jpg" alt="">
                                            </div>
                                            <div class="recent-post-info">
                                                <a href="#">Front-End Developers on the rise</a>
                                                <span>
                        <i class="fa fa-calendar-o"></i> September 30, 2018</span>
                                            </div>
                                        </div>
                                        <div class="recent-post clearfix">
                                            <div class="recent-post-image">
                                                <img class="img-responsive" src="assets/02.jpg" alt="">
                                            </div>
                                            <div class="recent-post-info">
                                                <a href="#">The creative millenials taking over the digital sphere</a>
                                                <span>
                        <i class="fa fa-calendar-o"></i> September 30, 2018</span>
                                            </div>
                                        </div>
                                        <div class="recent-post clearfix">
                                            <div class="recent-post-image">
                                                <img class="img-responsive" src="assets/03.jpg" alt="">
                                            </div>
                                            <div class="recent-post-info">
                                                <a href="#">Sell what you make to those who need it</a>
                                                <span>
                        <i class="fa fa-calendar-o"></i> September 30, 2018</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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


    <script type="text/javascript" src="{{asset('js_group/jquery-1.12.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js_group/plugins-jquery.js')}}"></script>
    <script type="text/javascript">var plugin_path = 'js_group/';</script>
    <script type="text/javascript" src="{{asset('js_group/custom.js')}}"></script>


@endsection
