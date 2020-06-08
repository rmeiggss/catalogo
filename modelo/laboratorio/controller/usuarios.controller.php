<?php 
require_once 'model/CLUsuarios.php';
session_start();
class UsuariosController
{
	private $modelusuarios;
	
	function __construct()
	{
            $this->modelusuarios = new Usuarios();
	}

	public function Index()
	{
            include_once 'views/login.php';
	}

	public function AccesoUsuarios()
	{
            $datauser = new Usuarios();
            $datauser->user_usuario = $_POST['username'];
            $datauser->pass_usuario = $_POST['password'];
            $fetch[] = $this->modelusuarios->AccesoUsuarios($datauser);
            if (isset($fetch) && $fetch[0]!=null) {
                $_SESSION['id_user_log'] = $fetch[0]['id_usuario'];
                $arr = array('flag' => "1", 'url' => "index.php?c=Cursos&a=index");
                echo json_encode($arr);
            }
            else{
                $arr = array('flag' => "0", 'msje' => "Usuario o contraseña incorrectos");
                echo json_encode($arr);
            }
	}

	public function CerrarSession()
	{
            if (isset($_SESSION['id_user_log'])) {
                unset($_SESSION['id_user_log']);
                header("Location: index.php");
            }
	}
}
?>