<?
include "../libreria/cn.php";
$cn=mysql_connect ($_servidor, $_usuario, $_clave) or die (mysql_error());
mysql_select_db ($_bd);
//echo "MOdo".$modo;

$codigo=$_REQUEST['codigo'];
$modo=$_REQUEST['modo'];
$accion=$_REQUEST['accion'];
$paterno=$_REQUEST['paterno'];
$materno=$_REQUEST['materno'];
$nombre=$_REQUEST['nombre'];
$comentario=$_REQUEST['comentario'];

if($modo=="Grabar")
{
	if($accion=="a")
	{
		$cadena="select max(autor) from autor";
		$rs=mysql_query($cadena,$cn) or die(mysql_error());
		$row=mysql_fetch_array($rs);
		$autor=str_pad($row['0']+1,6,0,STR_PAD_LEFT);
		$cadena="insert into autor (autor,paterno,materno,nombre,comentario) values ('".$autor."','".$paterno."','".$materno."','".$nombre."','".$comentario."')";
		mysql_query($cadena,$cn) or die(mysql_error());
		$codigo=$autor;
		$modo="";
		
		
	}
	
	if($accion=="m")
	{
		$cadena="update autor set paterno='".$paterno."',materno='".$materno."',nombre='".$nombre."',comentario='".$comentario."' where autor='".$codigo."'";
		mysql_query($cadena,$cn) or die(mysql_error());
		//$codigo=$autor;
		$modo="";
		
		//echo "cadena".$cadena;
	}
	
}


$campos=array('AUTOR','NOMBRE');
$cadena="select * from autor where autor='".$codigo."'";
$rs=mysql_query($cadena,$cn) or die(mysql_error());
$row=mysql_fetch_array($rs);
$codigo=$row['autor'];
$linea="";

//echo "cadena".$cadena;

if($accion=='a'){
$cadena="select max(autor) from autor";
$rs=mysql_query($cadena,$cn) or die(mysql_error());
$row=mysql_fetch_array($rs);
$autor=str_pad($row['0']+1,6,0,STR_PAD_LEFT);
$codigo=$autor;
}


//for($i=0;$i<$qcolumna;$i++)
//{
//	$linea.="<tr>";
//	$linea.="<td>$campos[$i]</td><td><input type='text' name='valor[]' value='".$row[$i]."'></td>";
//	$linea.="</tr>";
//}
//$linea.="<tr><td>&nbsp;</td><td align='center'><input type='button' value='Grabar' onclick='document.a.submit()'></td></tr>";
//$linea.="<tr style='display:none;'>";
//$linea.="<td ><input type='text' name='modo' value='".$modo."'></td>";
//$linea.="<td ><input type='text' name='accion' value='Grabar'></td>";
//$linea.="</tr>";
//?>
<html>
<style type="text/css">
<!--
.Estilo4 {font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #993300;
	font-weight: bold;
}
.Estilo7 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; }
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<body bgcolor="#F8F8F8" >
<form name="a">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col"><table width="100%" height="32" border="0" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FFE3AA">
        <th width="645" height="32" align="left" scope="col"><span class="Estilo4">
          <?PHP if($accion=='a'){echo "NUEVO";}else{echo "EDITAR";}?>
          AUTOR</span></th>
      </tr>
    </table></th>
  </tr>
  <tr>
    <td><table align="center" width="85%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th width="182" scope="col">&nbsp;</th>
        <th width="258" scope="col">&nbsp;</th>
        <th width="247" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <td height="35"><span class="Estilo7">Autor</span></td>
        <td><label>
          <input readonly="" name="codigo" type="text" value="<?php echo $codigo;?>" size="8">
        </label></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="35"><span class="Estilo7">Paterno</span></td>
        <td><input type="text" name="paterno" value="<?php echo $row['paterno'];?>"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="35"><span class="Estilo7">Materno</span></td>
        <td><input type="text" name="materno" value="<?php echo $row['materno'];?>"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="35"><span class="Estilo7">Nombre</span></td>
        <td><input type="text" name="nombre" value="<?php echo $row['nombre'];?>"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="35"><span class="Estilo7">Comentario</span></td>
        <td><label>
          <textarea name="comentario"><?php echo $row['comentario'] ?></textarea>
        </label></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="45"><div align="right">
          <input type="button" name="Ingresar" value="Grabar" onClick="enviar()" />
  &nbsp;&nbsp;&nbsp;
  <input name="button" type="button" onClick="window.opener.recarga();window.close();" value="Salir" />
  <input name="accion"  id="accion" type="hidden" value="<?php echo $accion?>">
  <input name="modo"  id="modo" type="hidden">
        </div>          <label></label></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</form>
</body>

<script>
function enviar()
{
	//var rutaimage=document.a.image.value;
	//if(rutaimage==""){rutaimage="<? //=$rutaimage;?>"};
	//document.a.rutaimage.value=rutaimage;
	document.a.modo.value="Grabar";
	document.a.submit();
}
function editacategoria()
{
	window.open('autoreditar.php?modo=a','','width=300,height=400');
}
function editaautor()
{
	window.open('autoreditar.php?modo=a','','width=300,height=400');
}

</script>


</html>