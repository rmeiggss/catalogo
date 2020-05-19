<?php
session_start();
session_register('cuenta');
require_once "config/config.inc.php";
include "libreria/cn.php";
include "libreria/variables.php";
if(!isset($categoria)) 			$categoria="";
if(!isset($columna)) 			$columna="3";
//echo "<br>".$_servidor;
//echo "<br>".$_usuario;
//echo "<br>".$_clave;
$cn=mysql_connect($_servidor,$_usuario,$_clave)or die(mysql_error());
mysql_select_db($_bd);

$cadena="select nombre from categoria where categoria='".$categoria."'";
$rs=mysql_query($cadena,$cn); 
$row=mysql_fetch_array($rs);
$categorianombre=$row['nombre'];

$tabla="<table border='0' width='100%'>";
$tabla.="<tr>";
$tabla.="<td colspan='".$columna."' class='m9' align='center'>".strtoupper($categorianombre)."</td>";
$tabla.="</tr>";
$cadena="
		select 
		autor.autor as autor,libro.imagen,
		concat(autor.paterno,' ',autor.materno,' ',autor.nombre) as nombre,
		libro.libro as libro
		from libro
		left join autor on libro.autor=autor.autor
		where libro.borrado=''
		and libro.estado='1'
		and libro.imagen!='' and libro.libro < '000050' order by rand() limit 6";		
		//echo $cadena;
$rs=mysql_query($cadena); //or die(mysql_error());
while($row=mysql_fetch_array($rs))
{
    $autor='';
	$nombre=$row['1'];
	if($autor=="")		 break;
	$tabla.=muestra_producto($cadena,$autor,$categoria,$columna);
}
if($autor=="")			$tabla.=muestra_producto($cadena,'',$categoria,$columna);
$tabla.="</table>";
$inea="";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo TITULO;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" CONTENT="<?php echo DESCRIPCION;?>"/>
<meta NAME="keywords" CONTENT="<?php echo KEYWORDS;?>"/>
<meta NAME="Copyright" CONTENT="<?php echo COPYRIGHT;?>"/>
<meta NAME="Publisher" CONTENT="<?php echo PUBLISER;?>"/>
<meta NAME="Distribution" CONTENT="Global"/>
<meta NAME="Robots" CONTENT="All"/>
<link href="stylos.css" rel="stylesheet" type="text/css" />
<link href="msm.css" rel="stylesheet" type="text/css">
<link rel='stylesheet' href='../style.css' type='text/css'>
<style type="text/css">
<!--
.Estilo5 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #003399;
}
.Estilo6 {color: #000000}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #000000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
.m1 {
   font-family:MS Sans Serif;
   font-size:8pt
}
a {
   text-decoration:none;
   color:#000000;
}
-->
</style>
</head>

<body>
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
    <td height="141">
    <? include "header.php";?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="80%" height="208" align="right" valign="top"><table width="99%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="156" align="left" valign="top">
			<?
			$anoInicial = '1900';
			$anoFinal = '2100';
			$funcionTratarFecha = 'document.location = "eventos_detalle.php?dia="+dia+"&mes="+mes+"&ano="+ano;';
		?>
		<form>
		<table border="0" cellpadding="5" cellspacing="0" bgcolor="#D4D0C8" align="center">
		  <tr>
		    <td >
			<?
			$fecha = getdate(time());
			if(isset($_GET["dia"]))$dia = $_GET["dia"];
			else $dia = $fecha['mday'];
			if(isset($_GET["mes"]))$mes = $_GET["mes"];
			else $mes = $fecha['mon'];
			if(isset($_GET["ano"]))$ano = $_GET["ano"];
			else $ano = $fecha['year'];
			$fecha = mktime(0,0,0,$mes,$dia,$ano);
			$fechaInicioMes = mktime(0,0,0,$mes,1,$ano);
			$fechaInicioMes = date("w",$fechaInicioMes);
			?>
    		<select size="1" name="mes" class="m1" onChange="document.location = '?dia=<?=$dia?>&mes=' + document.forms[0].mes.value + '&ano=<?=$ano?>';">
			<?
			$meses = Array ('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
			for($i = 1; $i <= 12; $i++){
			  echo '      <option ';
			  if($mes == $i)echo 'selected ';
			  echo 'value="'.$i.'">'.$meses[$i-1]."\n";
			}
			?>
   			</select>&nbsp;&nbsp;&nbsp;
			<select size="1" name="ano" class="m1" onChange="document.location = '?dia=<?=$dia?>&mes=<?=$mes?>&ano=' + document.forms[0].ano.value;">
			<?
			for ($i = $anoInicial; $i <= $anoFinal; $i++){
			  echo '      <option ';
			  if($ano == $i)echo 'selected ';
			  echo 'value="'.$i.'">'.$i."\n";
			}
			?>
    		</select><br>
    <font size="1">&nbsp;</font>
<table border="1" cellpadding="2" cellspacing="0" width="750" class="m1" bgcolor="#FFFFFF" height="100%">
<?
$diasSem = Array ('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
$ultimoDia = date('t',$fecha);
$numMes = 0;
for ($fila = 0; $fila < 6; $fila++){
  echo "<tr>\n";
  for ($coln = 0; $coln < 7; $coln++)
  {
    $posicion = Array (1,2,3,4,5,6,0);
    echo '<td width="8%" valign="top" ';
    if($fila == 0)    echo ' bgcolor="#808080" height="25" valign="middle"';
	if($fila !=0)     echo 'height="95" ';
    if($dia-1 == $numMes)   echo ' bgcolor="#0A246A" ';
    echo " align=\left\">&nbsp;\n";
    echo '        ';
    if($fila == 0)echo '<font color="#D4D0C8">'.$diasSem[$coln];
    elseif(($numMes && $numMes < $ultimoDia) || (!$numMes && $posicion[$coln] == $fechaInicioMes))
	{
	   //Consulta a la base de datos
	   $ndia=str_pad($numMes+1,2,0,STR_PAD_LEFT);
	   $mes=str_pad($mes,2,0,STR_PAD_LEFT);
	  //Fin de consulta a la base de datos.
	  echo '<a href="#" onclick="tratarFecha('.(++$numMes).','.$mes.','.$ano.')">';
      if($dia == $numMes)		
	  {
	  	echo '<font color="#000000">';
      }
	  echo "<strong>".$numMes."</strong>";
	  echo "</font>";
	  echo "</a>";
	  echo "<br>";
	  echo "<span align='left' valign='top' class='celdadetalle'>";

	  echo "</span>";
    }
    echo "</td>\n";
  }
  echo "</tr>\n";
}
?>
    </table>    </td>
  </tr>
</table>
</form>		
</td>
      </tr>
      <tr>
        <td height="2" align="center">&nbsp;</td>
      </tr>
      
    </table>
</td>
  </tr>
  <tr>
    <td><? include "pie.php";?></td>
  </tr>
</table>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-8408701-1");
pageTracker._trackPageview();
} catch(err) {}
</script>
<script>
function tratarFecha(dia,mes,ano)
{
  <?=$funcionTratarFecha?>
}
</script>
</body>
</html>
