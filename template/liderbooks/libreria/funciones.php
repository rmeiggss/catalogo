<?php
//Definimos funciones
function formatofecha($cadena)
{
	$arrcadena=explode(" ",$cadena);
	$fecha=$arrcadena[0];
	$hora=$arrcadena[1];
	$arrfecha=explode("-",$fecha);
	$ano=$arrfecha[0];
	$mes=$arrfecha[1];
	$dia=$arrfecha[2];
	//Obtenemos el nombre de la semana
	$fechats=strtotime($fecha);
	switch(date('w',$fechats))
	{
		case 0:$nombredia="Domingo";break;
		case 1:$nombredia="Lunes";break;
		case 2:$nombredia="Martes";break;
		case 3:$nombredia="Miercoles";break;
		case 4:$nombredia="Jueves";break;
		case 5:$nombredia="Viernes";break;
		case 6:$nombredia="Sabado";break;
	}
	//Obtenemos el mes
	switch($mes)
	{
		case 1:$nombremes="Enero";break;
		case 2:$nombremes="Febrero";break;
		case 3:$nombremes="Marzo";break;
		case 4:$nombremes="Abril";break;
		case 5:$nombremes="Mayo";break;
		case 6:$nombremes="Junio";break;
		case 7:$nombremes="Julio";break;
		case 8:$nombremes="Agosto";break;
		case 9:$nombremes="Setiembre";break;
		case 10:$nombremes="Octubre";break;
		case 11:$nombremes="Noviembre";break;
		case 12:$nombremes="Diciembre";break;
	}
	$cadenafinal=$nombredia." ".$dia." de ".$nombremes.",".$ano." ".$hora;
	return $cadenafinal;
}
?>
