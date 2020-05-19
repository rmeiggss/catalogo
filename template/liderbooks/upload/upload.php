<?php
if(isset($_POST['accion']) && $_POST['accion']=='grabar')
{
$ruta_relativa = $_POST["ruta_relativa"];
$nombre_archivo = $_FILES['userfile']['name'];
$tipo_archivo = $_FILES['userfile']['type'];
$tamano_archivo = $_FILES['userfile']['size'];
if($ruta_relativa==''){$ruta=$nombre_archivo;}else{$ruta=$ruta_relativa."/".$nombre_archivo;}
	echo $ruta;
	if (move_uploaded_file($_FILES['userfile']['tmp_name'],$ruta)){
		$txt="<script>alert('El archivo ha sido cargado correctamente');</script>";
	}
	else{
		$txt="<script>alert('Ocurrió algún error al subir el fichero. No pudo guardarse');</script>";
	}
	echo $txt;
} 
?>
<html>
<body>
	<form method="post" enctype="multipart/form-data">
	<b>Raiz:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="ruta_relativa" id="ruta_relativa" size="20" maxlength="100">
	<input type="hidden" name="MAX_FILE_SIZE" value="100000000">
	<br><br><b>Archivo: </b>
	<input name="userfile" type="file"><br><br>
	<input type="submit" value="Enviar" align='center'>
	<input type="hidden" name="accion" id="accion" value="grabar">
	</form> 
</body>
</html>  
