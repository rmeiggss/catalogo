<?php
session_start();
$display='<STRONG>RELACION DE OFERTAS LABORALES</STRONG>';
$campos=array(
	array('tema.titulo','Titulo','30'),
	array('tema.visitas',' Visitas','10'),
	array('tema.tipo','Tipo','9'),
	array('tema.fecha','Fecha','15')
);
$primarykey='tema';
$sql="
		select 
		tema.titulo,
		tema.visitas,
		tema.tipo,
		tema.fecha
		from tema
		where estado=0
		";
		
$sqlimprimir="select 
	'',
	tema.titulo,
	tema.visitas,
    tema.tipo,
    tema.fecha
	";
$sqlcount="select count(*) from tema  where estado='0' ";
//$incremento=10;
include "include/cn.php";
$fileedit="lista_ofertas_editar.php";
$fileself="lista_ofertas.php";
$posfileedit="20,100,550,600";
$campoborrado="tema.estado";
//$camposprn=3;
//$borrar="delete from te where autor=";
include "include/registros.php";
?>
