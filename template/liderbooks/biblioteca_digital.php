<?php
//session_start();
//session_register('cuenta');
include "libreria/cn.php";
include "libreria/variables.php";
require_once "config/config.inc.php";
if(!isset($categoria)) 			$categoria="";

if(!isset($columna)) 			$columna="3";

//echo "<br>".$_servidor;

//echo "<br>".$_usuario;

//echo "<br>".$_clave;

$cn=mysql_connect($_servidor,$_usuario,$_clave)or die(mysql_error());

mysql_select_db($_bd);



$cadena="select nombre from categoria where categoria='".$categoria."'";

$rs=mysql_query($cadena,$cn); 

$row=mysql_fetch_array($rs);

$categorianombre=$row['nombre'];



$tabla="<table border='0' width='100%'>";

$tabla.="<tr>";

$tabla.="<td colspan='".$columna."' class='m9' align='center'>".strtoupper($categorianombre)."</td>";

$tabla.="</tr>";

$cadena="

		select 

		autor.autor as autor,libro.imagen,

		concat(autor.paterno,' ',autor.materno,' ',autor.nombre) as nombre,

		libro.libro as libro

		from libro

		left join autor on libro.autor=autor.autor

		where libro.borrado=''

		and libro.estado='1'

		and libro.imagen!='' and libro.libro < '000050' order by rand() limit 6";		

		//echo $cadena;

$rs=mysql_query($cadena); //or die(mysql_error());

while($row=mysql_fetch_array($rs))

{

    $autor='';

	$nombre=$row['1'];

	if($autor=="")		 break;

	$tabla.=muestra_producto($cadena,$autor,$categoria,$columna);

}
if($autor=="")			$tabla.=muestra_producto($cadena,'',$categoria,$columna);
$tabla.="</table>";
$inea="";
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

.Estilo5 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 18px;

	color: #003399;

}

