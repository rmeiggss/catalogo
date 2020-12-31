<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Capacitacion;
use App\Prueba;
use Illuminate\Http\Request;

class CotizacionCapacitacionController extends Controller
{
    public function index(){

    }

    public function list($id){
        $capacitaciones = Capacitacion::where(
                        ["COTIP_Codigo"=>$id])
                        ->orderBy("COCAP_Codigo")
                        ->get();   
        $objeto = array();
        foreach($capacitaciones as $value){
            $capacitacion = $value;            
            array_push($objeto, $capacitacion);
        }                
        return $objeto;
    }

    public function create(){

    }

    public function delete($id)
    {
        $result = Capacitacion::where('COCAP_Codigo',$id)->delete();     
        if($result)
            return response()->json(['message'=>'¡La capacitación se actualizó correctamente!']);
        else
            return response()->json(['message'=>'Ocurrio un error']);        
    }

    public function destroy($id)
    {
        Capacitacion::destroy($id);
        return response()->json(['message'=>'Capacitación borrada']);
    }

    public function destroyById($id){
        Capacitacion::where('COTIP_Codigo',$id)->firstorfail()->delete();
        return response()->json(['message'=>'Capacitación borrada']); 
    }
}
