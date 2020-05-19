<?php
session_start();
require_once 'includes/config.inc.php';
require_once 'includes/conexion.php';
require_once 'clases/Contador.php';
$usuario=$_SESSION['usuario'];
if(!$_SESSION['usuario'])  die("Usuario no registrado. <a href='index.php'>Registrarse e ingresar</a>");
?>
<html>
    <head>
        <link type="text/css" href="css/stylos.css" rel="stylesheet"/>
        <script type="text/javascript" src="javascript/list_pedidos.js"></script>
        <script type="text/javascript" src="javascript/contador.js"></script>
        <script type="text/javascript" src="javascript/flashobject.js"></script>
        <script type="text/javascript" src="javascript/adjustmenu.js"></script>
        <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
        <title><?php echo TITULO;?></title>
    </head>
<body onLoad="AdjustMenu('metalarrow','false',0,0)" onResize="AdjustMenu('metalarrow','false',0,0)">
<center>
<table width="718" height="610" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr>
		<td height="91" colspan="2" align="center" valign="top"><img src="images/head.gif" width="780" height="91"></td>
	</tr>
	<tr>
		<td width="140" height="500" align="left" valign="top" bgcolor="#C1E0A3"><?php require_once 'menu.php';?></td>
		<td width="640" align="center" valign="top"><div align="right">BIENVENIDO <?php echo $usuario;?></div><br>
			<!--Aca contenido-->
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<br>
		</td>
	</tr>
</table>
</center>
</body>
</html>
