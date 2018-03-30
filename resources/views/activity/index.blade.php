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
                        <div class="group-title mb-30">
                            <h5 class="title-crumb">ACTIVITY FEED</h5>
                        </div>


                        <!-- =========== activity stream ========== -->

                        <div class="col-lg-9 col-md-9">
                            <div class="row">
                                <div class="activity-feed-panel">
                                    <div class="tab tab-border">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#feed" data-toggle="tab"> Activity Stream</a>
                                            </li>
                                            <li>
                                                <a href="#view_events" data-toggle="tab"> Events</a>
                                            </li>
                                            <li>
                                                <a href="#meetUps" data-toggle="tab"> Meet-Ups</a>
                                            </li>
                                            <li>
                                                <a href="#projects" data-toggle="tab"> Projects</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="feed">

                                                @foreach($activities as $activity)

                                                <!-- =========== event activity ========== -->

                                                <div class="event-activity mt-20 mb-40">
                                                    <div class="event-info">
                                                        <div class="event-image">
                                                            <img class="img-responsive" src="/ActivityPics/{{$activity->image_url ? $activity->image_url : "No photo"}}" alt="">
                                                        </div>
                                                        <p class="post-time">{{date('jS F, Y', strtotime($activity->start_date))}} | {{date('ga', strtotime($activity->start_date))}}</p>
                                                        <span>
                                                            <i class="fa fa-calendar event-id"></i>
                                                                </span>
                                                        <a href="#" class="event"><h4>{{$activity->title}}</h4></a>
                                                        <p>{{str_limit($activity->body, $limit = 180, $end = '...')}}</p>
                                                        <ul class="mt-20">
                                                            <li>
                                                                <i class="fa fa-calendar-o"></i>
                                                                <span>{{date('jS F, Y', strtotime($activity->start_date))}}</span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-clock-o"></i>
                                                                <span>{{date('ga', strtotime($activity->start_date))}}</span>
                                                            </li>
                                                            {{--<li>--}}
                                                                {{--<i class="fa fa-map-pin"></i>--}}
                                                                {{--<span> Landmark Event Centre</span>--}}
                                                            {{--</li>--}}
                                                            <br>

                                                        </ul>
                                                    </div>
                                                    <div class="activity-action mt-10" id="activity-{{ $activity->id }}">
                                                        <ul>
                                                            <li>
                                                                <input type="hidden" name="url" style="font-size: 14px;" value="{{ route('activity.like', [ 'id' => $activity->id ]) }}">

                                                                <a href="javascript:;" onclick=" toggleLike( {{$activity->id }} )"  class="liken" >
                                                                    <i style="font-size: 14px;" class="fa {{ $activity->isLiked ? 'fa-heart' : 'fa-heart-o' }}"></i>
                                                                    <span class="text-muted likes-count" style="color:#2388db;">{{ $activity->likes()->count() }} Like(s)</span>
                                                                </a>


                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal" data-target="#modal-lg{{$activity->id}}"><span><i class="fa fa-comment"></i></span> Comment</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>

                                                            <li class="view-btn">
                                                                <a href="#" data-toggle="modal" data-target="#modal-lg{{$activity->id}}">view</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>




                                                    <!-- ============ MODAL =================-->

                                                    <div class="modal fade" id="modal-lg{{$activity->id}}" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <div class="section-title mb-10">
                                                                        <h6 class="text-center">EVENT</h6>
                                                                        <div class="event-modal-image">
                                                                            <img class="img-responsive" src="/ActivityPics/{{$activity->image_url ? $activity->image_url : "No photo"}}" alt="">
                                                                        </div>
                                                                        <h2>{{$activity->title}}</h2>
                                                                        <p>{{$activity->body}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                                    <div class="modal-body text-center">
                                                                        <div class="col-md-4 col-sm-4 info-col">
                                                                            <i class="fa fa-calendar-o"></i>
                                                                            <br>
                                                                            <span>{{date('jS F, Y', strtotime($activity->start_date))}}</span>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 info-col">
                                                                            <i class="fa fa-clock-o"></i>
                                                                            <br>
                                                                            <span>{{date('ga', strtotime($activity->start_date))}}</span>
                                                                        </div>
                                                                        {{--<div class="col-md-4 col-sm-4 info-col">--}}
                                                                            {{--<i class="fa fa-map-pin"></i>--}}
                                                                            {{--<br>--}}
                                                                            {{--<span> Landmark Event Centre</span>--}}
                                                                        {{--</div>--}}
                                                                    </div>
                                                                </div>
                                                                <div class="modal-blog-comments mt-10 modal-body col-lg-12 col-md-12">
                                                                    <form action="{{route('activity.comment', $activity->id)}}" role="form" method="post">
                                                                        {{csrf_field()}}
                                                                    <div class="section-field col-md-10 clearfix" style="display: inline;">
                                                                        <input class="form-control" name="comment" type="text" placeholder="Post a comment..." required/>
                                                                    </div>
                                                                        <button type="submit" class="comment-btn1">SEND <i class="fa fa-send" style="font-size: 16px; margin-top: 5px; padding-left: 7px; "></i></button>
                                                                    </form>
                                                                    <h5 class="mt-10 mb-10">Comments</h5>
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
                                                                <div class="modal-footer">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>





                                                    <!-- =========== MODAL  END   ===========-->

                                                @endforeach

                                                    <div class="col-lg-12 col-md-12 mt-20 text-center">
                                                        <nav aria-label="...">
                                                            <ul class="pagination">
                                                                <li class="next" style="">
                                                                    {{$activities->links()}}
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>


                                            </div>


                                            <!-- ===========View event  Tab 2========== -->


                                            <div class="tab-pane fade" id="view_events">
                                                @foreach($events as $event)

                                                <div class="view-event">
                                                    <div class="event-activity mt-20 mb-40">
                                                        <div class="event-info">
                                                            <div class="event-image">
                                                                <img class="img-responsive" src="/ActivityPics/{{$event->image_url ? $event->image_url : "No photo"}}" alt="">
                                                            </div>
                                                            <p class="post-time">{{date('jS F, Y', strtotime($event->start_date))}} | {{date('ga', strtotime($event->start_date))}}</p>
                                                            <a href="#" class="event">
                                                                <h4>{{$event->title}}
                                                                    <span>
                                                                      <i class="fa fa-calendar event-id"></i>
                                                                    </span>
                                                                </h4>
                                                            </a>
                                                            <p>{{str_limit($event->body, $limit = 180, $end = '...')}}</p>
                                                            <ul class="mt-20">
                                                                <li>
                                                                    <i class="fa fa-calendar-o"></i>
                                                                    <span>{{date('jS F, Y', strtotime($event->start_date))}}</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-clock-o"></i>
                                                                    <span>{{date('ga', strtotime($event->start_date))}}</span>
                                                                </li>
                                                                {{--<li>--}}
                                                                    {{--<i class="fa fa-map-pin"></i>--}}
                                                                    {{--<span> Landmark Event Centre</span>--}}
                                                                {{--</li>--}}
                                                                <br>

                                                            </ul>
                                                        </div>
                                                        <div class="activity-action mt-10">
                                                            <ul>

                                                                <li>
                                                                    <a href="#" data-toggle="modal" data-target="#modal-lg{{$event->id}}">
                                                                      <span>
                                                                        <i class="fa fa-comment"></i>
                                                                      </span> Comment</a>
                                                                </li>

                                                                <li class="view-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#modal-lg{{$event->id}}">view</a>

                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="modal-lg{{$event->id}}" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <div class="section-title mb-10">
                                                                        <h6 class="text-center">EVENT</h6>
                                                                        <div class="event-modal-image">
                                                                            <img class="img-responsive" src="/ActivityPics/{{$event->image_url ? $event->image_url : "No photo"}}" alt="">
                                                                        </div>
                                                                        <h2>{{$event->title}}</h2>
                                                                        <p>{{$event->body}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                                    <div class="modal-body text-center">
                                                                        <div class="col-md-4 col-sm-4 info-col">
                                                                            <i class="fa fa-calendar-o"></i>
                                                                            <br>
                                                                            <span>{{date('jS F, Y', strtotime($event->start_date))}}</span>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 info-col">
                                                                            <i class="fa fa-clock-o"></i>
                                                                            <br>
                                                                            <span>{{date('ga', strtotime($event->start_date))}}</span>
                                                                        </div>
                                                                        {{--<div class="col-md-4 col-sm-4 info-col">--}}
                                                                        {{--<i class="fa fa-map-pin"></i>--}}
                                                                        {{--<br>--}}
                                                                        {{--<span> Landmark Event Centre</span>--}}
                                                                        {{--</div>--}}
                                                                    </div>
                                                                </div>
                                                                <div class="modal-blog-comments mt-10 modal-body col-lg-12 col-md-12">
                                                                    <form action="{{route('activity.comment', $event->id)}}" role="form" method="post">
                                                                        {{csrf_field()}}
                                                                        <div class="section-field col-md-10 clearfix" style="display: inline;">
                                                                            <input class="form-control" name="comment" type="text" placeholder="Post a comment..." required/>
                                                                        </div>
                                                                        <button type="submit" class="comment-btn1">SEND <i class="fa fa-send" style="font-size: 16px; margin-top: 5px; padding-left: 7px; "></i></button>
                                                                    </form>
                                                                    <h5 class="mt-10 mb-10">Comments</h5>
                                                                    @foreach($event->activity_comments as $comment)

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
                                                                <div class="modal-footer">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                @endforeach


                                            </div>




                                            <!-- ===========Create event  Tab 2========== -->

                                            <!-- ===============start of Meet-up activity tab ============= -->



                                            <div class="tab-pane fade" id="meetUps">
                                                @foreach($meetups as $meetup)


                                                <div class="view-event">
                                                    <div class="event-activity mt-20 mb-40">
                                                        <div class="event-info">
                                                            <p class="post-time">{{date('jS F, Y', strtotime($meetup->start_date))}} | {{date('ga', strtotime($meetup->start_date))}}</p>
                                                            <a href="#" class="event">
                                                                <h4>{{$meetup->title}}
                                                                    <span>
                                                                      <i class="fa fa-users event-id"></i>
                                                                    </span>
                                                                </h4>
                                                            </a>
                                                            <p>{{str_limit($meetup->body, $limit = 180, $end = '...')}}</p>
                                                            <ul class="mt-20">
                                                                <li> <i class="fa fa-clock-o"></i>
                                                                    <span>{{date('jS F, Y', strtotime($meetup->start_date))}}, </span>
                                                                    <span>{{date('ga', strtotime($meetup->start_date))}}</span>
                                                                </li>
                                                                <br>

                                                            </ul>
                                                        </div>
                                                        <div class="activity-action mt-10">
                                                            <ul>

                                                                <li>
                                                                    <a href="#" data-toggle="modal" data-target="#modal-lg{{$meetup->id}}">
                                                                      <span>
                                                                        <i class="fa fa-comment"></i>
                                                                      </span> Comment</a>
                                                                </li>

                                                                <li class="view-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#modal-lg{{$meetup->id}}">view</a>

                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    {{--</div>--}}
                                                </div>

                                                <div class="modal fade" id="modal-lg{{$meetup->id}}" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <div class="section-title mb-10">
                                                                        <h6 class="text-center">MeetUp</h6>
                                                                        <div class="event-modal-image">
                                                                            <img class="img-responsive" src="/ActivityPics/{{$meetup->image_url ? $meetup->image_url : "No photo"}}" alt="">
                                                                        </div>
                                                                        <h2>{{$meetup->title}}</h2>
                                                                        <p>{{$meetup->body}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                                    <div class="modal-body text-center">
                                                                        <div class="col-md-4 col-sm-4 info-col">
                                                                            <i class="fa fa-calendar-o"></i>
                                                                            <br>
                                                                            <span>{{date('jS F, Y', strtotime($meetup->start_date))}}</span>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 info-col">
                                                                            <i class="fa fa-clock-o"></i>
                                                                            <br>
                                                                            <span>{{date('ga', strtotime($meetup->start_date))}}</span>
                                                                        </div>
                                                                        {{--<div class="col-md-4 col-sm-4 info-col">--}}
                                                                        {{--<i class="fa fa-map-pin"></i>--}}
                                                                        {{--<br>--}}
                                                                        {{--<span> Landmark Event Centre</span>--}}
                                                                        {{--</div>--}}
                                                                    </div>
                                                                </div>
                                                                <div class="modal-blog-comments mt-10 modal-body col-lg-12 col-md-12">
                                                                    <form action="{{route('activity.comment', $meetup->id)}}" role="form" method="post">
                                                                        {{csrf_field()}}
                                                                        <div class="section-field col-md-10 clearfix" style="display: inline;">
                                                                            <input class="form-control" name="comment" type="text" placeholder="Post a comment..." required/>
                                                                        </div>
                                                                        <button type="submit" class="comment-btn1">SEND <i class="fa fa-send" style="font-size: 16px; margin-top: 5px; padding-left: 7px; "></i></button>
                                                                    </form>
                                                                    <h5 class="mt-10 mb-10">Comments</h5>
                                                                    @foreach($meetup->activity_comments as $comment)

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
                                                                <div class="modal-footer">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach

                                            </div>




                                            <!-- ========end of meet-up activity tab ============== -->

                                            <!-- ===============start of project activity tab ============= -->

                                            <div class="tab-pane fade" id="projects">
                                                @foreach($projects as $project)


                                                <div class="view-event">
                                                    <div class="event-activity mt-20 mb-40">
                                                        <div class="event-info">
                                                            <p class="post-time">{{date('jS F, Y', strtotime($project->start_date))}} | {{date('ga', strtotime($project->start_date))}}</p>
                                                            <a href="#" class="event">
                                                                <h4>{{$project->title}}
                                                                    <span>
                                                                      <i class="fa fa-folder event-id"></i>
                                                                    </span>
                                                                </h4>
                                                            </a>
                                                            <p>{{str_limit($project->body, $limit = 180, $end = '...')}}</p>
                                                            <ul class="mt-20">
                                                                <li>
                                                                    <span><strong>Start date:</strong> {{date('jS F, Y', strtotime($project->start_date))}} </span>
                                                                    <span><strong>End date:</strong> {{date('jS F, Y', strtotime($project->start_date))}}</span>
                                                                </li>
                                                            </ul>
                                                            {{--<p><strong>Category:</strong> Business, Start Up, Phamarcy</p>--}}
                                                        </div>
                                                        <div class="activity-action mt-10">
                                                            <ul>

                                                                <li>
                                                                    <a href="#" data-toggle="modal" data-target="#modal-lg{{$project->id}}">
                                                                      <span>
                                                                        <i class="fa fa-comment"></i>
                                                                      </span> Comment</a>
                                                                </li>

                                                                <li class="view-btn">
                                                                    <a href="#" data-toggle="modal" data-target="#modal-lg{{$project->id}}">view</a>

                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="modal fade" id="modal-lg{{$project->id}}" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <div class="section-title mb-10">
                                                                        <h6 class="text-center">MeetUp</h6>
                                                                        <div class="event-modal-image">
                                                                            <img class="img-responsive" src="/ActivityPics/{{$project->image_url ? $project->image_url : "No photo"}}" alt="">
                                                                        </div>
                                                                        <h2>{{$project->title}}</h2>
                                                                        <p>{{$project->body}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                                    <div class="modal-body text-center">
                                                                        <div class="col-md-4 col-sm-4 info-col">
                                                                            <i class="fa fa-calendar-o"></i>
                                                                            <br>
                                                                            <span>{{date('jS F, Y', strtotime($project->start_date))}}</span>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 info-col">
                                                                            <i class="fa fa-clock-o"></i>
                                                                            <br>
                                                                            <span>{{date('ga', strtotime($project->start_date))}}</span>
                                                                        </div>
                                                                        {{--<div class="col-md-4 col-sm-4 info-col">--}}
                                                                        {{--<i class="fa fa-map-pin"></i>--}}
                                                                        {{--<br>--}}
                                                                        {{--<span> Landmark Event Centre</span>--}}
                                                                        {{--</div>--}}
                                                                    </div>
                                                                </div>
                                                                <div class="modal-blog-comments mt-10 modal-body col-lg-12 col-md-12">
                                                                    <form action="{{route('activity.comment', $project->id)}}" role="form" method="post">
                                                                        {{csrf_field()}}
                                                                        <div class="section-field col-md-10 clearfix" style="display: inline;">
                                                                            <input class="form-control" name="comment" type="text" placeholder="Post a comment..." required/>
                                                                        </div>
                                                                        <button type="submit" class="comment-btn1">SEND <i class="fa fa-send" style="font-size: 16px; margin-top: 5px; padding-left: 7px; "></i></button>
                                                                    </form>
                                                                    <h5 class="mt-10 mb-10">Comments</h5>
                                                                    @foreach($project->activity_comments as $comment)

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
                                                                <div class="modal-footer">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                @endforeach


                                            </div>



                                            <!-- ========end of project activity tab ============== -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- =========== right side bar ========== -->
                        <div class="col-lg-3 col-md-3 ">
                            {{--<div class="container">--}}

                            @include('includes.sidebar')

                            {{--</div>--}}

                        </div>



                        <!-- ======================
                                  grid-layout -->

                    </div>

                   {{--here--}}


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