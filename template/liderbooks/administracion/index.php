<?php
session_start();
unset($_SESSION['usuariosistema']);
//unset($row['login']);
unset($_COOKIE['usuario_sistema']);
//if($_COOKIE['usuario_sistema']){
//setcookie("usuario_sistema","x",time()-3600); 
//echo "variable: ".$_COOKIE['usuario_sistema'];
//}
//echo "variable cookie: ". $_COOKIE['usuario_sistema'];

include("include/cn.php");
if(!isset($login))							$login="";
if(!isset($contrasena))					    $contrasena="";
if(!isset($modo))						    $modo="";
if(!isset($accion))						    $accion="";
if(!isset($txtscript))						$txtscript="";
if(!isset($fecha))							$fecha=date("Y-m-d",time());
if(!isset($hora))							$hora=date("H:i",time());
//echo $modo;
if($modo=="grabar")
{
	$cadena="select * from usuario where login='".$login."'";
	$rs=mysql_query($cadena) or die(mysql_error());
	$row=mysql_fetch_array($rs);
	//echo $cadena;
	//echo $contrasena;
	$contrasena=md5($contrasena);
	//echo "<br>".$contrasena;
	//echo "<br>login ".$row['login'];
	//echo "<br>contrase�a ".$row['contrasena'];
	if($contrasena==$row['contrasena'] && $login==$row['login'] && strlen($login)>0)	
	{
		$_SESSION['perfil_usu']=$row['perfil'];
		$_SESSION['usuariosistema']=$row['login'];
		setcookie('usuario_sistema',$row['login'],time()+36000);
		$_SESSION['codusu']=$row['usuario'];
		$cadena="select max(visita) from visita";
		$rs=mysql_query($cadena) or die(mysql_error());
		$row=mysql_fetch_array($rs);
		$visita=str_pad($row['0']+1,6,0,STR_PAD_LEFT);
		$cadena="insert into visita (visita,login,hora,fecha) value ('".$visita."','".$login."','".$hora."','".$fecha."')";
		$rs=mysql_query($cadena) or die(mysql_error());
		$txtscript="<script>document.location.href='sin.php'</script>";
		$modo="";
	}
	else
	{
		$txtscript1="<script>alert('Usuario o contrase�a incorrectos');location.href='index.php'</script>";
		echo $txtscript1;
	}
}
?>
<script>
function enviar()
{
	if(document.a.login.value!="" && document.a.contrasena.value!="")
	{
		document.a.submit();
	}
	else
	{
		alert("Debe ingresar un usuario y una contrasena");
	}
}
function evalua(e)
{
var key;
if(window.event)	key = window.event.keyCode;     
else					key = e.which;     
	if (key == 13){
	document.a.modo.value='grabar';
	document.a.submit();
	}
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<script type="text/javascript" language="JavaScript1.2" src="stmenu.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../original.css" rel="stylesheet" type="text/css">
<title>Administrador :::: Lider books SAC</title>
<link href="msm.css" rel="stylesheet" type="text/css" />
</head>
<body onLoad="document.getElementById('login').focus();">
<form name="a" method="post" action="principal.php">
<table align="center" border="0" cellpadding="3" cellspacing="2">
<tr>
	<td align="center" colspan="2">&nbsp;</td>
</tr>
<tr>
	<td class="textologin">Usuario</td>
	<td class="textologin"><input type="text" name="login" id="login" maxlength='15' style="width:150px" class="textos"></td>
</tr>
<tr>
	<td class="textologin">Contrasena</td>
	<td class="textologin"><input type="password" name="contrasena" id="contrasena" onKeyPress="evalua(event)" style="width:150px" class="textos"></td>
</tr>
<tr>
	<td height="86" valign="top" class="textologin">&nbsp;</td>
	<td valign="top" class="textologin"><p><strong>Olvid&oacute; su Contrase&ntilde;a?</strong><br>
	  Solicite su contrase�a haciendo click <a href="enviar_contrasena.php">aqu&iacute;</a> </p>
	  <p>&nbsp;</p></td>
</tr>
<tr>
	<td colspan="2" align="right"><input type="hidden" name="modo" id="modo" value="grabar" ></td>
</tr>
<tr>
	<td colspan="2" align="right"><input type="button" value="Ingresar" onClick="enviar();"></td>
</tr>
</table>
</form>
</body>
<?php echo $txtscript;?>