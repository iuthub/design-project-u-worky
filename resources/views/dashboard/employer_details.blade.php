@extends('layouts.master')

@section('title')
    Employer Details
@endsection

@section('navbar')
@include('partials.navbar', ['type' => 1])
@endsection

@section('poster')
{{-- @include('dashboard.poster') --}}
@endsection

@section('container')
    <div class="row">
        <div class="col-12">
            <div class="employer-info-top row">
                <div class="col-md-3">
                    <div class="employer-logo">
                        <img alt='' src='img/employer-logo-turon.png' class="img-fluid" />
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="employer-title-wrapper">
                        <h3 class="employer-title">Turon Telecom</h3>
                        <div class="employer-subtitle">
                            Internet Provider
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">

        <!--Main listing-->
        <div class="col-lg-8 col-12">
            <div class="company-detail">

                <div class="row">
                    <div class="col-12">
                        <div class="section-title section-title-blue">
                            <div>
                                <h2>
                                    COMPANY DETAILS
                                </h2>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non aperiam quia nostrum possimus eaque eius
                    dignissimos minus ipsam laborum, soluta reiciendis aut tempora quod, dolorum esse rerum architecto.
                    Quasi, consequuntur!
                    Mollitia iure fugit, voluptate eligendi praesentium alias molestiae repudiandae. Soluta facilis deserunt
                    ab possimus culpa eveniet natus, numquam quam officiis? Adipisci fugit nostrum quis corrupti vel laborum
                    praesentium eligendi dolorem?
                    Dicta voluptatem natus doloribus itaque sapiente saepe illum deleniti laborum. Necessitatibus dolorum
                    mollitia ut amet blanditiis asperiores enim odio quo autem dolores illo, magni tempore! Quo praesentium
                    at ipsam commodi.
                </p>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="section-title section-title-blue">
                        <div>
                            <h2>
                                4 OPEN POSITIONS
                            </h2>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <!-- Card -->
                <div class="col-md-12 job">
                    <div class="card">
                        <div class="row">
                            <!-- Card image -->
                            <div class="col-4 card-image-wrapper">
                                <div class="card-image">
                                    <img src="img/employer-logo-netco.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <!--Card image -->

                            <div class="col-8">
                                <!-- Card content -->
                                <div class="card-body">
                                    <!-- Category & Title -->
                                    <h5 class="card-title"><strong><a href="">Senior PHP Web Developer</a></strong></h5>
                                    <span class="badge badge-pill pink"><a href="#">FULL - TIME</a></span>
                                    <!-- /Category & Title -->

                                    <p>
                                        <i class="fa fas fa-suitcase pr-3 mb-1 blue-text"></i>Netco Telecom<br>
                                        <i class="fas fa-map-marker-alt pr-3 mb-1 red-text"></i>Tashkent, Mustakillik str.
                                        5/1<br>
                                        <i class="fas fa-money-bill pr-3 mb-1 green-text"></i>$1,500 - $2,000<br>
                                    </p>
                                </div>
                                <!-- /Card content -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Card -->
            </div>


            <div class="row justify-content-center align-items-center my-4">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-circle pg-blue m-0">
                        <li class="page-item disabled"><a class="page-link">First</a></li>
                        <li class="page-item disabled">
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link">5</a></li>
                        <li class="page-item">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link">Last</a></li>
                    </ul>
                </nav>
            </div>



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
        <div class="col-lg-4 col-12 mb-3 pr-lg-5 order-xl-last order-lg-last order-md-first order-first">
            <div class="sidebar-details">
                <hr class="">
                <p>
                    <em>Website:</em>
                    <em><a href=" http://turontelecom.uz/" class="employer-web-site">http://turontelecom.uz/</a></em>
                </p>
                <hr>
                <p>
                    <i class="fas fa-map-marker-alt pr-3 red-text"></i><strong>Address :</strong><br><span> Tashkent,
                        Mustakillik str. 5/1</span><br>
                    <i class="fas fa-envelope pr-3 blue-text"></i><strong>Email :</strong><br><span>
                        info@turon.uz</span><br>
                    <i class="fas fa-phone pr-3 green-text"></i><strong>Phone :</strong><br><span>(+99871)
                        252-74-77</span><br>
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
