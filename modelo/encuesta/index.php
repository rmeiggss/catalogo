<?php 
include_once 'model/CLConexion.php';

$controlador = 'encuesta';

if (!isset($_REQUEST['c'])) {
	include_once "controller/$controlador.controller.php";
	//CursosController
	$controlador = ucwords($controlador)."Controller";
	$controlador = new $controlador();

	$controlador->Index();
}else{

	$controlador = strtolower($_REQUEST['c']);
	include_once "controller/$controlador.controller.php";
	if (isset($_REQUEST['a'])) {
		$accion = $_REQUEST['a'];
	}

	$controlador = ucwords($controlador)."Controller";
	$controlador = new $controlador();
	//$controlador->$accion(); investigar si se puede hacer esto

	call_user_func(array($controlador,$accion));
}
?>