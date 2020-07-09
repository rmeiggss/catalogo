<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Cotizacion;
use Illuminate\Http\Request;

class CotizacionController extends Controller
{
    public function index()
    {

        /*if($request->user()->authorizeRoles(['admin'])){
            echo "hola";
        }*/

        $cotizaciones = Cotizacion::all();        
        return view('admin.cotizacion.index', compact('cotizaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.cotizacion.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*Cotizacion::create([
            'CURSOC_Nombre' => request('nombre'),
            'CURSOC_Descripcion' => request('descripcion'),
            'CURSOC_Costo' => request('costo'),
        ]);*/

        return Redirect::to("/cotizacion");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cotizacion  $cotizacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cotizacion  $cotizacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        return view("admin.cotizacion.edit", ['cotizacion' => $cotizacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cotizacion  $cotizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        $cotizacion->COTIC_Numero = $request->numero;
        $cotizacion->COTIC_SubTotal = $request->subtotal;
        $cotizacion->COTIC_Total = $request->total;
        $cotizacion->save();
        return Redirect::to("/cotizacion");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cotizacion  $cotizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cotizacion::destroy($id);
        return Redirect::to("/cotizacion");
    }
}
