@extends('layouts.app')

@section('botones')
    <a href="{{ route('admin.index') }}" class="btn btn-dark">Volver</a>
    <a href="{{ route('ram.create') }}" class="btn btn-dark">Crear registro</a>
@endsection

@section('titulo')
    Administracion - RAM
@endsection

@section('contenido')
<div class="table-responsive">
    
    <h3 class="text-center my-5">Lista de memorias RAM</h3>
    <table class="table table-hover">
        <thead>
        <tr>

            <th scope="col">#</th>
            <th scope="col">Capacidad</th>
            <th scope="col">Registrado por</th>
            <th scope="col">Registrado el</th>
            <th scope="col">Actualizado el</th>
            <th scope="col">Acciones</th>
            
        </tr>
        </thead>
        <tbody class="table-group-divider">
    
            {{-- @foreach ($series as $serie)
                <tr>
                    <th>{{ $serie->id }}</th>
                    <th scope="row">{{ $serie->serie }}</th>
                    <td>{{ $serie->descripcion }}</td>
                    <td>{{ $serie->cantidad }}</td>
                    <td>{{ $serie->palet }}</td>
                    <td>{{ $serie->registrado_por }}</td>
                    <td>{{ $serie->created_at }}</td>
                    <td>{{ $serie->updated_at }}</td>
                    <td>
                        <form action="">
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach --}}
        
        </tbody>
    </table>

</div>  
@endsection