<?php

namespace App\Http\Controllers\Cliente;
use App\Http\Controllers\Controller;
use App\ServicioAcademico;
use Illuminate\Http\Request;
use Redirect;

class ServicioAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ServicioAcademico::create([
            'Universidad_Procedencia' => request('nombre'),
            'Nombre_Contacto' => request('nombre_contact'),
            'Correo_Electrónico_Contacto' => request('email'),
            'Celular_Contacto' => request('celular'),
            'Tipo_Servicio_Academico' => request('servicio'),
            'Descripcion_Servicio_Solicitado' => request('comment'),
        ]);

        return Redirect::to("/academico");
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
        //
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
        //
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
