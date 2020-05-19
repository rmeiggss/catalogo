<?php 
include "libreria/cn.php";
include "libreria/variables.php";
require_once "config/config.inc.php";
$display='RESULTADOS DE SU BUSQUEDA';
$campos=array(
	array('libro.libro','Libro','12'),
	array('libro.titulo','Titulo','35'),
	array('autor.paterno','Autor','15'),
	array('libro.precio','Precio','12')
);
$primarykey='libro';
$sql="
		select 
		libro.libro as libro,
		libro.titulo as titulo,
		concat(autor.nombre,' ',autor.paterno) as autor,
		libro.precio,
		'Promocion' as trid
		from libro
		left join autor on libro.autor=autor.autor
		where libro.borrado=''
		";
$sqlimprimir="select 
	'',
	libro.libro,
	libro.titulo,
    libro.autor
	";
$sqlcount="select count(*) from libro  where borrado='' ";
$incremento=10;
$fileedit="editarproducto.php";
$fileself="resultado_busqueda.php";
$posfileedit="20,100,550,600";
$campoborrado="libro.borrado";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo TITULO;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" CONTENT="<?php echo DESCRIPCION;?>"/>
<meta NAME="keywords" CONTENT="<?php echo KEYWORDS;?>"/>
<meta NAME="Copyright" CONTENT="<?php echo COPYRIGHT;?>"/>
<meta NAME="Publisher" CONTENT="<?php echo PUBLISER;?>"/>
<meta NAME="Distribution" CONTENT="Global"/>
<meta NAME="Robots" CONTENT="All"/>
<link href="stylos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body
{
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo1 
{
	color: #0000FF;
	font-weight: bold;
}
.Estilo2 {color: #232651}
.Estilo3 
{
	color: #FFCC66;
	font-weight: bold;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}

-->
</style>
</head>

<body>
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
   <td height="141" colspan="2"><?php include "header.php";?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="80%" height="32" align="right" valign="top">&nbsp;</td>
    <td rowspan="2" align="center" valign="top" bgcolor="#EBEBEB"><table border="0" cellspacing="0" cellpadding="0" width="100%">
      <tr>
        <td><?php include "busqueda.php";?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="2" bgcolor="#006600"></td>
      </tr>
      <tr>
        <td bgcolor="#FEF9DE"><?php include "categoria.php";?></td>
      </tr>
      <tr>
        <td height="2" bgcolor="#006600"></td>
      </tr>
      <tr>
        <td height="10" align="center" valign="middle" bgcolor="#FFFFFF"></td>
      </tr>
      <tr>
        <td height="27" align="center" valign="middle" bgcolor="#FFFFFF"><?php include "compras.php";?></td>
      </tr>
      <tr>
        <td height="10" align="center" valign="middle" bgcolor="#FFFFFF"></td>
      </tr>
      <tr>
        <td height="45">&nbsp;</td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td height="51">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="104" align="right" valign="top"><table width="600" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#F7F7F7" scope="col"><?php include "resultado_busqueda_det.php"?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><?php include "pie.php"?></td>
  </tr>
</table>
</body>
</html>
