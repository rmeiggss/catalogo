
<style type="text/css">
<!--
.Estilo5 {font-size: 16px}
.Estilo21 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.Estilo23 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; }
.Estilo29 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; }
.Estilo30 {font-size: 11px}
-->
</style>

<link href="stylos.css" rel="stylesheet" type="text/css" />
<table width="95%"  height="90%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td>
	<table width="100%" border="0" cellspacing="3" cellpadding="4">
      <?php 
	  $libro=$_REQUEST['libro'];
  $cadena="select l.imagen as dibujo,c.nombre as nombrecategoria,l.*,a.* from libro l,autor a,categoria c where l.borrado='' and c.categoria=l.categoria and  l.autor=a.autor and libro='".$libro."'";
//echo $cadena;
	$rs=mysql_query($cadena,$cn) or die(mysql_error()); 
	$i=0;
	while($row=mysql_fetch_array($rs))
	{
	
  ?>
      <tr bgcolor="#F0F0F0" style="font:Verdana, Arial, Helvetica, sans-serif; font-size:14px; font:bold; color:#993300">
        <td width="52" height="49" bgcolor="#F5F5F5"><span class="Estilo5"></span></td>
        <td colspan="2" align="center" bgcolor="#F5F5F5"><span class="Estilo5"><strong><?php echo $row['titulo'] ?></strong></span></td>
        <td width="145" align="center" bgcolor="#F5F5F5"><span style="font:Verdana, Arial, Helvetica, sans-serif; font-size:16px;"><strong>S/.<?php echo $row['precio'];?></strong></span></td>
        <td width="22" bgcolor="#F5F5F5"><span class="Estilo5"></span></td>
      </tr>
      <tr bgcolor="#F5F5F5">
        <td rowspan="8" ><a  href="#"></a></td>
        <td colspan="2" align="left" >&nbsp;</td>
        <td rowspan="8" align="center" ><table width="112" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
          <tr>
            <th width="112" scope="col"><a  href="#"><img src="<?php echo $row['dibujo'];?>" width='105' height='140' border='0' /></a></th>
          </tr>
        </table>          <a href="shopping.php?id=<? echo $row['0'];?>" target="_parent"></a></td>
        <td rowspan="8" >&nbsp;</td>
      </tr>
      <tr bgcolor="#F5F5F5">
        <td width="131" align="left" ><span class="Estilo21"><strong>Categoria</strong>:</span></td>
        <td width="308" align="left" ><span class="Estilo29"><?php echo $row['nombrecategoria']?></span></td>
      </tr>
      <tr bgcolor="#F5F5F5">
        <td align="left" ><span class="Estilo21"><strong>Autor</strong>:</span></td>
        <td align="left" ><span class="Estilo29"><?php echo $row['paterno']." ".$row['materno']." ".$row['nombre']?></span></td>
      </tr>
      <tr bgcolor="#F5F5F5">
        <td align="left" ><span class="Estilo21"><strong>A&ntilde;o:</strong></span></td>
        <td align="left" ><span class="Estilo30"></span></td>
      </tr>
      <tr bgcolor="#F5F5F5">
        <td align="left" ><span class="Estilo23">Editorial:</span></td>
        <td align="left" ><span class="Estilo30"></span></td>
      </tr>
      <tr bgcolor="#F5F5F5">
        <td align="left" ><span class="Estilo23">Paginas:</span></td>
        <td align="left" ><span class="Estilo30"></span></td>
      </tr>
      <tr bgcolor="#F5F5F5">
        <td align="left" ><span class="Estilo23">Peso:</span></td>
        <td align="left" ><span class="Estilo30"></span></td>
      </tr>
      <tr bgcolor="#F5F5F5">
        <td align="left" ><span class="Estilo23">Cant. Disponible :</span></td>
        <td align="left" ><span class="Estilo30"></span></td>
      </tr>
      <tr bgcolor="#F5F5F5">
        <td >&nbsp;</td>
        <td align="left" valign="top"><span class="Estilo23">Resumen : </span></td>
        <td align="left" colspan="3" class="font1" align="left"><?php echo $row['resumen'];?></td>
      </tr>
      <tr bgcolor="#F5F5F5">
        <td >&nbsp;</td>
        <td colspan="2" align="left" >&nbsp;</td>
        <td align="center" ><a href="carrito.php?id=<? echo $row['libro'];?>&amp;cuenta=n" target="_parent"><img src="images/compraslinea.jpg" border="0" /></a></td>
        <td >&nbsp;</td>
      </tr>
 <?php 
  }
  ?>
      <tr>
        <td colspan="5" align="center" class="font1"><label><a href="javascript:history.go(-1)">Retornar</a></label></td>
       </tr>
    </table>
	</td>
  </tr>
</table>

<script>
function entrar2(objeto){
objeto.style.color="#993300";
objeto.style.textDecoration="underline";
//objeto.style.font="bold";
}
function salir2(objeto){
objeto.style.color="#333333";
objeto.style.textDecoration="none";
//objeto.style.font.bold=false;
}

function entrada(objeto){
objeto.style.background="#FFF2BF";
//objeto.style.textDecoration="underline";
//objeto.style.font="bold";
}
function salida(objeto){
var inicial=objeto.style.background;
objeto.style.background=inicial;
//objeto.style.color="#333333";
//objeto.style.textDecoration="none";
//objeto.style.font.bold=false;
}
</script>