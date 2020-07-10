<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        //$usuarios = User::all();
        $usuarios = User::join('rol','rol.ROL_Codigo','=','users.ROL_Codigo')->select()->get();
        return view('admin.usuario.index',compact('usuarios'));
    }
    
    public function create(){
        
    }
    
    public function store(Request $request){
        
    }
    
    public function show(User $usuario){
        
    }
    
    public function edit(User $usuario){
        
    }
    
    public function update(Request $request, Cotizacion $cotizacion)
    {
        //
    }
    
    public function destroy(Cotizacion $cotizacion)
    {
        //
    }
}
