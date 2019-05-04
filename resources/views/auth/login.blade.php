@extends('layouts.master')
@section('navbar')
    @include('partials.navbar', ['type' => 0])
@endsection

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}
<div class="poster poster-full poster-signin">
    <div class="container">
        <div class="row">

            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12">
                <div class="card card-signin">

                    <h4 class="card-header">
                        <strong>Sign in</strong>
                    </h4>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                        <!-- Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Name -->
                            <div class="md-form">
                                <i class="fas fa-user prefix d-flex"></i>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="name">Email</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <i class="fas fa-lock prefix d-flex"></i>
                                <input type="password" id="password" name="password" required autocomplete="current-password" class="form-control">
                                <label for="password">Password</label>
                            </div>

                            <div class="d-flex justify-content-around">
                                <div>
                                    <div class="form-check">
                                        <input type="checkbox" id="check-remember" name="check-member"
                                            class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="check-remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Sign in button -->
                            <button class="btn btn-outline-primary btn-rounded btn-block" type="submit">Sign in</button>

                            <!-- Register -->
                            <p>Not a member?
                                <a href="{{ route('register') }}">Sign up</a>
                            </p>

                        </form>
                        <!-- /Form -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
