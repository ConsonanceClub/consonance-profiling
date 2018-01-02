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


					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

						<input id="sign-password"
							   type="password"
							   class="form-control input-lg"
							   name="password" required>

						@if ($errors->has('password'))
							<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
						@endif
					</div>


					<div class="checkbox">
						<label>
							<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me?
						</label>
					</div>


					<div class="form-group text-right">
						<button class="btn btn-primary" type="submit">
							Sign In
						</button>

						<a class="btn btn-link" href="{{ route('password.request') }}">
							Forgot Your Password?
						</a>
					</div>

				</form>
			</div>

		</div>



		<div class="col-sm-offset-1"></div>
	</div>

@endsection

