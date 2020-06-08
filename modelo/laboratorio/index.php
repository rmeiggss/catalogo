<?php 
include_once 'model/CLConexion.php';

$controlador = 'usuarios';

if (!isset($_REQUEST['c'])) {
    include_once "controller/$controlador.controller.php";
    $controlador = ucwords($controlador)."Controller";
    $controlador = new $controlador();
    $controlador->Index();
}else{
    $controlador = strtolower($_REQUEST['c']);
    include_once "controller/$controlador.controller.php";
    if (isset($_REQUEST['a']))      $accion = $_REQUEST['a'];
    $controlador = ucwords($controlador)."Controller";
    $controlador = new $controlador();
    call_user_func(array($controlador,$accion));
}
?>