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
            // $equipo->pruebas = CotizacionDetalle::find($value->CODEP_Codigo)->pruebas;
            $pruebas = CotizacionDetalle::find($value->CODEP_Codigo)->pruebas;

            $pruebas_object = array();
            foreach ($pruebas as $value2) {
                $prueba = $value2;

                if(file_exists($value2->Arch_Norma_Tecnica)){
                    $prueba->nombre_archivo = basename($value2->Arch_Norma_Tecnica);
                }else{
                    $prueba->nombre_archivo = null;
                }
                array_push($pruebas_object, $prueba);
            }

            $equipo->pruebas = $pruebas_object;

            if(file_exists($value->CODEC_Archivo_Descripcion_Equipo)){
                $equipo->nombre_archivo = basename($value->CODEC_Archivo_Descripcion_Equipo);
            }else{
                $equipo->nombre_archivo = null;
            }

            array_push($objeto,$equipo);
        }

        return $objeto;
    }

    public function create(){

    }

    public function delete($id)
    {
        Prueba::where('CODEP_Codigo',$id)->delete();
        $result = CotizacionDetalle::where('CODEP_Codigo',$id)->delete();
        if($result){
            return response()->json(['message'=>'Equipo y pruebas borrado']);
        }
        else{
            return response()->json(['message'=>'Ocurrio un error']);
        }
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
