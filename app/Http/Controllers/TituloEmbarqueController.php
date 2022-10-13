<?php

namespace App\Http\Controllers;

use App\Models\Titulo_embarque;
use Illuminate\Http\Request;

class TituloEmbarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retornar la vista de los embarques
        return view('embarques.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retornar la vista para crear embarques
        return view('embarques.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titulo_embarque  $titulo_embarque
     * @return \Illuminate\Http\Response
     */
    public function show(Titulo_embarque $titulo_embarque)
    {
        //Retornar la vista para ver el embarque
        return view('embarques.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titulo_embarque  $titulo_embarque
     * @return \Illuminate\Http\Response
     */
    public function edit(Titulo_embarque $titulo_embarque)
    {
        //Retornar la vista para editar el embarque
        return view('embarques.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titulo_embarque  $titulo_embarque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titulo_embarque $titulo_embarque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titulo_embarque  $titulo_embarque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titulo_embarque $titulo_embarque)
    {
        //
    }
}
