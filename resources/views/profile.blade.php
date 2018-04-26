{{--use Default Layout--}}
@extends('Layouts.default')


{{--set Title--}}
@section('title', 'Profile')

{{--set content--}}
@section('content')
    
    <div class="wrapper">
    
        <section class="user-profile page-section-ptb" style="background-image: url(/images/12.jpg);">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="profile-img col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="img-background">
                                        <div class="user-img mb-20 text-center" style="background-image: url(/images/13.jpg)">
                                            <img class="img-responsive mt-40 mb-40 text-center" src="{{Auth::user()->avatar}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="personal-info col-md-4 mb-20">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center mb-20">Personal Information</h3>
                                    <form>
                                        <div class="contact-form dark-form clearfix">
                                            <div>
                                                <input id="name" type="text" placeholder="Name*" class="form-control text-center"  value="{{Auth::user()->first_name . ' ' .Auth::user()->last_name}}">
                                            </div>
                                            <div>
                                            @if(Auth::user()->role_id == 1)
                                                <input id="position" type="text" placeholder="Position*" readonly value="Admin" class="form-control text-center">
                                            @else
                                                <input id="position" type="text" placeholder="Position*" readonly value="Member" class="form-control text-center">
                                            @endif
                                            </div>
                                            <div>
                                                <input id="com-role" type="text" placeholder="Community role*" class="form-control text-center" value="Active Contributor">
                                            </div>
                                            <div>
                                                <input id="email" type="email" placeholder="Email*" readonly class="form-control text-center" name="email" value="{{Auth::user()->email}}">
                                            </div>
                                            <div>
                                                <input id="profession" type="text" placeholder="Profession*" class="form-control text-center" name="profession" value="{{Auth::user()->profession}}">
                                            </div>
                                            <div>
                                                <input id="address" type="text" placeholder="Address*" class="form-control text-center" name="address" value="{{Auth::user()->address}}">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="user-bio col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center mb-20">Bio</h3>
                                    <form class="form-horizontal">
                                        <div class="contact-form dark-form clearfix">
                                            <div class="textarea">
                                                <textarea class="form-control input-message" placeholder="Bio*" rows="7" name="message">{{Auth::user()->short_bio}}</textarea>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <h3 class="text-center mt-20 mb-20">School</h3>
                                        <form class="form-horizontal">
                                            <div class="contact-form dark-form clearfix">
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="School attended*" class="form-control text-center" name="school" value="{{Auth::user()->school}}">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="row">
                                        <h3 class="text-center mt-20 mb-20">Interests</h3>
                                        <div class="form-horizontal" >
                                            <div class="remember-checkbox mb-30">
                                                @foreach(\App\Models\Interest::all() as $key => $value)
                                                <input type="checkbox" class="form-control" name="{{(in_array($value->name, \App\Models\Profile::interests()))?'checked':''}}" id="{{$value->name}}">
                                                <label class="text-dark" for="{{$value->name}}"> <a href="javascript:void(0)">{{$value->name}}</a></label>
                                                @endforeach
                                            </div>
                                            <div class="mt-20 text-center">
                                                <div class="col-md-12">
                                                    <button id="save" name="save" value="Save" class="button" onclick="updateProfile()">SAVE
                                                    </button>
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


<!--====jquery====-->
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/plugins-jquery.js"></script>
<script type="text/javascript">var plugin_path = 'js/';</script>
<script type="text/javascript" src="js/custom.js"></script>

@endsection

