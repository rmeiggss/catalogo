<?
include "cn.php";
$cn=mysql_connect ($_servidor, $_usuario, $_clave) or die (mysql_error());
mysql_select_db ($_bd);

$campos=array('CATEGORIA','NOMBRE');
$cadena="select categoria,nombre from categoria where borrado=''";
$rs=mysql_query($cadena,$cn) or die(mysql_error());
$qcolumna=mysql_num_fields($rs);
$qfila=mysql_num_rows($rs);
echo "adsf fda".$qcolumna;
echo "adsf fda".$qfila;
$i=0;
while($row=mysql_fetch_array($rs))
{
	for($z=0;$z<$qcolumna;$z++)
	{
		$matriz[$i][$z]=$row[$z];
	}
	$i++;
}
$qcampos=count($campos);
$linea="";
for($i=0;$i<$qcampos;$i++)
{
	$linea.="<tr>";
	$linea.="<td>$campos[$i]</td><td><input type='text' name='valor[]' value='".$matriz['0'][$i]."'></td>";
	$linea.="</tr>";
}
$linea.="<tr><td colspan='2' align='right'><input type='button' value='Grabar' onclick='document.a.submit()'></td></tr>";
?>
<html>
<table width="100%" border="1">
<form name="a">
<?=$linea;?>
</form>
</table>
</html>