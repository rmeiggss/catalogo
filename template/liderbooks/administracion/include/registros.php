<?php
//include "configure.php";
$usuario=$_SESSION['usuariosistema'];
$cn=mysql_connect ($_servidor,$_usuario,$_clave) or die (mysql_error());
mysql_select_db ($_bd);

$txtscript="";
$filtro=$_REQUEST['filtro'];
$filtrob=$_REQUEST['filtrob'];
$filtrar=$_REQUEST['filtrar'];
$filtrar2=$_REQUEST['filtrar2'];
if (!isset($_SERVER["QUERY_STRING"]))	$_SERVER["QUERY_STRING"]="";
$arr=explode("/",$_SERVER["PHP_SELF"]);
$programa=$arr[count($arr)-1];
$arr=explode("&",$_SERVER["QUERY_STRING"]."&");
$opcion=$arr[0];
$arrcu=explode("=",$opcion);
$incremento=50;
if(!isset($posfileedit)) $posfileedit="0,0,480,640";
$xy=split(",",$posfileedit);
$varcampos="";
$varcampos2="";
if(!isset($camposacciones)) 	$camposacciones="";
if(!isset($tag)) 				$tag="";
if(!isset($tipodocumento)) 		$tipodocumento="";
if(!isset($filtrar)) 			$filtrar="";
if(!isset($filtrar2)) 			$filtrar2="";
if(!isset($filtro)) 			$filtro="";
if(!isset($filtrob)) 			$filtrob="";
if(!isset($orden))				$orden="";
if(!isset($cabeceraprn)) 		$cabeceraprn="";
if(!isset($tituloprn)) 			$tituloprn=$display;
if(!isset($camposprn)) 			$camposprn="";
if(!isset($anchocamposprn))		$anchocamposprn="";

if($accion=="e")
	{
		$cadena=$borrar.$codigoeliminar;	
		mysql_query($cadena) or die(mysql_error());
		
		
	}
	

for ($k=0;$k<count($campos);$k++)
{
	$selected="";
	if (trim($campos[$k][0])==$filtrar) $selected="selected";
	$elemento=str_replace("^","",$campos[$k][1]);
	$cabeceraprn.=$campos[$k][1]."~";
	if (strpos($campos[$k][0],".")>0) $varcampos.="<option ".$selected." value='".trim($campos[$k][0])."'>".$elemento."</option>";
	//echo "<br>".$campos[$k][1];
	$anchocamposprn.=$campos[$k][3]."~";
	
};
//echo "<br>".$anchocamposprn;
for ($k=0;$k<count($campos);$k++)
{
	$selected="";
	if (trim($campos[$k][0])==$filtrar2) $selected="selected";
	$elemento=str_replace("^","",$campos[$k][1]);
	$cabeceraprn.=$campos[$k][1]."~";
	if (strpos($campos[$k][0],".")>0) 
	$varcampos2.="<option ".$selected." value='".trim($campos[$k][0])."'>".$elemento."</option>";
};
$varcabecera="";
$total=0;
for($k=0;$k<count($campos);$k++)
	{
		$elemento=str_replace("^","",$campos[$k][1]);
		if (strlen($elemento)>0)
		{
			$varcabecera.="<td class='celdatitulo' width='".$campos[$k][2]."%'><a title='Ordenar (en orden de menor a mayor) por el campo ".$elemento."' class='celdatitulolink' href='javascript:ordena(".chr(34).$campos[$k][0].chr(34).")' >".strtoupper($elemento)."</a> <a title='Ordenar (en orden de mayor a menor) por el campo ".$elemento."' class='celdatitulolink' href='javascript:ordena(".chr(34).$campos[$k][0]." desc ".chr(34).")'>^</a></td>".chr(13).chr(10);
		}
		else
		{
			$varcabecera.="<td class='celdatitulo' width='".$campos[$k][2]."%'>&nbsp;</td>".chr(13).chr(10);
		};
		$total+=$campos[$k][1];
	}
$varcabecera.="<td class='celdatitulo' width='".(100-$total)."%' align='right'>ACCIONES</td>";
$vardetalle="";
$orden=($orden=="" ?$campos[0][0] : $orden );
if (!isset($pagina)) $pagina=0;
if (!isset($grupo)) $grupo=1;
if ($grupo<1) $grupo=1;
$valor=$incremento*$pagina+($grupo-1)*10*$incremento;
$group="";
$vargroup=strpos($sql,"group ");

