<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Prueba;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index(){

    }

    public function list($id){
        $pruebas = Prueba::where(
                        ["CODEP_Codigo"=>$id])
                        ->orderBy("id_prueba_a_realizar")
                        ->get();                 
        return $pruebas;
    }

    public function create(){

    }

    public function store(Request $request){
        $objeto = [
            'CODEP_Codigo'       => $request->CODEP_Codigo,
            'Descripcion_Prueba' => $request->Descripcion_Prueba,
            'Descripcion_Norma'  => $request->Descripcion_Norma,
            'Norma_Asoc_Prueba'  => $request->Norma_Asoc_Prueba,
            'Costo'              => $request->Costo
        ];
        Prueba::create($objeto);
        return response()->json(['Se agrego una prueba']);  
    }

    public function edit(){

    }

    public function get(){

    }

    public function update(Request $request){
        $id = $request->id_prueba_a_realizar;
        $prueba = Prueba::findOrFail($id);
        $prueba->Descripcion_Prueba = $request->Descripcion_Prueba;
        $prueba->Norma_Asoc_Prueba = $request->Norma_Asoc_Prueba;
        $prueba->Descripcion_Norma = $request->Descripcion_Norma;
        $prueba->Costo = $request->Costo;
        if($prueba->save()){
            return response()->json(['Se actualizo el registro']); 
        }
        else{
            return response()->json(['Ocurrió un error']); 
        }
    }

    public function delete($id){
        $result = Prueba::find($id)->delete();
        if($result){
            return response()->json(['message'=>'Prueba borrado']);   
        }
        else{
            return response()->json(['message'=>'Ocurrio un error']);   ;
        }
    }
}
