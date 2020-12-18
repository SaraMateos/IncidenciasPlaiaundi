@extends('layouts.menu')

@section('content')
<link href="/css/tabla.css" rel="stylesheet">
<link href="/css/estiloVer.css" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card bordes fondo">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Panel de control</p>

                    <a href="{{ route('incidencias.verIncidencias') }}">Ver tabla de incidencias</a>

                    <a href="{{ route('incidencias.verIncidencias') }}">Crear una nueva incidencia</a>

                    {{ __('Usuario!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection