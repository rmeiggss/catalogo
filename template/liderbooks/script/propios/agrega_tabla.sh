#! /bin/sh
NUM=81;
while [ $NUM -le 82 ];
 do
    bd=rrhh0000$NUM;
    origen=/u01/trujillo/Backups/Misplanillas/2007/ubicacion.sql;
    echo $bd;
    mysqladmin -uroot -pMARTIN3360032 create $bd;
    mysql -uroot -pMARTIN3360032 $bd < $origen;
    let NUM=$NUM+1;
done

