<?php
include "libreria/cn.php";
include "libreria/variables.php";
require_once "config/config.inc.php";
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
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
    
    <?php  ?><td height="141" colspan="2"><?php include "header.php";?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="80%" height="208" align="left" valign="top">
	  <table width="98%" border="0" align="center">
        <tr>
          <td align="center" valign="top"><p class="titulotabla">CONSTANTINO CARVALLO </p>
            <p align="left" class="font1">Constantino Carvallo falleci&oacute; 18/08/2008 en Lima a causa de un infarto al coraz&oacute;n, pese a los esfuerzos que se hicieron en la Cl&iacute;nica Americana de Lima por mantenerlo con vida. Un tipo espectacular que pensaba antes que nada en los ni&ntilde;os. </p>
            <p align="left" class="font1">Constantino cre&oacute; junto a padres y primeros alumnos  el colegio experimental Los Reyes Rojos y perteneci&oacute; a la dirigencia del club de f&uacute;tbol Alianza Lima cuyas inferiores se educaban en el colegio. Un colegio ejemplar del cual los chicos no deseaban irse al terminar los cursos. Un colegio donde el espiritu cr&iacute;tico era formado en la realidad. Las notas formales dicen que fue miembro del Consejo Nacional de Educaci&oacute;n. Para nosotros ser&aacute; siempre al maestro y profesor de nuestros hijos y alguien al que recordaremos siempre con mucho agradecimiento y afecto.</p>
          <p class="font1"><img src="images/constantino-carvallo.jpg" width="189" height="201" /></p></td>
        </tr>
      </table>
	  <p class="Estilo2"><br />
    </p>
	</td>
    <td align="center" valign="top" bgcolor="#EBEBEB"><table border="0" cellspacing="0" cellpadding="0" width="100%">
      <tr>
        <td><? include "busqueda.php";?></td>
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
        <td height="10" align="center" valign="middle" bgcolor="#FFFFFF"></td>
      </tr>
      <tr>
        <td height="45">&nbsp;</td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <?php  ?>
        <td height="51">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><? include "pie.php";?></td>
  </tr>
</table>
</body>
</html>
