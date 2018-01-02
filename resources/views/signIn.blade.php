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

				<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input id="sign-email"
                               type="email"
                               placeholder="Email"
                               class="form-control input-lg"
                               name="email"
                               value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        @endif
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

	@if(!Auth::check())
		<div class="col-sm-5">

			<div class="panel panel-default">

				<div class="panel-body padding-20">
					<h3 class="text-bold">Personal Information</h3>

					<form class="form-horizontal" method="POST" action="{{ route('register') }}">
						{{ csrf_field() }}
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<input id="name" type="text"
								   placeholder="First Name"
								   class="form-control input-lg"
								   name="name"
								   value="{{ old('name') }}" required autofocus>

							@if ($errors->has('name'))
								<span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
							@endif
						</div>

						<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
							<input id="last_name" type="text"
								   placeholder="Surname"
								   class="form-control input-lg"
								   name="last_name"
								   value="{{ old('name') }}" required autofocus>

							@if ($errors->has('name'))
								<span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
							@endif
						</div>


						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

								<input id="email" type="email" placeholder="Email" class="form-control input-lg" name="email" value="{{ old('email') }}" required>

								@if ($errors->has('email'))
									<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif

						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<input type="password"
							       name="password"
								   id="password"
							       placeholder="Password"
							       class="form-control input-lg" required>
							@if ($errors->has('password'))
								<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
							@endif
						</div>

						<div class="form-group">
							<input type="password"
								   id="password-confirm"
								   placeholder="Confirm Password"
								   class="form-control input-lg"
								   name="password_confirmation" required>

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
		@endif
		<div class="col-sm-offset-1"></div>
	</div>

@endsection

