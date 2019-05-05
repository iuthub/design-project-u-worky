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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Name -->
                            <div class="md-form">
                                <input id="name" type="text"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    value="{{ old('name') }}" required autofocus>
                                <label for="name">Username</label>
                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>

                            <!-- Email -->
                            <div class="md-form">
                                <input id="email" type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}" required>
                                <label for="email">Email</label>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input id="password" type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required>
                                <label for="password">Create Password</label>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
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
                                    <input type="checkbox" {{request()->type == 'employer' ? 'checked' : ''}} value="1">
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
