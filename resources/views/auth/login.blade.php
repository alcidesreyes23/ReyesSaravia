@extends('layouts.app')

@section('content')
<div class="container"
style="margin: 75px auto;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Login') }}
                </div>
                <div class="card-body">
                    <img src="https://kidsinchaos.com/wp-content/uploads/2019/03/security-1.png" alt=""
                                style="
                                    width: 200px;
                                    margin: 0 250px;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                            <div class="col-md-10 mx-auto">
                                <input placeholder="E-mail Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                            <div class="col-md-10 mx-auto">
                                <input placeholder="Secret Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary"
                                style="
                                 margin: 0 auto;
                                    width: auto;
                                    display: flex;
                                    align-items: center;
                                    padding: 5px 35px;
                                    background-color: #fff53f!important;
                                    border: none;
                                    color: #140f07;">
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
</div>
{{-- <section>
    <div class="card shadow-lg" style="
    display: flex; width: 600px; 
    align-content: center; 
    margin: 75px auto;">
    <div class="card-body p-5">
        <h1 class="fs-4 card-title fw-bold mb-4 text-center">{{ __('Login') }}</h1>
        <img src="https://kidsinchaos.com/wp-content/uploads/2019/03/security-1.png" alt=""
        style="
        width: 200px;
        margin: 0 10rem;">
        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="" autocomplete="off">
            <div class="mb-3">
                <label class="mb-2 text-muted" for="email">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <div class="mb-2 w-100">
                    <label class="text-muted" for="password">Password</label>
                    <a href="{{ route('password.request') }}" class="float-end">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
                <input id="password" type="password" class="form-control" name="password" required="">
                <div class="invalid-feedback">
                    Password is required
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary"
                style="
                        margin: 0 auto;
                        width: auto;
                        display: flex;
                        align-items: center;
                        padding: 5px 35px;
                        background-color: #fff53f!important;
                        border: none;
                        color: #140f07;
                ">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
    <div class="card-footer py-3 border-0">
        <div class="text-center">
            Don't have an account? <a href="register.html" class="text-dark">Create One</a>
        </div>
    </div>
</div>
</section> --}}

@endsection
