@extends('layouts.menu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de incidencias') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table>
                        <thead>https://laraveles.com/foro/viewtopic.php?id=1387
                    </table>
                    @foreach ($incidencias as $incidencia) 

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection