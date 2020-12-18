@extends('layouts.app')

@section('content')
<link href="/css/estiloVer.css" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card bordes fondo">
                <div class="card-header">
                    <h3><b>Verifica tu correo electronico</b></h3>
                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un link para verificar tu correo electronico.') }}
                        </div>
                    @endif

                    {{ __('Por favor mira tu correo para el link de verificación,') }}
                    {{ __('si no has recibido el email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clicka aqui para reenviarte el correo.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
