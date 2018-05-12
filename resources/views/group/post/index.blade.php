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

        <section class="page-section-ptb">
            <div class="container">
            <div class="row">

                <!-- ======================
                  grid-layout -->

                <div class="col-lg-12 col-md-12">
                    <div class="group-title mb-10">
                        <h5 class="title-crumb">GROUPS</h5>
                        <span class="current-crumb">{{$group->name}}</span>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="">Group</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{$group->name}}</li>
                            </ol>
                        </div>
                    </div>

                </div>
                <!--======================
                    post thumbnail layout -->
                <div class="col-md-9">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30" >
                                <div class="blog-box blog-2 gray-bg" >
                                    <img class="img-responsive" src="/GroupPostPics/{{$post->image_url ? $post->image_url : "No photo"}}" alt="">
                                    <div class="blog-info" id="post-{{ $post->id }}">
                                        <h4>
                                            <a href="{{route('postn.show', $post->slug)}}">{{$post->title}}</a>
                                        </h4>
                                        {{--<p>--}}
                                            {{--{{str_limit($post->description, $limit = 100, $end = '...')}}--}}
                                        {{--</p>--}}
                                        <span>
                                          <i class="fa fa-clock-o"></i> {{$post->created_at->diffForHumans()}}
                                            <div style="display:inline; padding-left: 8px;">
                                                <input type="hidden" name="url" value="{{ route('post.like', [ 'id' => $post->id ]) }}">

                                            <a href="javascript:;" onclick=" toggleLike( {{$post->id }} )"  class="liken" >
                                                <i style="font-size: 16px" class="fa {{ $post->isLiked ? 'fa-heart' : 'fa-heart-o' }}"></i>
                                                <span class="text-muted likes-count">{{ $post->likes()->count() }} Like(s)</span>

                                            </a>
                                          </div>
                                        </span>
                                        <a class="button icon-color" href="{{route('postn.show', $post->slug)}}">Read More
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <!-- ======================
                      Page Nav =================== -->


                    <div class="col-lg-12 col-md-12 mt-20 text-center">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="next" style="">
                                    {{$posts->links()}}
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>


                <!-- =================
                  Side-bar ============-->

                <div class="col-lg-3 col-md-3 sm-mt-30 blog-sidebar">
                    {{--<div class="row">--}}

                    <div class="sidebar-widget">
                        <h6 class="mt-40 mb-20"><em>About the blog</em></h6>
                        <p>We are
                            <strong> consonance </strong> a community of digital personnels, developers, creatives and the likes,
                            <br/>
                            <br/> Here in our blog, we plan to enlighten you by educating you, making you aware and constanstly inbibe the consonance culture. </p>
                    </div>

                    @include('includes.sidebar')

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



    <script>



        function toggleLike(id) {
            var $element = $('#post-' + id);
            var url = $element.find('input[name=url]').val();
            $.ajax({
                url: url,
                method: 'GET',
                success: function (response) {

                    var $liken = $element.find('.liken');
                    var $icon = $liken.find('i');
                    $icon.removeClass('fa-heart');
                    $icon.removeClass('fa-heart-o');
                    $icon.addClass(response.isLiked ? 'fa-heart' : 'fa-heart-o');
                    $element.find('.likes-count').text(response.totalLikes + ' Like(s)');


                },
                error: function (error) {

                    window.location = '/signIn';


                }
            })

        }


    </script>




@endsection