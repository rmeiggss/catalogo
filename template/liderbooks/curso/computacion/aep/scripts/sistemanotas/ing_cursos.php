<?php
session_start();
require_once 'conexion.php';
echo $_SESSION['usuario'];
if(!isset($_POST['accion'])){$accion="";}else{$accion=$_POST['accion'];}
if($accion=='grabar'){
   $codigo = $_POST['txtCodigo'] ;
   $curso  = $_POST['txtCurso'];
   $sql = "insert into cursos (cursos_cod,cursos_nom) values ('".$codigo."','".$curso."')";
   pg_query($sql);
}
$sql2 = "select cursos_id,cursos_cod,cursos_nom from cursos";
$rs2  = pg_query($sql2);
$fila = "";
while($row2 = pg_fetch_array($rs2)){
    $fila .= "<tr class=\"tabla_contenido\"  onMouseOver=\"this.className='fila_activa'\" onMouseOut=\"this.className='tabla_contenido'\">";
    $fila .= "<td>".$row2['cursos_id']."</td>";
    $fila .= "<td>".$row2['cursos_cod']."</td>";
    $fila .= "<td>".$row2['cursos_nom']."</td>";
    $fila .= "<tr>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Ingreso de Cursos</title>
<!-- InstanceEndEditable -->
<link href="php02.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>
<body>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="3" class="menu">
  <tr>
    <td><a href="ing_cursos.php">IING. CURSOS</a> </td>
    <td><a href="ing_alumnos.php">ING. ALUMNOS</a> </td>
    <td><a href="ing_notas.php">ING. NOTAS </a></td>
    <td><a href="rep_notas.php">REP. CURSOS - NOTAS </a></td>
    <td><a href="index.php">SALIR</a></td>
  </tr>
</table>
<table width="600" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#996633">
  <tr>
    <td><!-- InstanceBeginEditable name="contenido" -->
      <form id="form1" name="form1" method="post" action="">
        <br />
        <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2" class="tabla_cabecera">Ingreso de Cursos </td>
          </tr>
          <tr class="tabla_contenido">
            <td>C&oacute;digo de Curso : </td>
            <td><input name="txtCodigo" id="txtCodigo" type="text" size="10" maxlength="5" /></td>
          </tr>
          <tr class="tabla_contenido">
            <td>Nombre de Curso : </td>
            <td><input name="txtCurso" type="txtCurso" size="30" maxlength="30" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
                <input type="hidden" name="accion" id="accion" value="grabar"/>
                <input type="submit" name="Submit" value="Enviar"  class="tabla_contenido"/>
            </td>
          </tr>
        </table>
        <br />
        <table width="400" border="1" align="center" cellpadding="1" cellspacing="0">
          <tr>
            <td class="tabla_cabecera">Curso_id</td>
            <td class="tabla_cabecera">curso_cod</td>
            <td class="tabla_cabecera">curso_nombre</td>
          </tr>
            <?php
            echo $fila;
            ?>
        </table>
      </form>
    <!-- InstanceEndEditable --></td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
