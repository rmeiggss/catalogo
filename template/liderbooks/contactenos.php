<?php
include "libreria/cn.php";
include "libreria/variables.php";
require_once "config/config.inc.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo TITULO;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" CONTENT="<?php echo DESCRIPCION;?>"/>
<meta NAME="keywords" CONTENT="<?php echo KEYWORDS;?>"/>
<meta NAME="Copyright" CONTENT="<?php echo COPYRIGHT;?>"/>
<meta NAME="Publisher" CONTENT="<?php echo PUBLISER;?>"/>
<meta NAME="Distribution" CONTENT="Global"/>
<meta NAME="Robots" CONTENT="All"/>
<link href="stylos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body
 {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #000000;
}
.Estilo1 
{
	color: #0000FF;
	font-weight: bold;
}
.Estilo2 {color: #232651}
.Estilo3 
{
	color: #FFCC66;
	font-weight: bold;
}

-->
</style>
</head>

<body>
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
  <td height="141" colspan="2"><?php include "header.php";?></td>
  </tr>
      <tr>
    <td height="30" colspan="2" class="font4" bgcolor="#EBEBEB">
    	<?php include "header_inferior.php";?>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="80% height="208" align="right" valign="top">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="65%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="3" align="center"><div align="left"><img src="images/caja1_top.gif" width="450" height="16" /></div></td>
                </tr>
                <tr>
                  <td width="10%" colspan="3" align="center" valign="top" background="images/caja1_middle2.gif">
				  <form id="a" name="a" method="post" action="gracias.php" onsubmit="return valida(this);">
                    <table width="95%" height="282" border="0" align="center" cellpadding="0" cellspacing="3">
                      <tr>
                        <td height="22" colspan="2" class="titulotabla">CONT&Aacute;CTESE CON NOSOTROS </td>
                      </tr>
                      
                      <tr>
                        <td width="35%" height="25" align="left" class="font1">Nombres y Apellidos </td>
                        <td width="65%" align="left"><label> :
                          <input type="text" name="nombre" id="nombre" style="width:250px" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="25" align="left" class="font1">E-mail</td>
                        <td align="left">
							<label> : 
							<input type="text" name="email" id="email" style="width:250px" /></label>
						</td>
                      </tr>
                      <tr>
                        <td height="25" align="left" valign="middle" class="font1">Tel&eacute;fono</td>
                        <td align="left" valign="middle">: 
                          <input type="text" name="telefono" id="telefono" style="width:150px" /></td>
                      </tr>
                      <tr>
                        <td height="140" align="left" valign="top" class="font1">Comentario</td>
                        <td align="left" valign="top">:
                            <label>
                            <textarea name="comentario" rows="8" style="width:250px" id="comentario"></textarea>
                          </label></td>
                      </tr>
                      
                      <tr>
                        <td height="24">&nbsp;</td>
                        <td align="right" valign="middle">
							<input type="submit" name="Submit" value="Enviar" />
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="hidden" name="accion" id="accion" value="enviar">						</td>
                      </tr>
                    </table>
                  </form>                  </td>
                </tr>
                <tr>
                  <td colspan="3" align="center"><div align="left"><img src="images/caja1_bottom.gif" width="450" height="14" /></div></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="36" align="center" valign="top" class="black_3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div align="center" class="font1">Nro de cuenta en el banco Scotiabank Soles : 038-7661317<br />
  &nbsp;&nbsp;Nro de cuenta en el banco de Cr&eacute;dito Soles&nbsp; : 193-16992364-0-02 </div></td></tr>
      </table>
	</td>
    <td align="center" valign="top" bgcolor="#EBEBEB"><table border="0" cellspacing="0" cellpadding="0" width="100%">
      <tr>
        <td><?php include "busqueda.php";?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="2" bgcolor="#006600"></td>
      </tr>
      <tr>
        <td bgcolor="#FEF9DE"><?php include "categoria.php";?></td>
      </tr>
      <tr>
        <td height="2" bgcolor="#006600"></td>
      </tr>
      <tr>
        <td height="10" align="center" valign="middle" bgcolor="#FFFFFF"></td>
      </tr>
      <tr>
        <td height="27" align="center" valign="middle" bgcolor="#FFFFFF"><?php include "compras.php";?></td>
      </tr>
      <tr>
        <td height="10" align="center" valign="middle" bgcolor="#FFFFFF"></td>
      </tr>
      <tr>
        <td height="45">&nbsp;</td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <?php  ?>
        <td height="51">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><?php include "pie.php";?></td>
  </tr>
</table>
</body>
</html>
