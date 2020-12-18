@extends('layouts.app')

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

                    <a href="{{ route('admin.verInciAdmin') }}">Ver tabla de incidencias</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection