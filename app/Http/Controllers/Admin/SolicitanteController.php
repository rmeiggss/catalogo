<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Solicitante;
use Illuminate\Http\Request;
use Redirect;

class SolicitanteController extends Controller
{	
    public function index()
    {
        $solicitantes = Solicitante::latest()->paginate(8);
        return view('admin.solicitante.index',compact('solicitantes'));
    }
    
    public function create(){
        return view('admin.solicitante.create');
    }
    
    public function store(Request $request){
        Solicitante::create([
            'TIPSOLIP_Codigo'  => request('tipo'),
            'UBIGP_Codigo'     => request('ubigeo'),
            'SOLIC_Nombre'     => request('nombre'),
            'SOLIC_Ruc'        => request('ruc'),
            'SOLIC_Direccion'  => request('direccion'),
            'SOLIC_Telefono'   => request('telefono'),
            'SOLIC_Email'      => request('email'),
            'SOLIC_FlagEstado' => request('estado')
        ]);
        return Redirect::to("/solicitante");
    }
    
    public function edit($id){
        $solicitante = Solicitante::findOrFail($id);
        return view("admin.solicitante.edit",['solicitante' => $solicitante]);
    }
    
    public function update(Request $request,$id){
        $solicitante = Solicitante::findOrFail($id);
        $solicitante->TIPSOLIP_Codigo = $request->tipo;
        $solicitante->UBIGP_Codigo    = $request->ubigeo;
        $solicitante->SOLIC_Nombre    = $request->nombre;
        $solicitante->SOLIC_Ruc       = $request->ruc;
        $solicitante->SOLIC_Direccion = $request->direccion;
        $solicitante->SOLIC_Telefono  = $request->telefono;
        $solicitante->SOLIC_Email     = $request->email;
        $solicitante->save();
        return redirect::to('/solicitante');
    }
    
    public function destroy($id){
        Solicitante::destroy($id);
        return Redirect::to("/solicitante");
    }
}
