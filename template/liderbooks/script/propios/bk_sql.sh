#! /bin/sh
fecha=$(date +%Y_%m_%d_%H%M)
PASS=MARTIN3360032
destino1=/u01/trujillo/Backups/Misbasesdedatos/2008/cemprotech01/cemprotech01_$fecha.sql
#destino2=/u01/trujillo/Backups/Misbasesdedatos/2008/nuevotest/nuevotest_$fecha.sql
destino3=/u01/trujillo/Backups/Misbasesdedatos/2008/prueba/prueba_$fecha.sql

mysqldump -uroot -p$PASS --opt cemprotech01 > $destino1
#mysqldump -uroot -p$PASS --opt nuevotest > $destino2
mysqldump -uroot -p$PASS --opt prueba > $destino3

