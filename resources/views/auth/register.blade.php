@extends('layouts.master')

@section('navbar')
    @include('partials.navbar', ['type' => 0])
@endsection

@section('content')
<div class="poster poster-full poster-signup">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12">
                <div class="card card-signup">

                    <h4 class="card-header">
                        <strong>Sign up</strong>
                    </h4>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form  method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Name -->
                            <div class="md-form">
                                <input type="text" id="name" name="name" class="form-control" required autocomplete="name">
                                <label for="name">Username</label>
                            </div>

                            <!-- Email -->
                            <div class="md-form">
                                <input type="email" id="email" name="email" class="form-control">
                                <label for="email">Email</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" id="password" name="password" class="form-control">
                                <label for="password">Create Password</label>
                            </div>

                            <!-- Confirm Password -->
                            <div class="md-form">
                                <input type="password" id="confirm-password" name="password_confirmation"
                                    class="form-control">
                                <label for="confirm-password">Confirm password</label>
                            </div>

                            <div class="switch">
                                <label>
                                    Candidate
                                    <input type="checkbox">
                                    <span class="lever"></span> Employer
                                </label>
                            </div>

                            <!-- Sign up button -->
                            <button class="btn btn-outline-primary btn-rounded btn-block" type="submit">Sign up</button>

                            <!-- Register -->
                            <p>Already a member?
                                <a href="{{route('login')}}">Sign in</a>
                            </p>

                        </form>
                        <!-- Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
