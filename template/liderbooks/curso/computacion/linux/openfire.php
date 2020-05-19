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
                <td class="m1"><strong>INSTALACI&Oacute;N DE OPENFIRE EN CENTOS 5.4</strong></td>
              </tr>
              <tr>
                <td height="230" valign="top" class="m1"><p>Openfire es un cliente de mensajer&iacute;a instant&aacute;nea libre (msn libre), ideal para empresas, donde podr&aacute;n tener una red privada para comunicaci&oacute;n. Utiliza el protocolo jabber y corre bajo java.<br />
                  Java. Es un lenguaje de programaci&oacute;n multiplataforma ( sus programas trabaja tanto en Linux como en Windows) para lo cual debe de instalarse previamente una m&aacute;quina virtual.<br />
                  <br />
                  1.- Instalaci&oacute;n de jdk en Centos.<br />
                Descargamos del sitio web de java el jdk para Linux en su formato rpm y lo instalamos.</p>
                <p><img width="567" height="13" src="images/openfire_clip_image002.jpg" /></p>
                <p><img width="566" height="167" src="images/openfire_clip_image002_0000.jpg" /></p>
                <p>2.- Presionamos &ldquo;yes&rdquo; y aceptamos la licencia hasta  terminar.<br />
                  <img width="567" height="254" src="images/openfire_clip_image002_0001.jpg" /></p>
                <p>3.- Descargamos el archivo rpm del servidor openfire desde  su sitio web.<br />
                    <img width="566" height="30" src="images/openfire_clip_image004.jpg" /></p>
                <p>4.- Reiniciamos el servicio openfire.<br />
                    <img width="567" height="14" src="images/openfire_clip_image006.jpg" /></p>
                <p>5.- Iniciamos la instalaci&oacute;n escribiendo en un navegador web <a href="http://localhost:9090/">http://localhost:9090</a>. &nbsp;&nbsp;&nbsp;<br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seleccionamos el  idioma de instalaci&oacute;n y presionamos &ldquo;continue&rdquo;.<br />
  <img border="0" width="567" height="425" src="images/openfire_clip_image008.jpg" /></p>
                <p>6.- Presionamos &ldquo;Continue&rdquo;<br />
                    <img border="0" width="567" height="425" src="images/openfire_clip_image010.jpg" /></p>
                <p>7.- Seleccionamos una conexi&oacute;n estandar con la base de  datos. Esta ser&aacute; en mysql, <br />
                  <img width="553" height="415" src="images/openfire_clip_image002_0002.jpg" /></p>
                <p>8.- Iniciamos el servicio de base de datos mysql<br />
                  /etc/init.d/mysqld restart<br />
                  Conectamos al servidor de base de  datos por consola y creamos la base de datos &ldquo;openfire&rdquo;</p>
                <p><img width="566" height="113" src="images/openfire_clip_image004_0000.jpg" /></p>
                <p>(*) Notar que hemos accedido a la base de datos sin poner  password del usuario root. Por defecto el mysql se instala sin clave, pero si  lo tuviera para conectarnos tendrimos que escribir mas o menos asi:<br />
                  mysql &ndash;uroot &ndash;p<br />
                  A continuaci&oacute;n nos pedir&aacute; el password.<br />
                  password = *****<br />
                  mysql&gt;</p>
                <p>9.- Escribirmos las caracteristicas de conecci&oacute;n.<br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Database Driver Presents : mysql<br />
                  JDBC Driver Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  com.mysql.jdbc.Driver<br />
                  Database URL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : jdbc:mysql://localhost:3306/openfire<br />
                  Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : root<br />
                  Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
  &nbsp;&nbsp;&nbsp;&nbsp; Presionamos &ldquo;Continue&rdquo;.<br />
  <img width="567" height="425" src="images/openfire_clip_image006_0000.jpg" /></p>
                <p>10.- Seleccionamos como va a trabajar con el sistema de  usuarios por Default y presionamos &ldquo;Continue&rdquo;.</p>
                <p>&nbsp;</p>
                <p><img width="567" height="425" src="images/openfire_clip_image008_0000.jpg" /></p>
                <p>11.- Escribimos el correo del usuario &ldquo;admin&rdquo; y su  contrase&ntilde;a &ldquo;123456&rdquo;.<br />
                    <img width="567" height="425" src="images/openfire_clip_image010_0000.jpg" /> </p>
                <p>&nbsp;</p>
                <p>12.- La instalaci&oacute;n ha concluido, presionamos el bot&oacute;n para  ir a la pantalla de logueo.<br />
                    <img width="541" height="404" src="images/openfire_clip_image012.jpg" /> </p>
                <p>13.- Antes de loguearnos reiniciar al servidor openfire para  que los cambios apliquen.<br />
                    <img width="566" height="12" src="images/openfire_clip_image014.jpg" /></p>
                <p>14.- Escribimos username: admin&nbsp;&nbsp;&nbsp; y password: 123456<br />
                    <img width="552" height="414" src="images/openfire_clip_image016.jpg" /><br />
                  15.- Accedemos al panel administrador del openfire.<br />
  <img width="567" height="425" src="images/openfire_clip_image018.jpg" /><br />
                  16.- Creamos usuarios para empezar a chatear. Por ejemplo,  al usario Freddy y Vanesa.</p>
                <p><img width="567" height="425" src="images/openfire_clip_image020.jpg" /> </p>
                <p><img width="567" height="425" src="images/openfire_clip_image022.jpg" /> </p>
                <p><img width="567" height="425" src="images/openfire_clip_image024.jpg" /> </p>
                <p><img width="567" height="425" src="images/openfire_clip_image026.jpg" /> </p>
                <p>17.- Ahora estamos listos para comunicarnos, solo  necesitamos un programa cliente. Descargamos el spark de su sitio web y lo  instalamos.<br />
                    <img width="566" height="453" src="images/openfire_clip_image028.gif" /><br />
                  18.- Ahora conectamos desde 2 m&aacute;quinas pertenecientes a la  red con nuestros usuarios creados y comenzamos a charlar.<br />
                  Nombre de Usuario : freddy<br />
                  Clave&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  123456<br />
                  Servidor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : IP donde  instalaste el openfire<br />
                  <br />
                  Nombre de Usuario : vanesa<br />
                  Clave&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  123456<br />
                  Servidor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : IP donde  instalaste el openfire</p>
                </td>
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
