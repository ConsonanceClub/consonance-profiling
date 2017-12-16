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
		<div class="col-sm-offset-1 col-sm-5">

			<div class="padding-20">
				<h3 class="text-bold">Sign In</h3>

				<form action="">
					<div class="form-group">
						<input type="text"
						       name="email"
						       placeholder="Email"
						       class="form-control input-lg">
					</div>

					<div class="form-group">
						<input type="text"
						       name="password"
						       placeholder="Password"
						       class="form-control input-lg">
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox"> Remember Me?
						</label>
					</div>

					<div class="form-group text-right">
						<button class="btn btn-primary" type="submit">
							Sign In
						</button>
					</div>

				</form>
			</div>

		</div>

		<div class="col-sm-5">

			<div class="panel panel-default">

				<div class="panel-body padding-20">
					<h3 class="text-bold">Personal Information</h3>

					<form action="">
						<div class="form-group">
							<input type="text"
							       name="first_name"
							       placeholder="First Name"
							       class="form-control input-lg">
						</div>

						<div class="form-group">
							<input type="text"
							       name="last_name"
							       placeholder="Surname"
							       class="form-control input-lg">
						</div>

						<div class="form-group">
							<input type="text"
							       name="email"
							       placeholder="Email"
							       class="form-control input-lg">
						</div>

						<div class="form-group">
							<input type="text"
							       name="password"
							       placeholder="Password"
							       class="form-control input-lg">
						</div>

						<div class="form-group text-right">
							<button class="btn btn-link" type="submit">
								SIGN UP <i class="fa fa-angle-right fa-fw fa-2x text-bold"
								        style="vertical-align: -15%;"></i>
							</button>
						</div>

					</form>
				</div>
			</div>

		</div>
		<div class="col-sm-offset-1"></div>
	</div>

@endsection

