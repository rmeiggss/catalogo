<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Contacto;
use App\Role;
use Illuminate\Http\Request;
use Redirect;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = Contacto::all();
        return view('admin.contacto.index',compact('contactos'));
    }

    public function list(){
        $contactos = Contacto::join('solicitante','solicitante.SOLIP_Codigo','=','contacto.SOLIP_Codigo')->select()->get();
        return $contactos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Contacto::create([
            'SOLIP_Codigo'     => $request->solicitante,
            'nombre_contacto'  => $request->nombres,
            'correo_contacto'  => $request->email,
            'celular_contacto' => $request->celular
        ]);
        return Redirect::to("/contacto");
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
        $contacto = Contacto::findOrFail($id);
        return view("admin.contacto.edit", ['contacto' => $contacto]);
    }

    public function get($id){
        return Contacto::findOrFail($id);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
