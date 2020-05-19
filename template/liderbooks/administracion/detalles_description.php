<?
include("includes/configure.php");
include("../cn.php");
$cn=mysql_connect ($_servidor, $_usuario, $_clave) or die (mysql_error());
mysql_select_db ($_bd); 
if(!isset($grupo))  		 			$grupo="";
if(!isset($fabricante))  				$fabricante="";
if(!isset($categoria))  				$categoria="";
if(!isset($id)) 			 			$id="";
if(!isset($visible)) 					$visible="";
if(!isset($accion)) 					$accion="";
if(!isset($tipo)) 						$tipo="";
if(!isset($porcentaje)) 				$porcentaje="";
if(!isset($descuento)) 					$descuento="";
if(!isset($chkdescuento)) 	   			$chkdescuento="";
if(!isset($chkporcentaje)) 				$chkporcentaje="";
$fabricanteinicial=$fabricante;

$categoria=str_pad($categoria,2,"0",STR_PAD_LEFT);

if($accion=="Grabar")
{
	if($_FILES['image']['size']>0)
	{
		$nombreimage=$_FILES['image']['name'];
		$tempimage=$_FILES['image']['tmp_name'];
   	$rutaimage="imagenes/catalog/".basename($nombreimage);
		$destinoimage="../".$rutaimage;
		copy($tempimage,$destinoimage);
	}
	if($_FILES['photo']['size']>0)
	{
		$nombrephoto=$_FILES['photo']['name'];
		$tempphoto=$_FILES['photo']['tmp_name'];
		$rutaphoto="imagenes/photo/".basename($nombrephoto);
   	$destinophoto="../".$rutaphoto;
		copy($tempphoto,$destinophoto);
	}
	if($id=="")
	{
		$cadena="select max(id) from products_atributtes";
		$rs=mysql_query($cadena,$cn) or die(mysql_error());
		$row=mysql_fetch_array($rs);
		$id=$row['0']+1;
		$cadena="insert into products_atributtes (id,model,image,photo,price_buy,price_sell,price_distribuidor,status,manufacturers_id,name,description,url,categoria,porcentaje,descuento) values ('".$id."','".$model."','".$rutaimage."','".$rutaphoto."','".$price_buy."','".$price_sell."','".$price_distribuidor."','".$status."','".$fabricante."','".$productonombre."','".$description."','".$url."','".$categoria."','".$porcentaje."','".$descuento."')";
		mysql_query($cadena,$cn) or die(mysql_error());
	}
	else
	{
		if($chkporcentaje=="" && $chkdescuento=="")
		{
			$pcompra=number_format($price_buy,2);
			$pventa=number_format($price_sell,2);
			$pdistribuidor=number_format($price_distribuidor,2);
			$porcentaje=number_format(($pventa-$pcompra)/$pcompra*100,2);
			$descuento=number_format(($pdistribuidor-$pcompra)/$pcompra*100,2);
		}
		if($chkporcentaje=="S" && $chkdescuento=="S")
		{
			$pcompra=number_format($price_buy,2);
			$pventa=number_format(ceil($pcompra*(100+$porcentaje)/100),2);
			$pdistribuidor=number_format(ceil($pcompra*(100+$descuento)/100),2);
			$porcentaje=number_format($porcentaje,2);
			$descuento=number_format($descuento,2);
		}
		if($chkporcentaje=="S" && $chkdescuento=="")
		{
			$pcompra=number_format($price_buy,2);
			$pventa=number_format(ceil($pcompra*(100+$porcentaje)/100),2);
			$pdistribuidor=number_format($price_distribuidor,2);
			$porcentaje=number_format($porcentaje,2);
			$descuento=number_format(($pdistribuidor-$pcompra)/$pcompra*100,2);
		}
		if($chkporcentaje=="" && $chkdescuento=="S")
		{
			$pcompra=number_format($price_buy,2);
			$pventa=number_format($price_sell,2);
			$pdistribuidor=number_format(ceil($pcompra*(100+$descuento)/100),2);
			$porcentaje=number_format(($pventa-$pcompra)/$pcompra*100,2);
			$descuento=number_format($descuento,2);
		}		
		$cadena="update products_atributtes set id='".$id."',model='".$model."',image='".$rutaimage."',photo='".$rutaphoto."',price_buy='".$pcompra."',price_sell='".$pventa."',price_distribuidor='".$pdistribuidor."',status='".$status."',manufacturers_id='".$fabricante."',name='".$productonombre."',description='".$description."',url='".$url."',categoria='".$categoria."',porcentaje='".$porcentaje."',descuento='".$descuento."' where id='".$id."'";
		//echo $cadena."<br>";
		mysql_query($cadena,$cn) or die(mysql_error());
	}
}
$cadena="select 
			products_atributtes.categoria as categoria,
			products_atributtes.name as productonombre,
			products_atributtes.status as status,
			categoria.nombre as categorianombre,
			products_atributtes.descuento as descuento,
			manufacturers.manId as fabricante,
			products_atributtes.price_buy as price_buy,
			products_atributtes.price_sell as price_sell,
			products_atributtes.price_distribuidor as price_distribuidor,
			products_atributtes.model as model,
			products_atributtes.url as url,
			products_atributtes.image as image,
			products_atributtes.photo as photo,
			products_atributtes.description as description,
			products_atributtes.porcentaje as porcentaje
			from products_atributtes 
			left join categoria on products_atributtes.categoria=categoria.categoria
			left join manufacturers on products_atributtes.manufacturers_id=manufacturers.manId
			where products_atributtes.id='".$id."'";
