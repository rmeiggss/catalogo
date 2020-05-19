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
                <td class="m1"><strong>INSTALACI&Oacute;N DEL SERVIDOR DNS EN CENTOS 5.4</strong></td>
              </tr>
              <tr>
                <td height="230" valign="top" class="m1"><p>1.- Editamos el archivo /etc/hosts<br />
                    <img width="567" height="434" src="images/dns_clip_image002.gif" /><br />
                    <br />
                    <img width="563" height="394" src="images/dns_clip_image004.gif" /></p>
                  <p>2.- Editamos el archivo  /etc/sysconfig/network<br />
                      <img width="580" height="464" src="images/dns_clip_image006.gif" /><br />
                      <br />
                      <img width="570" height="434" src="images/dns_clip_image008.gif" /><br />
                    3.- Reiniciamos el sistema.<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reboot<br />
<br />
                    4.- Comprobamos el nombre del equipo<br />
                    <img width="512" height="409" src="images/dns_clip_image010.gif" /><br />
                    <br />
                  <img width="521" height="416" src="images/dns_clip_image012.gif" /></p>
                  <p>5.- Iniciamos el servicio  /etc/init.d/named start<br />
                      <img width="549" height="438" src="images/dns_clip_image002_0000.gif" /><br />
                      <br />
                    6.- Editamos el archivo de configuraci&oacute;n  named.conf<br />
  <img width="559" height="446" src="images/dns_clip_image004_0000.gif" /><br />
  <br />
  <img width="579" height="463" src="images/dns_clip_image006_0000.gif" /><br />
  <br />
                    7.- Reiniciamos el servicio<br />
  <img width="573" height="458" src="images/dns_clip_image008_0000.gif" /><br />
  <br />
                    8.- Configuramos el servidor DNS<br />
  <img width="553" height="442" src="images/dns_clip_image010_0000.gif" /><br />
  <br />
  <img width="554" height="443" src="images/dns_clip_image012_0000.gif" /><br />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image014.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image016.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image018.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image020.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image022.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image024.gif" /><br />
                    <br clear="all" />
                    <img width="642" height="514" src="images/dns_clip_image002_0001.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image004_0001.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image006_0001.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image008_0001.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image010_0001.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image012_0001.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image014_0000.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image016_0000.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image018_0000.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image020_0000.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image022_0000.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image024_0000.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image026.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image028.gif" /><br clear="all" />
                    <br />
                    <img width="642" height="514" src="images/dns_clip_image030.gif" /><br clear="all" />
</p>
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
