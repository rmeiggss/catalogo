function mostrar_directorio(ruta,directorio){
	nueva_ruta=ruta+'/'+directorio;
	document.getElementById('carpeta').value= directorio;
	myajax.Link('control.php?p1=mostrar_directorio&p2='+nueva_ruta,'detalle');
}
function agregar(){
	document.getElementById('divAgregar').style.visibility='visible';
	document.getElementById('nameDir').value='';
	document.getElementById('nameDir').focus();
}
function agregar_directorio(){
	document.getElementById('divAgregar').style.visibility='hidden';
	myajax.Link('control.php?p1=nueva_carpeta&p2='+document.getElementById('nameDir').value,'cabecera');
}
function subir_directorio(ruta){
	myajax.Link('control.php?p1=subir_directorio&p2='+ruta,'cabecera');
}
function eliminar(directorio,tipo){
	//alert("dir="+directorio+"&tipo="+tipo);
	if(tipo=='0'){
		myajax.Link('control.php?p1=elimina_directorio&p2='+directorio,'cabecera');
	}
	else if(tipo=='1'){
		myajax.Link('control.php?p1=elimina_archivo&p2='+directorio,'cabecera');
	}
}
