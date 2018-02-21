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

    {{--use Default Layout--}} @extends('Layouts.default')
    @push('scripts')
    <link rel="stylesheet" href="/css/project.css">
    @endpush {{--set Title--}} 
    @section('title', 'Profile') {{--set content--}} @section('content')
    <div class="container-fluid">
        <h1>View Our Projects</h1>
        <div class="row project-list">
            @for ($i = 0; $i < 12; $i++)
            <div class="col-lg-4 col-md-6 col-sm-12 project">
                <div class="card">
                    <img src="/images/logo-375x388.png" alt="project name" srcset="" class="card-image">
                    <h2 class="card-header">Default Project</h2>
                    <div class="card-body">
                        <div class="tags">
                            <span class="label label-primary">CSS</span>
                            <span class="label label-warning">JavaScript</span>
                            <span class="label label-danger">Python</span>
                        </div>
                        This is a secure voting platform for creating polls and for authenticating transactions using blockchain technology  
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
    @endsection