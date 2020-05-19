<?php
session_start();
require_once 'includes/config.inc.php';
require_once 'includes/conexion.php';
require_once 'clases/Contador.php';
$usuario=$_SESSION['usuario'];
if(!$_SESSION['usuario'])  die("Usuario no registrado. <a href='index.php'>Registrarse e ingresar</a>");
if(isset($_REQUEST['accion']) && $_REQUEST['accion']=='grabar'){
	$email    = $_REQUEST['txtEmail'];
	$nombres  = $_REQUEST['txtNombres'];
	$referente= $_REQUEST['txtReferente'];
	$sql="insert into contactos (correo,nombres,referente) values ('$email','$nombres','".strtoupper($referente)."')";
	mysql_query($sql);
	header("location:principal.php");
}
$sql="select id,correo,nombres,referente from contactos where flag_enviado='0'";
$rs=mysql_query($sql);
/*****************Configuracion del contador******************************/
$total_registros=mysql_num_rows($rs);
$registros_por_hoja=10;
$hojas_por_bloque=2;
$ruta_imagen="images/";
$pagina_seleccionada=(!isset($_REQUEST['pagina_seleccionada']) ? 1:$_REQUEST['pagina_seleccionada']);
$inicio=$registros_por_hoja*($pagina_seleccionada-1)+1;
$fin=$registros_por_hoja*$pagina_seleccionada;
/****************************************/
$fila="";
$j=1;
while($row=mysql_fetch_array($rs)){
	$fila.="<tr height='30'>";
	$fila.="<td align='center'>".$j."</td>";
    $fila.="<td>".trim($row['correo'])."</td>";
    $fila.="<td>".($row['nombres']=='' ? '&nbsp;':trim($row['nombres']))."</td>";
    $fila.="<td>".trim($row['referente'])."</td>";
    $fila.="</tr>";
    $j++;
}
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
    <td width="140" height="500" align="left" valign="top" bgcolor="#C1E0A3">
        <?php require_once 'menu.php';?>
    </td>
	<td width="640" align="center" valign="top">
      <div align="right">BIENVENIDO <?php echo $usuario;?></div><br>
			Contactos por correo
			<table width="97%" cellpadding="2" cellspacing="0" border="1">
			<tr class="m6" height='30'>
			  <td width="28" align="center">No</td>
			  <td width="300" align="center">Correo</td>
			  <td  align="center">Nombres</td>
			  <td align="center">Referente</td>
			</tr>
			<?php echo $fila;?>
			</table>
			<div align="right">            
			<?php
			$contador=new Contador($total_registros,$registros_por_hoja,$hojas_por_bloque,$ruta_imagen);
			echo $contador->mostrar($pagina_seleccionada);
			?>
			</div>
      </td>
    </tr>
    <tr>
    	<td bgcolor="#C1E0A3">
            &nbsp;
        </td>
        <td>
			<p align='left'>
				<form name='a' id='a'>&nbsp;	
					<table width='280px' border='0' cellpadding='3' cellspacing='0'>
						<tr>
							<td>
								E-mail&nbsp;&nbsp;&nbsp;&nbsp;: <input type='text' name='txtEmail' id='txtEmail' style='width:150px;border:1px solid #666666;border-style:solid;font-size:12px;color:#000000;'>			
							</td>
						</tr>
						<tr>
							<td>
								Nombres&nbsp;&nbsp;: <input type='text' name='txtNombres' id='txtNombres' style='width:150px;border:1px solid #666666;border-style:solid;font-size:12px;color:#000000;'>
							</td>
						</tr>
						<tr>
							<td>
								Referente: <input type='text' name='txtReferente' id='txtReferente' style='width:150px;border:1px solid #666666;border-style:solid;font-size:12px;color:#000000;'>		
							</td>
						</tr>
						<tr>
							<td align='center'>
								<input type="submit" value="Anadir" name="btn2" id="btn2">	
								<input type="hidden" value="grabar" name="accion" id="accion">							
							</td>
						</tr>						
					</table>
				</form>
			</p> 
        </td>
    </tr>
</table>
</center>
</body>
</html>
