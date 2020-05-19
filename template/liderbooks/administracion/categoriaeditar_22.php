<?
include "../libreria/cn.php";
$cn=mysql_connect ($_servidor, $_usuario, $_clave) or die (mysql_error());
mysql_select_db ($_bd);
$modo=$_REQUEST['modo'];
$accion=$_REQUEST['accion'];
$categoria=$_REQUEST['categoria'];
$codigo=$_REQUEST['codigo'];
$valor=$_REQUEST['valor'];
echo "<br>Modo".$modo;
echo "<br>Accion".$accion;
if($modo=="Grabar")
{
	if($accion=="a")
	{
		$cadena="select max(categoria) from categoria";
		$rs=mysql_query($cadena,$cn) or die(mysql_error());
		$row=mysql_fetch_array($rs);
		$categoria=str_pad($row['0']+1,6,0,STR_PAD_LEFT);
		$cadena="insert into categoria (categoria,nombre) values ('".$categoria."','".$valor."')";
		mysql_query($cadena,$cn) or die(mysql_error());
		$codigo=$categoria;
		$accion="";
	}
	if($accion=="m")
	{
		$cadena="update categoria set nombre='".$valor."' where categoria='".$codigo."'";
		mysql_query($cadena,$cn) or die(mysql_error());
		$txtscript="<script>window.opener.recarga();window.close();</script>";
		echo $txtscript;
		$accion="";
	}
}

$campos=array('CATEGORIA','NOMBRE');
$cadena="select categoria,nombre from categoria where categoria='".$codigo."'";
$rs=mysql_query($cadena,$cn) or die(mysql_error());
$row=mysql_fetch_array($rs);
$qcolumna=mysql_num_fields($rs);
$linea="";
$linea.="<tr>";
$linea.="<td>CATEGORIA</td>";
$linea.="<td><input type='text' name='codigo' value='".$row['0']."' readonly></td>";
$linea.="</tr>";
$linea.="<tr>";
$linea.="<td>NOMBRE</td>";
$linea.="<td><input type='text' name='valor' value='".$row['1']."'></td>";
$linea.="</tr>";
$linea.="<tr><td>&nbsp;</td><td align='center'><input type='button' value='Grabar' onclick='document.a.submit()'></td></tr>";
$linea.="<tr style='display:none;'>";
$linea.="<td ><input type='text' name='accion' value='".$accion."'></td>";
$linea.="<td ><input type='text' name='modo' value='Grabar'></td>";
$linea.="</tr>";
?>
<html>
<body onload="document.a.valor.focus();">
<table width="100%" border="0">
<form name="a" action="categoriaeditar.php">
<?=$linea;?>
</form>
</table>
</body>
</html>