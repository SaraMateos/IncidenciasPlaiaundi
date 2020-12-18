@extends('layouts.menu')

@section('content')
<link href="/css/estiloVer.css" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bordes fondo">
                
            <div class="card-header">
                <h3><b>Registro de incidencia</b></h3>
            </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Titulo del formulario -->
                    <h4>Nueva incidencia</h4>

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
                    <form class="my-3" method="post" action="{{url('/incidencias/añadido')}}">
                        @csrf
                        @include('incidencias.errores')

                        <div class="form-group row">
                            <div class="col-5">
                            <label>¿En qué aula ocurre el problema?</label>
                                <input type="text" class="form-control" name="aula" id="aula" placeholder="Aula" value="{{ old('aula') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-5">
                                <label>¿Qué HZ tiene el ordenador?</label>
                                <input type="text" class="form-control" name="ordenador" id="ordenador" placeholder="Ordenador" value="{{ old('ordenador') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label>Descripción del problema:</label>
                                <textarea type="textarea" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción" value="{{ old('descripcion') }}"></textarea>
                            </div>
                        </div>

                        <div>
                            <a href="/incidencias"><input type="button" value="Volver"></a>
                            <input type="reset" value="Limpiar">
                            <input type="submit" value="Enviar">                            
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection