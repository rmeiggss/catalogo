<?php
include "../libreria/cn.php";
$cn=mysql_connect ($_servidor, $_usuario, $_clave) or die (mysql_error());
mysql_select_db ($_bd);
if($_POST['accion']=='grabar')
{
	if($_POST['modo']=='n')
	{
		$titulo=$_POST['titulo'];
		$descripcion=$_POST['descripcion'];
		$visitas=0;
		$fecha=date("Y-m-d h:i:s",time());
		$tipo=2;
		$sql_tem="insert into tema (titulo,nombre,tipo,fecha) values ('$titulo','$descripcion','$tipo','$fecha')";
		mysql_query($sql_tem);
	}
	elseif($_POST['modo']=='actualizar')
	{
		$sql_tem2="update tema set titulo='',nombre='',tipo='',fecha='' where tema='".$codigo."'";
		mysql_query($sql_tem2);
	}
}
//Muestro los datos grabados en la bd
$sql_tem3="select * from tema where estado='0'";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" language="JavaScript1.2" src="stmenu.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrador :::: Interfase Computer SAC</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
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
<link href="../style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {font-family: Arial, Helvetica, sans-serif}
.Estilo9 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.Estilo10 {font-size: 12px}
.Estilo11 {font-weight: bold}
.Estilo4 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #993300;
	font-weight: bold;
}
-->
</style>
</head>

<body  bgcolor="#F8F8F8" >
<form method="post" enctype="multipart/form-data" name="a">
<table width="100%" border="0" align="center">
<tr>
	<td width="75%">
		         <table width="100%" height="32" border="0" cellpadding="0" cellspacing="0">
                   <tr bgcolor="#FFE3AA">
                     <th width="645" height="32" align="left" scope="col"><span class="Estilo4">
                       OFERTA LABORAL</span></th>
                   </tr>
                 </table>
		         <table width="592" border="0" align="center" cellpadding="2" cellspacing="4">
      		      <tr >
      		        <td align="left" valign="middle" class="m16">&nbsp;</td>
      		        <td >&nbsp;</td>
      		        <td >&nbsp;</td>
   		           </tr>
    		        <tr>
    		          <td align="left" valign="top" class="Estilo10 Estilo1 m1"><strong>Titulo</strong></td>
    		          <td align="left" valign="top" class="m1">
						<textarea name="titulo" id="titulo" cols="50" rows="4"><?=$titulo;?></textarea>
					  </td>
   		            </tr>
		            <tr>
						<td align="left" valign="middle" class="m1 Estilo1 Estilo10">&nbsp;</td>
						<td align="left" valign="top" class="m1"><span class="Estilo9">
						</span></td>
					    <td align="left" valign="top" class="m1 Estilo1 Estilo10">&nbsp;</td>
		            </tr>
		            <tr>
						<td align="left" valign="top" class="Estilo10 Estilo1 m1"><strong>Descripci&oacute;n </strong></td>
						<td colspan="2" align="left" valign="top" class="m1"><span class="Estilo9">
						  <textarea name="descripcion" ID='descripcion' cols="50" rows="15"><?=$descripcion;?>
						</textarea>
						  </span> </td>
		            </tr>
					<tr style="display:none;">
						<td class="m1 Estilo1 Estilo10">&nbsp;</td>
     			       <td>
			  				  <span class="Estilo9">
			  				  <input name="modo" type="text" value=""> 			      
			  				  </span></td>
		               <td>&nbsp;</td>
					</tr>
	               <tr>
						<td>&nbsp;</td>
				      <td class="m1"><div align="center">
  <input type="button" name="Ingresar" value="Grabar" onclick="enviar()" />
  &nbsp;&nbsp;&nbsp;
				        <input type="button" value="Salir" onclick="window.opener.recarga();window.close();" />
				        </div></td>
	               </tr></table>
	<div align="right"></div><table width="592" border="0" align="center" cellpadding="2" cellspacing="4">
      </table>
</form>
</body>
</html>

<script>
function enviar()
{
	var rutaimage=document.a.image.value;
	if(rutaimage==""){rutaimage="<?=$rutaimage;?>"};
	document.a.rutaimage.value=rutaimage;
	document.a.modo.value="Grabar";
	document.a.submit();
}
function editacategoria()
{
	window.open('categoriaeditar.php?modo=a','','width=300,height=400');
}
function editaautor()
{
	window.open('autoreditar.php?modo=a','','width=300,height=400');
}

</script>
