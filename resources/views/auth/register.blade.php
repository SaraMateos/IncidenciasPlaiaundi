@extends('layouts.app')

@section('content')
<link href="/css/estiloLR.css" rel="stylesheet">

<div class="container">
    <div class="row text-center">
        <div class="col-md-12 login-form">           
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row">
                    <div class="col-md-12 login-form-imagen">
                        <img src="images/agregarUsuario.png" id="imgUsuario"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 login-form-header">
                        <p class="login-form-font-header">Registro<span>Usuario</span><p>
                    </div>
				</div>	

                <div class="form-group row">
                    <div class="ml-5 mr-5 col-md-11 login-from-row">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Nombre" size="25" required> 
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="ml-5 mr-5 col-md-11 login-from-row">
                        <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo electronico" value="{{ old('email') }}" required autocomplete="email">
                         @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="ml-5 mr-5 col-md-11 login-from-row">
                        <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="ml-5 mr-5 col-md-11 login-from-row">
                        <input id="password-confirm" name="password_confirmation" type="password" class="form-control" placeholder="Confirmar contraseña" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="ml-5 mr-5 col-md-11 login-from-row">
                        <input id="is_admin" name="is_admin" type="number" class="form-control" placeholder="Tipo de usuario -> 0" required autocomplete="is_admin">

                        @error('is_admin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12 login-from-boton">
                        <button type="submit" class="btn btn-success"> {{ __('Registrarse') }} </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection