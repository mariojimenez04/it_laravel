@extends('layouts.app')

@section('titulo')
    Panel de administracion
@endsection

@section('contenido')

<div class="container">

    @if ( session('mensaje'))
        <p class="alert alert-success text-center">{{ session('mensaje') }}</p>
    @endif

</div>

    <main class="container">

        <div class="row justify-content-center gap-2">

            <div class="col-sm-3 mb-5">

                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="card-text">Registrar nuevo ticket para que los encargados de sistemas te den continuidad en lo que requieres</p>
                        <a href="{{ route('ticket.create') }}" class="btn btn-primary">Registrar ticket</a>
                    </div>
                </div>

            </div>

            <div class="col-sm-3">

                <div class="card">
                    <div class="card-body">
                        <div class="card-title">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                            </svg>

                        </div>
                        <p class="card-text">Dar seguimiento a los tickets que haz registrado y checar cual es su status</p>
                        <a href="{{ route('ticket.index') }}" class="btn btn-primary">Revisar tickets</a>
                    </div>
                </div>

            </div>

            <div class="col-sm-3">

                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <p class="card-text">Editar tu perfil (Nombre, contraseña, correo, etc.)</p>
                        <a href="" class="btn btn-primary">Editar usuario</a>
                    </div>
                </div>

            </div>

            @if (auth()->user()->admin === 1)
                <div class="col-sm-3">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                </svg>
                            </div>
                            <p class="card-text">Añadir nuevo usuario(Opcion solo administrador)</p>
                            <a href="{{ route('user.register') }}" class="btn btn-primary">Registrar usuario</a>
                        </div>
                    </div>

                </div>
            @endif

            @if (auth()->user()->admin === 1)
                <div class="col-sm-3">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                </svg>
                            </div>
                            <p class="card-text">Lista usuarios(Opcion solo administrador)</p>
                            <a href="{{ route('user.register') }}" class="btn btn-primary">Ver</a>
                        </div>
                    </div>

                </div>
            @endif

            @if (auth()->user()->admin === 1)
                <div class="col-sm-3">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                                  </svg>
                            </div>
                            <p class="card-text">Movimientos(Opcion solo administrador)</p>
                            <a href="{{ route('user.register') }}" class="btn btn-primary">Ver</a>
                        </div>
                    </div>

                </div>
            @endif

        </div>


    </main>

@endsection