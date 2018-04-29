@extends('Layouts.default')

{{--set Title--}}
@section('title', 'Consonance - Post')

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

    <link rel="stylesheet" type="text/css" href="{{asset('css/prism.css')}}">

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
                            <h4 class="title-crumb">BLOG</h4>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="groups.html">Group</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Front-end</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Post</li>
                                </ol>
                            </div>
                        </div>


                    </div>

                    <!--======================
                        post layout -->

                    <div class="blog-post-wide col-md-9 mt-10">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="blog-entry mb-50">
                                    <div class="entry-image clearfix">
                                        <img class="img-responsive" src="/GroupPostPics/{{$post->image_url ? $post->image_url : "No photo"}}" alt="">
                                    </div>
                                    <div class="blog-detail">
                                        <div class="entry-title mb-10">
                                            <a href="#">{{$post->title}}</a>
                                        </div>
                                        <div class="entry-meta mb-10"  id="post-{{ $post->id }}">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-user"></i> {{$post->user->first_name}}
                                                </li>
                                                <li>
                                                    <input type="hidden" name="url" value="{{ route('post.like', [ 'id' => $post->id ]) }}">

                                                    <a href="javascript:;" onclick=" toggleLike( {{$post->id }} )"  class="liken" >
                                                        <i style="font-size: 16px" class="fa {{ $post->isLiked ? 'fa-heart' : 'fa-heart-o' }}"></i>
                                                        <span class="text-muted likes-count">{{ $post->likes()->count() }} Like(s)</span>
                                                    </a>

                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-calendar-o"></i>{{$post->created_at->toFormattedDateString()}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            {!! htmlspecialchars_decode($post->description) !!}
                                            <div class="entry-share clearfix">
                                                <div class="social list-style-none pull-right">
                                                    <strong>Share : </strong>
                                                    <ul>
                                                        <li>
                                                            <a href="https://www.facebook.com/sharer/sharer.php?u=consonance.club/group/post/{{$post->slug}}">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        {{--<li>--}}
                                                            {{--<a href="#">--}}
                                                                {{--<i class="fa fa-twitter"></i>--}}
                                                            {{--</a>--}}
                                                        {{--</li>--}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- =============
                                      comment section -->

                                    <div class="comment-section" style="padding: 15px; ">
                                        <div class="comment-title">
                                            <h5>Comments</h5>
                                        </div>

                                        <div class="blog-comments mt-40">
                                            @foreach($post->post_comments as $comment)
                                                <div class="comments-1">
                                                    <div class="comments-info">
                                                        <h4 class="comment-title">{{$comment->user->first_name}}
                                                            <span>{{$comment->created_at->toFormattedDateString()}}</span>
                                                        </h4>

                                                        <p>{{$comment->comment}}</p>
                                                    </div>
                                                    @endforeach
                                                </div>



                                        </div>


                                        <!-- =======================
                                          Leave a reply ========================= -->

                                        <br/>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-md-offset-2">
                                                <h3 class="comment-title mb-30">Leave a Reply </h3>
                                                <div class="row">

                                                    <div class="col-lg-9 col-md-9">
                                                        <div id="formmessage">Success/Error Message Goes Here</div>
                                                    </div>

                                                    <form  class="gray-form" role="form" action="{{route('postn.comment', $post->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <input type="text" value="{{auth()->guest() ? '' : auth()->user()->first_name}}" class="form-control" placeholder="Your Name" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <input type="email" value="{{auth()->guest() ? '' : auth()->user()->email}}" class="form-control" placeholder="Email Address" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9">
                                                            <div class="form-group">
                                                                <textarea name="comment" class="form-control" rows="3" placeholder="message"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9">
                                                            <button id="submit" name="submit" type="submit" value="Send" class="button-1">
                                                                <span>Send Reply</span>
                                                            </button>
                                                            <hr class="mt-30">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>


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
    <script type="text/javascript" src="{{asset('js/prism.js')}}"></script>

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