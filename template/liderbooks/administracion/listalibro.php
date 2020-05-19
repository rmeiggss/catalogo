<?php
session_start();
$display='RELACION DE LIBROS EN LA BIBLIOTECA';
$campos=array(
	array('libro.titulo','Titulo','25'),
	array('categoria.nombre','Categoria','10'),
	array('autor.nombre','Autor','18'),
	array('editorial.nombre','Editorial','10'),
	array('libro.estado','Estado','8'),
	array('libro.precio','Precio','8')
);
$primarykey='libro';
$sql="
		select 
		libro.titulo as titulo,
		categoria.nombre as categoria,
		concat(autor.nombre,' ',autor.paterno) as autor,
		editorial.nombre as editorial,
		if(libro.estado='1','Activo','Inactivo'),
		libro.precio,
		libro.libro as libro
		from libro
		left join autor on libro.autor=autor.autor
		left join categoria on libro.categoria=categoria.categoria
		left join editorial on libro.editorial=editorial.editorial
		";
$sqlimprimir="select 
	'',
	libro.libro,
	libro.titulo,
    libro.autor
	";
$sqlcount="select count(*) from libro  where borrado='' ";
//$incremento=10;
include "include/cn.php";
$fileedit="listalibroeditar.php";
$fileself="listalibro.php";
$posfileedit="20,100,570,650";
$campoborrado="libro.borrado";
//$camposprn=3;
$borrar="delete from libro where libro=";
include "include/registros.php";
?>
