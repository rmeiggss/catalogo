<?php

namespace App\Http\Controllers\Cliente;
use App\Http\Controllers\Controller;

use App\Ensayo;
use App\Solicitante;
use App\Contacto;
use App\Cotizacion;
use App\TipoSolicitante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EnsayoController extends Controller
{
    public function index(Request $request)
    {

    }

    public function create(Request $request)
    {   /*
        $tipo_solicitantes = TipoSolicitante::all();
        return view('cot_ensayos', compact('tipo_solicitantes'));
        */
    }

    public function store(Request $request)
    {
        // Enlace de la tabla 'contacto' con la tabla 'cotizacion'
        $solicitante = new Solicitante();
        $solicitante->TIPSOLIP_Codigo = $request->SOLIC_id;
        $solicitante->SOLIC_Nombre = $request->SOLIC_Nombre;
        $solicitante->SOLIC_Ruc = $request->SOLIC_Ruc;
        $solicitante->SOLIC_Direccion = $request->SOLIC_Direccion;
        $solicitante->SOLIC_Telefono = $request->SOLIC_Telefono;
        $solicitante->SOLIC_Email = $request->SOLIC_Email;
        $solicitante->save();

        $contacto = $solicitante->contacto()->create([
            'nombre_contacto' => request('nombre_contacto'),
            'correo_contacto' => request('correo_contacto'),
            'celular_contacto' => request('celular_contacto'),
        ]);

        $cotizacion = $contacto->cotizacion()->create([
            'TIPOCOP_Codigo' => '1',
            'COTIC_Correo2' => request('COTIC_Correo2'),
            'COTIC_Correo3' => request('COTIC_Correo3'),
            'COTIC_Correo4' => request('COTIC_Correo4'),
            'COTIC_Correo1' => request('COTIC_Correo1'),
        ]);

        return redirect()->route('cot_ensayos');

    }
    public function show(Request $request)
    {/*
        $ensayo = Ensayo::findOrFail($request->CODEP_Codigo);
        return $ensayo;*/
    }

    public function update(Request $request)
    {/*
        $ensayo = Ensayo::findOrFail($request->CODEP_Codigo);

        $ensayo->CODEC_Nombre_Equipo = $request->CODEC_Nombre_Equipo;
        $ensayo->CODEC_Descripcion_Equipo = $request->CODEC_Descripcion_Equipo;
        $ensayo->CODEC_Cantidad = $request->CODEC_Cantidad;
        $ensayo->CODEC_Fabricante_Equipo = $request->CODEC_Fabricante_Equipo;
        $ensayo->CODEC_Descripcion_Ficha_Tecnica_Equipo = $request->CODEC_Descripcion_Ficha_Tecnica_Equipo;
        $ensayo->CODEC_Url_Ficha_Tecnica_Equipo = $request->CODEC_Url_Ficha_Tecnica_Equipo;
        $ensayo->CODEC_Archivo_Descripcion_Equipo = $request->CODEC_Archivo_Descripcion_Equipo;

        $ensayo->save();

        return $ensayo;*/
    }

    public function destroy(Request $request)
    {/*
        $ensayo = Ensayo::destroy($request->CODEP_Codigo);
        return $ensayo;*/
    }
}