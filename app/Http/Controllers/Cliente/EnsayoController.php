<?php

namespace App\Http\Controllers;

use App\Ensayo;
use Illuminate\Http\Request;

class EnsayoController extends Controller
{
    public function index(Request $request)
    {
        $ensayo = Ensayo::all();
        return $ensayo;
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    public function store(Request $request)
    {
        $ensayo = new Ensayo();
        $ensayo->id = $request->id;
        $ensayo->nombre_eq = $request->nombre_eq;
        $ensayo->descripcion_eq = $request->descripcion_eq;
        $ensayo->cantidad_eq = $request->cantidad_eq;
        $ensayo->fabricante_eq = $request->fabricante_eq;
        $ensayo->descrip_tec_eq = $request->descrip_tec_eq;
        $ensayo->url_tec_eq = $request->url_tec_eq;
        $ensayo->arch_descrip_eq = $request->arch_descrip_eq;
        $ensayo->estado_tec_eq = $request->estado_tec_eq;

        $ensayo->save();
        //Esta función guardará las tareas que enviaremos mediante vuejs
    }
    public function show(Request $request)
    {
        $ensayo = Ensayo::findOrFail($request->id);
        return $ensayo;
        //Esta función devolverá los datos de una tarea que hayamos seleccionado para cargar el formulario con sus datos
    }

    public function update(Request $request)
    {
        $ensayo = Ensayo::findOrFail($request->id);

        $ensayo->id = $request->id;
        $ensayo->nombre_eq = $request->nombre_eq;
        $ensayo->descripcion_eq = $request->descripcion_eq;
        $ensayo->cantidad_eq = $request->cantidad_eq;
        $ensayo->fabricante_eq = $request->fabricante_eq;
        $ensayo->descrip_tec_eq = $request->descrip_tec_eq;
        $ensayo->url_tec_eq = $request->url_tec_eq;
        $ensayo->arch_descrip_eq = $request->arch_descrip_eq;
        $ensayo->estado_tec_eq = $request->estado_tec_eq;

        $ensayo->save();

        return $ensayo;
        //Esta función actualizará la tarea que hayamos seleccionado

    }

    public function destroy(Request $request)
    {
        $ensayo = Ensayo::destroy($request->id);
        return $ensayo;
        //Esta función obtendra el id de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }
}