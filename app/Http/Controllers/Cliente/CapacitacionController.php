<?php

namespace App\Http\Controllers\Cliente;
use App\Http\Controllers\Controller;

use App\Ensayo;
use App\Solicitante;
use App\Contacto;
use App\Cotizacion;
use App\Capacitacion;
use App\TipoSolicitante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;

class CapacitacionController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        // Guardamos la tabla "solicitante"
        $solicitante = new Solicitante();
        $solicitante->TIPSOLIP_Codigo = $request->solicitante['TIPSOLIP_Codigo'];
        $solicitante->UBIGP_Codigo = $request->solicitante['UBIGP_Codigo'];
        $solicitante->SOLIC_Nombre = $request->solicitante['SOLIC_Nombre'];
        $solicitante->SOLIC_Ruc = $request->solicitante['SOLIC_Ruc'];
        $solicitante->SOLIC_Direccion = $request->solicitante['SOLIC_Direccion'];
        $solicitante->SOLIC_Telefono = $request->solicitante['SOLIC_Telefono'];
        $solicitante->SOLIC_Email = $request->solicitante['SOLIC_Email'];
        $solicitante->SOLIC_FlagEstado = '1';
        $solicitante->save();

        // // Enlace de la tabla 'solicitante' con la tabla 'contacto'
        $contacto = $solicitante->contacto()->create([
            'nombre_contacto' => $request->contacto['nombre_contacto'],
            'correo_contacto' => $request->contacto['correo_contacto'],
            'celular_contacto' => $request->contacto['celular_contacto']
        ]);

        // // Enlace de la tabla 'contacto' con la tabla 'cotizacion'
        $cotizacion = $contacto->cotizacion()->create([
            'TIPOCOP_Codigo' => '3',
            'COTIC_Correo2' => $request->cotizacion['COTIC_Correo1'],
            'COTIC_Correo3' => $request->cotizacion['COTIC_Correo2'],
            'COTIC_Correo4' => $request->cotizacion['COTIC_Correo3'],
            'COTIC_Correo1' => $request->cotizacion['COTIC_Correo4']
        ]);

        //Grabamos capacitaciones        
        if (isset($request->capacitaciones)) {
            if (count($request->capacitaciones) > 0) {
                foreach ($request->capacitaciones as $value) {
                    $capacitacion = Capacitacion::create([
                        'COTIP_Codigo'                  => $cotizacion->COTIP_Codigo,
                        'id_curso'                      => $value["id_curso"],
                        'COCAC_Cantidad'                => $value["COCAC_Cantidad"],
                        'COCAC_Detalle_Curso_Cotizar'   => $value["COCAC_Detalle_Curso_Cotizar"],
                        'COCAC_Horario_Tentativo_Curso' => $value["COCAC_Horario_Tentativo_Curso"],
                        'COCAC_Lugar_Capacitacion'      => $value["COCAC_Lugar_Capacitacion"]
                    ]);       
                }
            }
        }
        return response()->json(['¡La cotización se guardó correctamente!']);
    }

    public function edit($id)
    {

    }

    public function destroy($id)
    {

    }
}