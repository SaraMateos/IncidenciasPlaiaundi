@extends('admin.menuAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de incidencias ADMINISTRADOORRR') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/inciAdmin/modificar">Modificar</a>

                    {{ __('Tabla de incidencias') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection