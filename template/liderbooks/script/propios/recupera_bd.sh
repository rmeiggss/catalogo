#! /bin/sh
NUM=100;
while [ $NUM -le 144 ];
 do
    bd=rrhh000$NUM;
    origen=/u01/trujillo/Backups/Misplanillas/2007/$bd.sql;
    echo $origen;
    mysqladmin -uroot -pMARTIN3360032 create $bd;
    mysql -uroot -pMARTIN3360032 $bd < $origen;
    let NUM=$NUM+1;
done

