<?php
/**
 *
 * Description
 *
 * @package        Consonance
 * @category       Source
 * @author         Ashinze Ekene <ashinzekene@gmail.com> {@link http://github.com/ashinzekene}
 * @date           2018-02-16
 *
 */
?>

{{--use Default Layout--}}
@extends('Layouts.default')

@push('scripts')
<link rel="stylesheet" href="/css/login.css">
@endpush
{{--set Title--}}
@section('title', 'Log In')

{{--set content--}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <h3>LOG IN</h3>
            <hr>
            <form action="">
                <input type="text" placeholder="email address" class="form-control login-input">
                <input type="password" placeholder="password" class="form-control login-input">
                <div class="row clearfix">
                    <label class="pull-right ">
                        <input class="checkbox" type="checkbox"> Remember me
                    </label>
                </div>
                <div class="row clearfix">
                    <button class="log-in-btn pull-right" type="submit">LOG IN</button>
                </div>
            </form>
        </div>
        <div class="col-sm-12 col-md-6">

        </div>
    </div>
</div>
@endsection

