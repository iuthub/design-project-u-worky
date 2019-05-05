@extends('layouts.master')

@section('title')
Candidate Details
@endsection

@section('navbar')
@include('partials.navbar', ['type' => 1])
@endsection

@section('poster')
{{-- @include('dashboard.poster') --}}
@endsection

@section('container')
    <div class="row">
        <!--Main listing-->
        <div class="col-lg-8 col-12 px-lg-4">
            <div class="main-info">

                <div id="aboutme">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title section-title-blue">
                                <div>
                                    <h2>
                                        ABOUT ME
                                    </h2>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe libero dolorem sapiente neque itaque
                        reprehenderit perferendis laboriosam possimus amet deleniti quia soluta nostrum dignissimos dicta,
                        eos, magnam tempore doloremque error?
                    </p>
                </div>

                <div id="experience">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title section-title-blue">
                                <div>
                                    <h2>
                                        WORK EXPERIENCE
                                    </h2>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <blockquote class="blockquote bq-primary">
                        <div class="row blockquote-title-wrapper">
                            <h5 class="blockquote-title">Senior developer</h5>
                        </div>
                        <p class="blockquote-time-duration">July, 2013 - Present (4 years)</p>
                        <p class="blockquote-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </blockquote>

                </div>

                <div id="education">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title section-title-blue">
                                <div>
                                    <h2>
                                        EDUCATION
                                    </h2>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <blockquote class="blockquote bq-primary">
                        <div class="row blockquote-title-wrapper">
                            <h5 class="blockquote-title">Senior developer</h5>
                        </div>
                        <p class="blockquote-time-duration">July, 2013 - Present (4 years)</p>
                        <p class="blockquote-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </blockquote>

                </div>

                <div id="awards">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title section-title-blue">
                                <div>
                                    <h2>
                                        HONORS &amp; AWARDS
                                    </h2>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <blockquote class="blockquote bq-primary">
                        <div class="row blockquote-title-wrapper">
                            <h5 class="blockquote-title">Senior developer</h5>
                        </div>
                        <p class="blockquote-time-duration">July, 2013 - Present (4 years)</p>
                        <p class="blockquote-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </blockquote>

                </div>

                <div id="skills">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title section-title-blue">
                                <div>
                                    <h2>
                                        SKILLS
                                    </h2>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="candidate-skill">Java Script</p>
                    <div class="md-progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                    </div>

                    <p class="candidate-skill">CSS3</p>
                    <div class="md-progress">
                        <div class="progress-bar" role="progressbar" style="width: 65%"></div>
                    </div>

                    <p class="candidate-skill">HTML5</p>
                    <div class="md-progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%"></div>
                    </div>

                    <p class="candidate-skill">Bootstrap</p>
                    <div class="md-progress">
                        <div class="progress-bar" role="progressbar" style="width: 45%"></div>
                    </div>

                    <p class="candidate-skill">PHP</p>
                    <div class="md-progress">
                        <div class="progress-bar" role="progressbar" style="width: 53%"></div>
                    </div>
                </div>

                <div id="portfolio">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title section-title-blue">
                                <div>
                                    <h2>
                                        PORTFOLIO
                                    </h2>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div id="mdb-lightbox-ui"></div>

                            <div class="mdb-lightbox">

                                <figure class="col-md-4">
                                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(94).jpg"
                                        data-size="1600x1067">
                                        <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(94).jpg"
                                            class="img-fluid">
                                    </a>
                                    <figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus nobis sit
                                        veritatis
                                        cumque! Placeat voluptate aut pariatur! Nihil molestiae quos explicabo dignissimos
                                        quam cupiditate
                                        sequi corporis eaque corrupti. Vel, est.</figcaption>
                                </figure>
                                <figure class="col-md-4">
                                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(96).jpg"
                                        data-size="1600x1067">
                                        <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(96).jpg"
                                            class="img-fluid" />
                                    </a>
                                    <figcaption>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                        eu fugiat
                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia deserunt
                                        mollit anim id est laborum.</figcaption>
                                </figure>
                                <figure class="col-md-4">
                                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(95).jpg"
                                        data-size="1600x1067">
                                        <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(95).jpg"
                                            class="img-fluid" />
                                    </a>
                                    <figcaption>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                        architecto beatae
                                        vitae dicta sunt explicabo.</figcaption>
                                </figure>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <hr class="my-5">

            <!-- Comments -->
            <div>
                <div>

                    <!-- Comment -->
                    <div class="row comment">
                        <div class="col-sm-2 col-12 comment-avatar-wrapper">
                            <img src="img/testimonial2.jpg" class="comment-avatar img-fluid">
                        </div>
                        <div class="col-sm-10 col-12">
                            <a>
                                <h4 class="comment-username">Dildora Ganieva</h4>
                            </a>
                            <div class="mt-2">
                                <ul class="list-unstyled">
                                    <li><i class="far fa-clock mr-2"></i> 05/10/2019</li>
                                </ul>
                            </div>
                            <p class="comment-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident.</p>
                        </div>
                    </div>
                    <!-- Comment -->


                    <!-- Leave comment -->
                    <div>
                        <form action="">

                            <div class="row">
                                <div class="col-sm-2 col-12 comment-avatar-wrapper">
                                    <img src="img/testimonial2.jpg" alt="" class="comment-avatar img-fluid">
                                </div>

                                <div class="col-sm-10 col-12">
                                    <div class="md-form">
                                        <textarea type="text" id="form-text" class="md-textarea form-control"
                                            rows="3"></textarea>
                                        <label for="form-text">Your message</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 btn-comment">
                                    <button class="btn btn-primary btn-rounded">Comment</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- /Leave comment -->

                </div>
            </div>
            <!-- Comments-->


        </div>
        <!--Main listing-->

        <!--Sidebar-->
        <div class="col-lg-4 col-12 mb-3 order-xl-last order-lg-last order-md-first order-first">

            <div class="sidebar-details">
                <hr class="">
                <p>
                    <i class="fas fa-user-graduate pr-3 purple-text"></i><strong>Course
                        :</strong><br><span>Sophomore</span><br>
                    <i class="fas fa-award pr-3 pink-text"></i><strong>GPA :</strong><br><span>4.5</span><br>
                    <i class="fas fa-calendar pr-3 green-text"></i><strong>Experience :</strong><br><span>3 years</span><br>
                    <i class="fas fa-clock pr-3 blue-text"></i><strong>Age :</strong><br><span>20 years</span><br>
                </p>
                <hr>
            </div>



        </div>
        <!--Sidebar-->

    </div>
@endsection

@section('footer')
@include('partials.footer')
@endsection
