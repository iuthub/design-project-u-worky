@extends('layouts.master')

@section('title')
Job Details
@endsection

@section('navbar')
@include('partials.navbar', ['type' => 1])
@endsection

@section('poster')
<div class="poster poster-sm poster-job-details">
    <div class="container">
        <div class="row page-title">
            <h1>
                Senior PHP Web Developer
            </h1>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <!--Main listing-->
        <div class="col-lg-8 col-12">
            <div class="job-detail-content">

                <div class="row">
                    <div class="col-12">
                        <div class="section-title section-title-blue">
                            <div>
                                <h2>
                                    JOB DETAILS
                                </h2>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="job-detail-info">
                    <ul>
                        <li class="address">
                            <div class="content-inner">
                                <div class="inner-left">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span class="detail-title">Location:</span>
                                </div>
                                <div class="inner-right">
                                    {{$job->location()->name}}
                                </div>
                            </div>
                        </li>

                        <li class="salary">
                            <div class="content-inner">
                                <div class="inner-left">
                                    <i class="fas fa-money-bill"></i>
                                    <span class="detail-title">Salary:</span>
                                </div>
                                <div class="inner-right">
                                    UZS{{$job->salary()->from}}
                                    - UZS{{$job->salary()->to}}
                                </div>
                            </div>
                        </li>

                        <li class="job-type">
                            <div class="content-inner">
                                <div class="inner-left">
                                    <i class="fa fa-suitcase"></i>
                                    <span class="detail-title">Job type:</span>
                                </div>
                                <div class="inner-right">
                                    Full-Time
                                </div>
                            </div>
                        </li>

                        <li class="deadline">
                            <div class="content-inner">
                                <div class="inner-left">
                                    <i class="fas fa-clock"></i>
                                    <span class="detail-title">Deadline:</span>
                                </div>
                                <div class="inner-right">
                                    27.04.2019
                                </div>
                            </div>
                        </li>

                        <li class="category">
                            <div class="content-inner">
                                <div class="inner-left">
                                    <i class="fas fa-info-circle"></i>
                                    <span class="detail-title">Category:</span>
                                </div>
                                <div class="inner-right">
                                    IT & Computer
                                </div>
                            </div>
                        </li>

                        <li class="working-hours">
                            <div class="content-inner">
                                <div class="inner-left">
                                    <i class="fas fa-user-clock"></i>
                                    <span class="detail-title">Working hours:</span>
                                </div>
                                <div class="inner-right">
                                    8 hours / day
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="job-info">
                    <div class="job-description">
                        <p>
                            <strong class="job-description-title">Overview:</strong>
                        </p>
                        <p>
                            Are you bored of carrying out the same daily project tasks & chores or feel that you have
                            more
                            to offer the world of enterprise web application development? If so, we want to hear from
                            you!
                            An established, creative & growing Manchester based business offering enterprising software
                            &
                            services to a selection of clients.
                            You will have a solid commercial background in maintaining & developing applications using
                            PHP,
                            Zend (or another MVC Framework), CSS, HTML, JavaScript, JQuery, and MySQL.
                        </p>
                        <p>
                            <strong class="job-description-title">Required Skills:</strong>
                        </p>
                        <p>
                            <span class="badge badge-primary">Skill_1</span>
                            <span class="badge badge-primary">Skill_2</span>
                            <span class="badge badge-primary">Skill_3</span>
                            <span class="badge badge-primary">Skill_4</span>
                            <span class="badge badge-primary">Skill_5</span>
                            <span class="badge badge-primary">Skill_6</span>
                            <span class="badge badge-primary">Skill_7</span>
                            <span class="badge badge-primary">Skill_8</span>
                            <span class="badge badge-primary">Skill_9</span>
                        </p>
                    </div>

                    <div class="job-location">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title section-title-blue">
                                    <div>
                                        <h2>
                                            LOCATION
                                        </h2>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- MAP -->
                        <div id="map-container" class="z-depth-1-half map-container-6" style="height: 400px">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.2474156061717!2d69.24356531518035!3d41.32523300780929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b76b266e1e9%3A0xa6f5e1f04d9e6e1c!2sTuron+Telecom!5e0!3m2!1sen!2s!4v1555309567930!5m2!1sen!2s"
                                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <!-- /MAP -->
                    </div>

                    <hr class="my-4">

                    <div class="job-btn-wrapper">
                        <button type="button" class="btn-print btn btn-md btn-rounded btn-white-border blue-text"><i
                                class="ion-android-print pr-2"></i>Print</button>
                        <button type="button" class="btn-show btn btn-md btn-rounded btn-white-border blue-text"><i
                                class="ion-eye pr-2"></i>Show</button>
                        <button type="button" class="btn-apply btn btn-md btn-rounded btn-white-border blue-text"><i
                                class="ion-android-send pr-2"></i>Apply</button>
                    </div>
                </div>
            </div>

        </div>
        <!--Main listing-->

        <!--Sidebar-->
        <div class="col-lg-4 col-12">
            <div class="job-sidebar">
                <div class="sidebar-details">
                    <hr>
                    <div class="employer-logo">
                        <img src="img/employer-logo-turon.png" alt="" class="img-fluid">
                    </div>
                    <div class="employer-title">
                        <h3>Turon Telecom</h3>
                    </div>
                    <hr>
                    <div class="employer-link">
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <i class="ion-link"></i>
                            <strong>Company website</strong><br>
                        </a>
                    </div>
                    <div class="employer-link">
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <i class="ion-ios-list-outline"></i>
                            <strong>Company info</strong><br>
                        </a>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <!--Sidebar-->
    </div>
</div>
@endsection

@section('footer')
@include('partials.footer')
@endsection
