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
          <?php include "header.php"?>
      </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="208" align="left" valign="top">
        <div style="height:auto;">
            <table width="100%" border="0">
              <tr>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso.php?categoria=000001">MATEMATICAS</a></th>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso/computacion/index.php">COMPUTACION</a></th>
                <th width="30%" align="center" bgcolor="#666666" class="font1 Estilo4" scope="col"><a href="../../../curso.php?categoria=000002">INGLES</a></th>
              </tr>
            </table>
            <?php require('pie.php');?>
            <p class="m1">Comandos Basicos<br />
            <table cellspacing="0" cellpadding="0">
              <tr>
                <th scope="row">
                    <table width="95%" align="center" bgcolor="#ffffff" border="1" cellpadding="4" cellspacing="0">
                  <tbody>
                    <tr>
                      <th scope="col" width="20%" bgcolor="#996600">COMANDO</th>
                      <th scope="col" width="60%" bgcolor="#996600">DESCRIPCION</th>
                      <th scope="col" width="20%" bgcolor="#996600">EJEMPLOS</th>
                    </tr>
                    <tr>
                      <th scope="row" valign="top" align="left">uname</th>
                      <td valign="top" align="left">Ve la version del kernel utilizado </td>
                      <td valign="top">uname -a <br />
                        uname -r -v </td>
                    </tr>
                    <tr>
                      <th scope="row" valign="top" align="left">ls</th>
                      <td valign="top" align="left">Lista el contenido del directorio </td>
                      <td valign="top">ls -i <br />
                        ls -l </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">df</th>
                      <td align="left">Muestra el tamaño de un directorio </td>
                      <td>df, df -h,df -v </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">fdisk</th>
                      <td align="left">Muestra todas las particiones del sistema </td>
                      <td>fdisk -l </td>
                    </tr>
                    <tr>
                      <th scope="row" valign="top" align="left">du</th>
                      <td valign="top" align="left">Muestra el espacio usado por un   directorio </td>
                      <td valign="top"><p>du /etc <br />
                        du -s /etc <br />
                        du -sh /etc </p></td>
                    </tr>
                    <tr>
                      <th scope="row" valign="top" align="left">ps</th>
                      <td valign="top" align="left">Muestra informacion sobre los   procesos </td>
                      <td valign="top">ps -aux <br />
                        ps xa | grep mysqld <br />
                        ps -axu | grep user <br />
                        ps -ef </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">pstree</th>
                      <td align="left">Muestra los procesos en forma de arbol </td>
                      <td>pstree -u </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">fg</th>
                      <td align="left">Contiuar comando detenido interactivamente. </td>
                      <td> </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">bg</th>
                      <td align="left">Continuar parametro pasado a background </td>
                      <td> </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">dmesg</th>
                      <td align="left"> </td>
                      <td>dmesg | grep NTFS </td>
                    </tr>
                    <tr>
                      <th scope="row" valign="top" align="left"> </th>
                      <td valign="top" align="left"> </td>
                      <td valign="top"> </td>
                    </tr>
                    <tr>
                      <th scope="row" valign="top" align="left"> </th>
                      <td valign="top" align="left"> </td>
                      <td valign="top"> </td>
                    </tr>
                    <tr>
                      <th scope="row" valign="top" align="left">head</th>
                      <td valign="top" align="left">Muestra las primeras lineas de un   archivo </td>
                      <td valign="top">head /etc/passwd <br />
                        head -15 /etc/passwd </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">tail</th>
                      <td align="left">Muestra las ultimas lineas de un archivo </td>
                      <td>tail /etc/passwd </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">halt</th>
                      <td align="left">Apaga el sistema </td>
                      <td> </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">init 0 </th>
                      <td align="left">Apaga el sistema </td>
                      <td> </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">shutdown</th>
                      <td align="left">Apaga el sistema </td>
                      <td>shutdown -h now </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">logout</th>
                      <td align="left">Termina la sesion </td>
                      <td> </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">halt</th>
                      <td align="left">Apaga el sistema </td>
                      <td> </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left"><p>reboot</p></th>
                      <td align="left">Reinicia el sistema </td>
                      <td> </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">init 3 </th>
                      <td align="left">Reinicia el sistema </td>
                      <td> </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">netstat</th>
                      <td align="left">Estadisticas de red </td>
                      <td>netstat -ln|grep mysql </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">netlogon</th>
                      <td align="left">Contraseña de red </td>
                      <td> </td>
                    </tr>
                    <tr>
                      <th scope="row" valign="top" align="left">kill</th>
                      <td valign="top" align="left">Mara un proceso </td>
                      <td valign="top">kill &lt;PID&gt;<br />
                        kill -9 1234 </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">who, rwho </th>
                      <td align="left">Muestra informacion de los usuarios conectado   al sistema </td>
                      <td>who</td>
                    </tr>
                    <tr>
                      <th scope="row" valign="top" align="left">sort</th>
                      <td valign="top" align="left">Ordena el contenido de un archivo. </td>
                      <td valign="top">sort passwd <br />
                        sort -t:+5 passwd<br />
                        sort -nt:+2 passwd </td>
                    </tr>
                    <tr>
                      <th scope="row" valign="top" align="left">grep</th>
                      <td valign="top" align="left">Filtra</td>
                      <td valign="top">grep patron archivo<br />
                        grep /home passwd<br />
                        grep /bin/bash passwd<br />
                        grep -n /bin/bash passwd<br />
                        grep ServerName /etc/httpd/conf/htpd.conf <br />
                        grep -v /bin/bash/passwd </td>
                    </tr>
                    <tr>
                      <th scope="row" valign="top" align="left">cut</th>
                      <td valign="top" align="left">Corta</td>
                      <td valign="top">cut -c1-9 passwd<br />
                        cut -d:f1,3,7 passwd<br />
                        cut -d:-f1,3,7 passwd </td>
                    </tr>
                  </tbody>
                </table></th>
              </tr>
              <tr>
                <th scope="row" align="left" height="33">II.- COMANDOS PARA EL   MANEJO DE ARCHIVOS </th>
              </tr>
              <tr>
                <th scope="row" valign="top" align="center"><table width="95%" align="center" bgcolor="#ffffff" border="1" cellpadding="4" cellspacing="0">
                  <tbody>
                    <tr>
                      <th scope="col" width="20%" bgcolor="#996600">COMANDO</th>
                      <th scope="col" width="60%" bgcolor="#996600">DESCRIPCION</th>
                      <th scope="col" width="20%" bgcolor="#996600">EJEMPLOS</th>
                    </tr>
                    <tr>
                      <th scope="row" align="left">touch</th>
                      <td align="left">Crea un archivo vacio </td>
                      <td align="left">touch prueba </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">mkdir</th>
                      <td align="left">Crea un directorio </td>
                      <td align="left">mkdir directorio </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">cp</th>
                      <td align="left">Copia un archivo de origen a un destino </td>
                      <td align="left">cp PruebaX EjemploX </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">mv</th>
                      <td align="left">Renombra o mueve un archivo </td>
                      <td align="left">mv ejemploX exampleX </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">more, less </th>
                      <td align="left">Visualiza un archivo </td>
                      <td align="left"> </td>
                    </tr>
                    <tr>
                      <th scope="row" valign="top" align="left">find</th>
                      <td valign="top" align="left">Encuentra un archivo o un   directorio </td>
                      <td valign="top" align="left">find / -name &quot;1s&quot; -print<br />
                        find -name nombre<br />
                        find /usr -name mozilla<br />
                        find /usr -name '*.so' <br />
                        find / -name '*gtk*' <br />
                        find / -size +3000k </td>
                    </tr>
                    <tr>
                      <th scope="row" valign="top" align="left">locate</th>
                      <td valign="top" align="left">Localiza un archivo </td>
                      <td valign="top" align="left">locate |s </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">which</th>
                      <td align="left">Ubica los ejecutables de un archivo </td>
                      <td align="left">which |s </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">ln</th>
                      <td align="left">Crea un enlace directorio a un archivo </td>
                      <td align="left">ln Nuevotest </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">vi, vim </th>
                      <td align="left">Editor de ficheros </td>
                      <td align="left"> </td>
                    </tr>
                    <tr>
                      <th scope="row" valign="top" align="left">rm</th>
                      <td valign="top" align="left">Borra un archivo o un directorio </td>
                      <td valign="top" align="left">rm foo.c <br />
                        rm -rf MySql5 </td>
                    </tr>
                    <tr>
                      <th scope="row" valign="top" align="left">cat</th>
                      <td valign="top" align="left">Concatena y muestra archivos </td>
                      <td valign="top" align="left">cat /etc/passwd <br />
                        cat dict1 dict2 dict </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">mount</th>
                      <td align="left">Monta archivos </td>
                      <td align="left">mount /dev/fd0 /mnt/floppy </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">umount</th>
                      <td align="left"> </td>
                      <td align="left"> </td>
                    </tr>
                  </tbody>
                </table></th>
              </tr>
              <tr>
                <th scope="row" align="left" height="42">III.- COMANDOS PAR EL   MANEJO DE USUARIOS. </th>
              </tr>
              <tr>
                <th scope="row" valign="top"><table width="95%" align="center" bgcolor="#ffffff" border="1" cellpadding="4" cellspacing="0">
                  <tbody>
                    <tr>
                      <th scope="col" width="20%" bgcolor="#996600">COMANDO</th>
                      <th scope="col" width="60%" bgcolor="#996600">DESCRIPCION</th>
                      <th scope="col" width="20%" bgcolor="#996600">EJEMPLOS</th>
                    </tr>
                    <tr>
                      <th scope="row" align="left">useradd</th>
                      <td align="left">Crea un usuario </td>
                      <td align="left">useradd user0 </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">passwd</th>
                      <td align="left">Crea una contraseña para un usuario. </td>
                      <td align="left">passwd user0 </td>
                    </tr>
                    <tr>
                      <th scope="row" align="left">groupadd</th>
                      <td align="left">Crea un grupo de usuarios. </td>
                      <td align="left">groupadd usuarios </td>
                    </tr>
                  </tbody>
                </table>
                </th>
              </tr>
            </table>
            </p>
            <br/>
        </div>
    </td>
  </tr>
</table>
<?php require('pie.php');?>
</body>
</html>
