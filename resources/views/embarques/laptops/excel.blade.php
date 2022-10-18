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
        <th scope="col">Acciones</th>
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
                <form action="{{ route('laptop.destroy', $detalle->numero_serie) }}" method="POST">
                    @csrf
                    @method('delete')
                        <td class="row gap-2">
                            <a href="{{ route('laptop.edit', $detalle->numero_serie) }}" class="btn btn-warning">Editar</a>
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </td>
                </form>
            </tr>
        @endforeach
    
    </tbody>
</table>