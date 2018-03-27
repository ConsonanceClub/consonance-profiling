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

<nav class="navbar navbar-inverse navbar-fixed-top">

	<div class="container">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
			        aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand row" href="/">
				<img class="col-sm-2 left" src="/images/logo-146x150.png" alt="Consonance-logo">
				<h2 class="cons col-sm-8 right text-white"><b>Consonance</b></h2>
				<style>
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
							padding-top: 70px !important;
						}
					}
				</style>
			</a>
		</div>

		{{--point of navbar collapse--}}
		<div id="navbar" class="collapse navbar-collapse">

			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<li>
						<a href="{{route('activity')}}">ACTIVITY</a>
					</li>
					<li>
						<a href="#">BLOG</a>
					</li>
					<li>
						<a href="{{route('groupn.index')}}">GROUPS</a>
					</li>
					<li>
						<a href="{{url('/members')}}">MEMBERS</a>
					</li>
					<li>
						<a href="#">ABOUT US</a>
					</li>
				</ul>

				{{--Make visible on Mobile--}}
				<a class="btn navbar-btn visible-xs" href="{{ route('member.sign-in') }}">SIGN IN</a>
				{{--Make visible on Desktop--}}
				<a class="btn navbar-btn hidden-xs margin-left-20" href="{{ route('member.sign-in') }}">SIGN IN</a>
			</div>

		</div><!--/.navbar-collapse -->

	</div>

</nav>
