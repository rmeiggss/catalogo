<?
$usuario=$_SESSION['usuariosistema'];
$cn=mysql_connect ($_servidor,$_usuario,$_clave) or die (mysql_error());
mysql_select_db ($_bd);
$txtscript="";

if (!isset($_SERVER["QUERY_STRING"]))	$_SERVER["QUERY_STRING"]="";
$arr=explode("/",$_SERVER["PHP_SELF"]);
$programa=$arr[count($arr)-1];
$arr=explode("&",$_SERVER["QUERY_STRING"]."&");
$opcion=$arr[0];
$arrcu=explode("=",$opcion);

$original=($arrcu[0]=="tipodocumento" && strlen($arrcu[1])>0 ? $programa."?".$opcion : $programa );
//echo $original;
$incremento=10;

if(!isset($posfileedit)) $posfileedit="0,0,480,640";
$xy=split(",",$posfileedit);
$varcampos="";
if(!isset($camposacciones)) $camposacciones="";
if(!isset($tag)) $tag="";
if(!isset($tipodocumento)) $tipodocumento="";
if(!isset($filtrar)) $filtrar="";
if(!isset($filtro)) $filtro="";
if(!isset($filtrob)) $filtrob="";
if(!isset($orden)) $orden="";
if(!isset($cabeceraprn)) $cabeceraprn="";
if(!isset($tituloprn)) $tituloprn=$display;
if(!isset($camposprn)) $camposprn="";
if(!isset($anchocamposprn)) $anchocamposprn="";
for ($k=0;$k<count($campos);$k++)
	{
		$selected="";
		if (trim($campos[$k][0])==$filtrar) $selected="selected";
		$elemento=str_replace("^","",$campos[$k][1]);
		$cabeceraprn.=$campos[$k][1]."~";
		if (strpos($campos[$k][0],".")>0) $varcampos.="<option ".$selected." value='".trim($campos[$k][0])."'>".$elemento."</option>";
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
$pagina=$_REQUEST['pagina'];
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
				$cadena=$sql." and ".$campoborrado."='' and ".$filtrar.">='".$filtro."' and ".$filtrar."<='".$filtrob."' ".$group." order by ".$orden." limit ".$valor.",".$incremento;
			}
			else
			{
				$cadena=$sql." where ".$campoborrado."='' and ".$filtrar.">='".$filtro."' and ".$filtrar."<='".$filtrob."' ".$group." order by ".$orden." limit ".$valor.",".$incremento;
			};
		}
		else
		{
			if (strpos($sql,"where ")>0)
			{
				$cadena=$sql." and ".$campoborrado."='' and ".$filtrar." like '%".$filtro."%' ".$group." order by ".$orden." limit ".$valor.",".$incremento;
			}
			else
			{
				$cadena=$sql." where ".$campoborrado."='' and ".$filtrar." like '%".$filtro."%' ".$group." order by ".$orden." limit ".$valor.",".$incremento;
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
if (isset($sqlimprimir))
{
	$cadenaprn=$sqlimprimir." ".substr($cadena,strpos($cadena,"from "));
};
$rs = mysql_query( $cadena, $cn) or die("ERROR EN SENTENCIA SQL, DEPURAR : <br><b>".$cadena."</b><br><br>Mensaje de Error de MySql: <br><b>".mysql_error()."<b>") ;
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
			$anadir=(strlen($trid)>0 ? "" : "style='cursor:pointer' ondblclick='accion(".chr(34)."m".chr(34).",".chr(34).$row[$primarykey].chr(34).",".chr(34).( isset($empresa) ? $row[$empresa] : "" ).chr(34).")'" );
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
$cadena="select count(*) ".substr($cadena,strrpos($cadena,"from "));
$cadena=substr($cadena,0,strpos($cadena,"order"));
//Total de registros vistos
//echo $cadena;

$rs = mysql_query($cadena, $cn) or die($cadena.":".mysql_error());
$stotal=0;
while($row = mysql_fetch_array($rs)){$stotal=$row['0']+$stotal;}
$total=$stotal/$incremento;
if ($grupo>1)
	{
		$varpaginacion.="&nbsp;<a title='Ir a la pagina ".(10*($grupo-1))."' class='linkpaginacion' href='".$fileself."?tipodocumento=".$tipodocumento."&orden=".$orden."&filtrar=".$filtrar."&filtro=".$filtro."&filtrob=".$filtrob."&pagina=0&grupo=".($grupo-1)."'><<</a>";
	};
for($num=0;$num<$total;$num++)
{
	$valor=$num+1;
	//echo ">>>".$num."<br>";
	if ($num==$pagina)
	{
		$pintado=($grupo-1)*10+$valor;
		$varpaginacion.=" [".$pintado."] ";
	}
	else
	{
		if ($valor<11)
		{
			$cuenta=($grupo-1)*10+$valor;
			$varpaginacion.="&nbsp;<a title='Ir a la pagina ".$cuenta."' class='linkpaginacion' href='".$fileself."?tipodocumento=".$tipodocumento."&orden=".$orden."&filtrar=".$filtrar."&filtro=".$filtro."&filtrob=".$filtrob."&pagina=".$num."&grupo=".$grupo."'>-".$cuenta."-</a>&nbsp;";
		}
		else
		{
			$varpaginacion.="&nbsp;<a title='Ir a la pagina ".(10*$grupo+1)."' class='linkpaginacion' href='".$fileself."?tipodocumento=".$tipodocumento."&orden=".$orden."&filtrar=".$filtrar."&filtro=".$filtro."&filtrob=".$filtrob."&pagina=0&grupo=".($grupo+1)."'>>></a>&nbsp;";
			$num=$total;
		};
	};
	if (((($grupo-1)*10*$incremento)+(($valor-1)*$incremento)) >= $total*$incremento) break;
};

?>

<html>
<head>
<title><?=$display;?></title>
<link rel="stylesheet" href="../<?=nombrecss();?>" type="text/css">
</head>
<body class="bodytabla" link='#000000' vlink='#000000' alink='#000000' align='center' onunload='cerrar()'>
<form name="a" method="post">
		<table cellpadding='2' cellspacing='8' border="0" width="100%">
			<tr>
				<td class="titulotabla" >
					<?=$display;?>
				</td>
			</tr>
		</table>
		<p align='center'>
			<table class="tablabotones" border="0" width="95%" cellspacing="0" cellpadding="6">
				<tr>
					<td class='textobotones' width='80%'>
						<input class="botones" type="button" value="Agregar" title='Use este boton para anadir un nuevo registro' onclick="javascript:accion('a','','')">
						&nbsp;
						<input class="botones" type="button" value="Listar" title='Use este boton para imprimir la informacion en orden y filtro seleccionados' onclick="imprimir()">
						&nbsp;
						<input class="botones" type="button" value="Exportar a Excel" title='Use este boton para exportar a Excel la informacion en orden y filtro seleccionados' onclick="exporta()">
						&nbsp;
						<input class="botones" type="button" value="Filtrar" title='Filtrar segun campo y texto marcados' onclick="filtrado()">
						Columna <select class="selecciones" name="filtrar" title='Use esta lista para seleccionar campo a filtrar' ><?=$varcampos;?></select>
						De <input class="textos" type="text" name="filtro" title='Escriba el limite del filtro superior' value="<?=$filtro;?>" size="8">
						A <input class="textos" type="text" name="filtrob" title='Escriba el limite del filtro inferior' value="<?=$filtrob;?>" size="8">
					</td>
					<td width='20%' align='right'>
						<input type='button' class='botones' value='Cerrar' title='Use este boton para cerrar esta pantalla' onclick='window.close();'>					
					</td>
				</tr>
			</table>
		</p>
		<p align='center'>
			<table class="tabladatos" id="tabla" border='0' width='95%' cellspacing='0' cellpadding='2'>
				<tr>
					<?=$varcabecera;?>
				</tr>
				<?=$vardetalle;?>
			</table>
		</p>
		<div id='xx' style='display:none'>
			<input type='text' name='tipodocumento' value='<?=$tipodocumento;?>'>
			<input type='text' name='orden' value='<?=$orden;?>'>
			<input type='text' name='tag' value='<?=$tag;?>'>
			<input type='text' name='original' value='<?=$original;?>'>
		</div>
</form>
<p align='center'>
	<table class="tablapaginacion" width='95%'>
		<tr>
			<td>
				Pagina(s):<br>
				<?=$varpaginacion;?>
			</td>
		</tr>
	</table>
</p>
<form name='x' action='libreria/exportar.php' style='display:none'>
	<textarea name='cadenaxls' rows='6' cols='50'><?=$cadenaxls;?></textarea>
	<input type='text' name='archivoxls' value='<?=substr($fileself,0,strpos($fileself,".")).".csv";?>'>
</form>
<form name='y' action='libreria/imprimir.php' style='display:none' target='_blank'>
	<textarea name='cadenaprn' rows='6' cols='50'><?=$cadenaprn;?></textarea>
	<input type='text' name='cabeceraprn' value='<?=$cabeceraprn;?>'>
	<input type='text' name='tituloprn' value='<?=$tituloprn;?>'>
	<input type='text' name='camposprn' value='<?=$camposprn;?>'>
	<input type='text' name='anchocamposprn' value='<?=$anchocamposprn;?>'>
</form>
<?=$txtscript;?>
</body>

<script>
var r3=document.getElementById('tabla').getElementsByTagName('tr');
var l=r3.length;
for (i=0;i<l;i++)
	{
		r3[i].onmouseover = function(){this.style.backgroundColor= (document.body.bgColor==""  ? "#c0c0c0" : document.body.bgColor ) };
		r3[i].onmouseout = function(){this.style.backgroundColor=''};
	}

function accion(cual,codigo,empresa)
	{
		if ((cual=='a' ) || (cual=='m' ) || (cual=='e') || (cual=='m'))
		{
			var valor="<?=$fileedit;?>";
			if (valor.indexOf("?")==-1) window.open ("<?=$fileedit;?>?accion="+cual+"&codigo="+codigo, 'newwindow', config='height=<?=($xy[2]>1500 ? 1500 : $xy[2] );?>, width=<?=$xy[3];?>, top=<?=$xy[0];?>, left=<?=$xy[1];?>, toolbar=no, menubar=no, scrollbars=<?=( $xy[2]>500 ? 'yes' : 'no' );?>, resizable=no, location=no, directories=no, status=no');
			if (valor.indexOf("?")!==-1) window.open ("<?=$fileedit;?>&accion="+cual+"&codigo="+codigo, 'newwindow', config='height=<?=($xy[2]>1500 ? 1500 : $xy[2] );?>, width=<?=$xy[3];?>, top=<?=$xy[0];?>, left=<?=$xy[1];?>, toolbar=no, menubar=no, scrollbars=<?=( $xy[2]>500 ? 'yes' : 'no' );?>, resizable=no, location=no, directories=no, status=no');
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
		window.location.reload();
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
