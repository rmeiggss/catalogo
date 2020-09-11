<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\HorarioInstructor;
use App\Instructor;
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
        $instructors = Instructor::pluck('nombre', 'nombre');
        return view("admin.horario-instructor.create", compact('instructors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Validacion del Formulario */
        $request->validate([
            'nombre' => 'required',
            'fecha_inicial' => 'required',
            'hora_ini' => 'required',
            'hora_fi' => 'required'
        ]);

        HorarioInstructor::create([
            'nombre_instructor' => request('nombre'),
            'fecha_inicial' => request('fecha_inicial'),
            'hora_inicial' => request('hora_ini'),
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
        $instructors = Instructor::pluck('nombre', 'nombre');

        return view("admin.horario-instructor.edit", ['horarioinstructor' => $horarioinstructor], compact('instructors'));
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
        $horarioinstructor->fecha_inicial = $request->fecha_inicial;
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
