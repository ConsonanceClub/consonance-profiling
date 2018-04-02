<?php
/**
 *
 * Description
 *
 * @package        Consonance
 * @category       Source
 * @author         Michael Akanji <matscode@gmail.com> {@link http://michaelakanji.com}
 * @date           2017-10-22
 *
 */

?>

<nav class="navbar navbar-inverse navbar-fixed-top" style="padding: 20px 0px">

	<div class="container-fluid">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
			        aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand row" href="/">
				<img class="col-sm-2 left" src="/images/logo-146x150.png" alt="Consonance-logo">
				<h1 class="cons col-sm-8 right text-white"><b>Consonance</b></h1>
				<style>
          .navbar-nav li a {
            font-family: Quicksand, 'sans-serif';
            font-size: 1.3em;
					}
					.log-out {
						font-family: Quicksand, 'sans-serif';
						font-size: 1.1em;
					}
					.log-out:hover {
						background-color: #EEE !important;
					}
          .navbar-nav li a::after {
            content: " ";
            width: 0%;
            display: block;
            padding-bottom: 10px;
            transition: 300ms all;
            border-bottom: 2px solid #EEE;
          }
          .navbar-nav li:hover a::after {
            width: 100%;
          }
          .navbar-nav li:active a::after {
            width: 100%;
          }
					@media screen and (max-width: 700px) {
						.cons {
							display: none;
						}
					}
					@media screen and (max-width: 1024px) {
						body {
							padding-top: 130px !important;
						}
					}
					@media screen and (max-width: 767px) {
						body {
							padding-top: 100px !important;
						}
					}
				</style>
			</a>
		</div>

		{{--point of navbar collapse--}}

		<div id="navbar" class="collapse navbar-collapse">
			@if(Auth::check())
			<div class="navbar-right" style="margin-right: 20px">
				<ul class="nav navbar-nav">
					<li>
						<a href="{{route('activity')}}">Activity</a>
					</li>
					<li>
						<a href="{{route('groupn.index')}}">Groups</a>
					</li>
					@if(Auth::user()->role_id == 1)
          <li>
            <a href="{{url('/members')}}">Members</a>
					</li>
					@endif
					<li><a href="">Hi {{Auth::user()->first_name}}!</a></li>
					<li>
						<a href="{{url('/profile')}}">Profile</a>
					</li>

				</ul>
        <a class="btn navbar-btn hidden-xs margin-left-20 margin-top-10 log-out" style="border-radius: 20px; padding: 10px 30px" href="{{ route('auth.logout') }}">Log Out</a>

				{{--Make visible on Mobile--}}
				<!--<a class="btn navbar-btn visible-xs" href="{{-- route('member.sign-in') --}}">SIGN IN</a>-->
				{{--Make visible on Desktop--}}
				<!--<a class="btn navbar-btn hidden-xs margin-left-20" href="{{--route('member.sign-in')--}}">SIGN IN</a>-->
			</div>


			@endif

		</div><!--/.navbar-collapse -->

	</div>

</nav>
