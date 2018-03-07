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

{{--use Default Layout--}}
@extends('Layouts.default')

{{--set Title--}}
@section('title', 'SignIn')

{{--set content--}}
@section('content')
    {{--<div class="container-fluid">--}}
        {{--<div>--}}
            {{--<div class="col-md-3">--}}
                {{--<div class="card card-block">--}}
                    {{--<h4 class="modal-header text-md-center">Novice</h4>--}}
                    {{--Donate N5000 and Get N10,000 in 7days--}}
                    {{--<button type="button" class="btn btn-primary flex-center" data-toggle="modal" data-target="#PH1">Select</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="container-fluid banner">
        <h2>Groups</h2>
    </div>
    <div class="main-container">
        <section class="no-pad-bottom projects-gallery">
            <div class="projects-wrapper clearfix">
                <div class="main-container">
                    <div class="row">
                        <ul class="filters">
                            {{--isotopeJS filter library --}}
                            {{--sort by data filter value--}}
                            <li data-filter="*" class="active"><span>All</span></li>
                            <li data-filter=".f-dev"><span>Frontend Devs</span></li>
                            <li data-filter=".b-dev"><span>Backend Devs</span></li>
                            <li data-filter=".designers"><span>Designers</span></li>
                            <li data-filter=".c-devs"><span>Content Devs</span></li>
                            <li data-filter=".event"><span>Event Planners</span></li>
                            <li data-filter=".mentors"><span>Mentors</span></li>

                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="projects-container column-projects">

                        <div class="col-md-3 col-sm-6 project event image-holder">
                            <div class="background-image-holder">
                                {{--<img class="background-image" alt="Background Image" src="img/event red1.jpg">--}}
                                <div class="gfx background-image img-responsive">
                                    <div class="card">
                                        <div class="card">
                                            <img data-src="holder.js/320x250?random=yes" alt="mentor group">
                                        </div>
                                        <div class="card-footer">
                                            <h3>Stories</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hover-state">

                                <div class="align-vertical">
                                     
                                    <a href="/group-view" class="kbtn kbtn-primary kbtn-white">View Group</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 project mentors image-holder">
                            <div class="background-image-holder">
                                {{--<img class="background-image" alt="Background Image" src="img/stairs.jpg">--}}
                                <div class="card">
                                    <div class="card">
                                        <img data-src="holder.js/320x250?random=yes" alt="mentor group">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Mentors</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                     
                                    <a href="/group-view" class="kbtn kbtn-primary kbtn-white">View Group</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 project designers image-holder">
                            <div class="background-image-holder">
                                <div class="card">
                                    <div class="card">
                                        <img data-src="holder.js/320x250?random=yes" alt="mentor group">
                                    </div>
                                    <div class="card-footer">
                                        <h3>UI/UX</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                     
                                    <a href="#" class="kbtn kbtn-primary kbtn-white">View Group</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 project c-devs image-holder">
                            <div class="background-image-holder">
                                <div class="card">
                                    <div class="card">
                                        <img data-src="holder.js/320x250?random=yes" alt="mentor group">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Content Dev</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                     
                                    <a href="#" class="kbtn kbtn-primary kbtn-white">View Group</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 project mentors image-holder">
                            <div class="background-image-holder">
                                <div class="card">
                                    <div class="card">
                                        <img data-src="holder.js/320x250?random=yes" alt="mentor group">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Community heads</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                     
                                    <a href="#" class="kbtn kbtn-primary kbtn-white">View Group</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 project event image-holder">
                            <div class="background-image-holder">
                                <div class="card">
                                    <div class="card">
                                        <img data-src="holder.js/320x250?random=yes" alt="mentor group">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Administrators</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                     
                                    <a href="#" class="kbtn kbtn-primary kbtn-white">View Group</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 project f-dev image-holder">
                            <div class="background-image-holder">
                                <div class="card">
                                    <div class="card">
                                        <img data-src="holder.js/320x250?random=yes" alt="mentor group">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Angular</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                     
                                    <a href="#" class="kbtn kbtn-primary kbtn-white">View Group</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 project f-dev image-holder">
                            <div class="background-image-holder">
                                <div class="card">
                                    <div class="card">
                                        <img data-src="holder.js/320x250?random=yes" alt="mentor group">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Frontend</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                     
                                    <a href="#" class="kbtn kbtn-primary kbtn-white">View Group</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 project f-dev image-holder">
                            <div class="background-image-holder">
                                <div class="card">
                                    <div class="card">
                                        <img data-src="holder.js/320x250?random=yes" alt="mentor group">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Interface</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                     
                                    <a href="#" class="kbtn kbtn-primary kbtn-white">View Group</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 project f-dev image-holder">
                            <div class="background-image-holder">
                                <div class="card">
                                    <div class="card">
                                        <img data-src="holder.js/320x250?random=yes" alt="mentor group">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Frontend design</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                     
                                    <a href="#" class="kbtn kbtn-primary kbtn-white">View Group</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 project b-dev image-holder">
                            <div class="background-image-holder">
                                <div class="card">
                                    <div class="card">
                                        <img data-src="holder.js/320x250?random=yes" alt="mentor group">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Nodejs</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                     
                                    <a href="#" class="kbtn kbtn-primary kbtn-white">View Group</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 project b-dev image-holder">
                            <div class="background-image-holder">
                                <div class="card">
                                    <div class="card">
                                        <img data-src="holder.js/320x250?random=yes" alt="mentor group">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Hardware</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                     
                                    <a href="#" class="kbtn kbtn-primary kbtn-white">View Group</a>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>

        </section>
    </div>

@endsection

