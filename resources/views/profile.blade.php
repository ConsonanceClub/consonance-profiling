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
                        <input type="text" placeholder="John Doe" value="{{Auth::user()->first_name . ' ' .Auth::user()->last_name  }}"
                               class="form-control text-center padding-20">
                    </div>
                    <div class="p-info form-group col-lg-12">
                        @if(Auth::user()->role_id == 1)
                            <input type="text" placeholder="Position" value="Admin" class="form-control text-center padding-20">
                        @else
                            <input type="text" placeholder="Position" value="Member" class="form-control text-center padding-20">
                        @endif

                    </div>
                    <div class="p-info form-group col-lg-12">
                        <input type="text" placeholder="Community Role" value="Active Contributor" class="form-control text-center padding-20">
                    </div>
                    <div class="p-info form-group col-lg-12">
                        <input type="text" placeholder="Conact Info" value="{{Auth::user()->email}}" class="form-control text-center padding-20">
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
                <textarea class="form-control" name="bio" id="profile-bio" cols="30" rows="10">{{Auth::user()->short_bio}}
                </textarea>
            </div>
            <h3 class="text-white text-uppercase"><strong>SCHOOL</strong></h3>
            <div class="bio-text">
                <input type="text" value="insert school name" class="form-control padding-20 text-center">
            </div>
            <h3 class="text-white text-uppercase"><strong>INTRESTS</strong></h3>            
            <div class="bio-text row margin-bottom-10">
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
            </div>
            <div class="bio-text row margin-bottom-10">
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
            </div>
            <div class="bio-text row margin-bottom-10">
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
                <div class="col-xs-2 col-sm-2 s-boxes padding-horizontal-5">
                    <input type="checkbox" class="interest-cbox" name="" id="">
                </div>
            </div>

		</div>
	</div>

@endsection

