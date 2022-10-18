<?php

namespace App\Exports;

use App\Invoice;
use App\Models\Laptop_detalle;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LaptopDetalleExport implements FromQuery, ShouldAutoSize
{
    use Exportable;

    public function __construct($id_titulo)
    {
        $this->id_titulo = $id_titulo;
    }

    public function query()
    {
        return Laptop_detalle::query()->where('id_titulo', $this->id_titulo);
    }

    // public function laptopSelection($id){
    //     return Laptop_detalle::where('id_titulo', $id)->get();
    // }
}