$rs=mysql_query($cadena);
$row=mysql_fetch_array($rs);
$categorianombre=$row['categorianombre'];
$productonombre=$row['productonombre'];
$fabricante=$row['fabricante'];
$status=($id=="" ? "1":$row['status']);
$price_buy=$row['price_buy'];
$price_sell=$row['price_sell'];
$price_distribuidor=$row['price_distribuidor'];
$model=$row['model'];
$url=$row['url'];
$rutaimage=$row['image'];
$rutaphoto=$row['photo'];
$description=$row['description'];
$porcentaje=$row['porcentaje'];
$descuento=$row['descuento'];

for($i=1;$i<=$cantidadregistro;$i++)
{
	$id[$i]=$_GET["id$i"];
}
 //echo "<br>".$id[$posicion];
if($id<>'')
{
	//$visible="style=display:none";
}
if($id=="" && $categoria<>"")
{
	$cadena="select porcentaje,descuento from categoria where categoria='".$categoria."'";	
	$result=mysql_query($cadena,$cn);
	$row=mysql_fetch_array($result);
	$porcentaje=$row['porcentaje'];
	$descuento=$row['descuento'];
}
$fabricante=($id=="" ? $fabricanteinicial:$fabricante);
$varfabricante=cargaselect("select manId,manName from manufacturers where borrado='' order by manName",$cn,$fabricante,true);
$vartipo=cargaselect("select tipNum,tipName from tipos where borrado='' order by tipName",$cn,$tipo,true);
$varcategoria=cargaselect("select categoria,nombre from categoria where borrado='' and tipo='".$tipo."' order by nombre",$cn,$categoria,true);
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
</head>

