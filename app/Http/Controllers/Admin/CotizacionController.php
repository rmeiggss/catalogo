<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\UploadController as FileManager;
use App\Cotizacion;
use App\Contacto;
use App\CotizacionDetalle;
use App\User;
use App\Solicitante;
use App\Prueba;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Redirect;

class CotizacionController extends Controller
{
    public function exportPdf()
    {
        $cotizaciones = Cotizacion::get();
        $cotizacion_detalle = CotizacionDetalle::get();
        $usuario = User::get();
        $solicitante = Solicitante::get();
        $pdf = PDF::loadView('pdf.cotizaciones', compact('cotizaciones'), compact('cotizacion_detalle'), compact('usuario'), compact('solicitante'));

        return $pdf->download('cotizaciones-list.pdf');
    }

    public function index()
    {
        $cotizaciones = Cotizacion::orderBy('COTIC_Numero')->get();
        return view('admin.cotizacion.index', compact('cotizaciones'));
    }

    public function list()
    {
        $cotizaciones =
            Cotizacion::join('contacto', 'contacto.id_contacto', '=', 'cotizacion.id_contacto')
            ->join('solicitante', 'solicitante.SOLIP_Codigo', '=', 'contacto.SOLIP_Codigo')
            ->select('cotizacion.*', 'solicitante.SOLIC_Nombre', 'contacto.*')
            ->where('cotizacion.TIPOCOP_Codigo', 1)
            ->get();
        return $cotizaciones;
    }

