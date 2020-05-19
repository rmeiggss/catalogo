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
<script type="text/javascript">
function abrir(){
	window.open("scripts/sistemaNotas/index.php","","width=600px,height=500,menubars=no,resizable=no");
}
</script>
</head>

<body>
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
      <td height="141" colspan="2">
          <?php include "header.php"?>
      </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="208" align="left" valign="top">
        <div style="height:7800px">
            <table width="100%" border="0">
              <tr>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso.php?categoria=000001">MATEMATICAS</a></th>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso/computacion/index.php">COMPUTACION</a></th>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso.php?categoria=000002">INGLES</a></th>
              </tr>
            </table>
            <?php require('barra_de_navegacion.php');?>
            <p align="center"><u>Sistema de notas</u><br />
            (<a href="#" onclick="abrir();">Ver en funcionamiento</a>)</p>
            <p align="center"><img width="254" height="148" src="images/sistema_notas_clip_image002.gif" /></p>
            <p align="left" class="m1"><u>index.php</u></p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="567" height="758" src="images/sistema_notas_clip_image004.gif" /></p>
            <p class="m1"><u>ing_cursos.php</u></p>
            <p><img width="396" height="151" src="images/sistema_notas_clip_image006.gif" /></p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="566" height="821" src="images/sistema_notas_clip_image008.gif" /></p>
            <p class="m1"><u>ing_alumnos.php</u></p>
            <p><img width="566" height="448" src="images/sistema_notas_clip_image010.gif" /></p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="566" height="341" src="images/sistema_notas_clip_image012.gif" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="567" height="334" src="images/sistema_notas_clip_image014.gif" /><br />
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="567" height="335" src="images/sistema_notas_clip_image016.gif" /><br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="567" height="103" src="images/sistema_notas_clip_image018.gif" /></p>
            <p class="m1"><u>ing_notas.php</u></p>
            <p><img width="567" height="128" src="images/sistema_notas_clip_image020.gif" /></p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="567" height="339" src="images/sistema_notas_clip_image022.gif" /><br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="566" height="310" src="images/sistema_notas_clip_image024.gif" /></p>
            <p class="m1"><u>ing_notasb.php</u></p>
            <p><img width="567" height="207" src="images/sistema_notas_clip_image026.gif" /><br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="566" height="342" src="images/sistema_notas_clip_image028.gif" /><br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="566" height="324" src="images/sistema_notas_clip_image030.gif" />&nbsp;&nbsp;&nbsp;
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="567" height="298" src="images/sistema_notas_clip_image032.gif" /></p>
            <p class="m1"><u>rep_notas.php</u></p>
            <p><img width="567" height="137" src="images/sistema_notas_clip_image034.gif" /></p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="567" height="339" src="images/sistema_notas_clip_image036.gif" />
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="566" height="340" src="images/sistema_notas_clip_image038.gif" /></p>
            <p class="m1"><u>rep_notasb.php</u></p>
            <p><img width="567" height="144" src="images/sistema_notas_clip_image040.gif" /><br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="566" height="340" src="images/sistema_notas_clip_image042.gif" /><br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="566" height="332" src="images/sistema_notas_clip_image044.gif" /><br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="566" height="245" src="images/sistema_notas_clip_image046.gif" /></p>
            <p>&nbsp;</p>
        </div>    </td>
  </tr>
</table>
<?php require('barra_de_navegacion.php');?>
</body>
</html>
