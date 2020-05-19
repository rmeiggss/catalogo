<?php
include "libreria/cn.php";
include "libreria/funciones.php";
require_once "config/config.inc.php";
$cn=mysql_connect ($_servidor, $_usuario, $_clave) or die (mysql_error());
mysql_select_db ($_bd); 
if (!isset($id)) 			$id="";
include "libreria/variables.php";
if (!isset($id)) 			$id="";
if (!isset($fecha)) 		$fecha=date("Y-m-d h:i:s",time());
if (!isset($valor)) 		$valor="";
if (!isset($visitante)) 	$visitante="";
if (!isset($email))     	$email="";
$tema=$_REQUEST['tema'];
$accion=$_REQUEST['accion'];
if($accion=="grabar")
{
	$cadena="select max(comentario) from comentario";
	$rs=mysql_query($cadena,$cn) or die(mysql_error());
	$row=mysql_fetch_array($rs);
	$comentario=$row['0']+1;
	$comentario=str_pad($comentario,3,0,STR_PAD_LEFT);
	$cadena="insert into comentario (comentario,tema,fecha,valor,visitante,email) values ('".$comentario."','".$tema."','".$fecha."','".$valor."','".$visitante."','".$email."')";
	$rs=mysql_query($cadena,$cn) or die(mysql_error());	
}
//Actualizo el numero de visitas
$sql_vis="update tema set visitas=visitas+1 where tema='".$tema."'";
mysql_query($sql_vis);
//Muestro el detalle de la visita y los comentarios
$cadena="select * from tema where tema='".$tema."'";
$rs=mysql_query($cadena,$cn);
$fila="";
$row=mysql_fetch_array($rs);
$tema=$row['tema'];
$nombre=$row['nombre'];
$fecha=$row['fecha'];
$titulo=$row['titulo'];
$visitas=$row['visitas'];
$fila.="<tr bgcolor='#58ACFA'>";
$fila.="<td align='left' class='m2'>".html_entity_decode($titulo)."</td>";
$fila.="</tr>";
$fila.="<tr>";
$fila.="<td align='left' class='m1'>".formatofecha($fecha)." (".$visitas." lecturas)</td>";
$fila.="</tr>";
$fila.="<tr>";
$fila.="<td class='m1'>".html_entity_decode($nombre)."</td>";
$fila.="</tr>";
$cadena="select * from comentario where tema='".$tema."' order by fecha desc";
$rs=mysql_query($cadena,$cn) or die(mysql_error());
$fila2="<table width='100%' border='0' cellpadding='0' cellspacing='0'>";
while($row=mysql_fetch_array($rs))
{
    $valor=$row['valor'];
    $ifecha=$row['fecha'];
    $visitante=$row['visitante'];
    $fila2.="<tr height='30'>";
    $fila2.="<td colspan='2' align='left' class='m1' height='30'><p align='letf' valign='middle'><strong >&nbsp;".$visitante." dice:</strong></p></td>";
    $fila2.="<td align='right' class='m1'><p align='letf' valign='middle'><strong >".$ifecha."</strong></p></td>";
    $fila2.="</tr>";
    $fila2.="<tr>";
    $fila2.="<td class='m1' style='width:75%'><p align='letf' valign='top'>&nbsp;&nbsp;".$valor."</p><td>";
    $fila2.="<td align='rignt' class='m1'>&nbsp;</td>";
    $fila2.="</tr>";
    $fila2.="<tr>";
    $fila2.="<td colspan='2'>&nbsp;</td>";
    $fila2.="</tr>";
}
$fila2.="</table>";
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
<link href="stylos.css" rel="stylesheet" type="text/css" />
<link href="css/stylos.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
<!--
body
 {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #000000;
}
.Estilo1 
{
	color: #0000FF;
	font-weight: bold;
}
.Estilo2 {color: #232651}
.Estilo3 
{
	color: #FFCC66;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="734" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
    <td height="141"><?php include "header.php";?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="80%" height="208" align="right" valign="top">
     <table width="98%" border="0" align="center" cellpadding="5" cellspacing="3">
      <form name="a" id="a">
        <tr>
            <td >&nbsp;</td>
        </tr>
        <?=$fila;?>
        <tr>
          <td colspan='2'><font size="2" face="arial" class='htmldetalle'><b>&nbsp;&nbsp; &nbsp;COMENTARIOS</b></font></td>
        </tr>
        <tr>
          <td colspan='2'><hr align="center" width="95%" /></td>
        </tr>
        <tr>
          <td colspan='2' valign='top'><?=$fila2;?></td>
        </tr>
        <tr>
          <td colspan='2'><font size="2" face="arial" class='htmldetalle'><b>&nbsp;&nbsp;&nbsp;&nbsp;AGREGAR COMENTARIO</b></font></td>
        </tr>
        <tr>
          <td colspan='2'><hr align="center" width="95%" /></td>
        </tr>
        <tr>
          <td>
          <center>
          <table border="0" cellpadding="6" cellspacing="2" width='95%'>
              <tr height="35">
                <td width='20%'><font size='2' face='arial' class='htmldetalle'>NOMBRE </font></td>
                <td width="279"><input type="text" align="center" name="visitante" style="width:200px" /></td>
              </tr>
              <tr height="35">
                <td><font size='2' face='arial' class='htmldetalle'>EMAIL </font></td>
                <td><input name="email" type="text" style="width:200px" align="center" /></td>
              </tr>
              <tr>
                <td valign="top" width="145"><font size='2' face='arial' class='htmldetalle'>COMENTARIO :</font></td>
                <td align="left" valign="top">
                    <textarea name="valor" rows="8" cols="40"></textarea>
                </td>
              </tr>
              <tr height="35">
                <td>&nbsp;</td>
                <td align="left">
                <input type="button" onclick="location.href='index.php';" value="Regresar" />
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="hidden" name="accion" id="accion" value="grabar">
                  <input type="submit" value="Grabar" />
                  &nbsp;&nbsp;&nbsp;</td>
              </tr>
              <tr height="35" style="display:none;">
                <td>&nbsp;</td>
                <td>
                    <input type="text" name="tema" value="<?php echo $tema;?>" /></td>
              </tr>
          </table>
          </center>
          </td>
        </tr>
      </form>
    </table></td>
  </tr>
  <tr>
    <td><?php include "pie.php";?></td>
  </tr>
</table>
</body>
</html>
