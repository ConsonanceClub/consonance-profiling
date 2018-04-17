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

{{--set Title--}}
@section('title', 'Sign In')

@section('styles')

<!-- feature-text -->
<link rel="stylesheet" type="text/css" href="{{asset('css/shortcodes/feature-text.css')}}" />

@endsection


{{--set content--}}
@section('content')
<div class="wrapper">
  
  <section class="page-section-ptb" style="background-image: url(/images/12.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="signinHeader col-md-6 col-md-offset-3">
            <div class="group-title mb-10">
              <h4 class="title-crumb">SIGN IN</h4>
            </div>
            <h5 class="mt-20">Sign In With:</h5>
          </div>

          <div id="boxes" class="col-md-6 col-md-offset-3">
            <div class="box">
              <div class="col-lg-6 col-md-6 col-sm-6 mt-30">
                <div class="feature-text square border box-shadow">
                  <div class="feature-icon">
                    <span class="social-icon medium color-hover">
                      <a href="{{route('social.auth', ['driver' => 'github'])}}"><i class="fa fa-github"></i></a>
                    </span>
                  </div>
                  <div class="feature-info">
                    <a href="{{route('social.auth', ['driver' => 'github'])}}"><h5 class="text-black">GitHub</h5></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="col-lg-6 col-md-6 col-sm-6 mt-30">
                <div class="feature-text square border box-shadow linked">
                  <div class="feature-icon">
                    <span class="social-icon social-linkedin">
                      <a href="{{route('social.auth', ['driver' => 'linkedin'])}}"><i class="fa fa-linkedin"></i></a>
                    </span>
                  </div>
                  <div class="feature-info">
                    <a href="{{route('social.auth', ['driver' => 'linkedin'])}}"><h5 class="text-black">Linked<span class="in-box">in</span></h5></a>
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

