    {{--<div class="row">--}}



        <div class="sidebar-widget">
            <h6 class="mt-40 mb-10">Recent Activities </h6>
            @foreach($activiti as $activity)
            <div class="recent-event">
                <div class="recent-event-image">
                    <img class="img-responsive" src="/ActivityPics/{{$activity->image_url ? $activity->image_url : "No photo"}}" alt="">
                </div>
                <div class="recent-event-info">
                    <a href="#"><strong>{{$activity->title}}</strong></a>
                    <span>
                        <i class="fa fa-calendar"></i>
                        {{date('d-F-Y', strtotime($activity->start_date))}}
                      </span>
                    <span class="view-events"><a href="{{route('activity')}}">view events</a></span>
                </div>
            </div>
            @endforeach

        </div>

        <div class="sidebar-widget">
            <h6 class="mt-40 mb-20">Recent Posts </h6>
            @foreach($postsAll as $post)
                <div class="recent-post clearfix">
                    <div class="recent-post-image">
                        <img class="img-responsive" src="/GroupPostPics/{{$post->image_url ? $post->image_url : "No photo"}}" alt="">
                    </div>
                    <div class="recent-post-info">
                        <a href="{{route('postn.show', $post->id)}}">{{$post->title}}</a>
                        <span>
                                            <i class="fa fa-calendar-o"></i> {{$post->created_at->toFormattedDateString()}}</span>
                    </div>
                </div>
            @endforeach
        </div>
    {{--</div>--}}
