
<style type="text/css">
<!--
.Estilo3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
	color: #000000;
}
.Estilo10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #990000; }
-->
</style>
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<form id="form1" name="form1" method="post" action="carrito.php">
<?php 

//echo "cantidad".$_REQUEST['cantidad'];
?>
  <table width="95%"  height="90%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr bgcolor="#FFF0E1">
            <th colspan="3" align="center" scope="col"><span class="Estilo10">Productos</span></th>
            <th width="107" align="center" scope="col"><span class="Estilo10">P. Unit. </span></th>
            <th width="86" align="center" scope="col"><span class="Estilo10">Cantidad</span></th>
            <th width="128" align="center" scope="col"><span class="Estilo10">Total&nbsp;</span></th>
            <th width="70" align="center" scope="col"><span class="Estilo10">Eliminar</span></th>
          </tr>
          
          <?php 
	  
		  
	 // $c=count($cod);
	  foreach($_SESSION['cod'] as $i => $valor){
			$c=$i;
			}
	//  echo "c".$c;  
	 // echo "id".$id;
	  //$cod[$c-1]!=$id
	  
	//  if($cod[$c-1]!=$id)
	  
//{
$id=$_REQUEST['id'];
$eliminar=$_REQUEST['eliminar'];
$actualizar=$_REQUEST['actualizar'];

if($actualizar=='' && $eliminar=='')
{


//echo $cod[$c];
//echo $id;

	//if($cod[$c]!=$id)
	if($_SESSION['cod'][$c]!=$id)
	{
	$valor="n";
	/*
	for($i=1;$i<=count($cod);$i++){
		if($_SESSION['cod'][$i]==$id){
		$_SESSION['cant'][$i]=$_SESSION['cant'][$i]+1;
		$valor="s";
				}
				
	}
	*/
	//echo "valor".$valor;
		if($valor=="n")
		{
		 $cadena="select l.imagen as dibujo,c.nombre as nombrecategoria,l.*,a.* from libro l,autor a,categoria c where l.borrado='' and c.categoria=l.categoria and  l.autor=a.autor and libro='".$id."'";
			
			$rs=mysql_query($cadena,$cn) or die(mysql_error()); 
			//$i=0;
			$can=1;
			
			//$_SESSION['cod']=array();
			//$_SESSION['cant']=array();
		
			$row=mysql_fetch_array($rs);
			
			foreach($_SESSION['cod'] as $i => $valor){
			//echo $i."<br>";
			}
			//echo count($_SESSION['cod']);
			$i=$i+1;
			//echo $i;
			$_SESSION['cod'][$i]=$row['libro'];
			$_SESSION['cant'][$i]=$can;
		
			
			//	print_r($_SESSION['cod'][$i]);
				//}
		}
	
	}
	

}

if(isset($eliminar)){
unset($_SESSION['cod'][$eliminar]);
//unset($_SESSION['cant'][$eliminar]);
}
//print_r($cod);

