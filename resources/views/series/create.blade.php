@extends('layouts.app')

@section('botones')
    <a href="{{ route('laptop.index', $titulo) }}" class="btn btn-dark">Volver</a>
@endsection

@section('titulo')
    Importar series - {{ $titulo }}
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
        <p>Serie</p>
        <p>Descripcion</p>
        <p>Cantidad</p>
        <p>Pallet</p>
        <p>Embarque</p>
    </div>
</div>

<form class="container" action="{{ route('serie.store', $titulo) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">

        <div class="col-md-8">

            <label for="serie" class="form-label">Archivo Excel</label>
            <input class="form-control" name="serie" type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" />

            @error('serie')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>

    </div>

    <input type="submit" value="Importar archivo" class="btn btn-dark mt-3">
</form>
@endsection