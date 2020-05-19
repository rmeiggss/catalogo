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
        <div style="height:auto;">
            <table width="100%" border="0">
              <tr>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso.php?categoria=000001">MATEMATICAS</a></th>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso/computacion/index.php">COMPUTACION</a></th>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso.php?categoria=000002">INGLES</a></th>
              </tr>
            </table>
            <?php require('pie.php');?>
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td class="m1"><strong>INSTALACI&Oacute;N DE MYSQL EN CENTOS 5.4</strong></td>
              </tr>
              <tr>
                <td height="230" valign="top" class="m1"><p>1.- Archivos a instalar:<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mysql<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mysql-server<br />
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;perl-DBD-Mysql<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Es frecuente utilizar la base de  datos mysql con el lenguaje de programaci&oacute;n &rdquo;php&rdquo; por lo cual este tambi&eacute;n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lo  instalaremos:<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;php<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;php-cli<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;php-common<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mysql-php<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(*) Notar que estamos instalando  php 5.1, es la versi&oacute;n que viene con CentOS 5.4. Actualmente est&aacute; en la &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;versi&oacute;n  5.2.<br />
<br />
2.- Instalados los archivos mencionados en el orden a  continuaci&oacute;n:<br />
 &nbsp;&nbsp;<img width="566" height="79" src="images/mysql_clip_image002.jpg" /></p>
                  <p><img width="567" height="68" src="images/mysql_clip_image004.jpg" /></p>
                  <p><img width="566" height="71" src="images/mysql_clip_image006.jpg" /></p>
                  <p><img width="566" height="65" src="images/mysql_clip_image008.jpg" /></p>
                  <p><img width="566" height="60" src="images/mysql_clip_image010.jpg" /></p>
                  <p><img width="566" height="64" src="images/mysql_clip_image012.jpg" /></p>
                  <p><img width="566" height="63" src="images/mysql_clip_image014.jpg" /></p>
                <p>3.- Reinicializamos el servicio de base de datos mysql:<br />
                  <img width="566" height="23" src="images/mysql_clip_image002_0000.jpg" /><br />
                    <br />
                  <img width="566" height="63" src="images/mysql_clip_image004_0000.jpg" /></p>
                <p>4.- Ingresamos al servidor de base de datos digitando: mysql<br />
                    <img width="567" height="80" src="images/mysql_clip_image006_0000.jpg" /></p>
                <p>5.- A continuaci&oacute;n lo que vamos a ingresar son sentencias  SQL. Veamos cuantas bases de datos existen en nuestro servidor.<br />
                    <img width="567" height="116" src="images/mysql_clip_image008_0000.jpg" /></p>
                <p>6.- Creamos una base de datos de nombre &ldquo;latino&rdquo;.<br />
                    <img width="566" height="42" src="images/mysql_clip_image010_0000.jpg" /></p>
                <p>7.- Volvemos a ver cuantas bases de datos creadas tenemos.<br />
                    <img width="567" height="127" src="images/mysql_clip_image012_0000.jpg" /></p>
                <p>8.- Crearemos una tabla alumnos dentro de nuestra base de  datos &ldquo;latino&rdquo;<br />
                    <img width="567" height="35" src="images/mysql_clip_image014_0000.jpg" /></p>
                <p><img width="566" height="46" src="images/mysql_clip_image016.jpg" /></p>
                <p>9.- Insertamos datos a nuestra tabla &ldquo;alumnos&rdquo;.<br />
                    <img width="566" height="237" src="images/mysql_clip_image018.jpg" /></p>
                <p>10.- Mostramos los datos ingresados a la tabla alumnos.<br />
                    <img width="567" height="164" src="images/mysql_clip_image020.jpg" /></p>
                <p>11.- Si queremos una interfaz grafica, tenemos que reiniciar  el servicio apache e instalar el phpmyadmin.<br />
                  /etc/init.d/httpd restart</p>
                <p>12.- El programa phpmyadmin lo descargamos desde Internet  una version compatible con php5.1, dos versiones anteriores a la actual.</p>
                <p>13.- Descomprimos el archivo tar y lo copiamos a la ruta de  publicaci&oacute;n del apache /var/www/html.<br />
                    <img width="566" height="22" src="images/mysql_clip_image022.jpg" /></p>
                <p>14.- En un navegador web, escribimos localhost/phpmyadmin.  Esta es la interfaz grafica del servidor de base de datos mysql.<br />
                    <img width="567" height="425" src="images/mysql_clip_image024.jpg" /></p>
                <p>15.- Si queremos visualizar los datos ingresados en el  ejemplo. Abrimos la base de datos latino.<br />
                    <img width="567" height="425" src="images/mysql_clip_image026.jpg" /></p>
                <p>16.- Damos clic a la tabla alumnos y presionamos Browse.<br />
                    <img width="567" height="425" src="images/mysql_clip_image028.jpg" /></p>
                <p><br />
                </p></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp; </p>
        </div>
    </td>
  </tr>
</table>
<?php require('pie.php');?>
</body>
</html>