    public function create()
    {
        $solicitantes = Solicitante::all();
        $usuarios     = User::all();
        $cotizacion   = new Cotizacion();
        return view("admin.cotizacion.create", compact('solicitantes', 'usuarios', 'cotizacion'));
    }
    private function checkTempFile(object $archivo)
    {
        return (isset($archivo) && $archivo != null && $archivo != "null");
    }
    public function store(Request $request)
    {
        //Grabamos la cabecera
        // $fecha = Carbon::createFromFormat('d/m/Y',$request->fecha)->format('Y-m-d');
        $objCotizacion = [
            'id_contacto'                => $request->contacto,
            'COTIC_Numero'               => $request->numero,
            'COTIC_Fecha_Cotizacion' => $request->fecha,
            'USUA_Codigo'            => $request->usuario,
            'COTIC_SubTotal'         => $request->subtotal,
            'COTIC_Igv'              => $request->igv,
            'COTIC_Total'            => $request->total,
            'COTIC_Correo1'          => isset($request->correo1) ? $request->correo1 : "",
            'COTIC_Correo2'          => isset($request->correo2) ? $request->correo2 : "",
            'COTIC_Correo3'          => isset($request->correo3) ? $request->correo3 : "",
            'COTIC_Correo4'          => isset($request->correo4) ? $request->correo4 : "",
            'TIPOCOP_Codigo'         => 1
        ];

        $cot = Cotizacion::create($objCotizacion);

        $equipos = $request->equipos;

        if (isset($equipos) && count($equipos) > 0) {
            foreach ($equipos as $item => $value) {
                $archivo = $value["tempFile"];

                $file_result_equipo = null;
                if (isset($archivo) && $archivo != null && $archivo != "null")
                    $file_result_equipo = FileManager::saveFile($archivo, "I");

                $equipo = CotizacionDetalle::create([
                    'COTIP_Codigo'             => $cot->COTIP_Codigo,
                    "CODEC_Nombre_Equipo"      => $value["CODEC_Nombre_Equipo"],
                    "CODEC_Descripcion_Equipo" => $value["CODEC_Descripcion_Equipo"],
                    "CODEC_Fabricante_Equipo"  => $value["CODEC_Fabricante_Equipo"],
                    "CODEC_Cantidad"           => $value["CODEC_Cantidad"],
                    "CODEC_Costo"              => $value["CODEC_Costo"],
                    "CODEC_SubTotal"           => $value["CODEC_Cantidad"] * $value["CODEC_Costo"],
                    "CODEC_Descripcion_Ficha_Tecnica_Equipo" => $value["CODEC_Descripcion_Ficha_Tecnica_Equipo"],
                    "CODEC_Url_Ficha_Tecnica_Equipo"         => $value["CODEC_Url_Ficha_Tecnica_Equipo"],
                    "CODEC_Archivo_Descripcion_Equipo"       => (isset($archivo) && $archivo != null && $archivo != "null") ? $file_result_equipo->getPath() : null
                ]);
                $pruebas = $value["pruebas"];
                //Grabamos las pruebas
                if (isset($pruebas) && count($pruebas) > 0) {
                    foreach ($pruebas as $value2) {
                        $file_result_prueba = null;
                        if (isset($value2["tempFile"]) && $value2["tempFile"] != null && $value2["tempFile"] != "null")
                            $file_result_prueba = FileManager::saveFile($value2["tempFile"], "I");

                        $prueba = Prueba::create([
                            "CODEP_Codigo"       => $equipo->CODEP_Codigo,
                            "Descripcion_Prueba" => $value2["Descripcion_Prueba"],
                            "Descripcion_Norma"  => $value2["Descripcion_Norma"],
                            "Norma_Asoc_Prueba"  => $value2["Norma_Asoc_Prueba"],
                            "Costo"              => $value2["Costo"],
                            "Arch_Norma_Tecnica" => (isset($value2["tempFile"]) && $value2["tempFile"] != null && $value2["tempFile"] != "null") ? $file_result_prueba->getPath() : null,
                        ]);
                    }
                }
            }
        }
        return response()->json(['¡La cotización se guardó correctamente!']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $solicitantes = Solicitante::all();
        $usuarios     = User::all();
        $cotizacion = Cotizacion::findOrFail($id);
        return view("admin.cotizacion.edit", compact('cotizacion', 'solicitantes', 'usuarios'));
    }

    public function get($id)
    {
        return Cotizacion::findOrFail($id);
    }

    public function update(Request $request)
    {
        //Actualiza cabecera
        $id = $request->id_cotizacion;
        $cotizacion = Cotizacion::findOrFail($id);
        $cotizacion->COTIC_Fecha_Cotizacion = $request->fecha;
        $cotizacion->id_contacto            = $request->contacto;
        $cotizacion->USUA_Codigo            = $request->usuario;
        $cotizacion->COTIC_SubTotal         = $request->subtotal;
        $cotizacion->COTIC_Igv              = $request->igv;
        $cotizacion->COTIC_Total            = $request->total;
        $cotizacion->save();
        //Grabamos equipos
        if(isset($request->equipos)){
            #region Eliminación de todos los equipos con sus pruebas.
            $equipos = CotizacionDetalle::where('COTIP_Codigo', $id)->get();
            foreach($equipos as $value){
                $equipo = $value->CODEP_Codigo;
                Prueba::where('CODEP_Codigo',$equipo)->delete();
            }
            CotizacionDetalle::where('COTIP_Codigo',$id)->delete();
            #endregion 
            if(count($request->equipos)>0){
                foreach($request->equipos as $item=>$value){
                    $archivo = $value["tempFile"];

                    $file_result_equipo = null;
                    if (isset($archivo) && $archivo != null && $archivo != "null")
                            $file_result_equipo = FileManager::saveFile($archivo, "I");
                    $equipo = CotizacionDetalle::create([
                        "COTIP_Codigo"                           => $id,
                        "CODEC_Nombre_Equipo"                    => $value["CODEC_Nombre_Equipo"],
                        "CODEC_Descripcion_Equipo"               => $value["CODEC_Descripcion_Equipo"],
                        "CODEC_Fabricante_Equipo"                => $value["CODEC_Fabricante_Equipo"],
                        "CODEC_Cantidad"                         => $value["CODEC_Cantidad"],
                        "CODEC_Costo"                            => $value["CODEC_Costo"],
                        "CODEC_SubTotal"                         => $value["CODEC_Cantidad"]*$value["CODEC_Costo"],
                        "CODEC_Descripcion_Ficha_Tecnica_Equipo" => $value["CODEC_Descripcion_Ficha_Tecnica_Equipo"],
                        "CODEC_Url_Ficha_Tecnica_Equipo"         => $value["CODEC_Url_Ficha_Tecnica_Equipo"],
                        "CODEC_Archivo_Descripcion_Equipo"       => (isset($archivo) && $archivo != null && $archivo != "null") ? $file_result_equipo->getPath() : $value["CODEC_Archivo_Descripcion_Equipo"]
                    ]);
                    $pruebas = $value["pruebas"];
                    //Grabamos las pruebas
                    if(count($pruebas)>0){
                        foreach($pruebas as $value2){
                            $file_result_prueba = null;
                            if (isset($value2["tempFile"]) && $value2["tempFile"] != null && $value2["tempFile"] != "null")
                                    $file_result_prueba = FileManager::saveFile($value2["tempFile"], "I");
                            $pruebas = Prueba::create([
                                "CODEP_Codigo"       => $equipo->CODEP_Codigo,
                                "Descripcion_Prueba" => $value2["Descripcion_Prueba"],
                                "Descripcion_Norma"  => $value2["Descripcion_Norma"],
                                "Norma_Asoc_Prueba"  => $value2["Norma_Asoc_Prueba"],
                                "Costo"              => $value2["Costo"],
                                "Arch_Norma_Tecnica" => (isset($value2["tempFile"]) && $value2["tempFile"] != null && $value2["tempFile"] != "null") ? $file_result_prueba->getPath() : $value2["Arch_Norma_Tecnica"],
                            ]);
                        }
                    }
                }
            }
        }
        return response()->json(['¡La cotización se actualizó correctamente!']);
    }

    public function delete($id)
    {
        $equipos = CotizacionDetalle::where('COTIP_Codigo', $id)->get();
        foreach ($equipos as $value) {
            $equipo = $value->CODEP_Codigo;
            Prueba::where('CODEP_Codigo', $equipo)->delete();
        }
        CotizacionDetalle::where('COTIP_Codigo', $id)->delete();
        $result  = Cotizacion::find($id)->delete();
        if ($result) {
            return response()->json(['message' => '¡Cotización eliminada!']);
        } else {
            return response()->json(['message' => '¡Ocurrió un error!']);
        }
    }
}
