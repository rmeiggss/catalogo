<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Cotizacion;
use App\CotizacionDetalle;
use App\Solicitante;
use Illuminate\Http\Request;
use Redirect;

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

    public function create()
    {
        $solicitantes = Solicitante::all();
        return view("admin.cotizacion.create",compact('solicitantes'));
    }

    public function store(Request $request)
    {
        //Grabamos la cabecera
        Cotizacion::create([
            'SOLIP_Codigo'   => $request->solicitante,
            'COTIC_Numero'   => $request->numero,
            'COTIC_Fecha'    => $request->fecha,
            'USUA_Codigo'    => $request->usuario,
            'COTIC_SubTotal' => $request->subtotal,
            'COTIC_Igv'      => $request->igv,
            'COTIC_Total'    => $request->total
        ]);
        //Grabamos detalle
        if(count($request->nombre)>0){
            foreach($request->nombre as $item=>$value){
                CotizacionDetalle::create([
                    "CODEC_NombreEquipo"   => $request->nombre[$item],
                    "CODEC_Descripcion"    => $request->descripcion[$item],
                    "CODEC_Fabricante"     => $request->fabricante[$item],
                    "CODEC_Cantidad"       => $request->cantidad[$item],
                    "CODEC_PrecioUnitario" => $request->unitario[$item],
                    "CODEC_SubTotal"       => $request->subtotaldet[$item]
                ]);
            }
        }
        return Redirect::to("/cotizacion");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        return view("admin.cotizacion.edit", ['cotizacion' => $cotizacion]);
    }

    public function update(Request $request, $id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        $cotizacion->COTIC_Numero = $request->numero;
        $cotizacion->COTIC_SubTotal = $request->subtotal;
        $cotizacion->COTIC_Total = $request->total;
        $cotizacion->save();
        return Redirect::to("/cotizacion");
    }

    public function destroy($id)
    {
        Cotizacion::destroy($id);
        return Redirect::to("/cotizacion");
    }
}
