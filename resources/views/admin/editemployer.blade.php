@extends('layouts.admin')

@section('sidebar')
@include('admin.partials.navbar')
@include('admin.partials.sidebar')
@endsection


@section('content')
<div class="container-fluid">
    <div class="card my-4">
        <div class="card-body">

            <form action="">

                <div class="row form-item">
                    <div class="col-xl-3 col-lg-3 form-item-title edit-profile-avatar-wrapper">
                        <img src="{{asset('frontend/img/employer-logo-turon.png')}}" alt="" class="edit-profile-avatar img-fluid">
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="md-form">
                            <p class="text-center ml-2">Update your photo manually, If the photo is not set, the default
                                avatar will be the same as your login email account</p>
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm btn-rounded float-left">
                                    <span>Upload photo</span>
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload your file">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row form-item">
                    <div class="col-xl-3 col-lg-3 form-item-title">
                        Company Name
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="md-form">
                            <input type="text" id="edit-name" name="edit-name" class="form-control"
                                placeholder="Enter Company Name...">
                        </div>
                    </div>
                </div>

                <div class="row form-item">
                    <div class="col-xl-3 col-lg-3 form-item-title">
                        Company Subtitle
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="md-form">
                            <input type="text" id="edit-subtitle" name="edit-subtitle" class="form-control"
                                placeholder="Enter Company Subtitle...">
                        </div>
                    </div>
                </div>

                <div class="row form-item">
                    <div class="col-xl-3 col-lg-3 form-item-title">
                        Company Details
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <textarea name="" id="company-details"></textarea>
                    </div>
                </div>

                <div class="row form-item">
                    <div class="col-xl-3 col-lg-3 form-item-title">
                        Email
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="md-form">
                            <input type="email" id="edit-email" name="edit-email" class="form-control"
                                placeholder="Enter Email...">
                        </div>
                    </div>
                </div>

                <div class="row form-item">
                    <div class="col-xl-3 col-lg-3 form-item-title">
                        Phone
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="md-form">
                            <input type="text" id="edit-phone" name="edit-phone" class="form-control"
                                placeholder="Enter Phone...">
                        </div>
                    </div>
                </div>

                <div class="row form-item">
                    <div class="col-xl-3 col-lg-3 form-item-title">
                        Website
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="md-form">
                            <input type="text" id="edit-website" name="edit-website" class="form-control"
                                placeholder="Enter Website...">
                        </div>
                    </div>
                </div>

                <div class="row form-item">
                    <div class="col-xl-3 col-lg-3 form-item-title">
                        Address
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="md-form">
                            <input type="text" id="edit-address" name="edit-address" class="form-control"
                                placeholder="Enter Address...">
                        </div>
                    </div>
                </div>

                <!-- MAP -->

                <div class="row form-item">
                    <div class="col-12 btn-change-wrapper">
                        <button type="button" class="btn-save-profile btn btn-primary btn-rounded">Update
                            Profile</button>
                    </div>
                </div>

            </form>

        </div>

    </div>

    <div class="card my-4">
        <div class="card-body">

            <form action="">

                <div class="row form-item">
                    <div class="col-lg-6 col-md-12">
                        <div class="md-form my-3">
                            <input type="text" id="edit-current-password" name="edit-current-password"
                                class="form-control">
                            <label for="edit-current-password">Current password</label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="md-form my-3">
                            <input type="text" id="edit-new-password" name="edit-new-password" class="form-control">
                            <label for="edit-new-password">New password</label>
                        </div>
                    </div>
                </div>


                <div class="row form-item">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" class="btn-save-profile btn btn-primary btn-rounded">Change
                            Password</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection



@section('footer')
@include('admin.partials.footer')
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('frontend/js/vendor/tinymce/tinymce.min.js')}}"></script>
    <script>
        // TinyMCE Initialization
        tinymce.init({ selector:'#company-details', menubar: false, height : "300" });
    </script>
@endsection
