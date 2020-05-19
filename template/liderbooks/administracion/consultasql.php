<? 
if(!isset($modo)) 			  	$modo="";
if(!isset($sql)) 		    		$sql="";
if(!isset($fila))   			    	$fila="";
include '../cn.php';
$cn=mysql_connect ($_servidor, $_usuario, $_clave) or die (mysql_error());
mysql_select_db ($_bd); 
if ($modo=="grabar" && $sql<>"")
	{
		$result=mysql_query($sql,$cn);
		$columna=mysql_num_fields($result);
		$fila="";
		while($row=mysql_fetch_array($result))
		{
			$fila.="<tr>";
			for($i=0;$i<$columna;$i++)
			{
				$fila.="<td>$row[$i]</td>";
			}
			$fila.="</tr>";
		}
	};
$modo="";
?>


<head>  
<title>HACER UN CONSULTA CUALQUIERA</title>  
<link rel='stylesheet' href="<?=nombrecss();?>" type='text/css'><script language='JavaScript' src='libreria/lib.js' type='text/javascript'></script>
<script language='JavaScript' src='libreria/edicion.js' type='text/javascript'></script>
</head> 

<body class='bodytabla' >  
<form name='a' method="POST" enctype="multipart/form-data"> 
	<table border='0' cellpadding='2' cellspacing='10' width='100%' class='tabladatocalendario' align="center"> 
		<tr>
			<td align='left' valign='top' class='labels'>
				Sentencia SQL:<br>
				<textarea rows="10" cols="100" class='get text' name="sql"><?=$sql;?></textarea>
			</td>
		</tr>
			<tr>
			<td align='center' valign='top' class='labels'>
				<input type='button' class='botones' value='Aceptar' onclick="document.a.modo.value='grabar';document.a.submit()" > 
			</td>
		</tr>
	</table>
	<table><?=$fila;?></table>

<div id='x' style='display:none'>	
	<input type='text'name='modo' value='<?=$modo;?>'>
</div>
</form> 
</body> 
</html> 
