@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-12" style="padding: 0 200px">
                                <input placeholder="Nombre" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electrónico') }}</label> --}}

                            <div class="col-md-12" style="padding: 0 200px">
                                <input placeholder="E-mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            {{-- <label for="department_name" class="col-md-4 col-form-label text-md-end">{{ __('Departamento') }}</label> --}}

                            <div class="col-md-12" style="padding: 0 200px">
                                <input placeholder="Nombre Departamento" id="department_name" type="text" class="form-control @error('department_name') is-invalid @enderror" name="department_name" value="{{ old('department_name') }}" required autocomplete="department_name" autofocus>

                                @error('department_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            {{-- <label for="department_position" class="col-md-4 col-form-label text-md-end">{{ __('Cargo dentro del departamento') }}</label> --}}

                            <div class="col-md-12" style="padding: 0 200px">
                                <input placeholder="Pocision Departmento" id="department_position" type="text" class="form-control @error('department_position') is-invalid @enderror" name="department_position" value="{{ old('department_position') }}" required autocomplete="department_position" autofocus>

                                @error('department_position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            {{-- <label for="salary" class="col-md-4 col-form-label text-md-end">{{ __('Salario') }}</label> --}}

                            <div class="col-md-12" style="padding: 0 200px" >
                                <input placeholder="Salario" id="salary" type="text" class="form-control @error('salary') is-invalid @enderror" name="salary" value="{{ old('salary') }}" required autocomplete="salary" autofocus>

                                @error('salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            {{-- <label for="web_site" class="col-md-4 col-form-label text-md-end">{{ __('Sitio web') }}</label> --}}

                            <div class="col-md-12" style="padding: 0 200px">
                                <input placeholder="Web Site" id="web_site" type="url" class="form-control @error('web_site') is-invalid @enderror" name="web_site" value="{{ old('web_site') }}" required autocomplete="web_site" autofocus>

                                @error('web_site')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                            <div class="col-md-12" style="padding: 0 200px">
                                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> --}}

                            <div class="col-md-12" style="padding: 0 200px">
                                <input placeholder="Confirme Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary"
                                style="background-color: #fff53f!important;
                                    border:none;
                                 color: #140f07;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
