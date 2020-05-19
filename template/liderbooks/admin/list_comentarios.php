<?php
session_start();
require_once 'includes/config.inc.php';
require_once 'includes/conexion.php';
require_once 'clases/Contador.php';
$usuario=$_SESSION['usuario'];
if(!$_SESSION['usuario'])  die("Usuario no registrado. <a href='index.php'>Registrarse e ingresar</a>");
$sql_news="select comentario,fecha,valor,visitante,email,telefono from comentario where borrado='' and tema='0'";
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
        $comentario = $row_news['comentario'];
        $fecha = $row_news['fecha'];
        $valor = $row_news['valor'];
        $visitante = $row_news['visitante'];
        $email   = $row_news['email'];
        $telefono= $row_news['telefono'];
        $fila.="<table width='100%' border='0'>";
        $fila.="<tr class='m1' bgcolor='#E1E8F1'>";
        $fila.="<td align='center' width='20'>".$j."</td>";
        $fila.="<td align='left' width='300'>".$visitante."(".$email.")</td>";
        $fila.="<td align='center' width='100'>".$fecha."</td>";
        $fila.="<td align='center' rowspan='2' width='60'><input type='button' name='btn' onclick='javascript:eliminar($comentario);' value='Eliminar'></td>";
        $fila.="</tr>";
        $fila.="<tr class='m1'>";
        $fila.="<td align='center'>&nbsp;</td>";
        $fila.="<td align='left' colspan='2'>".$valor."</td>";
       $fila.="</tr>";
        $fila.="</table>";
    }
    ++$j;
}
?>
<html>
    <head>
        <link type="text/css" href="css/stylos.css" rel="stylesheet"/>
        <script type="text/javascript" src="javascript/list_cursos.js"></script>
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
    <td width="140" height="500" align="left" valign="top" bgcolor="#C1E0A3">
        <?php require_once 'menu.php';?>
    </td>
    <td width="640" align="center" valign="top">
    	<div align="right">BIENVENIDO <?php echo $usuario;?></div>
        <p>Comentarios</p>
        <table width="98%" cellpadding="0" cellspacing="0" border="1">
        <tr class="m6">
           <td width="20" align="center">No</td>
           <td width="300" align="center">Comentario</td>
           <td width="100" align="center">Fecha</td>
           <td width="70" align="center">Acciones</td>
        </tr>
        <tr>
        	<td colspan="4"><?php echo $fila;?></td>
        </tr>
        </table>
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
