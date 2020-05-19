<?php
require_once 'conexion.php';
$curso_notas=$_POST['curso_notas'];
if(!isset($_POST['accion'])){$accion='';}else{$accion=$_POST['accion'];}
if($accion=='grabar'){
    $nota1=$_POST['nota1'];
    $nota2=$_POST['nota2'];
    $nota3=$_POST['nota3'];
    $nota4=$_POST['nota4'];
    $alu_id=$_POST['alu_id'];
    echo count($nota1);
    for($i=0;$i<count($nota1);$i++){
       $promedio=($nota1[$i]+$nota2[$i]+$nota3[$i]+$nota4[$i])/4;
       if($promedio>=11){
           $estado=1;
       }
       else{
           $estado=0;
       }
       $sql="update cursos_notas set curno_cond='".$estado."' where curno_cur='".$curso_notas."' and curno_alu='".$alu_id[$i]."'";
       pg_query($sql);
       header("location:rep_notas_b.php?curso_notas=$curso_notas");
    }
}
$sql1 = "select curno_alu,curno_n1,curno_n2,curno_n3,curno_n4 from cursos_notas where curno_cur='".$curso_notas."'";
$rs1  = pg_query($sql1);
$fila = "";
$i    = 0;
while($row1=pg_fetch_array($rs1)){
    $sql2 = "select alu_pat ||' '|| alu_mat ||' '|| alu_nom as nombre from alumnos where alu_id='".$row1['curno_alu']."'";
    $rs2  = pg_query($sql2);
    $row2 = pg_fetch_array($rs2);
    $fila.="<tr class=\"tabla_contenido\" onmouseover=\"this.className='fila_activa'\" onmouseout=\"this.className='tabla_contenido'\">";
    $fila.="<td align='center'>".$i."<input type='hidden' name='alu_id[".$i."]' id='alu_id[".$i."]' value='".$row1['curno_alu']."'></td>";
    $fila.="<td>".$row2['nombre']."</td>";
    $fila.="<td><input type='text' name='nota1[".$i."]' id='nota1[".$i."]' value='".$row1['curno_n1']."'></td>";
    $fila.="<td><input type='text' name='nota2[".$i."]' id='nota2[".$i."]' value='".$row1['curno_n2']."'></td>";
    $fila.="<td><input type='text' name='nota3[".$i."]' id='nota3[".$i."]' value='".$row1['curno_n3']."'></td>";
    $fila.="<td><input type='text' name='nota4[".$i."]' id='nota4[".$i."]' value='".$row1['curno_n4']."'></td>";
    $fila.="</tr>";
    $i++;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Ingresar Notas</title>
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
        <table width="590" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr class="tabla_contenido" onmouseover="this.className='fila_activa'" onmouseout="this.className='tabla_contenido'">
            <td><input type="hidden" name="cod_curso" value="1234"/></td>
            <td colspan="5">CODCURSO - NOMBRE DE CURSO </td>
          </tr>
          <tr>
            <td class="tabla_cabecera">Cod.</td>
            <td class="tabla_cabecera" width="150px">Nombre</td>
            <td class="tabla_cabecera">N1</td>
            <td class="tabla_cabecera">N2</td>
            <td class="tabla_cabecera">N3</td>
            <td class="tabla_cabecera">N4</td>
          </tr>
          <?php echo $fila;?>
          <tr class="tabla_contenido" onmouseover="this.className='fila_activa'" onmouseout="this.className='tabla_contenido'">
            <td colspan="6">&nbsp;</td>
          </tr>
          <tr class="tabla_contenido" onmouseover="this.className='fila_activa'" onmouseout="this.className='tabla_contenido'">
            <td colspan="6" align="center">
                <input type="hidden" name="curso_notas" id="curso_notas" value="<?php echo $curso_notas;?>"/>
                <input type="hidden" name="accion" id="accion" value="grabar"/>
                <input type="submit" name="Submit" value="Procesar Notas" />
            </td>
          </tr>
        </table>
      </form>
    <!-- InstanceEndEditable --></td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
