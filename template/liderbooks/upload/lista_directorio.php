<?php
require_once "Ftp.php";
$ruta=getcwd();
$arruta=explode("/",$ruta);
$estiloTabla="m1";
$archivo=new Ftp($ruta,$estiloTabla);
$ruta_relativa=$_SERVER['PHP_SELF'];
?>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='estilos.css'/>
	<script type="text/javascript" src="isiAJAX.js"></script>
	<script type="text/javascript" src="upload.js"></script>
</head>
<body onload="myajax=new isiAJAX();">
	<div id="cabecera" style="align:center;">
		<table width="780px" cellpading="0" cellspacing="0" border="0">
			<tr>
				<td align='left'>
					<input type="button" value="Agregar Directorio" onclick="agregar();">
					<div id="divAgregar" style="visibility:hidden;">
						Crear Directorio:&nbsp;<input type="text" style="width:150px" name="nameDir" id="nameDir">&nbsp;<a href="#" onclick="agregar_directorio();" class="button"><span class="add">Grabar</span></a>
					</div>
				</td>
				<td align='rigth'></td>
			</tr>
		</table><br>
		<div id="detalle" style="align:center;">
			<?php 
				echo $archivo->mostrar_directorio()."<br>";
			?>	
	    </div>
	</div>
	<div align="left">
	<?php
	require_once('upload.php');
	?>
	</div>
</body>
</html>