$subtotal=0;
//	for($i=1;$i<=count($cod);$i++){
	foreach($_SESSION['cod'] as $i => $valor){
	
	 $cadena2="select l.imagen as dibujo,c.categoria as codcat,c.nombre as nombrecategoria,l.*,a.* from libro l,autor a,categoria c where c.categoria=l.categoria and  l.autor=a.autor and libro='".$_SESSION['cod'][$i]."'";
	
	$rs2=mysql_query($cadena2,$cn) or die(mysql_error()); 
	$row2=mysql_fetch_array($rs2);

	$categoria=$row2['codcat'];
		
		if(isset($actualizar)){
			$_SESSION['cant'][$i]=$_POST['cantidad'.$i];
			}else{
			
			}
			
			$subtotal=$subtotal+($row2['precio']*$_SESSION['cant'][$i]);
	
	
	//$i++;
if($i%2==0){
  ?>
          <tr bgcolor="#F0F0F0" height="8">
            <td colspan="7" bgcolor="#F5F5F5" height="8"></td>
          </tr>
          <tr bgcolor="#F5F5F5">
            <td width="112" ><table width="112" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <th width="112" scope="col"><a  href="#"><img src="<?php echo $row2['dibujo']?>" width='85' height='120' border='0'/></a></th>
                </tr>
              </table>
              <a  href="#"></a></td>
            <td width="28" colspan="-1" align="left" >&nbsp;</td>
            <td width="178" colspan="-1" align="left" ><strong><a onmouseover="entrar2(this);" on="on" onmouseout="salir2(this)" style="color:#333333; font:Verdana, Arial, Helvetica, sans-serif; font-size:13px" href="editarproducto.php?libro=<?php echo $row2['libro'] ?>"><?php echo $row2['titulo'] ?></a><a href="xt_orderform_update.aspx?opcode=delete&amp;isbn=074323815X"></a></strong></td>
            <td align="center"  style="font:Verdana, Arial, Helvetica, sans-serif; font-size:12px;">S/. <?php echo $row2['precio']?></td>
            <td align="center" ><label>
              <input name="cantidad<?php echo $i?>" type="text" size="1"  value="<?php echo $_SESSION['cant'][$i];?>"/>
              </label>
                </span></td>
            <td align="center" ><strong><span style="font:Verdana, Arial, Helvetica, sans-serif; font-size:12px;">S/. <?php echo $row2['precio']*$_SESSION['cant'][$i];?></span></strong></td>
            <td align="center" ><a href="carrito.php?eliminar=<?php echo $i ?>"><img src="images/eliminar.gif" width="17" height="17" border="0" />
              <label></label>
            </a></td>
          </tr>
          <tr bg="bg" bgcolor="#F0F0F0">
            <td height="8" colspan="7" align="center" bgcolor="#F5F5F5"></td>
          </tr>
          <?php
  }else{
  ?>
          <tr bgcolor="#FFFFFF" height="8">
            <td colspan="7"></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td><table width="112" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <th width="112" scope="col"><a  href="editarproducto.php?libro=<?php echo $row2['libro']?>"><img src="<?php echo $row2['dibujo'];?>" width='85' height='120' border='0'/></a></th>
                </tr>
              </table>
              <a  href="#"></a></td>
            <td colspan="-1" align="left">&nbsp;</td>
            <td colspan="-1" align="left"><strong><a onmouseover="entrar2(this);" on="on" onmouseout="salir2(this)" style="color:#333333; font:Verdana, Arial, Helvetica, sans-serif; font-size:13px;" href="editarproducto.php?libro=<?php echo $row2['libro']?>"></a><a onmouseover="entrar2(this);" on="on" onmouseout="salir2(this)" style="color:#333333; font:Verdana, Arial, Helvetica, sans-serif; font-size:13px;" href="editarproducto.php?libro=<?php echo $row2['libro']?>"><?php echo $row2['titulo'] ?></a></strong></td>
            <td align="center" style="font:Verdana, Arial, Helvetica, sans-serif; font-size:12px;">S/. <?php echo $row2['precio'];?></td>
            <td align="center">
              <input name="cantidad<?php echo $i?>" type="text" size="1" value="<?php echo $_SESSION['cant'][$i];?>" />
              <span style="font:Verdana, Arial, Helvetica, sans-serif; font-size:12px;"></span></td>
            <td align="center"><strong><span style="font:Verdana, Arial, Helvetica, sans-serif; font-size:12px;">S/. <?php echo $row2['precio']*$_SESSION['cant'][$i]; ?></span></strong></td>
            <td align="center"><a href="carrito.php?eliminar=<?php echo $i ?>"><img src="images/eliminar.gif" width="17" height="17" border="0" /></a><a href="carrito.php?eliminar=<?php echo $i ?>"></a></td>
          </tr>
          <?php ?>
          <tr bg="bg" bgcolor="#FFFFFF" height="8">
            <td height="8" colspan="7" align="center"></td>
          </tr>
          <?php 
  }
  }
  ?>

          <tr>
            <td colspan="7"><hr /></td>
          </tr>
          <tr>
		  <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><span class="Estilo3">SubTotal</span></td>
            <td align="center" style="font:Verdana, Arial, Helvetica, sans-serif; font:bold; font-size:12px"><strong><span style="font:Verdana, Arial, Helvetica, sans-serif; font-size:12px;">S/. <?php echo $subtotal?></span></strong></td>
		    <td align="center" style="font:Verdana, Arial, Helvetica, sans-serif; font:bold; font-size:12px">&nbsp;</td>
		  </tr>
          <tr>
            <td height="48" colspan="7"><table width="350" height="27" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <th width="72" scope="col"><label>
                    <input type="submit" name="actualizar" value="actualizar" />
                  </label></th>
                  <th width="141" scope="col"><label>
                    <input type="button" name="Submit" value="Continuar Comprando" onclick="continuar('<?php echo $categoria?>');" />
                  </label></th>
                  <th width="137" scope="col"><label>
                    <strong><input type="button" name="Submit2" value="Realizar Pedido" />
                    </strong>
                  </label></th>
                </tr>
            </table></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
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

function continuar(parametro){
location.href='producto.php?categoria='+parametro;
}

</script>