if ($vargroup>0)
	{
		$group=substr($sql,strpos($sql,"group "));
		$sql=substr($sql,0,strpos($sql,"group "));
	}
if ($filtro!=="")
	{
		if ($filtrob!=="")
		{
			if (strpos($sql,"where ")>0)
			{
				//$cadena=$sql." and ".$campoborrado."='' and (".$filtrar.">='".$filtro."' or ".$filtrar2.">='".$filtro."') and (".$filtrar."<='".$filtrob."' or ".$filtrar2."<='".$filtrob."' ) ".$group." order by ".$orden." limit ".$valor.",".$incremento;
								
				if($filtrar=='cabina.numero'){
				$filtro=str_pad($filtro,6,0,STR_LEFT_PAD);
				$filtrob=str_pad($filtrob,6,0,STR_LEFT_PAD);
				}
				
				$cadena=$sql." and ".$campoborrado."='' and (".$filtrar.">='".$filtro."') and (".$filtrar."<='".$filtrob."') ".$group." order by ".$orden." limit ".$valor.",".$incremento;
			}
			else
			{
				//$cadena=$sql." where ".$campoborrado."='' and (".$filtrar.">='".$filtro."' or ".$filtrar2.">='".$filtro."') and (".$filtrar."<='".$filtrob."' or ".$filtrar2."<='".$filtrob."' ) ".$group." order by ".$orden." limit ".$valor.",".$incremento;
				$cadena=$sql." where ".$campoborrado."='' and (".$filtrar.">='".$filtro."') and (".$filtrar."<='".$filtrob."') ".$group." order by ".$orden." limit ".$valor.",".$incremento;
			};
		}
		else
		{
			if (strpos($sql,"where ")>0)
			{
				//$cadena=$sql." and ".$campoborrado."='' and (".$filtrar." like '%".$filtro."%' or ".$filtrar2." like '%".$filtro."%') ".$group." order by ".$orden." limit ".$valor.",".$incremento;
				$cadena=$sql." and ".$campoborrado."='' and (".$filtrar." like '%".$filtro."%') ".$group." order by ".$orden." limit ".$valor.",".$incremento;
			}
			else
			{
				//$cadena=$sql." where ".$campoborrado."='' and (".$filtrar." like '%".$filtro."%' or ".$filtrar2." like '%".$filtro."%') ".$group." order by ".$orden." limit ".$valor.",".$incremento;
				$cadena=$sql." where ".$campoborrado."='' and (".$filtrar." like '%".$filtro."%') ".$group." order by ".$orden." limit ".$valor.",".$incremento;
			};
		};
	}
else
	{
		if (strpos($sql,"where ")>0)
		{
			$cadena=$sql." and ".$campoborrado."=''  ".$group." order by ".$orden." limit ".$valor.",".$incremento;
		}
		else
		{
			$cadena=$sql." where ".$campoborrado."=''  ".$group." order by ".$orden." limit ".$valor.",".$incremento;
		};
	};
	
//consulta sql

//echo $cadena."<br><br>";

$cadenaxls=str_replace("limit $valor,$incremento","",$cadena);
$cadenaprn=$cadena;

$result=mysql_query($cadenaxls);
$rows_totales=mysql_num_rows($result);
//echo "<br>registros: ".$rows_totales;

if (isset($sqlimprimir))
{
	$cadenaprn=$sqlimprimir." ".substr($cadena,strpos($cadena,"from "));
};

