<?php

namespace App\Http\Controllers;

use App\Models\Laptop_detalle;
use Illuminate\Http\Request;

class LaptopDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $titulo = $id;
        $detalle_laptops = Laptop_detalle::where('id_titulo', $id)->get();
        //Retornar la vista de el embarque
        return view('embarques.laptops.index', [
            'titulo' => $titulo,
            'detalle_laptops' => $detalle_laptops,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $id_embarque = $id;
        //
        return view('embarques.laptops.create',[
            'id_embarque' => $id_embarque,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //Realizar la validacion
        $this->validate($request,[
            'id_detalle' => 'required',
            'modelo' => 'required',
            'numero_serie' => 'required|alpha_num|unique:laptop_detalles,numero_serie',
            'procesador' => 'required',
            'tamano' => 'required',
            'color' => 'required',
            'capacidad' => 'required',
            'ram' => 'required',
            'cantidad' => 'required|numeric|between:1,1',
        ]);

        Laptop_detalle::create([
            'id_detalle' => $request->id_detalle,
            'modelo' => $request->modelo,
            'numero_serie' => $request->numero_serie,
            'diagnostico' => $request->diagnostico ?? 'N/A',
            'acciones' => $request->acciones ?? 'N/A',
            'procesador' => $request->procesador,
            'tamano' => $request->tamano,
            'color' => $request->color,
            'capacidad' => $request->capacidad,
            'ram' => $request->ram,
            'cantidad' => 1,
            'status' => $request->status ?? 'N/A',
            'observaciones' => $request->observaciones ?? 'N/A',
            'entregado' => 0,
            'modificado_por' => auth()->user()->name,
            'id_titulo' => $id,
        ]);

        return redirect('/laptop/index/'. $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laptop = Laptop_detalle::where('numero_serie', $id)->first();

        //Retornar la vista para editar
        return view('embarques.laptops.edit',[
            'laptop' => $laptop
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Actualizar el registro
        $laptop = Laptop_detalle::where('numero_serie', $id)->first();

        $serie = $laptop->numero_serie;

        $this->validate($request,[
            'id_detalle' => 'required',
            'modelo' => 'required',
            'numero_serie' => 'required|alpha_num|unique:laptop_detalles,numero_serie',
            'procesador' => 'required',
            'tamano' => 'required',
            'color' => 'required',
            'capacidad' => 'required',
            'ram' => 'required',
            'cantidad' => 'required|numeric|between:1,1',
        ]);

        $laptop->modelo = $request->modelo;
        $laptop->numero_serie = $request->numero_serie;
        $laptop->diagnostico = $request->diagnostico;
        $laptop->acciones = $request->acciones;
        $laptop->procesador = $request->procesador;
        $laptop->tamano = $request->tamano;
        $laptop->color = $request->color;
        $laptop->capacidad = $request->capacidad;
        $laptop->ram = $request->ram;
        $laptop->cantidad = $request->cantidad;
        $laptop->status = $request->status;
        $laptop->observaciones = $request->observaciones;
        $laptop->save();

        return redirect('/laptop/index/' . $laptop->serie)->with('success', 'Registro actualizado existosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
