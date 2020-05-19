<?php
include "../includes/configure.php";
include("libreria/cn.php");
$cn=mysqli_connect ($_servidor, $_usuario, $_clave,$_bd) or die (mysqli_error());
if (!isset($id)) 			$id="";
$cadena="select substr(nombre,1,850) as nombre,tema,fecha from tema where borrado='' and tipo='2' order by fecha desc";
$rs=mysqli_query($cn,$cadena);
$fila="";
while($row=mysqli_fetch_array($rs))
{
	$tema=$row['tema'];
	$nombre=$row['nombre'];
	$fecha=$row['fecha'];
	$fila.="<tr>";
	$fila.="<td align='right'>$fecha</td>";
	$fila.="</tr>";
	$fila.="<tr>";
	$fila.="<td>$nombre...</td>";
	$fila.="</tr>";
	$fila.="<tr>";
	$fila.="<td align='right' class='fontmartin5'><a href='comentario.php?tema=$tema'><strong>Ver mas</strong></a></td>";
	$fila.="</tr>";
	$fila.="<tr>";
	$fila.="<td>";
	$fila.="<hr width='97%' align='center'>";
	$fila.="<td>";
	$fila.="</tr>";
}
?>
<html>
<head>
<title><?php echo TITULO;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<META name="description" CONTENT="<?php echo DESCRIPCION;?>">
<META NAME="keywords" CONTENT="<?php echo KEYWORDS;?>">
<MeTA NAME="Language" CONTENT="Espa�ol">
<META NAME="Copyright" CONTENT="<?php echo COPYRIGHT;?>">
<META NAME="Publisher" CONTENT="<?php echo PUBLISER;?>">
<META NAME="Distribution" CONTENT="Global">
<META NAME="Robots" CONTENT="All">
<link rel="stylesheet" href="fontbld.css" type="text/css">
<link rel="stylesheet" href="form1.css" type="text/css">
<link rel="stylesheet" href="fontwht.css" type="text/css">
<script type="text/javascript" language="JavaScript1.2" src="stmenu.js"></script>
<script type="text/javascript" language="JavaScript1.2" src="js/jquery.min.js"></script>
<script type="text/javascript" language="JavaScript1.2" src="js/jquery.simplemodal.js"></script>
<script language="JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

//-->
</script>
<style type="text/css">
<!--
.form2 {  height: 18px; width: 65px; border: 1px #829089 solid; background-color: D8E4D8; font-family: verdana; font-size: 9px; color: 476154}
-->
</style>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
	color: #000000;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #000000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
body {
	background-color: #f6ecc8;
}
-->
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="1000" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align='center'>
<tr>
	<td colspan="3" align="left"><?php include "../cabecera.php";?></td>
</tr>
<tr>
	<td align="left" width="150px" valign="top" bgcolor="#f6ecc8"><?php include "../izquierdo.php";?></td>
	<td align="left" valign="top">
      <table width="100%" border="0" align="center">
	  	<?php echo $fila;?>
      </table>	
  </td>
	<td align="left" width="150px" valign="top" bgcolor="#f6ecc8"><?php include "../derecho.php";?></td>
</tr>
<tr>
	<td colspan='4'><?php include "pie.php";?></td>
</tr>
</table>   
</body>
</html>
