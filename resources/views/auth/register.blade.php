@extends('layouts.master')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="poster poster-full poster-signup">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12">
                <div class="card card-signup">

                    <h4 class="card-header">
                        <strong>Sign in</strong>
                    </h4>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form>
                            <!-- Name -->
                            <div class="md-form">
                                <input type="text" id="name" name="name" class="form-control">
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
                                <input type="password" id="confirm-password" name="confirm-password"
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
                                <a href="signin.html">Sign in</a>
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
