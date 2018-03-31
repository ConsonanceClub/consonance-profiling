<?php
/**
 *
 * Description
 *
 * @package        Consonance
 * @category       Source
 * @author         Ashinze Ekene <ashinzekene@gmail.com> {@link http://github.com/ashinzekene}
 * @date           2018-02-16
 *
 */
?>

{{--use Default Layout--}}
@extends('Layouts.default')

@push('scripts')
<link rel="stylesheet" href="/css/profile.css">
@endpush
{{--set Title--}}
@section('title', 'Profile')

{{--set content--}}
@section('content')
	<div class="row">
		<div class="col-md-offset-4 col-sm-6 col-md-4">
                <h3 class="text-white text-uppercase"><strong>Personal Information</strong></h3>
                <div class="row">
                    <div class="p-info form-group col-lg-12">
                        <input type="text" placeholder="Your name" value="{{Auth::user()->first_name . ' ' .Auth::user()->last_name  }}"
                               class="form-control text-center padding-20" id="name">
                    </div>
                    <div class="p-info form-group col-lg-12">
                        @if(Auth::user()->role_id == 1)
                            <input type="text" placeholder="Position" id="position" value="Admin" class="form-control text-center padding-20">
                        @else
                            <input type="text" placeholder="Position" id="position"  value="Member" class="form-control text-center padding-20">
                        @endif

                    </div>
                    <div class="p-info form-group col-lg-12">
                        <input type="text" placeholder="Community Role" id="role" value="Active Contributor" class="form-control text-center padding-20">
                    </div>
                    <div class="p-info form-group col-lg-12">
                        <input type="text" placeholder="Conact Info" id="email" value="{{Auth::user()->email}}" class="form-control text-center padding-20">
                    </div>
                    <!--
                    <div class="p-info form-group col-lg-12">
                        <input type="text" placeholder="Projects" class="form-control text-center padding-20">
                    </div>
                    <div class="p-info form-group col-lg-12">
                        <input type="text" placeholder="About Me" class="form-control text-center padding-20">
                    </div>
                    -->
                </div>
		</div>

		<!-- Alternate sign in-->
		<div class="col-sm-6 col-md-4">
            <h3 class="text-white text-uppercase"><strong>BIO</strong></h3>
            <div class="bio-text">
                <textarea class="form-control" name="bio"  id="profile-bio" cols="30" rows="10">{{Auth::user()->short_bio}}
                </textarea>
            </div>
            <h3 class="text-white text-uppercase"><strong>SCHOOL</strong></h3>
            <div class="bio-text">
                <input type="text" id="school" value="insert school name" class="form-control padding-20 text-center">
            </div>
            <h3 class="text-white text-uppercase"><strong>INTRESTS</strong></h3>
            {{$count = 0}}

                <div class="bio-text row margin-bottom-10">
                    @foreach(\App\Models\Interest::all() as  $key => $value)
                        <div class="col-xs-2 col-sm-2 s-boxes "><a>{{$value->name}}</a>
                            <input type="checkbox" class="interest-cbox" name="" id="{{$value->name}}">
                        </div>
                    @endforeach
                </div>
            <button class="button" onclick="updateProfile()" style="float: right;
                                        background-color: #555555c9;
                                        border: none;
                                        color: white;
                                        padding: 15px 32px;
                                        text-align: center;
                                        text-decoration: none;
                                        display: inline-block;
                                        font-size: 16px;
                                        margin: 4px 2px;
                                        cursor: pointer;">Save</button>
		</div>

	</div>

@endsection

