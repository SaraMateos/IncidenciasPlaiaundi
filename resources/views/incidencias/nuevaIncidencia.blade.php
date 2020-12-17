@extends('layouts.menu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
            <div class="card-header">
                <h3>Registro de incidencia</h3>
            </div>

                <div class="card-body">
                    <!-- Mirar que hace -->
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
                    <form class="my-3" method="post" action="{{url('guardarAlumno')}}">
                        @csrf
                        @include('incidencias.errores')

                        <div class="form-group row">
                            <div class="col-6">
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Correo electronico" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div>
                            <input type="reset" value="Borrar">
                            <input type="submit" value="Enviar">
                            <br><br>
                            <a href="/incidencias"><input type="button" value="Volver"></a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection