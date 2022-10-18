<?php

namespace App\Exports;

use App\Models\Laptop_detalle;
use Maatwebsite\Excel\Concerns\FromCollection;

class LaptopDetalleExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Laptop_detalle::all();
    }
}
