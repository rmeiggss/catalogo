<?php
require_once "../../../libreria/cn.php";
require_once "../../../config/config.inc.php";
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
<link href="../../../css/stylos.css" rel="stylesheet" type="text/css" />
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
.Estilo4 {color: #FFFFFF}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}

-->
</style>
</head>

<body>
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
      <td height="141" colspan="2">
          <?php include "header.php"?>      </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="208" align="left" valign="top">
        <div style="height:600px">
            <table width="100%" border="0">
              <tr>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso.php?categoria=000001">MATEMATICAS</a></th>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso/computacion/index.php">COMPUTACION</a></th>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso.php?categoria=000002">INGLES</a></th>
              </tr>
            </table>
            <?php require('barra_de_navegacion.php');?>
<p class="m7"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u align="center" >Sistema de art&iacute;culos y encargos</u></strong></p>
            <blockquote>
              <p class="m1">Sarita Ramos es una empresa, dedicada&nbsp; a la venta de chocolates. Los clientes pueden  hacer sus pedidos si es que est&aacute;n registrados previamente en el sistema. Entre  los productos que ofrece tenemos cholocate para particulares, para matrimonios,  para fiestas y para empresas. Cada rubro tiene categor&iacute;as. Los productos deben  tener los siguientes datos: nombre, peso, descripci&oacute;n, stock y precio de venta.</p>
            </blockquote>
            <p align="center"><img width="516" height="371" src="images/sistema_administrativo_clip_image002.gif" /></p>
              <blockquote>
                <p class="m1">Pasos.</p>
                <ol class="m1">
                  <li>Modelar       la base de datos.</li>
                  <li>Convertir       las p&aacute;ginas est&aacute;ticas en din&aacute;micas.</li>
                  <li>Completar       los enlaces y las im&aacute;genes necesarias para el proyecto.</li>
                  <li> Estructurar       los archivos del proyecto.</li>
                </ol>
              </blockquote>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp; </p>
        </div>    </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="208" align="left" valign="top">&nbsp;</td>
  </tr>
</table>
<?php require('barra_de_navegacion.php');?>
</body>
</html>
