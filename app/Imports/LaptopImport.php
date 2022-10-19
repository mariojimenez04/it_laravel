<?php

namespace App\Imports;

use App\Models\Laptop_detalle;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class LaptopImport implements ToModel, WithHeadingRow
{
   
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Laptop_detalle([
            //Retorna los valores para ingresar en la base de datos
            'id_detalle' => $row['id_detalle'] ?? 'xxxxx',
            'modelo' => $row['modelo'] ?? 'xxxxx',
            'numero_serie' => $row['numero_serie'] ?? 'xxxxx',
            'observaciones' => $row['observaciones'] ?? 'xxxxx',
            'diagnostico' => $row['diagnostico'] ?? 'xxxxx',
            'acciones' => $row['acciones'] ?? 'xxxxx',
            'procesador' => $row['procesador'] ?? 'xxxxx',
            'tamano' => $row['tamano'] ?? 'xxxxx',
            'color' => $row['color'] ?? 'xxxxx',
            'capacidad' => $row['capacidad'] ?? 'xxxxx',
            'ram' => $row['ram'] ?? 'xxxxx',
            'cantidad' => $row['cantidad'] ?? 'xxxxx',
            'status' => $row['status'] ?? 'xxxxx',
            'entregado' => $row['entregado'] ?? 'xxxxx',
            'modificado_por' => auth()->user()->name,
            'id_titulo' => $row['id_titulo'],
        ]);

    }

    // public function rules(): array
    // {
    //     return [
    //         'id_detalle' => [
    //             'required'
    //         ],
    //         'modelo' => [
    //             'required'
    //         ],
    //         'numero_serie' => [
    //             'required'
    //         ],
    //         'observaciones' => [
    //             'required'
    //         ],
    //         'diagnostico' => [
    //             'required'
    //         ],
    //         'acciones' => [
    //             'required'
    //         ],
    //         'procesador' => [
    //             'required'
    //         ],
    //         'tamano' => [
    //             'required'
    //         ],
    //         'color' => [
    //             'required'
    //         ],
    //         'capacidad' => [
    //             'required'
    //         ],
    //         'ram' => [
    //             'required'
    //         ],
    //         'cantidad' => [
    //             'required'
    //         ],
    //         'status' => [
    //             'required'
    //         ],
    //         'entregado' => [
    //             'required'
    //         ],
    //         'id_titulo' => [
    //             'required'
    //         ],
    //     ];
    // }
}
