<?php
require_once "config/config.inc.php";
$sql4="select ruta_imagen from evento where estado='0' and flag_principal='1'";
$sql4="select ruta_imagen from evento where estado='0'";
$rs=mysql_query($sql4,$cn);
$row=mysql_fetch_array($rs);
$ruta_imagen=$row[0];
?>
<table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" bgcolor="#CCCC66" class="font4">Eventos</td>
  </tr>
  <tr>
    <td height="285" align="center" bgcolor="#FFFFFF"><a href="eventos_detalle.php">
	<img src="<?php echo $ruta_imagen;?>" alt="irracionalidades" width="150" height="283" border="0" /></a></td>
  </tr>
</table>
