<?php
session_start();
require_once 'includes/config.inc.php';
require_once 'includes/conexion.php';
require_once 'clases/Contador.php';
$usuario=$_SESSION['usuario'];
if(!$_SESSION['usuario'])  die("Usuario no registrado. <a href='index.php'>Registrarse e ingresar</a>");
if(isset($_REQUEST['txtPrincipal'])){
	$sql="update evento set flag_principal='0'";
	mysql_query($sql);
	$sql="update evento set flag_principal='1' where id='".$_REQUEST['txtPrincipal']."'";
	$txtPrincipal=$_REQUEST['txtPrincipal'];
	mysql_query($sql);
}
else{
	$sql="select id from evento where estado='0' and flag_principal='1'";
	$row=mysql_fetch_array(mysql_query($sql));
	$txtPrincipal=$row[0];	
}
$sql_news="select id,fecha,titulo,contenido,flag_imagen,flag_principal from evento where estado='0'";
$rs_news=mysql_query($sql_news);
/*****************Configuracion del contador******************************/
$total_registros=mysql_num_rows($rs_news);
$registros_por_hoja=10;
$hojas_por_bloque=2;
$ruta_imagen="images/";
$pagina_seleccionada=(!isset($_REQUEST['pagina_seleccionada']) ? 1:$_REQUEST['pagina_seleccionada']);
$inicio=$registros_por_hoja*($pagina_seleccionada-1)+1;
$fin=$registros_por_hoja*$pagina_seleccionada;
/****************************************/
$fila="";
$i=1;
$j=1;
while($row_news=mysql_fetch_array($rs_news)){
	if($j>=$inicio & $j<=$fin){
		$id=$row_news['id'];
		$fecha = $row_news['fecha'];
		$titulo  = $row_news['titulo'];
		$contenido = $row_news['contenido'];
		$flag_imagen    = $row_news['flag_imagen'];
		$flag_principal = $row_news['flag_principal'];
		$fila.="<tr class='m1' height='40'>";
		$fila.="<td align='center'>".$j."</td>";
		$fila.="<td align='left'>".$titulo."</td>";
		$fila.="<td align='center'>".$fecha."</td>";
		$fila.="<td align='center'><input type='radio' name='chkVer' id='chkVer' value='".$id."' ".($id==$txtPrincipal ? "checked='checked'":'')." onclick='document.a.txtPrincipal.value=this.value;document.a.submit();'></td>";
		$fila.="<td align='center'><input type='image' src='images/editar.gif' name='btn' onclick='javascript:editar($id);' value='Editar'>&nbsp;&nbsp;<input type='image' src='images/eliminar.gif' name='btn' onclick='javascript:eliminar($id);' value='Eliminar'></td>";
		$fila.="</tr>";
	}
	++$j;
}
?>
<html>
    <head>
        <link type="text/css" href="css/stylos.css" rel="stylesheet"/>
        <script type="text/javascript" src="javascript/list_eventos.js"></script>
        <script type="text/javascript" src="javascript/contador.js"></script>
        <script type="text/javascript" src="javascript/flashobject.js"></script>
        <script type="text/javascript" src="javascript/adjustmenu.js"></script>
        <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
        <title><?php echo TITULO;?></title>
    </head>
<body onLoad="AdjustMenu('metalarrow','false',0,0)" onResize="AdjustMenu('metalarrow','false',0,0)">
<center>
<table width="718" height="600"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr>
	<td height="91" colspan="2" align="center" valign="top"><img src="images/head.gif" width="780" height="91"></td>
</tr>
<tr>
	<td width="140" height="500" align="left" valign="top" bgcolor="#C1E0A3"><?php require_once "menu.php";?></td>
	<td width="640" align="center" valign="top">
			<div align="right">BIENVENIDO <?php echo $usuario;?></div><br>
    	<p>Listado de Eventos </p>
        <table width="98%" cellpadding="2" cellspacing="0" border="1">
        <tr class="m6">
           <td width="20" align="center">No</td>
           <td width="320" align="center">Noticia</td>
           <td width="120" align="center">Fecha</td>
           <td width="20" align="center">Ver</td>
           <td  align="center">Acciones</td>
        </tr>
        <?php echo $fila;?>
   		</table>
   		<form name="a" id='a'>  
   			<input type='hidden' name='txtPrincipal' id='txtPrincipal'>
   		</form>
   		<div align="right">   
			<?php
			   $contador=new Contador($total_registros,$registros_por_hoja,$hojas_por_bloque,$ruta_imagen);
			   echo $contador->mostrar($pagina_seleccionada);
			?>
    	</div>
      <p><input type="button" value="Anadir" name="btn2" id="btn2" onClick="javascript:anadir();"></p>
      </td>
    </tr>
    <tr>
    	<td colspan="2">&nbsp;</td>
    </tr>
</table>
</center>
</body>
</html>
