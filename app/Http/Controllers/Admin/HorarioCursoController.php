<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\HorarioCurso;
use App\Producto;
use App\Instructor;
use Illuminate\Http\Request;
use Redirect;

class HorarioCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horariocursos = HorarioCurso::latest()->paginate(8);

        return view('admin.horario-curso.index', compact('horariocursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::pluck('CURSOC_Nombre', 'CURSOC_Nombre');
        $instructors = Instructor::pluck('nombre', 'nombre');
        return view("admin.horario-curso.create", compact('productos'), compact('instructors'));

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
            'hora_fi' => 'required',
            'nombre_instructor' => 'required',
        ]);

        HorarioCurso::create([
            'nombre_curso' => request('nombre'),
            'fecha_inicial' => request('fecha_inicial'),
         /*    'fecha_final' => request('fecha_final'),
            'hora_inicial' => request('hora_in'),
            'hora_final' => request('hora_fi'), */
            'hora_inicial' => request('hora_ini'),
            'hora_final' => request('hora_fi'),
        ]);



        return Redirect::to("/horario-curso");
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
        $horariocurso = HorarioCurso::findOrFail($id);
        $productos = Producto::pluck('CURSOC_Nombre', 'CURSOC_Nombre');
        $instructors = Instructor::pluck('nombre', 'nombre');

        return view("admin.horario-curso.edit", ['horariocurso' => $horariocurso], compact('productos'), compact('instructors'));
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
        $horariocurso = HorarioCurso::findOrFail($id);

        $horariocurso->Nombre_Curso = $request->nombre;
        $horariocurso->fecha_inicial = $request->fecha_inicial;
        /* $horariocurso->fecha_final = $request->fecha_final;
        $horariocurso->hora_inicial = $request->hora_in;
        $horariocurso->hora_final = $request->hora_fi; */
        $horariocurso->hora_inicial = $request->hora_ini;
        $horariocurso->hora_final = $request->hora_fi;
        $horariocurso->save();

        return Redirect::to("/horario-curso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HorarioCurso::destroy($id);
        return Redirect::to("/horario-curso");
    }
}
