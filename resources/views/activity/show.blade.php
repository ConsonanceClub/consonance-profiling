@extends('Layouts.default')

{{--set Title--}}
@section('title', 'Consonance - Acticity')

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


    <style>
        .event-container>.event-head>.event-icon { padding-bottom: 20px; font-size: 60px; text-align: center; }
        .event-container>.event-head img { width: 100%; height: auto; }
        .event-container>.event-description>.event-detail { text-align: center; }
        .event-container>.event-description>.event-detail i { padding-bottom: 15px; font-size: 20px; }
</style>

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

                        <div class="row" >
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <ol class="breadcrumb pull-left" style="width: 100%; text-align: left">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('activity')}}">Activity stream</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$activity->title}}</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-9 col-md-9">
                                <div class="event-container" style="box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.06)">
                                    <div class="event-head">
                                        <div class="event-icon" style="padding-top: 20px">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <img class="img-responsive" src="/ActivityPics/{{$activity->image_url ? $activity->image_url : "No photo"}}" alt="">
                                    </div>
                                    <div class="event-description mt-20" style="padding: 10px">
                                        <h2 style="">{{$activity->title}}</h2>
                                        <p>{{$activity->body}}</p>
                                        <div class="event-detail">
                                            <div class="row mt-20">
                                                <div class="col-lg-4 col-md-4">
                                                    <i class="fa fa-calendar-o"></i>
                                                    <br>
                                                    <span>{{date('jS F, Y', strtotime($activity->start_date))}} - {{date('jS F, Y', strtotime($activity->end_date))}}</span>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <i class="fa fa-clock-o"></i>
                                                    <br>
                                                    <span> {{date('ga', strtotime($activity->start_date))}} - {{date('ga', strtotime($activity->end_date))}}</span>
                                                </div>
                                                @if($activity->location)

                                                <div class="col-lg-4 col-md-4">
                                                    <i class="fa fa-map-pin"></i>
                                                    <br>
                                                    <span>{{$activity->location}}</span>
                                                </div>

                                                @endif

                                            </div>
                                        </div>

                                        <div class="row mt-20">
                                            <div class="col-lg-12 col-md-12 info-col" id="activity-{{ $activity->id }}">
                                                <input type="hidden" name="url" style="font-size: 14px;" value="{{ route('activity.like', [ 'id' => $activity->id ]) }}">

                                                <a href="javascript:;" onclick=" toggleLike( {{$activity->id }} )"  class="liken" >
                                                    <i style="font-size: 14px;" class="fa {{ $activity->isLiked ? 'fa-heart' : 'fa-heart-o' }}"></i>
                                                    <span class="text-muted likes-count" style="color:#2388db;">{{ $activity->likes()->count() }} Like(s)</span>
                                                </a>
                                                <span class="ml-40">Share: </span>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=consonance.club/activity/{{$activity->slug}}" target="_blank">
                                                    <i class="fa fa-facebook" style="margin-left: 10px;"></i> </a>
                                                {{--<a href="">--}}
                                                    {{--<i class="fa fa-twitter" style="margin-left: 10px;"></i>--}}
                                                {{--</a>--}}
                                            </div>
                                        </div>

                                        <div class="event-comment">
                                            <h5 class="mt-30 mb-20">Comments</h5>
                                            @foreach($activity->activity_comments as $comment)

                                                <div class="comments-1">
                                                    <div class="comments-info">
                                                        <h4 class="comment-title">{{$comment->user->first_name}}
                                                            <span>{{date('jS F, Y', strtotime($comment->created_at))}}</span>
                                                        </h4>
                                                        <p>{{$comment->comment}}</p>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>

                                        <!-- =======================
                                                              Leave a reply ========================= -->

                                        <br/>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">

                                                <h4 class="comment-title mb-30">Leave a Reply </h4>


                                                <form action="{{route('activity.comment', $activity->id)}}" role="form" method="post">
                                                    {{csrf_field()}}
                                                    <div class="section-field col-md-10 clearfix" style="display: inline;">
                                                        <input class="form-control" name="comment" type="text" placeholder="Post a comment..." required/>
                                                    </div>
                                                    <button type="submit" class="comment-btn1">SEND <i class="fa fa-send" style="font-size: 16px; margin-top: 5px; padding-left: 7px; "></i></button>
                                                </form>


                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>

                            <!-- ================
              side bar =========== -->

                            <div class="col-lg-3 col-md-3 ">
                                {{--<div class="container">--}}

                                @include('includes.sidebar')

                                {{--</div>--}}

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


    <script>



        function toggleLike(id) {
            var $element = $('#activity-' + id);
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
