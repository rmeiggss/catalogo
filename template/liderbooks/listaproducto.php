<style type="text/css">
<!--
.Estilo2 {color: #993300}
.Estilo39 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #990000; }
.Estilo40 {font-size: 11px}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<table width="95%"  height="90%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr bgcolor="#FFF0E1">
        <th colspan="3" rowspan="2" align="center" scope="col"><span class="Estilo39">Productos </span></th>
        <th width="97" rowspan="2" align="center" scope="col"><span class="Estilo39">Precio</span></th>
        <th width="152" rowspan="2" align="center" scope="col"><span class="Estilo39">Compre Ahora</span></th>
        <th scope="col">&nbsp;</th>
      </tr>
      <tr bgcolor="#FFF0E1">
        <th width="33" scope="col"><span class="Estilo2">&nbsp;</span></th>
      </tr>

      <?php 
	  if(isset($order)){
	  $filtro=" order by titulo ";
	  }else{$filtro="";}
	  
	if($categoria==""){
	 $cadena="select libro,imagen,titulo,precio from libro where borrado='' and estado='1' and imagen!='' " . $filtro;
	}else{
	   $cadena="select libro,imagen,titulo,precio from libro where borrado='' and estado='1' and imagen!='' and categoria='".$categoria."'" . $filtro;
	}
	
	$rs=mysql_query($cadena,$cn) or die(mysql_error()); 
	$i=0;
	while($row=mysql_fetch_array($rs))
	{
	$i++;

if($i%2==0){
  ?>
      <tr bgcolor="#F0F0F0">
        <td height="10" colspan="6" bgcolor="#F5F5F5"></td>
        </tr>
      <tr bgcolor="#F5F5F5">
        <td width="85" ><table width="112" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <th width="112" scope="col"><a  href="#"><img src="<?=$row['1'];?>" width='85' height='120' border='0'/></a></th>
            </tr>
          </table>
          <a  href="#"></a></td>
        <td width="35" colspan="-1" align="left" >&nbsp;</td>
        <td width="267" colspan="-1" align="left" ><a onmouseover="entrar2(this);" on onmouseout="salir2(this)" style="color:#333333; font:Verdana, Arial, Helvetica, sans-serif; font-size:13px;" href="editarproducto.php?libro=<?php echo $row['libro']?>"><?php echo $row['titulo'] ?></a></td>
        <td align="center"  style="font:Verdana, Arial, Helvetica, sans-serif; font-size:12px;">S/. <?php echo $row['precio'];?></td>
        <td align="center" ><a href="carrito.php?id=<? echo $row['libro'];?>&cuenta=n" target="_parent"><img src="images/compraslinea.jpg" border="0" /></a></td>
        <td >&nbsp;</td>
      </tr>
	  
	    <tr bg="bg" bgcolor="#F0F0F0">
          <td height="10" colspan="6" align="center" bgcolor="#F5F5F5"></td>
	    </tr>
      <?php
  }else{
  ?>
      <tr bgcolor="#FFFFFF" height="10">
        <td height="10" colspan="6"></td>
        </tr>
      <tr bgcolor="#FFFFFF">
        <td><table width="112" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <th width="112" scope="col"><a  href="editarproducto.php?libro=<?php echo $row['libro']?>"><img src="<?=$row['1'];?>" width='85' height='120' border='0'/></a></th>
            </tr>
          </table>
          <a  href="#"></a></td>
        <td colspan="-1" align="left">&nbsp;</td>
        <td colspan="-1" align="left"><a onmouseover="entrar2(this);" on onmouseout="salir2(this)" style="color:#333333; font:Verdana, Arial, Helvetica, sans-serif; font-size:13px;" href="editarproducto.php?libro=<?php echo $row['libro']?>"><?php echo $row['titulo'];?></a></td>
        <td align="center" style="font:Verdana, Arial, Helvetica, sans-serif; font-size:12px;">S/. <?php echo $row['precio'];?></td>
        <td align="center"><a href="carrito.php?id=<? echo $row['0'];?>&cuenta=n" target="_parent"><img src="images/compraslinea.jpg" border="0" /></a></td>
        <td>&nbsp;</td>
      </tr>
      <?php ?>
      <tr bg="bg" bgcolor="#FFFFFF">
        <td height="10" colspan="6" align="center"></td>
      </tr>
      <?php 
  }
  }
  ?>
      <tr>
        <td>&nbsp;</td>
        <td colspan="-1">&nbsp;</td>
        <td colspan="-1">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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