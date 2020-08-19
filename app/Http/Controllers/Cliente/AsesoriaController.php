<?php

namespace App\Http\Controllers\Cliente;
use App\Http\Controllers\Controller;
use App\Asesoria;
use Illuminate\Http\Request;
use Redirect;

class AsesoriaController extends Controller
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
        return Redirect::to("/asesorias");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Asesoria::create([
            'Nombre_Empresa' => request('nombre_emp'),
            'Nombre_Contacto' => request('nombre_contact'),
            'Correo_Electrónico_Contacto' => request('email_contact'),
            'Celular_Contacto' => request('celular_contact'),
            'Nombre_Asesoria_Laboratorio' => request('asesoria'),
            'Descripcion_Asesoria' => request('comment'),
        ]);

        return Redirect::to("/asesorias");
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
