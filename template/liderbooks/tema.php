<?php
include "libreria/cn.php";
require_once "config/config.inc.php";
if(!isset($categoria)) 			$categoria="";
if(!isset($curso)) 			$curso="";
if(!isset($cursotema)) 			$cursotema="";
if(!isset($columna)) 			$columna="3";
$fila="";
$curso=$_REQUEST['curso'];
$cursotema=$_REQUEST['cursotema'];
$cn=mysql_connect($_servidor,$_usuario,$_clave) or die(mysql_error());
mysql_select_db($_bd);
$cadena="select 
		cursotema.contenido as contenido,
		curso.nombre as nombrecurso,
		cursotema.nombre as nombretema,
		curso.categoria as categoria 
		from cursotema 
		left join curso on cursotema.curso=curso.curso 
		where cursotema.cursotema='".$cursotema."' and cursotema.curso='".$curso."'";
$rs=mysql_query($cadena,$cn) or die(mysql_error());
while($row=mysql_fetch_array($rs))
{
	$contenido=$row['contenido'];
	$nombre=$row['nombretema'];
	$nombrecurso=$row['nombrecurso'];
	$categoria=$row['categoria'];
	$fila.="<tr>";
	$fila.="<td>$contenido</td>";
	$fila.="</tr>";
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
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
    <td height="141" colspan="2"><?include "header.php";?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="661" height="208" align="left" valign="top"><table width="100%" border="0">
      <tr>
        <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="curso.php?categoria=000001=">MATEMATICAS</a></th>
        <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="curso.php?categoria=000003">COMPUTACION</a></th>
        <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="curso.php?categoria=000002">INGLES</a></th>
      </tr>
    </table>
	  <table width="100%" border="0" align="center">
	  	<tr>
			<td><a href='curso.php?categoria=<?=$categoria;?>&curso=<?=$curso;?>'><?=$nombrecurso;?></a><?php echo ": $nombre";?></td>
		</tr>
		<?=$fila;?>
      </table>
	  <!--Aqui empieza el contenido-->
	<!--Aqui termina el contenido-->	</td>
    <td width="119" align="center" valign="top" bgcolor="#EBEBEB"><table border="0" cellspacing="0" cellpadding="0" width="100%">
      <tr>
        <td><?include "busqueda.php";?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><?include "categoria.php";?></td>
      </tr>
      <tr>
        <td height="90">&nbsp;</td>
      </tr>
      <tr>
        <td><hr /></td>
      </tr>
      <tr>
        <td height="51">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</body>
</html>
