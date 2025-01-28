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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="card-text">Registrar nuevo caso para paciente</p>
                    <a href="{{ route('analysis.create') }}" class="btn btn-primary">Analisis</a>
                </div>
            </div>

        </div>

    </div>

</main>
@endsection