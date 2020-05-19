<?php
include "libreria/cn.php";
require_once "config/config.inc.php";
$cn=mysql_connect($_servidor,$_usuario,$_clave) or die(mysql_error());
mysql_select_db($_bd);
if(!isset($id))			die();
$cadena="select imagen,resumen from libro where libro='".$id."'";
$rs=mysql_query($cadena,$cn) or die(mysql_error());
$row=mysql_fetch_array($rs);
$imagen=$row['0'];
$resumen=$row['1'];
?>
<html>
<head>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>
<body>
<table width="95%" border="0" align="center">
  <tr>
    <th scope="col"><img src="<?=$imagen;?>" width="250" height="400" border="0"></th>
  </tr>
  <tr>
    <th scope="row"><?=$resumen;?></th>
  </tr>
</table>
</body>
</html>