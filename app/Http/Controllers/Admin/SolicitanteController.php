<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Solicitante;
use Illuminate\Http\Request;

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
}