$rs = mysql_query( $cadena) or die("ERROR EN SENTENCIA SQL, DEPURAR : <br><b>".$cadena."</b><br><br>Mensaje de Error de MySql: <br><b>".mysql_error()."<b>") ;
$num=0;
while ($row = mysql_fetch_array($rs))
	{
		$trid="";
		if (isset($row["trid"])) $trid=$row["trid"];
		$fila="<tr onclick='window.status=".chr(34).$row[0].chr(34)."'>";
		for ($k=0;$k<count($campos);$k++)
		{
			$alinea="";
			if (strpos($campos[$k][1],"^")>0)	$alinea=" align='right' ";
			$anadir=(strlen($trid)>0 ? "" : "style='cursor:pointer' onclick='accion(".chr(34)."m".chr(34).",".chr(34).$row[$primarykey].chr(34).",".chr(34).( isset($empresa) ? $row[$empresa] : "" ).chr(34).")'" );
			$fila.="    <td ".$alinea.$anadir." class='celdadetalle' >".(strlen($alinea)==0 ? $row[$k] :  number_format($row[$k],2) )."&nbsp;</td>";
		};
		$fila.="    <td class='celdadetalle' align='right'>";
		if (strlen($trid)==0)
		{
			$fila.="      <input type='button' title='Editar registro' class='botones' onclick='accion(".chr(34)."m".chr(34).",".chr(34).$row[$primarykey].chr(34).",".chr(34).( isset($empresa) ? $row[$empresa] : "" ).chr(34).")' value='Editar'>";
			$fila.="      <input type='button' title='Borrar registro' class='botones' onclick='accion(".chr(34)."e".chr(34).",".chr(34).$row[$primarykey].chr(34).",".chr(34).( isset($empresa) ? $row[$empresa] : "" ).chr(34).")' value='Borrar'>";
		}
		else
		{
			$mtrid=$trid;
			for($k=0;$k<count($row)/2;$k++) $mtrid=str_replace("$"."row[".$k."]",$row[$k],$mtrid);
			$fila.="<span class='celdadetalle'>".$mtrid."</span>";
		};
		$fila.="     </td>";
		$fila.="</tr>\n";
		for($k=0;$k<count($row)/2;$k++) $fila=str_replace("$"."row[".$k."]",$row[$k],$fila);
		$vardetalle.=$fila;
		$num++;
	}
$varpaginacion="";
//$cadena=$sqlcount;
//echo $cadena."<br>";

//$cadena="select * from cabinadetalle where borrado='' and cabina=(select fecha from cabina where borrado='')";
//$cadena="select count(*) ".substr($cadena,strrpos($cadena,"from "));    Ultima aparicion de un caracter
$cadena="select count(*) ".substr($cadena,strpos($cadena,"from "));     //Primera aparicion de un caracter.   
//echo $cadena;
$cadena=substr($cadena,0,strpos($cadena,"order"));
//Total de registros vistos
//echo "<br>".$cadena;

$rs = mysql_query($cadena) or die($cadena.":".mysql_error());
$stotal=0;
while($row = mysql_fetch_array($rs)){$stotal=$row['0']+$stotal;}
$total=$rows_totales/$incremento;
//$total=$stotal/$incremento;
if ($grupo>1)
	{
		//$varpaginacion.="&nbsp;<a title='Ir a la pagina ".(10*($grupo-1))."' class='celdatitulo' href='".$fileself."?tipodocumento=".$tipodocumento."&orden=".$orden."&filtrar=".$filtrar."&filtrar2=".$filtrar2."&filtro=".$filtro."&filtrob=".$filtrob."&pagina=0&grupo=".($grupo-1)."'><<</a>";
		$varpaginacion.="&nbsp;<a title='Ir a la pagina ".(10*($grupo-1))."' class='m14' href='".$fileself."?tipodocumento=".$tipodocumento."&orden=".$orden."&filtrar=".$filtrar."&filtrar2=".$filtrar2."&filtro=".$filtro."&filtrob=".$filtrob."&pagina=0&grupo=".($grupo-1)."'><<</a>";
	};
	
	//echo "<br>".$num;
	//echo "<br>".$stotal;
	//echo "<br> total ".$total;
	//echo "<br>incre".$incremento;
	
