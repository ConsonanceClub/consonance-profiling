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
@section('title', 'Signup')

{{--set content--}}
@section('content')

	<div class="row">
		<div class="col-sm-6">

			<h3>Sign Up</h3>
			<hr>
			<form action="">
				<div class="form-group">
					<input type="text"
					       name="email"
					       placeholder="example@gmail.com"
					       class="form-control input-lg">
				</div>

				<div class="form-group">
					<input type="text"
					       name="password"
					       placeholder="e$r45EfnD$%"
					       class="form-control input-lg">
				</div>

				<div class="form-group text-right">
					<button class="btn btn-primary btn-lg">
						LOG IN
					</button>
				</div>

			</form>
		</div>
		<div class="col-sm-6"></div>
	</div>


@endsection

