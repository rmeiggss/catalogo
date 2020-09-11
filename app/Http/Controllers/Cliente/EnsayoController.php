<?php

namespace App\Http\Controllers\Cliente;
use App\Http\Controllers\Controller;
use App\Solicitante;
use App\Contacto;
use App\Cotizacion;
use App\Equipo;
use Illuminate\Http\Request;
use Redirect;

class EnsayoController extends Controller
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
        //return Redirect::to("/cot_ensayos");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cotizacion::create([
            'SOLIP_Codigo'   => request('solicitante'),
            'COTIC_Numero'   => request('numero'),
            'COTIC_Fecha'    => request('fecha'),
            'USUA_Codigo'    => request('usuario'),
            'COTIC_SubTotal' => request('subtotal'),
            'COTIC_Igv'      => request('igv'),
            'COTIC_Total'    => request('total'),
            'COTIC_Correo1'  => request('correo1'),
            'COTIC_Correo2'  => request('correo2'),
            'COTIC_Correo3'  => request('correo3'),
            'COTIC_Correo4'  => request('correo4'),
        ]);

        Solicitante::create([
            'SOLIC_Nombre' => request('nombre_solic'),
            'SOLIC_Ruc' => request('ruc_solic'),
            'SOLIC_Direccion' => request('direc_solic'),
            'SOLIC_Telefono' => request('celular_solic'),
        ]);

        Contacto::create([
            'nombre_contacto' => request('nombre_contacto'),
            'email_contacto' => request('email_contacto'),
            'celular_contacto' => request('celular_contacto'),
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
