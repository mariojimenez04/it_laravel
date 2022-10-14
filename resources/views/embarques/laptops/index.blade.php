@extends('layouts.app')

@section('botones')
    <a href="{{ route('embarque.index') }}" class="btn btn-dark">Volver</a>
    <a href="{{ route('laptop.create', $titulo) }}" class="btn btn-dark">Registrar laptop</a>
@endsection

@section('titulo')
    Detalle de embarque - {{ $titulo }}
@endsection

@section('contenido')
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Modelo</th>
        <th scope="col">Numero serie</th>
        <th scope="col">Observaciones</th>
        <th scope="col">Diagnostico</th>
        <th scope="col">Acciones IT</th>
        <th scope="col">Procesador</th>
        <th scope="col">Tamaño</th>
        <th scope="col">Color</th>
        <th scope="col">Capacidad</th>
        <th scope="col">RAM</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Status</th>
        <th scope="col">Entregado</th>
        <th scope="col">Modificado Por</th>
        <th scope="col">Ultima modificacion</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">

        @foreach ($detalle_laptops as $detalle)
            <tr>

                <th>{{ $detalle->id_detalle }}</th>
                <th>{{ $detalle->modelo }}</th>
                <td>{{ $detalle->numero_serie }}</td>
                <td>{{ $detalle->observaciones }}</td>
                <td>{{ $detalle->diagnostico }}</td>
                <td>{{ $detalle->acciones }}</td>
                <td>{{ $detalle->procesador }}</td>
                <td>{{ $detalle->tamano }}</td>
                <td>{{ $detalle->color }}</td>
                <td>{{ $detalle->capacidad }}</td>
                <td>{{ $detalle->ram }}</td>
                <td>{{ $detalle->cantidad }}</td>
                <td>{{ $detalle->status }}</td>
                <td>{{ $detalle->entregado }}</td>
                <td>{{ $detalle->modificado_por }}</td>
                <td>{{ $detalle->updated_at }}</td>

            </tr>
        @endforeach
    
    </tbody>
</table>
@endsection