<?php
require_once 'conexion.php';
$curso_notas=$_REQUEST['curso_notas'];
//Nombre del curso
$sql  = "select cursos_nom from cursos where cursos_id='".$curso_notas."'";
$row2 =pg_fetch_array(pg_query($sql));
$nombre_curso=$row2['cursos_nom'];
$sql1 = "select curno_alu,curno_n1,curno_n2,curno_n3,curno_n4,curno_cond from cursos_notas where curno_cur='".$curso_notas."'";
$rs1  = pg_query($sql1);
$fila = "";
$i    = 1;
while($row1=pg_fetch_array($rs1)){
    $sql2 = "select alu_pat ||' '|| alu_mat ||' '|| alu_nom as nombre from alumnos where alu_id='".$row1['curno_alu']."'";
    $rs2  = pg_query($sql2);
    $row2 = pg_fetch_array($rs2);
    $fila.="<tr class=\"tabla_contenido\" onmouseover=\"this.className='fila_activa'\" onmouseout=\"this.className='tabla_contenido'\">";
    $fila.="<td align='center'>".$i."</td>";
    $fila.="<td>".$row2['nombre']."</td>";
    $fila.="<td>".$row1['curno_n1']."</td>";
    $fila.="<td>".$row1['curno_n2']."</td>";
    $fila.="<td>".$row1['curno_n3']."</td>";
    $fila.="<td>".$row1['curno_n4']."</td>";
    $fila.="<td>".($row1['curno_cond']==1 ? 'Aprobado':($row1['curno_cond']!='' ? 'Desaprobado':''))."</td>";
    $fila.="</tr>";
    $i++;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>PHP_02</title>
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
      <table width="590" border="0" align="center" cellpadding="0" cellspacing="1">
        <tr>
          <td colspan="8" class="tabla_cabecera">CURSO_COD - <?php echo $nombre_curso;?> </td>
        </tr>
        <tr class="tabla_cabecera">
          <td>COD
          </td>
          <td>ALUMNO</td>
          <td>N1</td>
          <td>N2</td>
          <td>N3</td>
          <td>N4</td>
          <td>Condicion</td>
          <td>REPORTAR?</td>
        </tr>
        <?php echo $fila;?>
        <tr class="tabla_contenido" onmouseover="this.className='fila_activa'" onmouseout="this.className='tabla_contenido'">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    <!-- InstanceEndEditable --></td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
