<?php
session_start();
require_once 'includes/conexion.php';
require_once 'includes/config.inc.php';
$fecha=date('Y-m-d h:i:s',time());
$usuario=$_SESSION['usuario'];
if(!isset($descripcion))		$descripcion = "";
if(!isset($titulo))			$titulo = "";
if(!isset($resumen))		    	$resumen = "";
if(!isset($accion))		        $accion = "";
if(isset($_REQUEST['accion']) && $_REQUEST['accion']=='grabar'){
	$modo = $_REQUEST['modo'];
	$descripcion = $_REQUEST['descripcion'];
	$titulo      = strtoupper($_REQUEST['titulo']);
	$resumen     = $_REQUEST['resumen'];
	$accion      = $_REQUEST['accion'];
	$id_noticia  = $_REQUEST['id'];
	$descripcion_entities = htmlentities($descripcion);
	$titulo_entities      = htmlentities($titulo);
	$resumen_entities     = htmlentities($resumen);	
echo $_REQUEST['resumen']."<br><br>";
echo $resumen."<br><br>";
echo $resumen_entities."<br><br>";
	if($modo=='a'){
		/*echo html_entity_decode($descripcion_entities)."<br>";
		echo html_entity_decode($titulo_entities)."<br>";
		echo html_entity_decode($resumen_entities)."<br>";*/
		$sql_noticia="insert into tema (fecha,titulo,nombre,tipo,resumen) values (\"$fecha\",\"$titulo_entities\",\"$descripcion_entities\",\"2\",\"$resumen_entities\")";
		mysql_query($sql_noticia,$cn);
echo $sql_noticia;die();
		$txt="<script>window.close();</script>";
		echo $txt;
	}
	elseif($modo=='m')
	{
		$sql_noticias3="update tema set titulo=\"$titulo_entities\",nombre=\"$descripcion_entities\",resumen=\"$resumen_entities\" where tema='".$id_noticia."'";
		mysql_query($sql_noticias3,$cn);
echo $sql_noticias3;die();
		$txt="<script>window.close();</script>";
		echo $txt;
	}
	elseif($modo=='e')
	{
		header('Location:list_pedidos.php');
	}
}
if($_REQUEST['modo']=='m'){
	$id_noticia = $_REQUEST['id'];
    $sql_noticia2="select * from tema where tema='".$id_noticia."'";
    $row_noticia2=mysql_fetch_array(mysql_query($sql_noticia2,$cn));
    $titulo=$row_noticia2['titulo'];
    $resumen=$row_noticia2['resumen'];
    $descripcion=$row_noticia2['nombre'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
    <link rel="Stylesheet" type="text/css" href="style/jqueryui/ui-lightness/jquery-ui-1.7.2.custom.css" />
    <script type="text/javascript" src="scripts/jHtmlArea-0.7.0.js"></script>
    <link rel="Stylesheet" type="text/css" href="style/jHtmlArea.css" />    
    <style type="text/css">
        div.jHtmlArea .ToolBar ul li a.custom_disk_button 
        {
            background: url(images/disk.png) no-repeat;
            background-position: 0 0;
        }        
        div.jHtmlArea { border: solid 1px #ccc; }
    </style>
</head>
<body>
<form name="frmAnuncio" id="frmAnuncio" method="POST">
	<table style="width:90%;" align="center" border="0" cellpadding="3" cellspacing="3">
		<tr height="40px;" valign="top">
			<td width="15%">Titulo</td>
			<td><input type="text" name="txtNoticia" id="txtNoticia" style="width:250px;" value="<?php echo html_entity_decode($titulo);?>"></td>
		</tr>	
		<tr height="230px;" valign="top">
			<td width="15%" valign="top">Resumen</td>
			<td>
				<script type="text/javascript">    
					$(function() {
						$("#txtResumen").htmlarea();
					});
				</script>
				<textarea id="txtResumen" cols="70" rows="8"><?php echo html_entity_decode($resumen);?></textarea>			
			</td>
		</tr>
		<tr>
			<td width="15%" valign="top">Descripcion</td>
			<td>
				<script type="text/javascript">    
					$(function() {
						$("#txtDescripcion").htmlarea();
					});
				</script>
				<textarea id="txtDescripcion" cols="70" rows="15"><?php echo html_entity_decode($descripcion);?></textarea>			
			</td>
		</tr>		
		<tr>
			<td colspan="2" align="center"> 
				<input type="button" value="Grabar" onclick="grabar();"/>
				<input type="hidden" name="accion" id="accion" value="grabar">
				<input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id'];?>">
				<input type="hidden" name="modo" id="modo" value="<?php echo $_REQUEST['modo'];?>">
				<input type="button" value="Cancelar" onclick="window.close();">
			</td>
		</tr>
	</table>
</form>
 </body>
</html>
<script>
function grabar(){
	titulo	    = document.frmAnuncio.txtNoticia.value;
	modo	    = document.frmAnuncio.modo.value;
	accion	    = document.frmAnuncio.accion.value;
	resumen     = $('#txtResumen').htmlarea('toHtmlString');
	descripcion = $('#txtDescripcion').htmlarea('toHtmlString');
	titulo	    = titulo.replace(/"/gi,'\"');
	resumen	    = resumen.replace(/"/gi,'\"');
alert(resumen);
	descripcion = descripcion.replace(/"/gi,'\"');
	//document.frmAnuncio.action = "editar_pedidos.php?titulo="+titulo+"&resumen="+resumen+"&descripcion="+descripcion+'&modo='+modo+'&accion='+accion;
	document.frmAnuncio.method=post;
	document.frmAnuncio.action="editar_pedidos.php";
	document.frmAnuncio.submit();
}
</script>
