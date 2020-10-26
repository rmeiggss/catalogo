<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\CotizacionDetalle;
use App\Prueba;
use Illuminate\Http\Request;

class CotizacionDetalleController extends Controller
{
    public function index(){

    }

    public function list($id){
        $equipos = CotizacionDetalle::where(
                        ["COTIP_Codigo"=>$id])
                        ->orderBy("CODEP_Codigo")
                        ->get();   
        $objeto = array();
        foreach($equipos as $value){
            $equipo = $value;
            $equipo->pruebas = CotizacionDetalle::find($value->CODEP_Codigo)->pruebas;
            array_push($objeto,$equipo);
        }             
        return $objeto;
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