<body onload="reenviar();">
<form method="post" enctype="multipart/form-data" name="a">
<table width="80%" border="0" align="center">
<tr>
	<td width="75%">
		         <table border="0" cellpadding="2" cellspacing="0">
      		      <tr <?=($id=="" ? "style=display:none":"");?>>
	  	              <td align="left" valign="middle" class="m16" width="40%"><?=strtoupper($categorianombre)." / ".strtoupper($productonombre);?></td>
  	      		     <td >&nbsp;</td>
						</tr>
            		<tr>
		              <td align="left" valign="middle" class="m1">Estado de los productos </td>
      		        <td align="left" valign="middle" class="m1"><label>
			              <input name="status" type="radio" value="1" <?=( $status=="1" ? 'checked':'');?>>Disponible &nbsp;&nbsp;&nbsp;&nbsp;
         		        <input name="status" type="radio" value="0" <?=( $status=="0" ? 'checked':'');?>>Agotado</label>
         		     </td>
          			</tr>
		            <tr>
		              <td align="left" valign="middle" class="m1">Fabricante de los productos </td>
      		        <td width="23%" align="left" valign="middle" class="m1"><select name="fabricante" style="width:150px"><?=$varfabricante;?></select><input style="display:none;" type="text" name="filtrofabricante" size="4" onclick="document.a.submit()"></td>
		            </tr>
					<tr <?=$visible;?>>
		         	  <td align="left" valign="middle" class="m1">Tipo </td>
					  <td align="left" valign="middle" class="m1"><select name="tipo" onchange="document.a.submit();" style="width:150px"><?=$vartipo;?></select><input type="text" style="display:none;" name="filtrotipo" size="4" onclick="document.a.submit()"></td>			   		
			   		</tr>
			    	<tr <?=$visible;?>>
		         	  <td align="left" valign="middle" class="m1">Categoria </td>
					  <td align="left" valign="middle" class="m1"><select name="categoria" onchange="document.a.submit()" style="width:150px"><?=$varcategoria;?></select><input type="text" style="display:none;" name="filtrocategoria" size="4" onclick="document.a.submit()"></td>			   		
			   		</tr>
      		      <tr>
               	  <td align="left" valign="middle" class="m1">Nombre del producto </td>
               	  <td align="left" valign="middle" class="m1"><input type="text" name="productonombre" value="<?=$productonombre;?>"/></td>
            		</tr>
           			<tr>
    	             <td align="left" valign="middle" class="m1">Precio de Costo (* Precio con I.G.V.) </td>
    	             <td align="left" valign="middle" class="m1"><input type="text" name="price_buy" value="<?=$price_buy;?>"/></td>
    		        </tr>
    		        <tr>
    		          <td align="left" valign="middle" class="m1">Precio de Venta</td>
    		          <td align="left" valign="middle" class="m1"><input type="text" name="price_sell" value="<?=$price_sell;?>">&nbsp;Utilidad &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="porcentaje" value="<?=$porcentaje;?>" size="3">&nbsp;<input type="checkbox" name="chkporcentaje" value="S" <?=($chkporcentaje=='S' ? 'checked':'');?>></td>
    		        </tr>
    		        <tr>
    	             <td align="left" valign="middle" class="m1">Precio Distribuidores</td>
    	             <td align="left" valign="middle" class="m1"><input type="text" name="price_distribuidor" value="<?=$price_distribuidor;?>" >&nbsp;Utilidad Dist.:<input type="text" name="descuento" value="<?=$descuento;?>" size="3">&nbsp;<input type="checkbox" name="chkdescuento" value="S" <?=($chkdescuento=='S' ? 'checked':'');?>></td>
    		        </tr>
    		        <tr>
    		          <td align="left" valign="middle" class="m1">Modelo</td>
    		          <td align="left" valign="middle" class="m1"><input type="text" name="model" value="<?=$model;?>"/></td>        
    		        </tr>
    		        <tr>
    		          <td align="left" valign="middle" class="m1">U.R.L</td>
    		          <td align="left" valign="middle" class="m1"><input type="text" name="url" value="<?=$url;?>"/></td>
    		        </tr>
     		        <tr>
          		    <td align="left" valign="middle" class="m1">Imagen Grande </td>
          		    <td align="left" valign="middle" class="m1"><input name="photo" type="file" id="photo"></td>
          		  </tr>
          		  <tr>
		             <td align="left" valign="middle" class="m1">&nbsp;</td>
       		       <td align="left" valign="top" class="m1"><?=$rutaphoto;?></td>
					      </tr>
                <tr>
	               <td align="left" valign="middle" class="m1">Imgaen Peque&ntilde;a </td>
    	           <td align="left" valign="middle" class="m1"><input name="image" type="file" id="image"></td>
		            </tr>
		            <tr>
              	 <td align="left" valign="middle" class="m1">&nbsp;</td>
	               <td align="left" valign="top" class="m1"><?=$rutaimage;?></td>
                </tr>
		            <tr>
	               <td align="left" valign="top" class="m1">Descripci&oacute;n de los productos </td>
     	           <td align="left" valign="top" class="m1">
						 				<textarea name="description" cols="45" rows="15"><?=$description;?></textarea>
   						   </td>
		            </tr>
	              <tr style="display:none;">
	               <td class="m1">&nbsp;</td>
     			       <td>
			  				  <input name="accion" type="text" value="">
			  				  <input name="id" type="text" value="<?=$id;?>">
			  				  <input name="rutaimage" type="text" value="<?=$rutaimage;?>">
			  				  <input name="rutaphoto" type="text" value="<?=$rutaphoto;?>">
 			  				  <input name="recargar" type="text" value="<?=$recargar;?>">
			  			   </td>
		            </tr>
		            <tr>
      		       <td>&nbsp;</td>
      		       <td class="m1">
      		       	<input type="button" <?=($tipo=="" ? "style=display:none;":"");?> name="Regresar" value="Regresar" onclick="javascript:history.back(1);"/>
      		       	<input type="button" name="Ingresar" value="Grabar" onclick="enviar();">
      		       </td>
	              </tr>
	          </table>
		</form>
	</td>
   <td align="center" valign="top"><img src="../<?=$rutaimage;?>" border="0" width="150" height="150" valign="top"></td>
</tr>
</table>
</body>
</html>

<script>
function enviar()
{
	var rutaimage=document.a.image.value;
	var rutaphoto=document.a.photo.value;
	var price_sell=document.a.price_sell.value;
	var price_distribuidor=document.a.price_distribuidor.value;
	if(price_sell!='0.00' && price_distribuidor!='0.00')
	{
		if(rutaimage==""){rutaimage="<?=$rutaimage;?>"};
		if(rutaphoto==""){rutaphoto="<?=$rutaphoto;?>"};
		document.a.rutaimage.value=rutaimage;
		document.a.rutaphoto.value=rutaphoto;
		document.a.recargar.value="S";
		document.a.accion.value="Grabar";
		document.a.submit();
	}
	else
	{
		alert('El precio tiene que ser diferente de 0');
	}
}
function reenviar()
{
if(document.a.recargar.value=='S')
{
	location.href="detalles_productos.php?categoria=<?=$categoria;?>&tipo=<?=$tipo;?>";
}
}
</script>
