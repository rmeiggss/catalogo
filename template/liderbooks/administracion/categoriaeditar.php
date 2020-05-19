<?
include "include/cn.php";
$cn=mysql_connect ($_servidor, $_usuario, $_clave) or die (mysql_error());
mysql_select_db ($_bd);
$codigo=$_REQUEST['codigo'];
$accion=$_REQUEST['accion'];
$modo=$_REQUEST['modo'];
$nombre=$_REQUEST['nombre'];
$image=$_REQUEST['image'];
if($modo=="grabar")
{
	//Subir imagen
	$nombre_image=$_FILES['image']['name'];
	$ruta_image="../images/$nombre_image";
	move_uploaded_file($_FILES['image']['tmp_name'],$ruta_image);
	$image="images/$nombre_image";
	if($accion=="a")
	{
		$rs3=mysql_query("insert into categoria (categoria,nombre,imagen) values ('".$categoria."','".$nombre."','".$image."')");
		//echo "insert into categoria (categoria,nombre,image) values ('".$categoria."','".$nombre."','".$image."')";
	}
	if($accion=="m")
	{
		$rs2=mysql_query("update categoria set nombre='".$nombre."',imagen='".$image."' where categoria='".$codigo."'") or die(mysql_error());
		//echo "update categoria set nombre='".$nombre."',image='".$image."' where categoria='".$codigo."'";
	}
	
	
}

$rs1=mysql_query("select * from categoria where categoria='".$codigo."'");
$row1=mysql_fetch_array($rs1);
$categoria=$row1['0'];
$nombre=$row1['1'];
$image=$row1['2'];
//echo "$categoria $nombre $image";

if($accion=='a'){
$rs2=mysql_query("select max(categoria) as categoria from categoria");
$row2=mysql_fetch_array($rs2);
$categoria=$row2['categoria']+1;
}
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
<link href="estilo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #993300;
	font-weight: bold;
}
-->
</style>
<script>

function confirmar(accion){
//alert(accion);
if(accion=='e'){
window.opener.recarga();
window.close()
}

}

</script>
</head>

<body bgcolor="#F8F8F8" >
<form method="post" enctype="multipart/form-data" name="a">
<table width="80%" border="0" align="center">
<tr>
<td>
<table width="100%" height="32" border="0" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFE3AA">
    <th width="645" height="32" align="left" scope="col"><span class="Estilo4"><?PHP if($accion=='a'){echo "NUEVA";}else{echo "EDITAR";}?> CATEGORIA</span></th>
  </tr>
</table>

</td>
</tr>
<tr>
	<td width="75%">
		         <table width="513" height="219" border="0" align="center" cellpadding="2" cellspacing="2">
            		
					<tr <?=$visible;?>>
		         	  <td width="17%" align="left" valign="middle" class="font1">Categoria </td>
					  <td align="left" valign="middle" class="m1"><label>
					    : 
					    <input name="categoria" type="text" id="categoria" value="<?=$categoria;?>" size="10" readonly>
					  </label></td>			   		
	   		          <td width="30%" rowspan="4" align="center" ><img name="image" src="<?=($image=="" ? "../images/no_disponible.jpg":"../$image");?>" width="137" height="131" alt="" border="1" /></td>
					</tr>
		            <tr>
		              <td align="left" valign="middle" class="font1">Nombre</td>
      		        <td width="53%" align="left" valign="middle" class="m1"><label>
      		          : 
      		          <input name="nombre" type="text" id="nombre" value="<?=$nombre;?>" />
      		        </label></td>
		            </tr>
      		      
    		        
					<tr>
						<td align="left" valign="middle" class="font1">Imagen </td>
						<td align="left" valign="middle" class="m1">: 
						  <input name="image" type="file" id="image"></td>
			        </tr>
		            <tr>
						<td align="left" valign="middle" class="m1">&nbsp;</td>
						<td align="left" valign="top" class="m1">&nbsp;</td>
			        </tr>
		            
	               <tr>
						<td>&nbsp;</td>
						<td class="m1">
							<div align="center">
								<input type="button" name="Ingresar" value="Grabar" onclick="enviar()" />
								&nbsp;&nbsp;&nbsp;
								<input name="button" type="button" onclick="window.opener.recarga();window.close();" value="Salir" />
					      </div>						</td>
				      	<td class="m1">
							<div align="right" style="display:none">
							  <input type="text" name="modo" id="modo" value="grabar">
  							  <input type="text" name="accion" id="accion" value="<?=$accion;?>">
   							  <input type="text" name="codigo" id="codigo" value="<?=$codigo;?>">
							</div>						</td>
	               </tr>
	  </table>
	<div align="right"></div><table width="592" border="0" align="center" cellpadding="2" cellspacing="4">
      </table>
	</form>
	</body>
</html>

<script>
function enviar()
{
	document.a.submit();
}
</script>
