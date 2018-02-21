<?php
/**
 *
 * Description
 *
 * @package        Consonance
 * @category       Source
 * @author         Michael Akanji <matscode@gmail.com> {@link http://michaelakanji.com}
 * @date           2017-10-18
 *
 */
?>

{{--use Default Layout--}}
@extends('Layouts.default')

@push('scripts')
<link rel="stylesheet" href="/css/profile.css">
</style>
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
                        <input type="text" placeholder="John Doe" class="form-control text-center padding-20">
                    </div>
                    <div class="p-info form-group col-lg-12">
                        <input type="text" placeholder="Position" class="form-control text-center padding-20">
                    </div>
                    <div class="p-info form-group col-lg-12">
                        <input type="text" placeholder="Community Role" class="form-control text-center padding-20">
                    </div>
                    <div class="p-info form-group col-lg-12">
                        <input type="text" placeholder="Conact Info" class="form-control text-center padding-20">
                    </div>
                    <div class="p-info form-group col-lg-12">
                        <input type="text" placeholder="Projects" class="form-control text-center padding-20">
                    </div>
                    <div class="p-info form-group col-lg-12">
                        <input type="text" placeholder="About Me" class="form-control text-center padding-20">
                    </div>
                </div>
		</div>

		<!-- Alternate sign in-->
		<div class="col-sm-6 col-md-4">
            <h3 class="text-white text-uppercase"><strong>BIO</strong></h3>
            <div class="bio-text">
                <textarea class="form-control" name="bio" id="profile-bio" cols="30" rows="10">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex delectus quasi qui, exercitationem quod eos suscipit rerum dolores illum repellat dolore ad. Ducimus voluptate, dolorem excepturi esse cumque autem atque.Sunt ad praesentium quasi ut saepe aut. Sint, cum nostrum dolores deserunt tempore perferendis exercitationem aspernatur eaque ratione! Fugit enim quos in vitae eos facilis assumenda officiis beatae, voluptatum eveniet.
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

