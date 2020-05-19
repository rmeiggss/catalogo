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
        <div style="height:600px">
            <table width="100%" border="0">
              <tr>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso.php?categoria=000001">MATEMATICAS</a></th>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso/computacion/index.php">COMPUTACION</a></th>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso.php?categoria=000002">INGLES</a></th>
              </tr>
            </table>
            <?php require('pie.php');?>
            <p class="m1">LINUX<br />
              =====</p>
            <ol class="m1">
              <li>Instalaci&oacute;n de Linux Centos 5.4</li>
              <li><a href="comandos.php">Comandos B&aacute;sicos</a></li>
              <li>Estructura de directorios</li>
              <li>Sistema de archivos</li>
              <li>El editor de texto vi</li>
              <li>Servicios</li>
              <ul class="m1">
                  <li>El servidor web (Apache).</li>
                  <li>El servidor FTP (vsftp).</li>
                  <li>El servidor SSH (Open SSH).</li>
                  <li>El servidor Samba.</li>
                  <li><a href="mysql.php">El servidor de base de datos (Mysql).</a></li>
                  <li><a href="dns.php">El servidor DNS (bind).</a></li>
                  <li><a href="sendmail.php">El servidor de correo (Sendmail).</a></li>
                  <li><a href="openfire.php">El servidor de mensajer&iacute;a instant&aacute;nea (Openfire).</a> </li>
              </ul>
            </ol>
            <p class="m1">Miscel&aacute;nea:</p>
            <ul class="m1">
              <li>Breve historia del software libre.</li>
              <li>Instalaci&oacute;n del Vmware Workstation</li>
              <li>La shell de Linux</li>
              <li>Sobre unir los puntos</li>
            </ul>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp; </p>
        </div>
    </td>
  </tr>
</table>
<?php require('pie.php');?>
</body>
</html>
