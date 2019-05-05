@extends('layouts.admin')

<div class="fixed-sn dashboard">
    @section('sidebar')
    @include('admin.partials.navbar')
    @include('admin.partials.sidebar')
    @endsection

    @section('content')
    <!-- Card -->
    <div class="card my-4 card-user">
        <div class="row">
            <div class="col-md-4 col-5 user-avatar">
                <img src="{{asset('frontend/img/employer-logo-turon.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-md-7 col-7">
                <h1 class="user-title">Turon Telecom</h1>
                <h4 class="user-sub-title">Internet Provider</h4>

                <div class="row user-info">
                    <div class="col-lg-6 col-md-12">
                        <i class="fas fa-map-marker-alt red-text"></i><strong>Address
                            :</strong><br><span>Tashkent, Mustakillik str. 5/1</span>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <i class="fas fa-envelope orange-text"></i><strong>Email :</strong><br><span>
                            info@turon.uz</span>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <i class="fas fa-phone green-text"></i><strong>Phone :</strong><br><span>(+99871)
                            252-74-77</span>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <i class="fa fa-globe blue-text"></i><strong>Website
                            :</strong><br><span>http://turontelecom.uz/</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <a type="button" class="btn btn-primary btn-rounded" href="dashboard-edit-profile.html"><i
                            class="fas fa-edit pr-3" aria-hidden="true"></i>Edit Profile</a>
                </div>

            </div>
        </div>
    </div>
    <!-- Card -->


    <!-- Cards Info -->
    <div class="row cards-info">
        <!-- Card -->
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <!-- Card Data -->
                <div class="row card-data">
                    <div class="col-5 card-data-left">
                        <a type="button" class="btn-floating btn-lg primary-color"><i class="fas fa-suitcase"
                                aria-hidden="true"></i></a>
                    </div>
                    <div class="col-7 card-data-right">
                        <h5>23</h5>
                        <p>Open Positions</p>
                    </div>
                </div>
                <!-- Card Data -->
            </div>
        </div>
        <!-- /Card -->

        <!-- Card -->
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <!-- Card Data -->
                <div class="row card-data">
                    <div class="col-5 card-data-left">
                        <a type="button" class="btn-floating btn-lg primary-color"><i class="fas fa-user"
                                aria-hidden="true"></i></a>
                    </div>
                    <div class="col-7 card-data-right">
                        <h5>15</h5>
                        <p>Applied Candidates</p>
                    </div>
                </div>
                <!-- Card Data -->
            </div>
        </div>
        <!-- /Card -->
        @endsection

        @section('footer')
        @include('admin.partials.footer')
        @endsection

        @section('scripts')
        <script type="text/javascript" src="{{asset('frontend/js/vendor/tinymce/tinymce.min.js')}}"></script>
        <script>
            // SideNav Initialization
            $(".button-collapse").sideNav();

            // Data Picker Initialization
            $('.datepicker').pickadate();

            var skills = [
                "PHP",
                "C++",
                "Java",
                "JavaScript"
            ];

            $('#form-autocomplete').mdb_autocomplete({
                data: skills
            });

            // TinyMCE Initialization
            tinymce.init({ selector:'#description', menubar: false, height : "300" });
        </script>
        @endsection
    </div>
