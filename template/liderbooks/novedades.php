
<table width="660" height="76" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th height="19" colspan="3" align="center" scope="col"><span class="Estilo1">Novedades</span></th>
  </tr>
  
<?php 

$sSQL="select imagen from libro where borrado='' and imagen!='' limit 9";
$rs=mysql_query($sSQL);
$cant=mysql_num_rows($rs);
$celda=0;
while($row=mysql_fetch_array($rs))
{

$autor='';
$categoria='000003';
$columna="3";
		$nombre=$row['1'];
		if($autor=="")		 break;
		$tabla.=muestra_producto($sSQL,$autor,$categoria,$columna);
}
  ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

