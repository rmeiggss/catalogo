<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\HorarioInstructor;
use Illuminate\Http\Request;
use Redirect;

class HorarioInstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarioinstructors = HorarioInstructor::latest()->paginate(8);

        return view('admin.horario-instructor.index', compact('horarioinstructors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.horario-instructor.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        HorarioInstructor::create([
            'nombre_instructor' => request('nombre'),
            'semana_labor' => request('semana'),
            'dia_labor' => request('dia'),
            'hora_inicial' => request('hora_in'),
            'hora_final' => request('hora_fi'),
        ]);

        return Redirect::to("/horario-instructor");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horarioinstructor = HorarioInstructor::findOrFail($id);

        return view("admin.horario-instructor.edit", ['horarioinstructor' => $horarioinstructor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $horarioinstructor = HorarioInstructor::findOrFail($id);

        $horarioinstructor->nombre_instructor = $request->nombre;
        $horarioinstructor->semana_labor = $request->semana;
        $horarioinstructor->dia_labor = $request->dia;
        $horarioinstructor->hora_inicial = $request->hora_in;
        $horarioinstructor->hora_final = $request->hora_fi;

        $horarioinstructor->save();

        return Redirect::to("/horario-instructor");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HorarioInstructor::destroy($id);
        return Redirect::to("/horario-instructor");
    }
}
