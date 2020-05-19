<?php
include "libreria/cn.php";
require_once "config/config.inc.php";
if(!isset($categoria)) 			$categoria="";
if(!isset($curso))  			$curso="";
if(!isset($columna)) 			$columna="3";
$fila="";
$fila2="";
$cn=mysql_connect($_servidor,$_usuario,$_clave) or die(mysql_error());
mysql_select_db($_bd);
if($categoria!='' && $curso=='')
{
	$cadena="select * from curso where categoria='".$categoria."'";
	$rs=mysql_query($cadena,$cn) or die(mysql_error());
	while($row=mysql_fetch_array($rs))
	{
		$nombre=$row['nombre'];
		$curso=$row['curso'];
		$fila.="<tr>";
		$fila.="<td><a href='curso.php?categoria=$categoria&curso=$curso'>$nombre</a></td>";
		$fila.="</tr>";
		$curso="";
	}
}
if($curso!='')
{
	$cadena="select 
			curso.nombre as nombrecurso,
			cursocategoria.nombre as nombrecategoria,
			curso.categoria as categoria
			from curso 
			left join cursocategoria on cursocategoria.cursocategoria=curso.categoria 
			where curso.curso='".$curso."'";
	$rs=mysql_query($cadena,$cn) or die(mysql_error());
	$row=mysql_fetch_array($rs);
	$nombrecurso=$row['nombrecurso'];
	$nombrecategoria=$row['nombrecategoria'];
	$categoria=$row['categoria'];
	$fila2.="<tr>";
	$fila2.="<td colspan='2'><a href='curso.php?categoria=$categoria'>$nombrecategoria</a>: $nombrecurso</td>";
	$fila2.="</tr>";
	$cadena="select * from cursotema where curso='".$curso."' order by cursotema";
	$rs=mysql_query($cadena,$cn) or die(mysql_error());
	$ii=1;
	while($row=mysql_fetch_array($rs))
	{
		$nombretema=$row['nombre'];
		$tema=$row['tema'];
		$curso=$row['curso'];
		$cursotema=$row['cursotema'];
		$fila2.="<tr>";
		$fila2.="<td align='left' width='4%'>$ii</td>";		
		$fila2.="<td align='left' width='96%'><a href='tema.php?curso=$curso&cursotema=$cursotema'>$nombretema</a></td>";
		$fila2.="</tr>";
		$ii++;
	}
}
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
	background-color: #000000;
}
.Estilo4 {color: #FFFFFF}
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
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
    <td height="141"><?include "header.php";?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="208" align="left" valign="top"><table width="100%" border="0">
      <tr>
        <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="curso.php?categoria=000001">MATEMATICAS</a></th>
        <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="curso.php?categoria=000003">COMPUTACION</a></th>
        <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="curso.php?categoria=000002">INGLES</a></th>
      </tr>
      <tr>
        <th colspan="3" align="center" valign="top" class="font1 Estilo4" scope="col">
			<iframe src="curso/idiomas/frances/index.htm" name="contenidocurso" width="100%" marginwidth="0" height="700" marginheight="0" align="top" scrolling="auto" frameborder="0"></iframe>
		</th>
      </tr>
    </table>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