for($num=0;$num<$total;$num++)
{
	$valor=$num+1;
	//echo ">>>".$num."<br>";
	if ($num==$pagina)
	{
		//$pintado=($grupo-1)*10+$valor;
		$pintado="";
		$varpaginacion.=" [".$pintado."] ";
	}
	else
	{
		if ($valor<11)
		{
			$cuenta=($grupo-1)*10+$valor;
			//echo "<br>".$cuenta;
			//$varpaginacion.="&nbsp;<a title='Ir a la pagina ".$cuenta."' class='linkpaginacion' href='".$fileself."?tipodocumento=".$tipodocumento."&orden=".$orden."&filtrar=".$filtrar."&filtrar2=".$filtrar2."&filtro=".$filtro."&filtrob=".$filtrob."&pagina=".$num."&grupo=".$grupo."'>-".$cuenta."-</a>&nbsp;";
			$varpaginacion.="&nbsp;<a title='Ir a la pagina ".$cuenta."' class='m14' href='".$fileself."?tipodocumento=".$tipodocumento."&orden=".$orden."&filtrar=".$filtrar."&filtrar2=".$filtrar2."&filtro=".$filtro."&filtrob=".$filtrob."&pagina=".$num."&grupo=".$grupo."'>-".$cuenta."-</a>&nbsp;";
		}
		else
		{
			//$varpaginacion.="&nbsp;<a title='Ir a la pagina ".(10*$grupo+1)."' class='linkpaginacion' href='".$fileself."?tipodocumento=".$tipodocumento."&orden=".$orden."&filtrar=".$filtrar."&filtrar2=".$filtrar2."&filtro=".$filtro."&filtrob=".$filtrob."&pagina=0&grupo=".($grupo+1)."'>>></a>&nbsp;";
			$varpaginacion.="&nbsp;<a title='Ir a la pagina ".(10*$grupo+1)."' class='m14' href='".$fileself."?tipodocumento=".$tipodocumento."&orden=".$orden."&filtrar=".$filtrar."&filtrar2=".$filtrar2."&filtro=".$filtro."&filtrob=".$filtrob."&pagina=0&grupo=".($grupo+1)."'>>></a>&nbsp;";
			$num=$total;
		};
	};
	if (((($grupo-1)*10*$incremento)+(($valor-1)*$incremento)) >= $total*$incremento) break;
	
};

?>

