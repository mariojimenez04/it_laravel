@extends('layouts.app')

@section('botones')
    <a href="{{ route('index') }}" class="btn btn-dark">Volver</a>
@endsection

@section('contenido')
<main class="container">

    <div class="row justify-content-center gap-2">

        {{-- Register new document --}}
        <div class="col-sm-3 mb-5">

            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <img src="../img/notas.png" alt="" class="img-small">
                    </div>
                    <a href="{{ route('analysis.create') }}" class="btn btn-primary">Registrar nuevo informe</a>
                </div>
            </div>

        </div>

    </div>

</main>
@endsection