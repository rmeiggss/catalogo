<?php
session_start();
//session_register('cuenta');
include "libreria/cn.php";
include "libreria/variables.php";
require_once 'clases/Contador.php';
require_once "config/config.inc.php";
$cn=mysql_connect($_servidor,$_usuario,$_clave) or die(mysql_error());
mysql_select_db($_bd);
$sql_eventos="select * from evento where estado='0' order by id desc";
$rs_eventos=mysql_query($sql_eventos);
/*****************Configuracion del contador******************************/
$total_registros=mysql_num_rows($rs_eventos);
$registros_por_hoja=4;
$hojas_por_bloque=2;
$ruta_imagen="images/";
$pagina_seleccionada=(!isset($_REQUEST['pagina_seleccionada']) ? 1:$_REQUEST['pagina_seleccionada']);
$inicio=$registros_por_hoja*($pagina_seleccionada-1)+1;
$fin=$registros_por_hoja*$pagina_seleccionada;
/****************************************/
$fila="";
$j=1;
while($row_eventos=mysql_fetch_array($rs_eventos)){
    if($j>=$inicio & $j<=$fin){
        $id=$row_eventos['id'];
        $fecha=$row_eventos['fecha'];
        $titulo=$row_eventos['titulo'];
        $contenido=$row_eventos['contenido'];
        $ruta_imagen=$row_eventos['ruta_imagen'];
        $fila.="<tr>";
        $fila.="<td class='m8'>".$titulo."</td>";
        $fila.="<tr>";
        $fila.="<tr>";
        $fila.="<td class='m1'>".$fecha."</td>";
        $fila.="<tr>";
        $fila.="<tr>";
        $fila.="<td class='m1'>".$contenido."</td>";
        $fila.="<tr>";
        $fila.="<tr>";
        $fila.="<td align='center'><image src='$ruta_imagen' border='0'></td>";
        $fila.="<tr>";
   }
   ++$j;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo TITULO;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" CONTENT="<?php echo DESCRIPCION;?>"/>
<meta NAME="keywords" CONTENT="<?php echo KEYWORDS;?>"/>
<meta NAME="Copyright" CONTENT="<?php echo COPYRIGHT;?>"/>
<meta NAME="Publisher" CONTENT="<?php echo PUBLISER;?>"/>
<meta NAME="Distribution" CONTENT="Global"/>
<meta NAME="Robots" CONTENT="All"/>
<link href="css/stylos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="javascript/contador.js"></script>
</head>
<body>
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#99CC33">
  <tr>
    <td height="141" colspan="2" align="left" valign="top"><?php include "header.php";?></td>
  </tr>
  <tr>
    <td height="30" colspan="2" class="font4" bgcolor="#EBEBEB">
    	<?php include "header_inferior.php";?>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="80%" height="208" align="right" valign="top">
        <table width="99%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="10" height="156" valign="top">&nbsp;</td>
        <td width="580" valign="top">
            <div align="center">
          <table width="95%" border="0" cellpadding="4" cellspacing="0">
            <?php echo $fila;?>
            <tr>
              <td height="21" align="right">
                  <span class="m1">
                    <?php
                    $contador=new Contador($total_registros, $registros_por_hoja, $hojas_por_bloque, $ruta_imagen);
                    echo $contador->mostrar($pagina_seleccionada);
                    ?>
                  </span>
              </td>
            </tr>
          </table>
        </div>
        </td>
      </tr>
    </table>
    </td>
    <td align="center" valign="top" bgcolor="#EBEBEB">

	  <table border="0" cellspacing="0" cellpadding="0" width="100%">

      <tr>

        <td><?php include "busqueda.php";?></td>

      </tr>

      <tr>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td height="2" bgcolor="#006600"></td>

      </tr>

	  <tr>

        <td bgcolor="#FEF9DE"><? include "categoria.php";?></td>

      </tr>

	  <tr>

        <td height="2" bgcolor="#006600"></td>

	    </tr>

      <tr>

        <td height="10" align="center" valign="middle" bgcolor="#FFFFFF"></td>

      </tr>

      <tr>

        <td height="27" align="center" valign="middle" bgcolor="#FFFFFF"><? include "compras.php";?></td>

      </tr>

      <tr>

        <td height="10" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>

      </tr>

      <tr>

        <td height="45" align="center"><?php include "eventos.php"?></td>

      </tr>

      <tr>

        <td></td>

      </tr>

      <tr>

        <td height="21" align="center">&nbsp;</td>

      </tr>

      <tr>

        <td height="51" align="center"><a href="http://www.kallpahost.com" target="_blank"><img src="images/mono_azul.png" alt="hosting" width="97" height="97" border="0" /></a></td>

      </tr>

      <tr>

        <td height="51"><div align="center" class="font1"><a href="http://www.kallpahost.com" target="_blank">Hosting y Dominio</a> </div></td>

      </tr>

      <tr>

        <td height="51">&nbsp;</td>

      </tr>

      <tr>

        

        <?php  ?><td height="51">&nbsp;</td>

      </tr>

    </table>	</td>

  </tr>

  <tr>

    <td colspan="2"><?php include "pie.php";?></td>

  </tr>

</table>

<script type="text/javascript">

var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");

document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

</script>

<script type="text/javascript">

try {

var pageTracker = _gat._getTracker("UA-8408701-1");

pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>