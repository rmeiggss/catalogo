<?
$cn=mysql_connect($_servidor,$_usuario,$_clave) or die(mysql_error());
mysql_select_db($_bd);
if(!isset($accion))			$accion="";
if(!isset($palabra))		$palabra="";
if($accion=="busca")
{
 /*echo "<script>alert('Pronto podras buscar tus libros con esta herramienta')</script>";*/
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

?>
<html>
<body>

<center>
      <table border="1" width="100%" cellpadding="3" cellspacing="0">
		<tr background="green">
			<td>
   <?php  ?>CATEGORIAS</td>
		</tr>
		<?=$fila;?>
	  </table>
</center>
</body>
</html>

<script>
  function buscar()
  {
	document.a.submit();
  }
</script>
