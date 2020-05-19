<?php
$_servidor="localhost";
$_usuario="root";
$_clave="";
$_bd="libreria";

function chksum($usuario,$campo1)
{
	$total=0;
	$cadena=date("YmdHi",time()).$usuario.$campo1;
	for ($k=0;$k<strlen($cadena);$k+=2)
	{
		$total+=intval(substr($cadena,$k,2));
	};
	return(date("YmdHi",time()).$usuario.$total);
}

function fechar($vfecha)
{
$arrmes=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$vdia=substr($vfecha,8,2);
$vmes=$arrmes[intval(substr($vfecha,5,2))-1];
$vano=substr($vfecha,0,4);
return($vdia." de ".$vmes." ".$vano);
}

function cargaselect($cadena,$cn,$defecto="",$opciontodo=true)
{
$rs = mysql_query($cadena, $cn) or die($cadena." : ".mysql_error());
$var=( $opciontodo ? "<option selected value=''></option>" : "" );
while ($row = mysql_fetch_array($rs))
	{
		if ($defecto=="" && !$opciontodo) $defecto=$row[0];
		$selected="";
		if($defecto==$row[0]) $selected=" selected ";
		$var.="<option ".$selected." value='".$row[0]."'>".$row[1]."</option>";
	};
return($var);
}

function evento($cn,$tituloalerta,$glosa,$usuario="",$alerta="",$fechaalerta="",$horaalerta="",$usuarioalerta="")
{ 
if (strlen($alerta)==0) 					$alerta="N";
if (strlen($fechaalerta)==0) 			$fechaalerta=date('Y-m-d',time()+24*60*60);
if (strlen($horaalerta)==0) 			$horaalerta=date('H:i',time());
if (strlen($usuario)==0) 					$usuario=$_SESSION['usuariosistema'];
if (strlen($usuarioalerta)==0) 		$usuarioalerta=$usuario;
$arrusuario=explode("/",$usuario);
for ($k=0;$k<count($arrusuario);$k++)
	{
		$cadena="select max(cabecera) from cabecera";
		$rs = mysql_query($cadena, $cn) or die($cadena); 
		$row = mysql_fetch_array($rs);  
		$cabecera=str_pad($row[0]+1,6,"0",STR_PAD_LEFT);
		$cadena="insert into cabecera (cabecera,tipodocumento,fecha,hora,personal,tituloalerta,glosa,alerta,fechaalerta,horaalerta) values ('".$cabecera."','EVENTO','".date('Y-m-d',time())."','".date('H:i',time())."','".$arrusuario[$k]."','".$tituloalerta."','".$glosa."','".$alerta."','".$fechaalerta."','".$horaalerta."')";
		$rs = mysql_query($cadena, $cn) or die(mysql_error());
		//$cadena="insert into alerta(usuario,alerta,cabecera,fecha,hora) values ('".$arrusuario[$k]."','".$alerta."','".$cabecera."','".$fechaalerta."','".$horaalerta."')";
		//$rs = mysql_query($cadena, $cn) or die(mysql_error());
	};
};

//letras a numeros
function words999($number, $zero=false) 
{
$words="";
if ($zero and $number*1==0) return false;
$digits = array ( 0 => "cero",1 => "uno",2 => "dos",3 => "tres",4 => "cuatro",5 => "cinco",6 => "seis",7 => "siete",8 => "ocho",9 => "nueve",10 => "diez",11 => "once",12 => "doce",13 => "trece",14 => "catorce",15 => "quince",20 => "veinte",30 => "treinta",40 => "cuarenta",50 => "cincuenta",60 => "sesenta",70 => "setenta",80 => "ochenta",90 => "noventa",100 => "ciento",200 => "doscientos",300 => "trescientos",400 => "cuatrocientos",500 => "quinientos",600 => "seiscientos",700 => "setecientos",800 => "ochocientos",900 => "novecientos" );
if (strlen($number)==1 or $number=='10'):$words = $digits [$number*1];
elseif (strlen($number)==2 and ($number * 1) <= 15):$words = $digits [$number*1];
elseif (strlen($number)==2 and ($number * 1) <= 19):$words = 'dieci'.$digits [substr($number,1,1)];
elseif (strlen($number)==2 and ($number * 1) <= 99):
	$left = substr ($number,0,1)*10;
	$right = substr ($number,1,1);
	$words = $digits [$left].($right ? ' y '.$digits [$right]:'');
elseif (strlen($number)==3):
	$left = substr($number,0,1)*100;
	$right = words999 (substr($number,1,2) * 1, true);
	$words = $digits[$left].($right ? ' '.$right : '');
endif;
return $words;
}

function numlet ($number) {
$parts = floor($number);
$cents = substr (number_format($number,2),-2,2);
$part1 = number_format( $parts % 1000 ,0);
$part2 = number_format((($parts % 1000000) - $part1 ) / 1000 ,0);
$part3 = number_format((($parts % 1000000000) - $part1 - $part2*1000) / 1000000,0);
$_part1 = words999 ($part1, true);
$_part2 = words999 ($part2, true);
$_part3 = words999 ($part3, true);
$words = substr($part3,0,1)*1 == 1 ? 'Un millon ' : (substr($part3,0,1)*1 >= 2 ? $_part3.' millones ': '');
$words .= substr($part2,0,1)*1 >= 1 ? $_part2.' mil ' : '';
$words .= $_part1;
return $words;
}

function nombrecss()
{
	$css="css/original.css";
	if (isset($_COOKIE["css"])) $css=$_COOKIE["css"];
	return ($css); 
}

function f($cualfecha)
{
	$arr=array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
	$valor=intval(substr($cualfecha,5,2))-1;
	$rpta=substr($cualfecha,8,2)."-".$arr[$valor]."-".substr($cualfecha,0,4);
	return($rpta);
};

function quitaacento($cadena)
{
	$tofind = "�����������������������������������������������������";
	$replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn";
	return(strtr($cadena,$tofind,$replac));
}

function muestra_producto($cadena,$autor,$categoria,$columna)
{
	$linea.="<tr>";
	$linea.="<td colspan='".$columna."' class='m9'>".$nombre."</td>";
	$linea.="</tr>";
	$cadena=substr($cadena,0,strpos($cadena,"group "));
	$buscaporautor=($autor<>'' ? "and autor.autor=$autor":"");
	$cadena=$cadena.$buscaporautor;
	//echo "<br>".$cadena;
	$rs=mysql_query($cadena) or die(mysql_error());
	$cantidad=mysql_num_rows($rs);
	while($rows=mysql_fetch_array($rs))
	{
		$id[]=$rows['libro'];
	}
			
	if(($cantidad%$columna)=='0')
	{
		$fila=floor($cantidad/$columna);
	}
	else
	{
		$fila=floor($cantidad/$columna)+1;
	}
	
	$z=0;
	$modelo="";
	for($k=1;$k<=$fila;$k++)
	{
		$linea.="<tr>";
		for($j=1;$j<=$columna;$j++)
		{
			$linea.="<td align='center' valign='middle'><iframe frameborder='0' scrolling='no' allowTransparency='yes' width='200' height='230' src='productoeditar.php?id=".$id[$z]."'></iframe></td>";
			$z++;
		}
		$linea.="</tr>";
	}
	return $linea;
}
?>
