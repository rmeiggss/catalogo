<?php
include "libreria/cn.php";
include "libreria/variables.php";
require_once "config/config.inc.php";
$cn=mysql_connect ($_servidor, $_usuario, $_clave) or die (mysql_error());
mysql_select_db ($_bd); 
$accion=$_POST["accion"];
if($accion=="enviar")
{
	$nom_ape=$_POST['nombre'];
	$email_exp=$_POST['email'];
	$message=$_POST['comentario'];
	$telefono=$_POST['telefono'];
	$msg = "E-mail desde Mi Sitio Web\n\n";
	$msg .= "Nombre: $nom_ape\n";
	$msg .= "E-mail: $email_exp\n";
	$msg .= "Telefono: $telefono\n";
	$msg .= "Mensaje: $message\n\n";
	$to = "martin_trujillo1105@hotmail.com";
	$subject = "Consulta desde Liderbooks : $nom_ape";
	$mailheaders = "E-mail desde Mi Sitio Web \n";
	$mailheaders = "From: informes@liderbooks.com\n\n";
	$mailheaders .= "Reply-To: $email_exp\n\n";
	//Envio al correo
	mail($to, $subject, $msg, $mailheaders);
	//Grabo en la base de datos
	$sql0 = "select max(comentario)+1 from comentario";
	$rs0  = mysql_query($sql0);
	$row0 = mysql_fetch_array($rs0);
	$comentario=str_pad($row0[0],3,0,STR_PAD_LEFT);
	$sql="insert into comentario (comentario,tema,fecha,valor,visitante,email,telefono) values ('$comentario','0','".date("Y-m-d h:i:s",time())."','$msg','$nom_ape','$email_exp','$telefono') ";
	mysql_query($sql);
}
$accion="";
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
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #666666;
}
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

<link href="stylos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {
	color: #669900;
	font-weight: bold;
}
.Estilo2 {color: #FF0000}
-->
</style>
</head>
<body>
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#CCCCCC">
  <tr >
    <td height="141" valign="top" align="left" ><?php include "header.php";?></td>
  </tr>
  <tr>
    <td height="124" align="left" valign="top" background="images/main_04.jpg">
	<table width="100%" height="213" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="21%" height="213" align="left" valign="top">
	</td>
        <td width="79%" align="center" valign="top">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="65%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="3" align="center"><div align="left"><img src="images/caja1_top.gif" width="450" height="16" /></div></td>
                </tr>
                <tr>
                  <td width="10%" colspan="3" align="center" valign="top" background="images/caja1_middle2.gif"><p class="font1">Gracias por enviarnos una consulta<br />
                    <br />
                    Estamos atendiendo su pedido de inmediato.</p>
                    <p class="titulotabla">Liderbookst S.R.L.  </p></td>
                </tr>
                <tr>
                  <td colspan="3" align="center"><div align="left"><img src="images/caja1_bottom.gif" width="450" height="14" /></div></td>
                </tr>
              </table></td>
            </tr>
          </table>          
		  </td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td align="center" valign="top"></td>
  </tr>
</table>
</body>
</html>
<script>
setTimeout("location.href='index.php'", 3000);
</script>
