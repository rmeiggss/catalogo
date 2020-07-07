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
        Producto::create([
            "CURSOC_Nombre"=>$_REQUEST["nombre"],
            "CURSOC_Descripcion"=>$_REQUEST["descripcion"],
            "CURSOC_Costo"=>$_REQUEST["costo"]
        ]);
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

        return view("admin.curso.edit",["producto"=>$producto]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update($id, Request $request)
    {
        /*$producto = Producto::findOrFail($id);
        //$producto->update($request->all());
        $this->validate($request, [
            'CURSOC_Nombre' => 'required',
            'CURSOC_Costo' => 'required',
            'CURSOC_Descripcion' => 'required',
        ]);
        $input = $request->all();
        $product->fill($input)->save();
        return Redirect::to("/curso"); */

        $producto = Producto::find($id);
        $producto->update($request->all());
        $producto->save();

        return Redirect::to("/curso");
        //return redirect()->route('admin.curso.index', $producto);
    }

    /*
    public function update(Producto $producto, SaveCursoRequest $request)
    {
        $producto->update( $request->validated() );

        return redirect()->route('admin.curso.index', $producto);
    }
    */

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
