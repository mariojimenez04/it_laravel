@extends('layouts.app')

@section('botones')
    <a href="{{ route('laptop.index', $id) }}" class="btn btn-dark">Volver</a>
@endsection

@section('titulo')
    Importar series - {{ $id }}
@endsection

@section('contenido')

@foreach ($errors->all() as $error)
    <div class="alerta container mt-2">
        {{ $error }}
    </div>
@endforeach

<div class="bd-callout bd-callout-warning container">
    Para una correcta importacion de datos toma en cuenta los siguientes datos en el encabezado en el archivo excel:
    <div class="mt-2">
        <p><strong>¡Importante!</strong> el titulo de el embarque debe ser el mismo de el archivo que se va a importar</p>
        <p>id detalle</p>
        <p>modelo</p>
        <p>numero serie</p>
        <p>observaciones</p>
        <p>diagnostico</p>
        <p>acciones</p>
        <p>procesador</p>
        <p>tamano</p>
        <p>color</p>
        <p>capacidad</p>
        <p>ram</p>
        <p>cantidad</p>
        <p>status</p>
        <p>entregado</p>
        <p>id titulo</p>
    </div>
</div>

<form class="container" action="{{ route('laptop.import.excel', $id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">

        <div class="col-md-8">

            <label for="laptop_import" class="form-label">Archivo Excel</label>
            <input class="form-control" name="laptop_import" type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" />

            @error('laptop_import')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>

    </div>

    <input type="submit" value="Importar archivo" class="btn btn-dark mt-3">
</form>
@endsection