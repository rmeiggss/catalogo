<?php
require_once "config/config.inc.php";
$cn=mysql_connect($_servidor,$_usuario,$_clave) or die(mysql_error());
mysql_select_db($_bd);
if(!isset($accion))			$accion="";
if(!isset($palabra))		$palabra="";
if($accion=="busca")
{
  //echo "<script>alert('Pronto podras buscar tus libros con esta herramienta')</script>";
  $accion="";
//  $cadena="select libro, nombre";
}
?>
<html>

<body>
<form name="a" action="resultado_busqueda.php" target="_parent">
  <table align="center" border="0" width="100%" cellpadding="2" cellspacing="1">  
	<tr>
		<td align="center"><strong>Busqueda</strong></td>
	</tr>
	<tr>
	  <td align="center"><label>
	    <select name="select" style="background:#FEF5D8; font-size:10px; font:Verdana, Arial, Helvetica, sans-serif; color:#993300; font:bold;">
	      <option>Cualquiera</option>
	      <option>Titulo</option>
	      <option>Autor</option>
        </select>
	  </label></td>
    </tr>
	<tr>
		<td align="center">&nbsp;&nbsp;&nbsp;<input type="text" name="palabra" size="10">
		  <input type="button" value="Ir" onClick="buscar()">	  </td>
	</tr>
    <tr style="font:Verdana, Arial, Helvetica, sans-serif; font-size:11px">
      <td align="center">Use solo palabras claves<BR>
        <a href="#">Busqueda Avanzada </a></td>
    </tr>
    <tr style="display:none">
		<td align="center"><input type="text" name="accion" value="busca"></td>
	</tr>
</table>
</form>
</body>
</html>

<script>
  function buscar()
  {
	document.a.submit();
  }
</script>
