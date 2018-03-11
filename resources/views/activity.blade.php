<?php
/**
 *
 * Description
 *
 * @package        Consonance
 * @category       Source
 * @author         Ani Kenechi <anikenechi.c@gmail.com> {@link http://anikenechi.remote.com}
 * @date           2018-02-26
 *
 */
?>

{{--use 3 column Layout--}}
@extends('Layouts.threeColumn')

{{--set Title--}}
@section('title', 'Activity')

{{--set content--}}
@section('content')
	<div class="row col-lg-6 col-lg-offset-3">

		<h4>Make a post</h4>

		<form class="form-horizontal" method="POST" action="">
			{{ csrf_field() }}
			<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				<input id="name" type="text"
					   placeholder="First Name"
					   class="form-control input-lg"
					   name="name"
					   value="{{ old('name') }}" required autofocus>

			</div>


			<div class="form-group col-lg-12">
				<label>Message</label>
				<textarea rows="10" class="form-control" placeholder="Place message Here....." id="description" name="description" required></textarea>
			</div>



			<div class="form-group text-right">
				<button class="btn btn-link" type="submit">
					SIGN UP <i class="fa fa-angle-right fa-fw fa-2x text-bold"
							   style="vertical-align: -15%;"></i>
				</button>
			</div>

		</form>

	</div>
	<section id="activities">


		<div class="row">


			<div class="col-sm-6">


				<div class="activity">
					<div class="gfx img-responsive">
						<img data-src="holder.js/270x150?random=yes" alt="Activity">
						<span class="category">Software</span>
					</div>
					<h3 class="heading">
						<a href="#"> The Big Bang Theory </a>
					</h3>
					<p class="summary">
						kjhsbdfinoinsfd sdiufnsoiufn isufnoinsf isunfiulsf siufb sfiulnbsiuf siuliufnusinfved liaucfsniu
						feiffdindiu iduiud iduvn dilvund vdsuliv dilundv ilunsdfv iundv iolndv isunondsv iulndv ilundv
						ikjnviudsnvuid ionsf oidunf oiundf oif foifo voindvgjdn siunhs;pomfriv ojinfv ojuinedv jiondsvo
						fjfnuisdf iufnisn siufnuois fiundv iln fv jdinbfv fiuonvdfvkd uoinv iunsbuoidnfoics diunvfv oif
						dfhbidsfvio doiunv iounsfv jiounfuisdoinfv iunv oiunviodfnv iounsduinuief tiunbsudvnuindf isun
						kjibdfivnbiusdfv inbvs diusoiufv isbnicundsr vioubdnsviuonancf divubis siufdnsfc fiunv dsciusfv
						siunuisdnv iunfv iunvd diunbsac isua vfiunbv iufv siuv iuv diubdicunbosd viubvindsv ijunufiv di
						sdfibsniuv iunvdf voiunsdvsinfv......
					</p>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="activity">
					<div class="gfx img-responsive">
						<img data-src="holder.js/270x150?random=yes" alt="Activity">
						<span class="category">Software</span>
					</div>
					<h3 class="heading">
						<a href="#"> Just a funny header, seemingly!!</a>
					</h3>
					<p class="summary">
						kjhsbdfinoinsfd sdiufnsoiufn isufnoinsf isunfiulsf siufb sfiulnbsiuf siuliufnusinfved
						liaucfsniu
						feiffdindiu iduiud iduvn dilvund vdsuliv dilundv ilunsdfv iundv iolndv isunondsv iulndv
						ilundv
						ikjnviudsnvuid ionsf oidunf oiundf oif foifo voindvgjdn siunhs;pomfriv ojinfv ojuinedv
						jiondsvo
						fjfnuisdf iufnisn siufnuois fiundv iln fv jdinbfv fiuonvdfvkd uoinv iunsbuoidnfoics diunvfv
						oif
						dfhbidsfvio doiunv iounsfv jiounfuisdoinfv iunv oiunviodfnv iounsduinuief tiunbsudvnuindf
						isun
						kjibdfivnbiusdfv inbvs diusoiufv isbnicundsr vioubdnsviuonancf divubis siufdnsfc fiunv
						dsciusfv
						siunuisdnv iunfv iunvd diunbsac isua vfiunbv iufv siuv iuv diubdicunbosd viubvindsv ijunufiv
						di
						sdfibsniuv iunvdf voiunsdvsinfv......
					</p>
				</div>

			</div>

	</section>
@endsection

