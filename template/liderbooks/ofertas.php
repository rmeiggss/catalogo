<?php
include "libreria/cn.php";
require_once "config/config.inc.php";
$cn=mysql_connect ($_servidor, $_usuario, $_clave) or die (mysql_error());
mysql_select_db ($_bd); 
if (!isset($id)) 			$id="";
include "libreria/variables.php";
$cadena="select substr(nombre,1,650) as nombre,tema,fecha from tema where borrado='' and tipo='2' order by fecha desc";
$rs=mysql_query($cadena,$cn) or die(mysql_error());
$fila="";
while($row=mysql_fetch_array($rs))
{
	$tema=$row['tema'];
	$nombre=$row['nombre'];
	$fecha=$row['fecha'];
	$fila.="<tr>";
	$fila.="<td bgcolor='#ff0000'>$nombre</td>";
	$fila.="</tr>";
	$fila.="<tr>";
	$fila.="<td align='right'>$fecha</td>";
	$fila.="</tr>";	
	$fila.="<tr>";
	$fila.="<td align='right' class='fontmartin5'><a href='ofertas_detalle.php?tema=$tema'><strong>Ver mas</strong></a></td>";
	$fila.="</tr>";
	$fila.="<tr>";
	$fila.="<td>";
	$fila.="<hr width='97%' align='center'>";
	$fila.="<td>";
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

-->
</style>
</head>

<body>
<table width="734" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
    
    <?php  ?><td height="141"><?include "header.php";?></td>
  </tr>
    <tr>
    <td height="30" colspan="2" class="font4" bgcolor="#EBEBEB">
    	<?php include "header_inferior.php";?>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="80%" height="208" align="right" valign="top">
	  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="5">
          <tr>
            <td><?php echo $fila;?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>    </td>
  </tr>
  <tr>
    <td><? include "pie.php";?></td>
  </tr>
</table>
</body>
</html>
