<?php
require_once 'conexion.php';
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
      <form id="form1" name="form1" method="post" action="rep_notas_b.php">
        <table width="300" border="1" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><table width="300" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td colspan="2" class="tabla_cabecera">Reporte de Notas </td>
              </tr>
              <tr class="tabla_contenido">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr class="tabla_contenido">
                <td>Seleecione Curso </td>
                <td>
                <?php
                $sql = "select cursos_id,cursos_nom from cursos";
                $rs  = pg_query($sql);
                $fila ="";
                while($row=pg_fetch_array($rs)){
                    $fila.="<option value='".$row['cursos_id']."'>".$row['cursos_nom']."</opcion>";
                }
                ?>
                    <select name="curso_notas" class="tabla_contenido">
                        <?php echo $fila;?>
                    </select>
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="Submit" value="Consultar Notas" class="tabla_contenido"/></td>
              </tr>
            </table></td>
          </tr>
        </table>
      </form>
    <!-- InstanceEndEditable --></td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
