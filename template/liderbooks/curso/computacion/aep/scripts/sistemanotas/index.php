
<?php
session_start();
require_once 'conexion.php';
if($_POST['accion']=='ingresar'){
    $usuario = $_POST['txtUsuario'];
    $clave   = $_POST['txtClave'];
    $sql="select user_nom,user_pass from usuarios where user_nom='".$usuario."'";
    echo $sql;
    $rs = pg_query($sql);
    if($row = pg_fetch_array($rs)){
        if($row['user_pass']==$clave){
            $_SESSION['usuario']=$row['user_nom'];
            $_SESSION['clave']=$row['user_pass'];
            header("location:ing_cursos.php");
        }
        else{
            echo "<script>alert('El password es incorrecto.')</script>";
        }
    }
    else{
        echo "<script>alert('El usuario no esta registrado');</script>";
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Loggin Parte 1</title>
<link href="php02.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
$mensaje="Hola !!!";
?>
<form id="form1" name="form1" method="post" action="">
  <table width="300" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td><table width="300" border="0" cellspacing="2" cellpadding="0">
          <tr>
            <td colspan="2" align="center" bgcolor="#CC9966" class="tabla_cabecera">Loggin - Paso 1 </td>
          </tr>
		  <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr>
            <td class="tabla_contenido">Usuario</td>
            <td class="tabla_contenido">
                <input name="txtUsuario" id="txtUsuario" type="text" size="10" maxlength="10" />
            </td>
          </tr>
          <tr>
            <td class="tabla_contenido">Clave</td>
            <td class="tabla_contenido"><input name="txtClave" id="txtClave" type="password" size="10" maxlength="10" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="center">
                <input type="hidden" name="accion" id="accion" value="ingresar">
                <input type="submit" name="Submit" value="Ingresar" class="tabla_contenido"/>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="center" class="tabla_contenido"><?php echo $mensaje; ?></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