<html>
<head>
<title><?=$display;?></title>
<link rel="stylesheet" href="../style.css" type="text/css">
<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
.Estilo3 {color: #FFFFFF; font-weight: bold; }
-->
</style>
</head>
<body class="" link='#000000' vlink='#000000' alink='#000000' align='center'>
<center>
<div id="tabla3" style="width:98%;">
<form name="a" method="get">
		<table cellpadding='2' cellspacing='8' border="0" width="100%">
			<tr>
				<td style="font:Verdana, Arial, Helvetica, sans-serif; font:bold; font-size:16px" class="" >
					<?=$display;?>
				</td>
			</tr>
		</table>
		<p align='center'>
	  <table width="100%" border="0" cellpadding="6" cellspacing="0" bgcolor="#993300" class="tablabotones" id="table2">
		  <tr>
		    <td class='textobotones' width='84%' valign="center">&nbsp;&nbsp;
				  <input style="display:none;" class="botones" type="button" value="Exportar a Excel" title='Use este boton para exportar a Excel la informacion en orden y filtro seleccionados' onClick="exporta()">
				  &nbsp;
				  <input name="button2" type="button" class="botones" title='Use este boton para anadir un nuevo registro' onClick="javascript:accion('a','','')" value="Agregar">
				  <input name="button" type="button" class="botones" title='Use este boton para imprimir la informacion en orden y filtro seleccionados' onClick="imprimir()" value="Listar">
				  <input class="botones" type="button" value="Busqueda" title='Busca segun campo y texto marcados' onClick="filtrado()">
				  <span class="Estilo1" style="font:bold">Campo</span> 
			  <select class="selecciones" name="filtrar" title='Use esta lista para seleccionar campo a filtrar' ><?=$varcampos;?></select>
				  <select style="display:none;" class="selecciones" name="filtrar2" title='Use esta lista para seleccionar campo a filtrar' ><?=$varcampos2;?></select>
				  <span class="Estilo3">De</span> 
			  <input class="textos" type="text" name="filtro" title='Escriba el limite del filtro superior' value="<?=$filtro;?>" size="8">
			    <span class="Estilo3">A</span>
		      <input class="textos" type="text" name="filtrob" title='Escriba el limite del filtro inferior' value="<?=$filtrob;?>" size="8">
<?php 
//echo "<br>  ".$filtro;
//echo "<br>   ".$filtrob;
//echo "<br>   ".$varcampos;
?>
</td>
			  <td width='16%' align='right'>
			  <input type='button' style="display:none;" class='botones' value='Cerrar' title='Use este boton para cerrar esta pantalla' onclick='window.close();'>			  </td>
		  </tr>
	  </table>
		</p>
		<p align='center'>
	  <table style="font:Verdana, Arial, Helvetica, sans-serif; font-size:12px" bgcolor="#F2F2F2" class="tabladatos" id="tabla" border='0' width='100%' cellspacing='0' cellpadding='2'>
				<tr style="font:Verdana, Arial, Helvetica, sans-serif; font:bold">
					<?=$varcabecera;?>
				</tr>
				<?=$vardetalle;?>
	  </table>
		</p>
		<div id='xx' style='display:none'>
			<input type='text' name='tipodocumento' value='<?=$tipodocumento;?>'>
			<input type='text' name='orden' value='<?=$orden;?>'>
			<input type='text' name='tag' value='<?=$tag;?>'>
</div>
</form>
<p align='center'>
<div id="tabla2">
	<table width='100%' class="tablapaginacion">
		<tr>
			<td>
				Pagina(s):<br>
				<?=$varpaginacion;?>
			</td>
		</tr>
	</table>
</div>
</p>
<form name='x' action='libreria/exportar.php' style='display:none'>
	<textarea name='cadenaxls' rows='6' cols='50'><?=$cadenaxls;?></textarea>
	<input type='text' name='archivoxls' value='<?=substr($fileself,0,strpos($fileself,".")).".csv";?>'>
</form>
<form name='y' action='prueba_imprimir.php' style='display:none' target='_blank'>
	<textarea name='cadenaprn' rows='6' cols='50'><?=$cadenaprn;?></textarea>
	<input type='text' name='cabeceraprn' value='<?=$cabeceraprn;?>'>
	<input type='text' name='tituloprn' value='<?=$tituloprn;?>'>
	<input type='text' name='camposprn' value='<?=$camposprn;?>'>
	<input type='text' name='anchocamposprn' value='<?=$anchocamposprn;?>'>
</form>
<?=$txtscript;?>
</div>
</center>
</body>

<script>
var r3=document.getElementById('tabla').getElementsByTagName('tr');
var l=r3.length;
for (i=0;i<=l-1;i++)
	{
		r3[i].onmouseover = function(){this.style.backgroundColor= (document.body.bgColor==""  ? "#FFF2BF" : document.body.bgColor ) };
		r3[i].onmouseout = function(){this.style.backgroundColor=''};
	}

function accion(cual,codigo,empresa)
{
	if ((cual=='a' ) || (cual=='m' ) || (cual=='m'))
	{
		var valor="<?=$fileedit;?>";
		if (valor.indexOf("?")==-1) window.open ("<?=$fileedit;?>?accion="+cual+"&codigo="+codigo, 'newwindow', config='height=<?=($xy[2]>1500 ? 1500 : $xy[2] );?>, width=<?=$xy[3];?>, top=<?=$xy[0];?>, left=<?=$xy[1];?>, toolbar=no, menubar=no, scrollbars=<?=( $xy[2]>500 ? 'yes' : 'no' );?>, resizable=no, location=no, directories=no, status=no');
		//if (valor.indexOf("?")!==-1) window.open ("<?=$fileedit;?>&accion="+cual+"&codigo="+codigo, 'newwindow', config='height=<?=($xy[2]>1500 ? 1500 : $xy[2] );?>, width=<?=$xy[3];?>, top=<?=$xy[0];?>, left=<?=$xy[1];?>, toolbar=no, menubar=no, scrollbars=<?=( $xy[2]>500 ? 'yes' : 'no' );?>, resizable=no, location=no, directories=no, status=no');
	}
	if(cual=='e')
	{
		var pagina="<?=$fileself;?>"
		if(confirm('desea eliminar este registro'))
		{
			//location.href=pagina+'?accion='+cual+'&codigoeliminar='+codigo;
			window.open ("listalibroeditar.php?accion="+cual+"&codigo="+codigo,'newwindow',config='height=<?=($xy[2]>1500 ? 1500 : $xy[2] );?>,width=<?=$xy[3];?>, top=<?=$xy[0];?>, left=<?=$xy[1];?>,toolbar=no, menubar=no, scrollbars=<?=( $xy[2]>500 ? 'yes' : 'no' );?>, resizable=no, location=no, directories=no, status=no');
		}
	}
}
function ordena(orden)
	{
		document.a.orden.value=orden;
		document.a.submit();
	}

function filtrado()
	{
		document.a.submit();
	}

function exporta()
	{
		document.x.submit();
	}

function cerrar()
	{
		window.opener.parent.frames["detalledia"].location.reload();
	}

function recarga()
	{
		//window.location.reload();
		document.a.submit();
	}

function imprimir()
	{	
		document.y.submit();
	}

function imprime()
	{
		y=window.open("../cabeceraimprimir.php","","top=0,left=0,height=600,width=800");
		y.document.location.href="../cabeceraimprimir.php?itipodocumento=<?=$tipodocumento;?>&icabecera="+document.a.cabecera.value,document.a.cabecera.value;
	}


</script>
</html>
