@extends('layouts.app')


@section('titulo')
Panel de administracion
@endsection

@section('contenido')
{{-- @extends('layouts.botones') --}}

<div class="container">

    @if ( session('mensaje'))
        <p class="alert alert-success text-center">{{ session('mensaje') }}</p>
    @endif

</div>

    <main class="container">

        <div class="row justify-content-center gap-2">

            {{-- Register new document --}}
            <div class="col-sm-3 mb-5">

                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <img class="img-small" src="../img/informe-medico.png" alt="image list patient" srcset="">                           
                        </div>
                        <a href="{{ route('analysis.index') }}" class="btn btn-primary">Informes medicos</a>
                    </div>
                </div>

            </div>

            {{-- Register new doctor --}}
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">

                            <img src="{{ asset('img/paciente.png') }}" alt="" class="img-small">

                        </div>
                        <a href="{{ route('index') }}" class="btn btn-primary">Dar de alta paciente</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">

                            <img src="../img/equipo-medico.png" alt="" class="img-small">

                        </div>
                        <a href="{{ route('index') }}" class="btn btn-primary">información doctores</a>
                    </div>
                </div>
            </div>

            {{-- Wharehouse --}}
            <div class="col-sm-3">

                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <img src="../img/inventario.png" alt="" class="img-small">
                        </div>
                        <a href="{{ route('wharehouse.index') }}" class="btn btn-primary">Almacen</a>
                    </div>
                </div>

            </div>

            {{-- Administration --}}
            @if (auth()->user()->admin === 1)
                <div class="col-sm-3">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <img src="../img/user-interface.png" alt="" class="img-small">
                            </div>
                            <a href="{{ route('users.create') }}" class="btn btn-primary">Administración usuarios</a>
                        </div>
                    </div>

                </div>
            @endif

            {{-- Kardex --}}
            @if (auth()->user()->admin === 1)
                <div class="col-sm-3">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <img src="{{ asset('img/gestion-de-archivos.png') }}" alt="" class="img-small">
                            </div>
                            <a href="{{ route('users.create') }}" class="btn btn-primary">Configuración</a>
                        </div>
                    </div>

                </div>
            @endif

            {{-- Users --}}
            @if (auth()->user()->admin === 1)
                <div class="col-sm-3">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <img src="{{ asset('img/historico.png') }}" alt="" class="img-small">
                            </div>
                            <a href="#" class="btn btn-primary">Kardex</a>
                        </div>
                    </div>

                </div>
            @endif

        </div>


    </main>

@endsection