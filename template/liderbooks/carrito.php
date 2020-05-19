<?php
session_start();
include "libreria/cn.php";
include "libreria/variables.php";
require_once "config/config.inc.php";
if(!isset($categoria)) 			$categoria="";
if(!isset($columna)) 			$columna="3";
$cn=mysql_connect($_servidor,$_usuario,$_clave) or die(mysql_error());
mysql_select_db($_bd);
$categoria=$_REQUEST['categoria'];
if($categoria=="")
{
	$cadena="select nombre,imagen,resumen,categoria from categoria where borrado=''";
	$rs=mysql_query($cadena,$cn) or die(mysql_error()); 
	$tabla="<table border='0' width='100%' cellspacing='4' cellpadding='3'>";
	$tabla.="<tr>";
	while($row=mysql_fetch_array($rs))
	{

		$tabla.="<td class='m9' align='center' width='15%'>";
		$tabla.="<a href='producto.php?categoria=$row[3]'><img src='".$row['1']."' border='0' width='150' height='150'></img></a><br>";
		$tabla.="<a href='producto.php?categoria=$row[3]'>".$row['0']."</a>";
		$tabla.="</td>";
		//$tabla.="<td class='m9' align='left'>$row[2]</td>";

	}
	$tabla.="</tr>";
	$tabla.="</table>";
}
else
{
	$cadena="select nombre from categoria where categoria='".$categoria."' and borrado=''";
	$rs=mysql_query($cadena,$cn); 
	$row=mysql_fetch_array($rs);
	$categorianombre=$row['nombre'];
	$tabla="<table border='0' width='100%'>";
	$tabla.="<tr>";
	$tabla.="<td colspan='".$columna."' class='titulotabla' align='left'><a href='producto.php'>PRODUCTOS</a> | ".strtoupper($categorianombre)."</td>";
	$tabla.="</tr>";
	$cadena="
			select 
			autor.autor as autor,
			concat(autor.paterno,' ',autor.materno,' ',autor.nombre) as nombre,
			libro.libro as libro
			from libro
			left join autor on libro.autor=autor.autor
			where libro.borrado=''
			and libro.categoria='".$categoria."'
			and libro.estado!='0'
			group by autor
			";
	$rs=mysql_query($cadena) or die(mysql_error());
	while($row=mysql_fetch_array($rs))
	{
    	$autor='';
		$nombre=$row['1'];
		if($autor=="")		 break;
		$tabla.=muestra_producto($cadena,$autor,$categoria,$columna);
	}
	if($autor=="")			$tabla.=muestra_producto($cadena,'',$categoria,$columna);
	$tabla.="</table>";
	$linea="";
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
<style type="text/css">
<!--
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
<link href="stylos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo7 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 20px;
	color: #0066CC;
	font-weight: bold;
}
.Estilo9 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 13px;
}
-->
</style>
</head>

<body>
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
    <td height="141" colspan="3"><?php include "header.php";?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="3%" height="28" align="left" valign="top">&nbsp;</td>
    <td width="77%" align="left" valign="middle">
	
	<table cellspacing="0" cellpadding="0" width="100%" border="0">
	
     
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><span class="Estilo7">Carrito de Compras</span>
              <p class="Estilo9"  >Estos son los productos que ha a&ntilde;adido a su carrito de compras.</p>
            <p class="Estilo9"  >Si es un cliente registrado, por favor <a href="#">identif&iacute;quese</a> para mantener y   recuperar los libros escogidos.</p></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
    
    </table>
	
	</td>
    <td width="20%" rowspan="2" align="center" valign="top" bgcolor="#EBEBEB">
	  <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <tr>
        <td height="29" align="left" valign="top"><?php include "busqueda.php";?></td>
      </tr>
	   <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="2" bgcolor="#006600"></td>
      </tr>  
	  <tr>
        <td valign="top"  bgcolor="#FEF5D8"><?php include "categoria.php";?></td>
      </tr>
      <tr>
        <td height="90"><?php include "compras.php";?></td>
      </tr>
      <tr>
        <td><hr /></td>
      </tr>
      <tr>
        <td height="51">&nbsp;</td>
      </tr>
    </table>	</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="104" colspan="2" align="right" valign="top"><? include "shoping.php"; //=$tabla;?></td>
  </tr>
  <tr>
    <td colspan="3"><?php include "pie.php";?></td>
  </tr>
</table>
</body>
</html>