<?php
require_once "Ftp.php";
$parametros=$_REQUEST;
$accion=$parametros['p1'];
$oFtp=new Ftp(getcwd(),'');
switch($accion){
	case 'nueva_carpeta':{
		$directorio=$parametros['p2'];
		$oFtp->crear_directorio($directorio);
		$resultado=$oFtp->mostrar_directorio();
		break;
	}
	case 'mostrar_directorio':{
		$nueva_ruta=$parametros['p2'];
		$oFtp2=new Ftp($nueva_ruta,'');
		$resultado=$oFtp2->mostrar_directorio();
		break;
	}
	case 'subir_directorio':{
		$nueva_ruta=$oFtp->subir_directorio($directorio);
		$oFtp2=new Ftp($nueva_ruta,'');
		$resultado=$oFtp2->mostrar_directorio();	
		break;		
	}
	case 'elimina_directorio':{
		$directorio=$parametros['p2'];
		$oFtp->elimina_directorio($directorio);
		$resultado=$oFtp->mostrar_directorio();
		break;
	}
	case 'elimina_archivo':{
		$archivo=$parametros['p2'];
		$oFtp->elimina_archivo($archivo);
		$resultado=$oFtp->mostrar_directorio();
		break;
	}
}
echo $resultado;
?>