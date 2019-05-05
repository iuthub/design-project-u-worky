@extends('layouts.master')

@section('title')
Main
@endsection

@section('navbar')
@include('partials.navbar', ['type' => 1])
@endsection

@section('poster')
@include('dashboard.poster')
@endsection

@section('content')
<div class="text-center">
    <section class="categories-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title section-title-blue">
                        <div>
                            <h2>
                                BROWSE FEATURED CATEGORIES!
                            </h2>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row categories">

                @foreach ($categories as $item)
                <div class="col-xl col-lg-6 col-md-6 col-12">
                    <div class="item-category">
                        <!-- Card -->
                        <div class="card">
                            <div class="text-white text-center card-content">
                                <h1><i class="{{$item->icon}}"></i></h1>
                                <h6 class="card-title">
                                    <strong><a href="#">{{$item->name}}</a></strong>
                                </h6>
                                <p>( 10 jobs )</p>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>


    <section class="jobs-wrapper">
        <div class="container">

            <div class="row">

                <div class="col-md-8 tabs-container">
                    <ul class="nav md-tabs nav-justified gradient-blue" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#recent-jobs-panel" role="tab"> Recent
                                Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#featured-jobs-panel" role="tab">Featured
                                Jobs</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-12">

                    <div class="tab-content px-0 mt-4">
                        <!-- Panel Recent Jobs -->
                        <div class="tab-pane fade in show active" id="recent-jobs-panel" role="tabpanel">
                            <div class="row">
                                <div class="col-12">

                                    <div class="row">
                                        @foreach ($recent_jobs as $item)
                                        <!-- Card -->
                                        @if($loop->index > 5) @break @endif
                                        <div class="col-lg-6 col-md-6 job">
                                            <div class="card">
                                                <div class="row">
                                                    @if($item->is_featured)
                                                    <!-- Featured -->
                                                    <div><img src="{{asset('frontend/img/job-featured.png')}}" alt=""
                                                            class="featured-icon"></div>
                                                    <!-- /Featured -->
                                                    @endif

                                                    <!-- Card image -->
                                                    <div class="col-4 card-image-wrapper">
                                                        <div class="card-image">
                                                            <img src="{{asset('frontend/img/'.$item->photo())}}"
                                                                class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <!--Card image -->

                                                    <div class="col-8">
                                                        <!-- Card content -->
                                                        <div class="card-body">
                                                            <!-- Category & Title -->
                                                            <h5 class="card-title"><strong><a
                                                                        href="">{{$item->name}}</a></strong></h5>
                                                            <span class="badge badge-pill pink"><a
                                                                    href="#">{{$item->type()}}</a></span>
                                                            <!-- /Category & Title -->

                                                            <p>
                                                                <i
                                                                    class="fa fas fa-suitcase pr-3 mb-1 blue-text"></i>{{$item->employer()->name}}<br>
                                                                <i
                                                                    class="fas fa-map-marker-alt pr-3 mb-1 red-text"></i>{{$item->location()->name}}<br>
                                                                <i
                                                                    class="fas fa-money-bill pr-3 mb-1 green-text"></i>UZS{{$item->salary()->from}}
                                                                - UZS{{$item->salary()->to}}<br>
                                                            </p>
                                                        </div>
                                                        <!-- /Card content -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Card -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /Panel Recent Jobs -->


                        <!-- Panel Featured Jobs -->
                        <div class="tab-pane fade" id="featured-jobs-panel" role="tabpanel">
                            <div class="row">
                                <div class="col-12">

                                    <div class="row">
                                        @foreach ($featured_jobs as $item)
                                        <!-- Card -->
                                        @if($loop->index > 5) @break @endif
                                        <div class="col-lg-6 col-md-6 job">
                                            <div class="card">
                                                <div class="row">
                                                    <!-- Featured -->
                                                    <div><img src="{{asset('frontend/img/job-featured.png')}}" alt=""
                                                            class="featured-icon"></div>
                                                    <!-- /Featured -->

                                                    <!-- Card image -->
                                                    <div class="col-4 card-image-wrapper">
                                                        <div class="card-image">
                                                            <img src="{{asset('frontend/img/employer-logo-netco.png')}}"
                                                                class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <!--Card image -->

                                                    <div class="col-8">
                                                        <!-- Card content -->
                                                        <div class="card-body">
                                                            <!-- Category & Title -->
                                                            <h5 class="card-title"><strong><a
                                                                        href="">{{$item->name}}</a></strong></h5>
                                                            <span class="badge badge-pill pink"><a
                                                                    href="#">{{$item->type()}}</a></span>
                                                            <!-- /Category & Title -->

                                                            <p>
                                                                <i
                                                                    class="fa fas fa-suitcase pr-3 mb-1 blue-text"></i>{{$item->employer()->name}}<br>
                                                                <i
                                                                    class="fas fa-map-marker-alt pr-3 mb-1 red-text"></i>{{$item->location()->name}}<br>
                                                                <i
                                                                    class="fas fa-money-bill pr-3 mb-1 green-text"></i>UZS{{$item->salary()->from}}
                                                                - UZS{{$item->salary()->to}}<br>
                                                            </p>
                                                        </div>
                                                        <!-- /Card content -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Card -->
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /Panel Featured Jobs -->
                    </div>

                </div>
            </div>



        </div>
    </section>


    <section class="employers-wrapper">
        <div class="container-fluid d-flex justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title section-title-white">
                            <div>
                                <h2>
                                    TOP COMPANIES
                                </h2>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <a href="">
                                <img class="card-img-top" src="{{asset('frontend/img/employer-logo-turon.png')}}"
                                    alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <!-- Title -->
                                <h4 class="card-title"><strong><a href="">Turon Telecom</a></strong></h4>
                                <!-- Subtitle -->
                                <h5 class="blue-text pb-2"><strong>Internet Provider</strong></h5>
                                <!-- Text -->
                                <p class="card-text">
                                    <i class="fas fa-phone pr-3 mb-2 blue-text"></i>(+99871) 252-74-77<br>
                                    <i class="fas fa-envelope pr-3 mb-2 green-text"></i>info@turon.uz<br>
                                    <i class="fas fa-map-marker-alt pr-3 mb-2 red-text"></i>Tashkent, Mustakillik str.
                                    5/1<br>
                                </p>
                                <!-- Button -->
                                <button class="btn btn-rounded btn-primary btn-sm">
                                    3 OPEN POSITIONS
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card">
                            <a href="">
                                <img class="card-img-top" src="{{asset('frontend/img/employer-logo-turon.png')}}"
                                    alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <!-- Title -->
                                <h4 class="card-title"><strong><a href="">Turon Telecom</a></strong></h4>
                                <!-- Subtitle -->
                                <h5 class="blue-text pb-2"><strong>Internet Provider</strong></h5>
                                <!-- Text -->
                                <p class="card-text">
                                    <i class="fas fa-phone pr-3 mb-2 blue-text"></i>(+99871) 252-74-77<br>
                                    <i class="fas fa-envelope pr-3 mb-2 green-text"></i>info@turon.uz<br>
                                    <i class="fas fa-map-marker-alt pr-3 mb-2 red-text"></i>Tashkent, Mustakillik str.
                                    5/1<br>
                                </p>
                                <!-- Button -->
                                <button class="btn btn-rounded btn-primary btn-sm">
                                    3 OPEN POSITIONS
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card">
                            <a href="">
                                <img class="card-img-top" src="{{asset('frontend/img/employer-logo-turon.png')}}"
                                    alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <!-- Title -->
                                <h4 class="card-title"><strong><a href="">Turon Telecom</a></strong></h4>
                                <!-- Subtitle -->
                                <h5 class="blue-text pb-2"><strong>Internet Provider</strong></h5>
                                <!-- Text -->
                                <p class="card-text">
                                    <i class="fas fa-phone pr-3 mb-2 blue-text"></i>(+99871) 252-74-77<br>
                                    <i class="fas fa-envelope pr-3 mb-2 green-text"></i>info@turon.uz<br>
                                    <i class="fas fa-map-marker-alt pr-3 mb-2 red-text"></i>Tashkent, Mustakillik str.
                                    5/1<br>
                                </p>
                                <!-- Button -->
                                <button class="btn btn-rounded btn-primary btn-sm">
                                    3 OPEN POSITIONS
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <section class="instructions-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title section-title-blue">
                        <div>
                            <h2>
                                HOW IT WORKS!
                            </h2>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="instruction">
                        <button type="button" class="btn btn-lg btn-rounded aqua-gradient"><i class="fas fa-users fa-2x"
                                aria-hidden="true"></i></button>
                        <h3 class="instruction-title">Register an account</h3>
                        <hr>
                        <p class="instruction-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id
                            assumenda
                            quidem sequi nostrum illum rerum, nulla recusandae?</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="instruction">
                        <button type="button" class="btn btn-lg btn-rounded purple-gradient"><i
                                class="fas fa-search fa-2x" aria-hidden="true"></i></button>
                        <h3 class="instruction-title">Specify &amp; search job</h3>
                        <hr>
                        <p class="instruction-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id
                            assumenda
                            quidem sequi nostrum illum rerum, nulla recusandae?</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="instruction">
                        <button type="button" class="btn btn-lg btn-rounded peach-gradient"><i
                                class="fas fa-location-arrow fa-2x" aria-hidden="true"></i></button>
                        <h3 class="instruction-title">Apply for job</h3>
                        <hr>
                        <p class="instruction-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id
                            assumenda
                            quidem sequi nostrum illum rerum, nulla recusandae?</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="register-wrapper">
        <div class="container-fluid">
            <div class="row">

                <div id="register-employer" class="col-xl-6 col-lg-6 col-md-12">
                    <div class="row register-info">
                        <div class="register-sub-title">
                            <em>I'm an</em>
                        </div>
                        <div class="register-title">
                            <h3>EMPLOYER</h3>
                        </div>
                        <div>
                            <p class="register-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id
                                assumenda
                                quidem sequi nostrum illum rerum, nulla recusandae?</p>
                        </div>
                        <div>
                            <a href="{{route('register')}}">
                                <button type="button" class="btn btn-lg btn-rounded btn-primary"><i
                                        class="fas fa-user pr-4" aria-hidden="true"></i>Register as employer</button>
                            </a>

                        </div>
                    </div>
                </div>

                <div id="register-candidate" class="col-xl-6 col-lg-6 col-md-12">
                    <div class="row register-info">
                        <div class="register-sub-title">
                            <em>I'm a</em>
                        </div>
                        <div class="register-title">
                            <h3>CANDIDATE</h3>
                        </div>
                        <div>
                            <p class="register-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id
                                assumenda
                                quidem sequi nostrum illum rerum, nulla recusandae?</p>
                        </div>
                        <div>
                            <a href="{{route('register')}}">
                                <button type="button" class="btn btn-lg btn-rounded btn-white-border blue-text"><i
                                        class="fas fa-user pr-4" aria-hidden="true"></i>Register as candidate</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title section-title-blue">
                        <div>
                            <h2>
                                WHAT CLIENTS SAY?
                            </h2>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container-fluid">
            <div id="carousel-testimonial" class="carousel slide testimonial-carousel" data-ride="carousel">

                <div class="carousel-inner">

                    <!-- First slide -->
                    <div class="carousel-item active">
                        <div class="testimonial">
                            <div class="avatar">
                                <img src="{{asset('frontend/img/testimonial.jpg')}}" class="img-fluid">
                            </div>
                            <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                                Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum
                                inventore
                                laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam.
                            </p>

                            <h4>Komroniddin Soliev</h4>

                            <i class="fas fa-star blue-text"> </i>
                            <i class="fas fa-star blue-text"> </i>
                            <i class="fas fa-star blue-text"> </i>
                            <i class="fas fa-star blue-text"> </i>
                            <i class="fas fa-star blue-text"> </i>
                        </div>
                    </div>
                    <!--/First slide-->

                    <!-- Second slide -->
                    <div class="carousel-item">
                        <div class="testimonial">
                            <div class="avatar">
                                <img src="{{asset('frontend/img/testimonial2.jpg')}}" class="img-fluid">
                            </div>
                            <p><i class="fas fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.
                            </p>

                            <h4>Dildorakhon Ganieva</h4>

                            <i class="fas fa-star blue-text"> </i>
                            <i class="fas fa-star blue-text"> </i>
                            <i class="fas fa-star blue-text"> </i>
                            <i class="fas fa-star blue-text"> </i>
                            <i class="fas fa-star blue-text"> </i>
                        </div>
                    </div>
                    <!-- /Second slide -->

                    <div>

                        <!-- Controls -->
                        <a class="carousel-control-prev left carousel-control" href="#carousel-testimonial"
                            role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next right carousel-control" href="#carousel-testimonial"
                            role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!-- /Controls -->
                    </div>
                </div>
    </section>
</div>

@endsection

@section('footer')
@include('partials.footer')
@endsection
