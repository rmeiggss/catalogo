<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Redirect;

class UsuarioController extends Controller
{
    public function index(){
        //$usuarios = User::all();
        $usuarios = User::join('rol','rol.ROL_Codigo','=','users.ROL_Codigo')->select()->get(); 
        return view('admin.usuario.index',compact('usuarios'));
    }
    
    public function list(){
        $usuarios = User::join('rol','rol.ROL_Codigo','=','users.ROL_Codigo')->select()->get();
        return $usuarios;
    }
    
    public function create(){
        $rol = Role::pluck('ROL_Descripcion', 'ROL_Codigo');
        return view("admin.usuario.create", compact('rol'));
    }
    
    public function store(Request $request){

        /* Validacion del Formulario */
        $request->validate([
            'nombre' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            'rol' => 'required'
        ]);

        User::create([
            'name' => request('nombre'),
            'email' => request('email'),
            'password' => request('password'),
            'ROL_Codigo' => request('rol'),
        ]);

        return Redirect::to("/usuario");
    }
    
    public function show(User $usuario){
        
    }
    
    public function edit($id){
        $rol = Role::pluck('ROL_Descripcion', 'ROL_Codigo');
        $usuario = User::findOrFail($id);
        return view("admin.usuario.edit", ['usuario' => $usuario,'rol'=>$rol]);
    }
    
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->name = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->ROL_Codigo = $request->rol;
        $usuario->save();
        return Redirect::to("/usuario");
    }
    
    public function destroy($id)
    {
        User::destroy($id);
    }
}
