<?php
require_once "../../../libreria/cn.php";
require_once "../../../config/config.inc.php";
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
<link href="../../../css/stylos.css" rel="stylesheet" type="text/css" />
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
.Estilo4 {color: #FFFFFF}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}

-->
</style>
</head>

<body>
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
      <td height="141" colspan="2">
          <?php include "header.php"?>
      </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="208" align="left" valign="top">
      <div style="height:4750px">
            <table width="100%" border="0">
              <tr>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso.php?categoria=000001">MATEMATICAS</a></th>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso/computacion/index.php">COMPUTACION</a></th>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso.php?categoria=000002">INGLES</a></th>
              </tr>
            </table>
            <?php require('barra_de_navegacion.php');?>
<p align="center"><strong>Instalaci&oacute;n de Oscommerce</strong></p>
          <p class="m1">1.- Renombramos el subdirectorio catalog a osscomerce y  copiamos dentro de la carpeta <br />
  &nbsp;&nbsp;&nbsp;&nbsp; de publicaci&oacute;n  del apache.</p><p align="center">
  <img width="504" height="403" src="images/oscommerce_clip_image002.gif" /></p>
          <p class="m1">2.- Seleccionamos las opciones de instalaci&oacute;n por defecto.</p><p align="center">
              <img width="504" height="403" src="images/oscommerce_clip_image004.gif" /></p><p class="m1">
            3.- Introducimos los par&aacute;metros para conectarse con la base  de datos &ldquo;mysql&rdquo;.</p>
          <p align="center"><img width="504" height="403" src="images/oscommerce_clip_image006.gif" /></p><p class="m1">
            4.- Se ejecuta una prueba de conexi&oacute;n con la base de datos.</p>
          <p align="center"><img width="504" height="403" src="images/oscommerce_clip_image008.gif" /></p>
          <p>&nbsp;</p>
          <p class="m1">5.- La base de datos se import&oacute; satisfactoriamente</p><p align="center">
              <img width="504" height="403" src="images/oscommerce_clip_image010.gif" /></p>
          <p class="m1">6.- Configuramos el servidor web.</p><p align="center">
              <img width="504" height="403" src="images/oscommerce_clip_image012.gif" /></p>
          <p>&nbsp;</p>
          <p class="m1">7.- Presionamos siguiente</p><p align="center">
              <img width="504" height="403" src="images/oscommerce_clip_image014.gif" /></p>
          <p class="m1">8.- La instalaci&oacute;n ha concluido.</p><p align="center">
              <img width="504" height="403" src="images/oscommerce_clip_image016.gif" /></p>
          <p>&nbsp;</p>
          <p class="m1">9.- Panel administrativo.</p><p align="center">
              <img width="504" height="403" src="images/oscommerce_clip_image018.gif" /></p>
          <p class="m1">10.- Cat&aacute;logo de productos.</p><p align="center">
              <img width="504" height="403" src="images/oscommerce_clip_image020.gif" /></p>
      </div>    </td>
  </tr>
</table>
<?php require('barra_de_navegacion.php');?>
</body>
</html>
