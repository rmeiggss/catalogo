<?php
session_start();
$display='RELACION DE LIBROS EN LA BIBLIOTECA';
$campos=array(
	array('categoria.categoria','Categoria','15'),
	array('categoria.nombre','Nombre','30')
);
$primarykey='categoria';
$sql="
		select 
		categoria,
		nombre
		from categoria
		";
$sqlimprimir="select 
	'',
	categoria.categoria,
	categoria.nombre
	";
$sqlcount="select count(*) categoria libro  where borrado='' ";
$incremento=10;
include "../libreria/cn.php";
$fileedit="categoriaeditar.php";
$fileself="listacategoria.php";
$posfileedit="20,100,250,580";
$campoborrado="categoria.borrado";
$borrar="delete from categoria where categoria=";
//$camposprn=3;
include "include/registros.php";
?>