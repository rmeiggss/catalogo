<?
session_start();
$display='RELACION DE AUTORES';
$campos=array(
	array('autor.autor','Autor','10'),
	array('autor.paterno',' Paterno','10'),
	array('autor.materno',' Materno','10'),
	array('autor.nombre','Nombre','9'),
	array('autor.comentario','Comentario','15')
);
$primarykey='autor';
$sql="
		select 
		* from autor
		";
$sqlimprimir="select 
	'',
	autor.autor,
	autor.paterno,
    autor.materno
	";
$sqlcount="select count(*) from autor  where borrado='' ";
//$incremento=10;
include "include/cn.php";
$fileedit="autoreditar.php";
$fileself="listaautor.php";
$posfileedit="20,100,370,450";
$campoborrado="autor.borrado";
//$camposprn=3;
$borrar="delete from autor where autor=";
include "include/registros.php";
?>
