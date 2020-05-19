<?php
require_once "config/config.inc.php";
$cn=mysql_connect($_servidor,$_usuario,$_clave) or die(mysql_error());
mysql_select_db($_bd);
if(!isset($accion))			$accion="";
if(!isset($palabra))		$palabra="";

/*if($accion=="busca")
{
 echo "<script>alert('Pronto podras buscar tus libros con esta herramienta')</script>";
  $accion="";
}
$cadena="
				select
				nombre,
				categoria
				from categoria
				where borrado=''
				";
$rs=mysql_query($cadena,$cn) or die(mysql_error());
$fila="";
while($row=mysql_fetch_array($rs))
{
	$fila.="<tr>";
    $fila.="<td align='left'><a href='producto.php?categoria=".$row['1']."' target='_parent'>
    
    <?php  ?>".$row['0']."</a></td>";
}
$fila.="</tr>";
*/
?>

      <table border="0" width="100%" cellpadding="3" cellspacing="0">
		<tr>
  <td colspan="2">  </td>
  		</tr>
		<tr>
		  <td height="36" colspan="2"><u><strong><font size="2" color="#CC3300" face="Verdana, Arial, Helvetica, sans-serif">Categorias</font></strong></u></td>
	    </tr>
		<?php 
		$cadena="
				select
				nombre,
				categoria
				from categoria
				where borrado=''
				";
$rs=mysql_query($cadena,$cn) or die(mysql_error());
$fila="";

while($row=mysql_fetch_array($rs))
{

		?>
		<tr>
		  <td width="13%" height="24" align="left"><strong><a onmouseover="entrar(this);" on onmouseout="salir(this)" style="color:#336FFF; font:Verdana, Arial, Helvetica, sans-serif; font-size:13px; font:bold" href='producto.php?categoria=<?php echo $row['categoria']?>' target='_parent'></a></strong></td>
	      <td width="87%" align="left"><strong><a onmouseover="entrar(this);" on="on" onmouseout="salir(this)" style="color:#336FFF; font:Verdana, Arial, Helvetica, sans-serif; font-size:13px; font:bold" href='producto.php?categoria=<?php echo $row['categoria']?>' target='_parent'><img src="images2.jpg" width="22" height="22" border="0" /></a><a onmouseover="entrar(this);" on onmouseout="salir(this)" style="color:#336FFF; font:Verdana, Arial, Helvetica, sans-serif; font-size:13px; font:bold" href='producto.php?categoria=<?php echo $row['categoria']?>' target='_parent'>&nbsp; <?php echo $row['nombre']?></a></strong></td>
		</tr>
		
		  <?php 
		  }
		  ?>
		  
		  <tr>
		  <td height="24" align="left">&nbsp;</td>
		  <td align="left">&nbsp;</td>
	    </tr>
	  </table>

<script>
function entrar(objeto){
objeto.style.color="#993300";
objeto.style.textDecoration="underline";
//objeto.style.font="bold";
}
function salir(objeto){
objeto.style.color="#336FFF";
objeto.style.textDecoration="none";
}





  function buscar()
  {
	document.a.submit();
  }
</script>
