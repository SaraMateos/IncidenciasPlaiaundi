@extends('layouts.app')

@section('content')
<link href="/css/tabla.css" rel="stylesheet">
<link href="/css/estiloVer.css" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card fondo bordes">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row justify-content-center">
                        <h2>Bienvenido al panel de control</h2>
                    </div>
                    <div class="row justify-content-center">
                        <h4>¿Qué quieres hacer?</h4>
                    </div>

                    <div class="row justify-content-center mt-4">   
                        <a href="{{ route('incidencias.nuevaIncidencia') }}" class="derecha mr-5 links"><img src="/images/anadir.png" /><br>Crear incidencia</a>

                        <a href="{{ route('incidencias.verIncidencias') }}" class="izquierda ml-5 links"><img src="/images/lista.png" /><br>Ver incidencias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection