#! /bin/sh
fecha=$(date +%Y_%m_%d_%H%M )
archivo1="cemprotech_$fecha"
archivo2="nuevotest_$fecha"
archivo3="prueba_$fecha"
echo $archivo1
echo $archivo2
echo $archivo3
cp -R /u01/apache/htdocs/cemprotech /u01/trujillo/Backups/Misprogramas/2008/cemprotech/$archivo1
cp -R /u01/apache/htdocs/nuevotest /u01/trujillo/Backups/Misprogramas/2008/nuevotest/$archivo2
cp -R /u01/apache/htdocs/prueba /u01/trujillo/Backups/Misprogramas/2008/prueba/$archivo3
chmod -R 777 /u01/trujillo/Backups/Misprogramas/2008/cemprotech/$archivo1
chmod -R 777 /u01/trujillo/Backups/Misprogramas/2008/nuevotest/$archivo2
chmod -R 777 /u01/trujillo/Backups/Misprogramas/2008/prueba/$archivo3
