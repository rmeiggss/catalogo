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
                <td class="m1"><strong>INSTALACI&Oacute;N DE UN SERVIDOR CORREO EN CENTOS 5.4</strong></td>
              </tr>
              <tr>
                <td height="230" valign="top" class="m1"><p>1.- Verificar que el servidor DNS se  encuentre operativo<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /etc/init.d/named  status<br />
<br />
2.- Iniciar el servidor de correo<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /etc/init.d/sendmail start<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /etc/init.d/dovecot start<br />
<br />
3.- Hacemos una copia de seguridad de los  archivos de configuraci&oacute;n del correo.<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cd  /etc/mail<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cp &ndash;r /etc/mail /home/mail_back<br />
<img width="582" height="454" src="images/sendmail_clip_image002.gif" /><br />
<br />
<img width="566" height="451" src="images/sendmail_clip_image004.gif" /><br />
<br />
                  4.- Editamos el archivo  /etc/mail/local-host-name<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; vim /etc/mail/local-host-name<br />
  <img width="577" height="460" src="images/sendmail_clip_image006.gif" /><br />
   <br />
                  5.- Escribimos en nombre  de nuestro dominio. En mi caso:<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  trujillo.com<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; trujillo<br />
  <img width="543" height="419" src="images/sendmail_clip_image008.gif" /><br />
  <br />
                  6.- Editamos el archivo access<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; vim  /etc/mail/access<br />
  <img width="548" height="438" src="images/sendmail_clip_image010.gif" /><br />
   <br />
                  7.- Agregamos nuestra ip.<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10.10.10.11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; RELAY<br />
  <img width="532" height="426" src="images/sendmail_clip_image012.gif" /><br />
  <br />
                  8.- Editamos el archivo sendmail.mc<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; vim /etc/mail/sendmail.mc<br />
  <img width="529" height="423" src="images/sendmail_clip_image014.gif" /><br />
   <br />
  9.- Editamos la l&iacute;nea 116<br />
  <img width="589" height="56" src="images/sendmail_clip_image016.jpg" /><br />
  <br />
                  10.- Debe decir:<br />
                  <img width="398" height="24" src="images/sendmail_clip_image018.jpg" /><br />
                  <br />
                  11.- Editamos la l&iacute;nea  160<br />
                  <img width="367" height="18" src="images/sendmail_clip_image020.jpg" /><br />
                  <br />
                  12.- Debe decir:<br />
                  <img width="340" height="21" src="images/sendmail_clip_image022.jpg" /><br />
                  <br />
                  13.- Hacemos una copia de  seguridad del archive sendmail.cf<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cp  /etc/mail/sendmail.cf /etc/mail/sendmail.cf1<br />
<img width="547" height="487" src="images/sendmail_clip_image024.gif" /><br />
<br clear="all" />
                  14.- Compilamos el archivo <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; m4 /etc/mail/sendmail.mc &gt;  /etc/mail/sendmail.cf<br />
<img width="545" height="435" src="images/sendmail_clip_image002_0000.gif" /><br />
<br />
15.- Reiniciamos el servicio sendmail.<br />
<img width="557" height="445" src="images/sendmail_clip_image004_0000.gif" /><br />
 <br />
16.- Editamos el archivo dovecot.conf<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; vim  /etc/dovecot.conf<br />
<img width="557" height="446" src="images/sendmail_clip_image006_0000.gif" /><br />
<br />
<img width="557" height="445" src="images/sendmail_clip_image008_0000.gif" /><br />
 <br />
                  17.- Dice:<br />
                  <img width="344" height="20" src="images/sendmail_clip_image010.jpg" /><br />
                  <br />
                  18.- Debe decir:<br />
                  <img width="316" height="22" src="images/sendmail_clip_image012.jpg" /><br />
                  <br />
                  19.- Reiniciamos el  servicio<br />
                  <img width="611" height="488" src="images/sendmail_clip_image014_0000.gif" /><br />
                  <br />
                  20.- Testeamos los servicios con telnet.<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; telnet  IP &lt;PUERTO&gt;<br />
<img width="581" height="464" src="images/sendmail_clip_image016.gif" /><br />
<br />
<img width="585" height="467" src="images/sendmail_clip_image018.gif" /><br />
<br />
<img width="582" height="466" src="images/sendmail_clip_image020.gif" /><br />
<br />
                  21.- Leemos la bandeja de correo del  usuario root.(Primero aparecen los mensajes) <br />
                  <img width="581" height="464" src="images/sendmail_clip_image022.gif" /><br />
                  <br />
                  22.- Aparece el contenido del mensaje<br />
                  <img width="579" height="465" src="images/sendmail_clip_image024_0000.gif" /><br />
                  <br />  
                  <img width="584" height="459" src="images/sendmail_clip_image026.gif" /><br />
                  <br />
                  <img width="585" height="468" src="images/sendmail_clip_image028.gif" /><br />
                  <br />
                  <img width="580" height="462" src="images/sendmail_clip_image030.gif" /><br /> 
                  <br />
                  <img width="585" height="466" src="images/sendmail_clip_image032.gif" /><br />
                  <br />
                  <img width="585" height="467" src="images/sendmail_clip_image034.gif" /> <br />
                  <br />
                  <img width="585" height="467" src="images/sendmail_clip_image036.gif" /><br />
                  <br />
                  <img width="588" height="469" src="images/sendmail_clip_image038.gif" /><br />
                  <br />
                  <img width="585" height="468" src="images/sendmail_clip_image040.gif" /></p>
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
