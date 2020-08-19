<?php

namespace App\Http\Controllers\Cliente;
use App\Http\Controllers\Controller;
use App\Ensayo;
use App\Contacto;
use Illuminate\Http\Request;
use Redirect;

class SolicitanteController extends Controller
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
        return Redirect::to("/cot_ensayos");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ensayo::create([
            'SOLIC_Nombre' => request('nombre_solic'),
            'SOLIC_Ruc' => request('ruc_solic'),
            'SOLIC_Direccion' => request('direc_solic'),
            'SOLIC_Telefono' => request('celular_solic'),
            'SOLIC_Email' => request('email_solic'),
        ]);

        Contacto::create([
            'nombre_contacto' => request('nombre_contacto'),
            'email_contacto' => request('email_contacto'),
            'celular_contacto' => request('celular_contacto'),
            'user_id' => request('id'),
        ]);


        return Redirect::to("/cot_ensayos");
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
