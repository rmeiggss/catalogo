<?php
session_start();
require_once 'conexion.php';
echo $_SESSION['usuario'];
if(!isset($_POST['accion'])){$accion="";}else{$accion=$_POST['accion'];}
if($accion=='grabar'){
    $sql="insert into alumnos (alu_pat,alu_mat,alu_nom,alu_fna,alu_tel,alu_dir,alu_mail) values (
        '".$_POST['txtPaterno']."','".$_POST['txtMaterno']."','".$_POST['txtNombre']."','".$_POST['txtNacimiento']."','".$_POST['txtTelefono']."','".$_POST['txtDireccion']."','".$_POST['txtEmail']."')";
    pg_query($sql);
}
$sql2 = "select * from alumnos";
$rs2  = pg_query($sql2);
$fila = "";
while($row2 = pg_fetch_array($rs2)){
    $fila.="<tr>";
    $fila.="<td>".$row2['alu_id']."</td>";
    $fila.="<td>".$row2['alu_pat']."-".$row2['alu_mat']."-".$row2['alu_nom']."</td>";
    $fila.="<td>".$row2['alu_fna']."</td>";
    $fila.="<td>".$row2['alu_tel']."</td>";
    $fila.="<td>".$row2['alu_dir']."</td>";
    $fila.="<td>".$row2['alu_mail']."</td>";
    $fila.="</tr>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Ingresando Alumnos</title>
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
        <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2" class="tabla_cabecera">Ingresando Alumnos </td>
          </tr>
          <tr>
            <td class="tabla_contenido">Ap. Paterno </td>
            <td class="tabla_contenido"><input name="txtPaterno" id="txtPaterno" type="text" size="25" maxlength="30" /></td>
          </tr>
          <tr>
            <td class="tabla_contenido">Ap. Materno </td>
            <td class="tabla_contenido"><input name="txtMaterno" id="txtMaterno" type="text" size="25" maxlength="30" /></td>
          </tr>
          <tr>
            <td class="tabla_contenido">Nombre de Alumno </td>
            <td class="tabla_contenido"><input name="txtNombre" id="txtNombre" type="text" size="25" maxlength="30" /></td>
          </tr>
          <tr>
            <td><p class="tabla_contenido">Fec. Nacimiento </p></td>
            <td><input name="txtNacimiento" id="txtNacimiento" type="text" size="10" maxlength="10" /></td>
          </tr>
          <tr>
            <td class="tabla_contenido">Direcci&oacute;n</td>
            <td><input name="txtDireccion" id="txtDireccion" type="text" size="25" maxlength="100" /></td>
          </tr>
          <tr>
            <td class="tabla_contenido">Tel&eacute;fono</td>
            <td class="tabla_contenido"><input name="txtTelefono" id="txtTelefono" type="text" size="25" maxlength="30" /></td>
          </tr>
          <tr>
            <td class="tabla_contenido">e-mail</td>
            <td class="tabla_contenido"><input name="txtEmail" id="txtEmail" type="text" size="25" maxlength="50" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="center">
                <input type="submit" name="Submit" value="Enviar" />
                <input type="hidden" name="accion" id="accion" value="grabar"/>
            </td>
          </tr>
        </table>
        <br />
        <table width="590" border="1" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td class="tabla_cabecera">id</td>
            <td class="tabla_cabecera">nombre</td>
            <td class="tabla_cabecera">f.nac.</td>
            <td class="tabla_cabecera">telefono</td>
            <td class="tabla_cabecera">direccion</td>
            <td class="tabla_cabecera">e-mail</td>
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
