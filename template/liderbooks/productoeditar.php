<?php
include "libreria/cn.php";
require_once "config/config.inc.php";
$cn=mysql_connect($_servidor,$_usuario,$_clave) or die(mysql_error());
mysql_select_db($_bd);


$script="<style type='text/css'>";
$script.="body{background-color: transparent}";
$script.="</style>";
echo $script;
$id=$_GET['id'];
if($id=="")			die();
$cadena="select libro,imagen,titulo,precio from libro where libro='".$id."'";
$rs=mysql_query($cadena) or die(mysql_error());
$row=mysql_fetch_array($rs);
?>
<html>
    <title><?php echo TITULO;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" CONTENT="<?php echo DESCRIPCION;?>"/>
<meta NAME="keywords" CONTENT="<?php echo KEYWORDS;?>"/>
<meta NAME="Copyright" CONTENT="<?php echo COPYRIGHT;?>"/>
<meta NAME="Publisher" CONTENT="<?php echo PUBLISER;?>"/>
<meta NAME="Distribution" CONTENT="Global"/>
<meta NAME="Robots" CONTENT="All"/>
<link href="capuccino.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style><body bgcolor="">
<div align="center" valign="middle">
<table border='0' width='100'>
<tr height='100'>
	<td align="center">
		<a  href='editarproducto.php?libro=<?php echo $row['0'] ?>' target='_parent'><img src="<?=$row['1'];?>" width='85' height='120' border='0'></a>	</td>
</tr> 
<tr>
<td height="25" align="center" valign="middle" class="m2"><span class="Estilo3">
  <?=$row['2'];?>
</span></td>
</tr>
 <tr>
<td height="25" align="center" valign="middle" class="Estilo3 m9"><strong> S/. 
  <?=$row['3'];?>
</strong></td>
</tr>
<tr>
<td height="25" align="center" valign="middle">
<a href="carrito.php?id=<? echo $row['0'];?>" target="_parent"><img src="images/compraslinea.jpg" border="0" /></a></td>
 </tr>
</table>
</div>
</body>
</html>
<script>
function MM_openBrWindow(theURL,winName,features) 
{ 
  window.open(theURL,winName,features);
}
</script>