<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\CotizacionDetalle;
use Illuminate\Http\Request;

class CotizacionDetalleController extends Controller
{
    public function index(){

    }

    public function list($id){
        $cotizacionesdetalle = CotizacionDetalle::where(
                        ["COTIP_Codigo"=>$id])
                        ->orderBy("CODEP_Codigo")
                        ->get();
        return $cotizacionesdetalle;
    }

    public function create(){

    }

    public function destroy($id)
    {
        CotizacionDetalle::destroy($id);
        return response()->json(['message'=>'Cotizaciondetalle borrado']);        
    }

    public function destroyById($id){
        CotizacionDetalle::where('COTIP_Codigo',$id)->firstorfail()->delete();
        return response()->json(['message'=>'Cotizaciondetalle borrado']); 
    }
}
