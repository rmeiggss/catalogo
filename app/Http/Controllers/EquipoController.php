<?php

namespace App\Http\Controllers;

use App\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index(Request $request)
    {
        $equipo = Equipo::all();
        return $equipo;
    }

    public function store(Request $request)
    {
        $equipo = new Equipo();
        $equipo->nombre_eq = $request->nombre_eq;
        $equipo->descripcion_eq = $request->descripcion_eq;
        $equipo->cantidad_eq = $request->cantidad_eq;
        $equipo->fabricante_eq = $request->fabricante_eq;
        $equipo->descrip_tec_eq = $request->descrip_tec_eq;
        $equipo->url_tec_eq = $request->url_tec_eq;
        $equipo->arch_descrip_eq = $request->arch_descrip_eq;
        $equipo->estado_tec_eq = $request->estado_tec_eq;

        $equipo->save();
    }
    public function show(Request $request)
    {
        $equipo = Equipo::findOrFail($request->id);
        return $equipo;
    }

    public function update(Request $request)
    {
        $equipo = Equipo::findOrFail($request->id);

        $equipo->nombre_eq = $request->nombre_eq;
        $equipo->descripcion_eq = $request->descripcion_eq;
        $equipo->cantidad_eq = $request->cantidad_eq;
        $equipo->fabricante_eq = $request->fabricante_eq;
        $equipo->descrip_tec_eq = $request->descrip_tec_eq;
        $equipo->url_tec_eq = $request->url_tec_eq;
        $equipo->arch_descrip_eq = $request->arch_descrip_eq;
        $equipo->estado_tec_eq = $request->estado_tec_eq;

        $equipo->save();

        return $task;
    }

    public function destroy(Request $request)
    {
        $equipo = Equipo::destroy($request->id);
        return $equipo;
    }
}
