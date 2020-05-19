<?php
include "../libreria/cn.php";
$cn=mysql_connect ($_servidor, $_usuario, $_clave) or die (mysql_error());
mysql_select_db ($_bd);
$accion=$_REQUEST['accion'];
$modo=$_REQUEST['modo'];
$codigo=$_REQUEST['codigo'];
$titulo=$_REQUEST['titulo'];
$categoria=$_REQUEST['categoria'];
$autor=$_REQUEST['autor'];
$rutaimage=$_REQUEST['rutaimage'];
$precio=$_REQUEST['precio'];
$descripcion=$_REQUEST['descripcion'];
$estado=$_REQUEST['estado'];
$libro=$_REQUEST['libro'];
$editorial=$_REQUEST['editorial'];
$download=$_REQUEST['download'];
$tag_download=$_REQUEST['tag_download'];
if($modo=="Grabar" && $accion=="e")
{
	$cadena="update libro set borrado='S' where libro='".$libro."'";
	mysql_query($cadena,$cn) or die(mysql_error());
}
if($modo=="Grabar" && ($accion=="m" || $accion=="a"))
{
	if($_FILES['image']['size']>0)
	{
		$nombreimage=$_FILES['image']['name'];
		$tempimage=$_FILES['image']['tmp_name'];
		$rutaimage="images/libros/".basename($nombreimage);
		$destinoimage="../".$rutaimage;
		copy($tempimage,$destinoimage);
	}
	if($codigo<>"")
	{
		$cadena="update libro set titulo='".$titulo."',categoria='".$categoria."',autor='".$autor."',imagen='".$rutaimage."',archivo='',precio='".$precio."',resumen='".$descripcion."',estado='".$estado."',editorial='".$editorial."',tag_download='".$tag_download."',download='".$download."' where libro='".$codigo."'";
	}
	else
	{
		$cadena="select max(libro) from libro";
		$rs=mysql_query($cadena,$cn) or die(mysql_error());
		$row=mysql_fetch_array($rs);
		$libro=$row['0']+1;
		$libro=str_pad($libro,6,0,STR_PAD_LEFT);
		$cadena="insert into libro (libro,titulo,autor,imagen,archivo,precio,resumen,categoria,editorial,tag_download,download) values ('".$libro."','".$titulo."','".$autor."','".$rutaimage."','','".$precio."','".$descripcion."','".$categoria."','".$editorial."','".$tag_download."','".$download."')";
		$codigo=$libro;
	}
	//echo $cadena;
	mysql_query($cadena,$cn) or die(mysql_error());
}
$cadena="select * from libro where libro='".$codigo."'";
$rs=mysql_query($cadena,$cn) or die(mysql_error());
$numero=mysql_num_rows($rs);
$row=mysql_fetch_array($rs);
$libro=$row['libro'];
$titulo=$row['titulo'];
$autor=$row['autor'];
$categoria=$row['categoria'];
$precio=number_format($row['precio'],2);
$rutaimage=$row['imagen'];
$estado=$row['estado'];
$descripcion=$row['resumen'];
$editorial=$row['editorial'];
$tag_download=$row['tag_download'];
$download=$row['download'];

