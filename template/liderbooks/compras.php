<style type="text/css">
<!--
.Estilo6 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.Estilo9 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo11 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }
-->
</style>
<table width="95%" style="border:groove" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#C9E4E4">
  <tr>
    <td scope="col"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <th colspan="3" align="left" scope="col" height="8"></th>
      </tr>
      <tr>
        <th colspan="3" align="left" scope="col"><span class="Estilo9">Compras</span></th>
      </tr>
      <tr>
        <th colspan="3" align="center" scope="col" height="5"></th>
      </tr>
      <?php
 if(!isset($_SESSION['cod'])){
 $_SESSION['cod']=array();
 }
  $subtotal=0;
  foreach($_SESSION['cod'] as $i => $valor){
		$cadena2="select l.imagen as dibujo,c.categoria as codcat,c.nombre as nombrecategoria,l.*,a.* from libro l,autor a,categoria c where c.categoria=l.categoria and  l.autor=a.autor and libro='".$_SESSION['cod'][$i]."'";
		$rs2=mysql_query($cadena2,$cn) or die(mysql_error()); 
		$row2=mysql_fetch_array($rs2);
		$subtotal=$subtotal+($row2['precio']*$_SESSION['cant'][$i]);
	?>
      <tr>
        <td width="17">&nbsp;</td>
        <td width="154"><span class="Estilo11"><?php echo $_SESSION['cant'][$i]." x " ?></span></td>
        <td width="596" align="left"><span class="Estilo11"><?php echo $row2['titulo'] ?></span></td>
      </tr>
      <?php }?>
      <tr>
        <td height="8" colspan="3"><hr align="center" width="120"  color="#666666" /></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td align="right">&nbsp;</td>
        <td><strong><span style="font:Verdana, Arial, Helvetica, sans-serif; font-size:12px;"><span class="Estilo6">S/.</span><?php echo number_format($subtotal, 2, ',', ' '); ?></span></strong></td>
      </tr>
    </table></td>
  </tr>
</table>