.Estilo6 {color: #000000}

a:link {

	color: #000000;

	text-decoration: none;

}

a:visited {

	text-decoration: none;

	color: #000000;

}

a:hover {

	text-decoration: none;

	color: #000000;

}

a:active {

	text-decoration: none;

	color: #000000;

}

.style2 {font-size: 14}

-->

</style>

</head>



<body>

<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#99CC33">

  <tr>

    <td height="141" colspan="2" align="left" valign="top"><?php include "header.php";?></td>

  </tr>

  <tr>
    <td height="30" colspan="2" bgcolor="#EBEBEB" class="font4">
	   <?php include "header_inferior.php";?>    </td>
  </tr>

  <tr bgcolor="#FFFFFF">

    <td width="80%" height="208" align="right" valign="top"><table width="99%" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td height="156" valign="top"><table width="95%" border="1" align="center" cellpadding="4" cellspacing="0">

          <tr>

            <td width="90%" height="21" bgcolor="#FFFF99"><div align="center" class="font1">

              <div align="left" class="font5">&nbsp;&nbsp;&nbsp;BIBLIOTECAS DIGITALES DEL PER&Uacute;. </div>

            </div></td>

            </tr>

          <tr>

            <td height="491" valign="top"><table width="93%" border="0" align="center" cellpadding="0" cellspacing="0">

              <tr>

                <td width="65%" height="120" class="font5">Biblioteca Digital Andina</td>

                <td width="35%" height="120" align="center" valign="middle"><a href="http://www.comunidadandina.org/bda/default.aspx" target="_blank"><img src="images/BDA.jpg" width="74" height="100" border="0" /></a></td>

              </tr>

              <tr>

                <td class="font5">&nbsp;</td>

                <td align="center" valign="middle">&nbsp;</td>

              </tr>

              <tr>

                <td height="120" class="font5">Biblioteca Nacional del Per&uacute;</td>

                <td align="center" valign="middle"><a href="http://bvirtual.bnp.gob.pe" target="_blank"><img src="images/bnp.jpg" width="70" height="64" border="0" /></a></td>

              </tr>

              <tr>

                <td class="font5">&nbsp;</td>

                <td align="center" valign="middle">&nbsp;</td>

              </tr>

              <tr>

                <td height="120" class="font5">Sitio web para el desarrollo de las Ciencias Sociales en el Peru </td>

                <td align="center" valign="middle"><a href="http://www.cholonautas.edu.pe/" target="_blank"><img src="images/logo_cholonautas.jpg" width="109" height="37" border="0" /></a></td>

              </tr>

              <tr>

                <td class="font5">&nbsp;</td>

                <td align="center" valign="middle">&nbsp;</td>

              </tr>

              <tr>

                <td height="120" class="font5">Biblioteca Virtual Miguel de Cervantes</td>

                <td align="center" valign="middle"><a href="http://www.cervantesvirtual.com/index.jsp" target="_blank"><img src="images/logo-cervantes.jpg" width="120" height="59" border="0" /></a></td>

              </tr>

              <tr>

                <td class="font5">&nbsp;</td>

                <td align="center" valign="middle">&nbsp;</td>

              </tr>

              <tr>

                <td height="120" class="font5">Consorcio de Investigaci&oacute;n Econ&oacute;mica y Social</td>

                <td align="center" valign="middle"><a href="http://cies.org.pe/" target="_blank"><img src="images/logo-cies.jpg" width="70" height="51" border="0" /></a></td>

              </tr>

              <tr>

                <td class="font5">&nbsp;</td>

                <td align="center" valign="middle">&nbsp;</td>

              </tr>

              <tr>

                <td height="120" class="font5">International Children's Digital Library</td>

                <td align="center" valign="middle"><a href="http://es.childrenslibrary.org/" target="_blank"><img src="images/logo-icdlbooks.jpg" width="85" height="70" border="0" /></a></td>

              </tr>

              <tr>

                <td class="font5">&nbsp;</td>

                <td align="center" valign="middle">&nbsp;</td>

              </tr>

              <tr>

                <td height="120" class="font5">Biblioteca Digital - UNMSM</td>

                <td align="center" valign="middle"><a href="http://sisbib.unmsm.edu.pe/" target="_blank"><img src="images/sisbib.jpg" width="101" height="60" border="0" /></a></td>

              </tr>

              <tr>

                <td>&nbsp;</td>

                <td align="center" valign="middle">&nbsp;</td>

              </tr>

            </table></td>

          </tr>

          

          

          

          





        </table></td>

      </tr>

      <tr>

        <td height="24">&nbsp;</td>

      </tr>

      

    </table>

		<!--Empieza contenido-->

		<!--Termina contenido--></td>

    <td align="center" valign="top" bgcolor="#EBEBEB">

	  <table border="0" cellspacing="0" cellpadding="0" width="100%">

      <tr>

        <td><? include "busqueda.php";?></td>

      </tr>

      <tr>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td height="2" bgcolor="#006600"></td>

      </tr>

	  <tr>

        <td bgcolor="#FEF9DE"><? include "categoria.php";?></td>

      </tr>

	  <tr>

        <td height="2" bgcolor="#006600"></td>

	    </tr>

      <tr>

        <td height="10" align="center" valign="middle" bgcolor="#FFFFFF"></td>

      </tr>

      <tr>

        <td height="27" align="center" valign="middle" bgcolor="#FFFFFF"><? include "compras.php";?></td>

      </tr>

      <tr>

        <td height="10" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>

      </tr>

      <tr>

        <td height="45" align="center"><?php include "eventos.php"?></td>

      </tr>

      <tr>

        <td></td>

      </tr>

      <tr>

        <td height="21" align="center">&nbsp;</td>

      </tr>

      <tr>

        <td height="51" align="center"><a href="http://www.kallpahost.com" target="_blank"><img src="images/mono_azul.png" alt="hosting" width="97" height="97" border="0" /></a></td>

      </tr>

      <tr>

        <td height="51"><div align="center" class="font1"><a href="http://www.kallpahost.com" target="_blank">Hosting y Dominio</a> </div></td>

      </tr>

      <tr>

        <td height="51">&nbsp;</td>

      </tr>

      <tr>

        

        <?php  ?><td height="51">&nbsp;</td>

      </tr>

    </table>	</td>

  </tr>

  <tr>

    <td colspan="2"><? include "pie.php";?></td>

  </tr>

</table>

<script type="text/javascript">

var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");

document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

</script>

<script type="text/javascript">

try {

var pageTracker = _gat._getTracker("UA-8408701-1");

pageTracker._trackPageview();

} catch(err) {}</script>

</body>

</html>