if($estado=="")		$estado=1;
$varcategoria=cargaselect("select categoria,nombre from categoria where borrado='' order by nombre",$cn,$categoria,true);
$varautor=cargaselect("select autor,concat(nombre,' ',paterno,' ',materno) as nom from autor where borrado='' order by nom",$cn,$autor,true);
$vareditorial=cargaselect("select editorial,nombre from editorial order by nombre",$cn,$editorial,true);
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
                       <?PHP if($accion=='a'){echo "NUEVO";}else{echo "EDITAR";}?>
                       PRODUCTO</span></th>
                   </tr>
                 </table>
		         <table width="592" border="0" align="center" cellpadding="2" cellspacing="4">
      		      <tr >
      		        <td align="left" valign="middle" class="m16">&nbsp;</td>
      		        <td >&nbsp;</td>
      		        <td >&nbsp;</td>
   		           </tr>
      		      <tr <?=($id=="" ? "style=display:none":"");?>>
	  	              <td align="left" valign="middle" class="m16" width="32%"><span class="Estilo9">
  	                  <?=strtoupper($categorianombre)." / ".strtoupper($productonombre);?>
	  	              </span></td>
  	      		     <td >&nbsp;</td>
				     <td >&nbsp;</td>
      		      </tr>
            		<tr>
		              <td align="left" valign="middle" class="Estilo10 Estilo1 m1"><strong>Estado </strong></td>
      		          <td align="left" valign="middle" class="m1"><span class="Estilo9">
      		            <label>
      		              <input name="estado" type="radio" value="1" <?=( $estado=="1" ? 'checked':'');?>>
      		              <span class="Estilo11"> Disponible &nbsp;&nbsp;&nbsp;&nbsp;
      		                <input name="estado" type="radio" value="0" <?=( $estado=="0" ? 'checked':'');?>>
      		              Agotado</span></label>
    		            </span> </td>
      		          <td width="28%" rowspan="5" align="left" valign="middle" class="m1"><div align="center" class="Estilo9"><img src="<?=($rutaimage=="" ? "../images/no_disponible.jpg":"../$rutaimage");?>" border="1" width="150" height="150" valign="top" /></div></td>
            		</tr>
					<tr <?=$visible;?>>
		         	  <td align="left" valign="middle" class="Estilo10 Estilo1 m1"><strong>Categoria </strong></td>
					  <td align="left" valign="middle" class="m1 Estilo1 Estilo10"><select name="categoria" style="width:150px"><?=$varcategoria;?></select>&nbsp;<input type="button" value="?" onclick="editacategoria()"></td>			   		
		   		    </tr>
		            <tr>
		              <td align="left" valign="middle" class="Estilo10 Estilo1 m1"><strong>Autor </strong></td>
      		        <td width="40%" align="left" valign="middle" class="m1 Estilo1 Estilo10"><select name="autor" style="width:150px"><?=$varautor;?></select>&nbsp;<input type="button" value="?" onclick="editaautor()"></td>
		            </tr>
				<tr>
					<td align="left" valign="middle" class="Estilo10 Estilo1 m1"><strong>Editorial </strong></td>
      		        <td width="40%" align="left" valign="middle" class="m1 Estilo1 Estilo10"><select name="editorial" style="width:150px"><?=$vareditorial;?></select>&nbsp;<input type="button" value="?" onclick="editaeditorial()"></td>
		        </tr>
      		      <tr>
               	  <td align="left" valign="middle" class="Estilo10 Estilo1 m1"><strong>Nombre del producto </strong></td>
               	  <td align="left" valign="middle" class="m1"><input name="titulo" type="text" value="<?=$titulo;?>"/></td>
           		   </tr>
    		        <tr>
    		          <td align="left" valign="middle" class="Estilo10 Estilo1 m1"><strong>Precio de Venta</strong></td>
    		          <td align="left" valign="middle" class="m1"><input name="precio" type="text" value="<?=$precio;?>"></td>
   		            </tr>
					<tr>
					  <td align="left" valign="middle" class="m1 Estilo1 Estilo10"><strong>Ruta de descarga </strong></td>
					  <td align="left" valign="middle" class="m1"><input name="download" type="text" id="download" value="<?=$download;?>" /></td>
					  <td align="left" valign="middle" class="m1 Estilo1 Estilo10"><strong>Descargar 
					    <label>
					    <input name="tag_download" type="checkbox" id="tag_download" value="1" <?=($tag_download=='1' ? 'checked="checked"':'');?>/>
					    </label>
					  </strong></td>
				   </tr>
					<tr>
						<td align="left" valign="middle" class="Estilo10 Estilo1 m1"><strong>Imagen </strong></td>
						<td align="left" valign="middle" class="m1"><input name="image" type="file" id="image"></td>
					    <td align="left" valign="middle" class="m1 Estilo1 Estilo10">&nbsp;</td>
					</tr>
		            <tr>
						<td align="left" valign="middle" class="m1 Estilo1 Estilo10">&nbsp;</td>
						<td align="left" valign="top" class="m1"><span class="Estilo9">
					    <?=$rutaimage;?>
						</span></td>
					    <td align="left" valign="top" class="m1 Estilo1 Estilo10">&nbsp;</td>
		            </tr>
		            <tr>
						<td align="left" valign="top" class="Estilo10 Estilo1 m1"><strong>Descripci&oacute;n </strong></td>
						<td colspan="2" align="left" valign="top" class="m1"><span class="Estilo9">
						  <textarea name="descripcion" cols="50" rows="15"><?=$descripcion;?>
						</textarea>
						  </span> </td>
		            </tr>
					<tr style="display:none;">
						<td class="m1 Estilo1 Estilo10">&nbsp;</td>
     			       <td>
			  				  <span class="Estilo9">
			  				  <input name="modo" type="text" value="">
			  				  <input name="libro" type="text" value="<?=$libro;?>">
							  <input name="codigo" type="text" value="<?=$codigo;?>">
			  				  <input name="rutaimage" type="text" value="<?=$rutaimage;?>">
			  				  <input name="rutaphoto" type="text" value="<?=$rutaphoto;?>">	  			      
			  				  </span></td>
		               <td>&nbsp;</td>
					</tr>
	               <tr>
						<td>&nbsp;</td>
						<td class="m1">&nbsp;</td>
				      <td class="m1"><div align="right">
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
