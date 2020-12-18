@extends('admin.menuAdmin')

@section('content')
<link href="/css/tabla.css" rel="stylesheet">

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

                    <table class="listaIncidencias table table-responsive">
                        <thead>
                            <th>ID</th>
                            <th>USER_ID</th>
                            <th>FECHA</th>
                            <th>AULA</th>
                            <th>ORDENADOR</th>
                            <th>DESCRIPCION</th>
                            <th>ESTADO</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($incidencias as $incidencia)
                            <tr>
                                <td>{{ $incidencia->id }}</td>
                                <td>{{ $incidencia->user_id }}</td>
                                <td>{{ $incidencia->fecha }}</td>
                                <td>{{ $incidencia->aula }}</td>
                                <td>{{ $incidencia->ordenador }}</td>
                                <td>{{ $incidencia->descripcion }}</td>
                                <td>{{ $incidencia->estado }}</td>
                                <td><a href="{{ route('incidencias.editInciAdmin', $incidencia->id) }}"> Modificar </a></td>
                                <td><a href="{{ route('incidencias.editInciAdmin', $incidencia->id) }}"> Eliminar </a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection