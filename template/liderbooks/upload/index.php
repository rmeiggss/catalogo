<?php
require_once "Ftp.php";
$ruta=getcwd();
$arruta=explode("/",$ruta);
$estiloTabla="m1";
if($_POST['accion']=="grabar"){
	if($_POST['carpeta']==''){$carpeta="upload";}else{$carpeta="upload/".$_POST['carpeta'];}
	$fileRemoto = "public_html/".$carpeta."/".$_FILES['userfile']['name'];
	$fileLocal  = $_FILES['userfile']['tmp_name'];
	$archivo2=new Ftp($ruta,$estiloTabla);
	$archivo2->subir_archivo($fileLocal,$fileRemoto);
	$txt = "<script>alert('El archivo se grabo correctamente');</script>";
	echo $txt;
}
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
				$archivo=new Ftp($ruta,$estiloTabla);
				echo $archivo->mostrar_directorio()."<br>";
			?>	
	    </div>
	</div>
	<div align="left">
		<form method="post" enctype="multipart/form-data">
		<b>Raiz:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="carpeta" id="carpeta" size="10" maxlength="100" readonly>&nbsp;
		<input type="hidden" name="MAX_FILE_SIZE" value="100000000">
		<br><br><b>Archivo: </b>
		<input name="userfile" type="file" id="userfile"><br><br>
		<input type="submit" value="Enviar" align='center'>
		<input type="hidden" name="accion" id="accion" value="grabar">
		</form> 
	</div>
</body>
</html>
