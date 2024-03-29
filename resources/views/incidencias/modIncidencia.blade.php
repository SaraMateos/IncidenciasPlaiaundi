@extends('layouts.menu')

@section('content')
<link href="/css/estiloVer.css" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bordes fondo">
                
            <div class="card-header">
                <h3><b>Modificación de incidencia</b></h3>
            </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Titulo del formulario -->
                    <h4>Modificar incidencias</h4>
                    <h1>{{ $incidencia->ordenador }}</h1>

                    <!-- Muestra este mensaje en caso de que se haya añadido a la base de datos -->
                    @if(Session::has('alert-success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{Session::get('alert-success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <!-- Muestra este mensaje en caso de que no se haya añadido a la base de datos -->
                    @if(Session::has('alert-danger'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{Session::get('alert-danger')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <!-- Formulario -->
                    
                    <form class="my-3" method="post" action="/incidencias/eliminar/{{ $incidencia->id }}">
                        @csrf
                        @include('incidencias.errores')

                        <div class="form-group row">
                            <div class="col-6">
                            <label>¿En qué aula está el problema?</label>
                                <input type="text" class="form-control" name="aula" id="aula" placeholder="Aula" value="{{ old('aula') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <label>¿Qué HZ tiene el ordenador?</label>
                                <input type="text" class="form-control" name="ordenador" id="ordenador" placeholder="Ordenador" value="{{ old('ordenador') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <label>Descripción el problema:</label>
                                <input type="textarea" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción" value="{{ old('descripcion') }}">
                            </div>
                        </div>

                        <div>
                            <a href="/incidencias"><input type="button" value="Cancelar"></a>
                            <input type="submit" value="Eliminar">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection