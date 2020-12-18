@extends('layouts.app')

@section('content')
<link href="/css/estiloLR.css" rel="stylesheet">

<div class="container">
    <div class="row text-center">
        <div class="col-md-12 login-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row">
                    <div class="col-md-12 login-form-imagen">
                        <img src="images/usuario.png" id="imgUsuario"/>
                    </div>
                </div>			
                <div class="row">
                    <div class="col-md-12 login-form-header">
                        <p class="login-form-font-header">Iniciar<span>Sesión</span><p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 login-form-row text-center">
                        <a href="#" class="btn btn-danger">
                            <img src="images/gmail.png"/> Sign in with <b>Google</b>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 login-form-row">
                        <div class="or-seperator"><i>or</i></div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="ml-5 mr-5 col-md-11 login-from-row">
                        <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo electronico" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="ml-5 mr-5 col-md-11 login-from-row">
                        <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-9">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember"> {{ __('Recordarme') }} </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12 login-from-boton">
                        <button type="submit" class="btn btn-success pull-right"> {{ __('Iniciar Sesión') }} </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}"> {{ __('Has olvidado la contraseña?') }} </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection