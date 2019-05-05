@extends('layouts.admin')

<div class="fixed-sn dashboard">
    @section('sidebar')
    @include('admin.partials.navbar')
    @include('admin.partials.sidebar')
    @endsection

    @section('content')
    <div class="container-fluid">
        <div class="card my-4">
            <form action="{{route('admin.addnewjob')}}" method="post" id="addJobForm">
                @csrf
                <div class="card-body">

                    <div class="row form-item">
                        <div class="col-xl-3 col-lg-3 form-item-title">
                            Job title
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="md-form">
                                <input type="text" id="name" name="name" value="" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row form-item">
                        <div class="col-xl-3 col-lg-3 form-item-title">
                            Description
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <textarea type="text" id="description" name="description" class="form-control" rows="3"
                                required></textarea>
                        </div>
                    </div>

                    <div class="row form-item">
                        <div class="col-xl-3 col-lg-3 form-item-title">
                            Job category
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <select class="mdb-select md-form colorful-select dropdown-primary" name="category_id"
                                required>
                                <option value="" disabled selected></option>
                                <option value="1">IT &amp; Computer</option>
                                <option value="2">Finance &amp; Logistics</option>
                                <option value="3">Arts, Media, Design</option>
                                <option value="4">Education</option>
                                <option value="5">Engineering</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-item">
                        <div class="col-xl-3 col-lg-3 form-item-title">
                            Job type
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <select class="mdb-select md-form colorful-select dropdown-primary" name="type" required>
                                <option value="" disabled selected></option>
                                <option value="1">Full-time</option>
                                <option value="2">Part-time</option>
                                <option value="3">Contract</option>
                                <option value="4">Internship</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-item">
                        <div class="col-xl-3 col-lg-3 form-item-title">
                            Working hours
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="md-form">
                                <input type="number" name="working_hours" value="" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row form-item">
                        <div class="col-xl-3 col-lg-3 form-item-title">
                            Required skills
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <select class="mdb-select md-form colorful-select dropdown-primary" name="skills[]" multiple
                                searchable="Search here..." required>
                                <option value="" disabled selected></option>
                                <option value="1">HTML</option>
                                <option value="2">CSS</option>
                                <option value="3">JavaScript</option>
                                <option value="4">PHP</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-item">
                        <div class="col-xl-3 col-lg-3 form-item-title">
                            Salary
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="md-form">
                                <input type="number" placeholder="From..." name="salary_id_from" value=""
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="md-form">
                                <input type="number" placeholder="To..." name="salary_id_to" value=""
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row form-item">
                        <div class="col-xl-3 col-lg-3 form-item-title">
                            Featured
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="switch mt-2 mb-1">
                                <label>
                                    <input type="checkbox" name="is_featured">
                                    <span class="lever mx-0"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row form-item">
                        <div class="col-xl-3 col-lg-3 form-item-title">
                            Deadline
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="md-form">
                                <input type="text" id="date-picker" name="deadline" class="form-control datepicker"
                                    data-value="">
                            </div>
                        </div>
                    </div>

                    <div class="row form-item">
                        <div class="col-xl-3 col-lg-3 form-item-title">
                            Address
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="md-form">
                                <input type="hidden" name="location-name" id="location-name" />
                                <input type="hidden" name="lat" id="lat" />
                                <input type="hidden" name="lng" id="lng" />
                                <input type="text" id="search" name="search" value="" class="form-control"
                                    oninput="onSearch(this.value)">
                            </div>
                            <select class="mdb-select md-form colorful-select dropdown-primary" id="results"
                                onchange="setMarker(this.value)">
                                <option value="" disabled selected>Location...</option>
                            </select>
                        </div>
                    </div>


                    <!-- MAP -->
                    <div class="row form-item">
                        <div class="col-12">
                            <div id="map" class="map-container">
                            </div>
                        </div>
                    </div>
                    <!-- /MAP -->




                    <div class="row form-item">
                        <div class="col-12 btn-change-wrapper">
                            <button type="button" class="btn-publish btn btn-primary btn-rounded" id="publishBtn"><i
                                    class="ion-android-send pr-2" aria-hidden="true"></i>Publish</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endsection

    @section('footer')
    @include('admin.partials.footer')
    @endsection

    @section('scripts')
    <script type="text/javascript" src="{{asset('frontend/js/vendor/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_EikIUgqB3NMPmITWXgHd9XOYEpBPnrw&callback=initMap&libraries=places"
        async defer> </script>
    <script>
        let map, service;
            let values;
            const TASHKENT = {lat: 41.311081, lng: 69.240562};
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 41.311081, lng: 69.240562},
                    zoom: 13
                });

                service =  new google.maps.places.PlacesService(map);
            }

            function onSearch(val) {
                if (val.length == 0) return;
                const request = {
                    query: val,
                    location: TASHKENT,
                    radius: 15000,
                    fields: ["name", "geometry"]
                }

                service.textSearch(request, (results, status) => {
                    $("#results").empty();
                    values = results;

                    if (status === google.maps.places.PlacesServiceStatus.OK) {
                        results.forEach(element => {
                            let text = $(`
                                <option value="${element.id}">${element.name}</option>
                            `)

                            $("#results").append(text);
                        });
                    }
            });
            }
            function setMarker(val) {
                console.log(val);
                values.forEach(element => {
                    if (element.id == val) {
                        console.log(element);
                        let marker = new google.maps.Marker({
                            position: new google.maps.LatLng({lat: element.geometry.location.lat(), lng: element.geometry.location.lng()}),
                            animation: google.maps.Animation.DROP,
                            map: map
                        });
                        map.setCenter(element.geometry.location);

                        $("#location-name").val(element.formatted_address);
                        $("#lat").val(element.geometry.location.lat());
                        $("#lng").val(element.geometry.location.lng());
                    }
                });
            }
    </script>

    <script>
        $(document).ready(function() {
            $("#publishBtn").click(function() {
                console.log("hello");
                $("#addJobForm").submit();
            });
        });

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

        function logout() {
            $('#formLogout').submit();
        }

        // TinyMCE Initialization
        tinymce.init({ selector:'#description', menubar: false, height : "300" });
    </script>
    @endsection
</div>
