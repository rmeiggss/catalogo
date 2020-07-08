<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Producto;
use Redirect;
use App\Http\Requests\SaveCursoRequest;

class CursoController extends Controller
{
    public function index()
    {
        $productos = Producto::latest()->paginate(8);
        return view('admin.curso.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.curso.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'CURSOC_Nombre' => 'required',
            'CURSOC_Costo' => 'required',
            'CURSOC_Descripcion' => 'required',
        ]);

        Producto::create($request->all());

        return redirect("/curso");
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
        $producto = Producto::findOrFail($id);

        return view("admin.curso.edit")->withProducto($producto);
    }
    /*
    public function edit(Producto $producto)
    {
        return view("admin.curso.edit", ['producto' => $producto]);
    }*/

    public function update(Request $request, $id)
    //public function update(Producto $producto)
    {
        /*
        $request->validate([
            'CURSOC_Nombre' => 'required',
            'CURSOC_Descripcion' => 'required',
            'CURSOC_Costo' => 'required',
        ]);
        return Redirect::to("/curso"); */

        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        $producto->save();

        return \Redirect::to("/curso");

        /*
        $producto->CURSOC_Nombre = $request->CURSOC_Nombre;
        $producto->CURSOC_Descripcion = $request->CURSOC_Descripcion;
        $producto->CURSOC_Costo = $request->CURSOC_Costo;
        $producto->save();

        return \Redirect::to("/curso");*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::destroy($id);
        return Redirect::to("/curso");
    }
}
