<?php
session_start();
require_once 'includes/conexion.php';
require_once 'includes/config.inc.php';
$fecha=date('Y-m-d h:i:s',time());
if(!isset($_REQUEST['modo']))   			{$modo="";}else{$modo=$_REQUEST['modo'];}
if(!isset($_REQUEST['id']))   				{$id="";}else{$id=$_REQUEST['id'];}
if(!isset($_REQUEST['action']))   		{$action="";}else{$action=$_REQUEST['action'];}
if(!isset($_REQUEST['resumen']))  		{$resumen="";}else{$resumen=$_REQUEST['resumen'];}
if(!isset($_REQUEST['descripcion']))  {$descripcion="";}else{$descripcion=trim(str_replace("background: #FFF;","", $_REQUEST['descripcion']));}
if(!isset($_REQUEST['noticia']))  		{$noticia="";}else{$noticia=trim($_REQUEST['noticia']);}
if(!isset($titulo))		$titulo="";
if(!isset($content))		$content="";
$usuario=$_SESSION['usuario'];
if(!$_SESSION['usuario'])  die("Usuario no registrado. <a href='index.php'>Registrarse e ingresar</a>");
if($modo=='a'){
    if($action=='grabar'){
    	$sql_cor="select max(curso)+1 from curso";
    	$row_cor=mysql_fetch_array(mysql_query($sql_cor));
    	$curso=str_pad($row_cor[0],6,'0',STR_PAD_LEFT);
      $sql_curso="
      						insert into curso (curso,nombre,categoria,descripcion,flag_enlace,enlace) 
      						values ('$curso','$noticia','000003','$descripcion','0','')
      						";
      mysql_query($sql_curso,$cn);
      $txt="<script>window.close();</script>";
      echo $txt;
    }
}
elseif($modo=='m'){
    if($action=='grabar'){
        $sql_noticias3="update curso set nombre='$noticia',categoria='000003',descripcion='$descripcion' where curso='".$id."'";
        echo $sql_noticias3;
        mysql_query($sql_noticias3,$cn);
        $txt="<script>window.close();</script>";
        echo $txt;
    }
}
elseif($modo=='e'){
    header('Location:list_cursos.php');
}
//Cuando editamos
if($modo=='m'){
    $sql_noticia2="select * from curso where curso='".$id."'";
    $row_noticia2=mysql_fetch_array(mysql_query($sql_noticia2,$cn));
    $titulo=$row_noticia2['nombre'];
    $content=$row_noticia2['descripcion'];
    $resumen=$row_noticia2['categoria'];
}
/*****************************************Funciones **********************************************/
function rteSafe($strText) {
    //returns safe code for preloading in the RTE
    $tmpString = $strText;

    //convert all types of single quotes
    $tmpString = str_replace(chr(145), chr(39), $tmpString);
    $tmpString = str_replace(chr(146), chr(39), $tmpString);
    $tmpString = str_replace("'", "&#39;", $tmpString);

    //convert all types of double quotes
    $tmpString = str_replace(chr(147), chr(34), $tmpString);
    $tmpString = str_replace(chr(148), chr(34), $tmpString);
//	$tmpString = str_replace("\"", "\"", $tmpString);

    //replace carriage returns & line feeds
    $tmpString = str_replace(chr(10), " ", $tmpString);
    $tmpString = str_replace(chr(13), " ", $tmpString);

    return $tmpString;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title><?php echo TITULO;?></title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="keywords" content="cross-browser rich text editor, rte, textarea, htmlarea, content management, cms, blog, internet explorer, firefox, safari, opera, netscape, konqueror" />
    <meta name="description" content="The cross-browser rich-text editor (RTE) is based on the designMode() functionality introduced in Internet Explorer 5, and implemented in Mozilla 1.3+ using the Mozilla Rich Text Editing API." />
    <meta name="author" content="Kevin Roth" />
    <meta name="ROBOTS" content="ALL" />
    <script type="text/javascript" src="html2xhtml.js"></script>
    <script type="text/javascript" src="richtext_compressed.js"></script>
	<script type="text/javascript">
	<!--
	function submitForm() {
		//make sure hidden and iframe values are in sync for all rtes before submitting form
		updateRTEs();
		//alert(document.RTEDemo.rte1.value);
		document.getElementById('descripcion').value=document.RTEDemo.rte1.value;
		//location.href="nuevo.php?content="+document.RTEDemo.rte1.value;
		return true;
	}
	//Usage: initRTE(imagesPath, includesPath, cssFile, genXHTML, encHTML)
	initRTE("./images/", "./", "", true);
	//-->
	</script>
</head>
    <body onload="document.RTEDemo.noticia.focus();">
<form name="RTEDemo" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return submitForm();">
    <table align="center" border="0" cellpadding="5" cellspacing="0">
    <tr valign="top">
        <td>Curso</td>
        <td><input type="text" name="noticia" id="noticia" style="width:200px;" value="<?php echo $titulo;?>"/></td>
    </tr>
    <tr style="display:none" valign="top">
        <td>Resumen</td>
        <td>
            <textarea name="resumen" id="resumen" cols="60" rows="4"><?php echo $resumen;?></textarea>
        </td>
    </tr>
    <tr valign="top">
        <td>Detalle</td>
        <td
            <script type="text/javascript">
            var rte1 = new richTextEditor('rte1');
            <?php
            //format content for preloading
            if (!(isset($_POST["rte1"]))) {
                    $content = rteSafe($content);
            } else {
                    //retrieve posted value
                    $content = rteSafe($_POST["rte1"]);
            }
            ?>
            rte1.html = '<?php echo $content;?>';
            rte1.toggleSrc = false;
            rte1.build();
            </script>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input type="submit" name="submit" value="<?=($modo=='a' ? 'Grabar':'Modificar');?>" />
             <input type="button" name="btn3" id="btn3" value="Cancelar" onclick="window.close();"/>
            <input type="hidden" name="action" id="action" value="grabar" />
            <input type="hidden" name="modo" id="modo" value="<?php echo $modo;?>" />
            <input type="hidden" name="id" id="id" value="<?php echo $id;?>" />
            <input type="hidden" name="descripcion" id="descripcion" />
        </td>
    </tr>
</table>
</form>
</body>
</html>
