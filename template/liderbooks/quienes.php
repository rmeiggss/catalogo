<?php
require_once "config/config.inc.php";
session_start();
//session_register('cuenta');
include "libreria/cn.php";
include "libreria/variables.php";
if(!isset($categoria)) 			$categoria="";
if(!isset($columna)) 			$columna="3";
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
		and libro.imagen!='' and libro.libro < '000050' order by rand() limit 6
		";		
		//echo $cadena;
$rs=mysql_query($cadena) or die(mysql_error());
while($row=mysql_fetch_array($rs))
{
  $autor='';
	$nombre=$row['1'];
	if($autor=="")		 break;
	$tabla.=muestra_producto($cadena,$autor,$categoria,$columna);
}
if($autor=="")			$tabla.=muestra_producto($cadena,'',$categoria,$columna);
$tabla.="</table>";
$linea="";
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
    <td height="209" colspan="2" align="left" valign="top"><?php include "header.php";?></td>
  </tr>
  <tr>
    <td height="30" colspan="2" class="font4" bgcolor="#EBEBEB">
    	<?php include "header_inferior.php";?>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF">

    <td width="80%" height="208" align="right" valign="top"><table width="99%" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td height="156"><table width="97%" border="0" cellspacing="0" cellpadding="0">

            <tr>

              <td width="18%" height="154" align="center" valign="top">&nbsp;</td>

              <td width="82%" align="left" valign="top"><ul>

                  <li class="Estilo1 Estilo2">Bienvenidos a Nuestro sitio web </li>

              </ul>

                  <blockquote>

                    <p align="justify" class="font1">Liderbooks S.A. promueve la difusi&oacute;n de libros que contribuyan al desarrollo del ser humano, en su dimensi&oacute;n espiritual y t&eacute;cnica. Prodr&aacute;s encontrar libros para adquirir (Delivery) o de libre disponibilidad.<br />

                     Actualmente el Liderazgo es una manera con la que se rescatan valores y actitudes que nos hacen cada vez mas humanos, es preciso se&ntilde;alar que las fuentes y principios son espirituales.<br />

                    Las ense&ntilde;anzas de maestros como San Ignacio de Loyola, Buda o Gandhi (por citarlos de diferentes religiones) son vigentes hasta nuestros d&iacute;as porque los principios no cambian.<br />

                    Es necesario pues que la empresa mire al ser humano desde sus propio SER, hemos caminado tanto para evidenciar que el recurso humano importa pues ya demos el paso &uacute;ltimo hacia la fe.</p>

                    <p align="right" class="font1"><strong>El Edito</strong>r  </p>

                  </blockquote></td>

            </tr>

        </table></td>

      </tr>

      <tr>

        <td align="center" valign="top"><table width="83%" border="0" cellspacing="0" cellpadding="0">

            <tr>

              <td  align="center" valign="top"><table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">

                <tr>

                  <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

                    <tr>

                      <td width="9%" height="32" bgcolor="#EBEBEB">&nbsp;</td>

                      <td width="91%" bgcolor="#EBEBEB" class="Estilo1 Estilo2"><span class="Estilo6">Servicios Adicionales</span> <a name="prueba" id="prueba"></a></td>

                    </tr>

                    <tr>

                        <td height="69" colspan="2" align="left" class="font1">

					  		<ul>

								<li ><a href="http://www.psicologiapopular.com/" target="_blank">Consultorio Psicol&oacute;gico</a> </li>

								<li class="font1"><a href="http://www.antarki.org/moodle/" target="_blank">Educaci&oacute;n a Distancia</a> </li>

								<li class="font1"><a href="http://www.guiacalles.com/calles/index.asp" target="_blank">Gu&iacute;a de Calles</a></li>

								<li class="font1">Directorio Web </li>

							</ul>						</td>

                    </tr>

                  </table></td>

                </tr>

              </table></td>

              <td width="50%" align="center" valign="top"><table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">

                <tr>

                  <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

                      <tr>

                        <td height="35" bgcolor="#333333"><span class="Estilo3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Novedades </span></td>

                      </tr>

                      <tr>

                        <td align="left"><ul>

                            <li class="font1"><a href="interesante.php">Constantino Carvallo , fil&oacute;sofoy educador </a></li>

                        </ul></td>

                      </tr>

                  </table></td>

                </tr>

              </table></td>

            </tr>

        </table></td>

      </tr>

      <tr>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td height="35" align="center"><table width="495" border="0" cellspacing="0" cellpadding="0">

          <tr>

            <th align="left" scope="col"><span class="Estilo5">Novedades</span></th>

          </tr>

          <tr>

            <td><hr></td>

          </tr>

        </table></td>

      </tr>

      <tr>

        <td align="center"></td>

      </tr>

      <tr>
        <td><?php echo $tabla;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>  
      <tr>
        <td>&nbsp;</td>
      </tr> 
			<tr>
				<td align='center'><a href="http://fesoli.cosolig.org" target="_blank"><img src="images/flisol.png" border="0" alt="IV Festival Internacional de Software Libre" title="IV Festival Internacional de Software Libre" width="610" height="75"></a></td>
			</tr>
      <tr>
        <td>&nbsp;</td>
      </tr> 			
    </table>
		</td>
    <td align="center" valign="top" bgcolor="#EBEBEB">
	  <table border="0" cellspacing="0" cellpadding="0" width="100%">
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
        <td height="51">
		&nbsp;
		</td>
      </tr>
    </table>	
    </td>
  </tr>
  <tr>
    <td colspan="2"><?php include "pie.php";?></td>
  </tr>
</table>
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
  <td align="left">
		<!--script language=JavaScript src="http://server01.contadorwap.com/hitv2.php?id=710d82617c333883e9d95bfce2a75695&s=11&tipo=grafico&t=1237745161"></script-->
		<font size=1><a href="http://www.contadorwap.com" target="_blank">Estadisticas web</a></font>
  </tr>
  </td>
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

