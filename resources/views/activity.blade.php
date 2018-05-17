<?php
/**
 *
 * Description
 *
 * @package        Consonance
 * @category       Source
 * @author         Ani Kenechi <anikenechi.c@gmail.com> {@link http://remote.com/anikenechi}
 * @date           2018-02-26
 *
 */
?>

{{--use 3 column Layout--}}
@extends('Layouts.threeColumn')

{{--set Title--}}
@section('title', 'Activity')
@push('scripts')
	<link rel="stylesheet" href="/css/activity.css">
@endpush
{{--set content--}}
@section('content')
	<div class="row">
		<div class="main-post">
			<div class="hero">
			</div>
			<div class="category">Consonance</div>
			<h1 class="post-header text-uppercase text-center">This is the header of a post</h1>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident modi dignissimos assumenda aliquam! Quidem nisi voluptas enim. Temporibus cum, iusto ipsa, laudantium dicta perferendis ut dolorem officiis sapiente dolorum quasi.
			<br>
			<br>
			Magni, tempore odio minus dicta quod ea repellendus ad minima soluta! Deleniti corporis provident asperiores atque, nam consequatur suscipit, illum a quisquam, ea facilis modi explicabo incidunt dolor ab temporibus.
			Alias officiis, deleniti, doloribus at numquam consequatur quis ipsum magnam corporis eius explicabo delectus aliquam. Optio cum non magnam ipsa dignissimos error! Cumque id facilis temporibus obcaecati, repudiandae dolorem ab!</p>
		</div>
		<div class="navigation">
			<div class="prev left">Previous Post</div>
			<div class="next right">Next Post</div>
		</div>
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

