#! /bin/sh
fecha=$(date +%Y_%m_%d_%H%M)
PASS=MARTIN3360032;

NUM=144;
#while [ $NUM -le 84 ];
#do
    bd=rrhh000$NUM;
    echo $bd;
    mysql -uroot -p$PASS<<EOF
    use $bd;
    #source /u01/trujillo/Backups/Misplanillas/2007/ubicacion.sql;
    source /u01/trujillo/Backups/Misplanillas/2007/cabecera_detalleplanilla.sql;
    #ALTER TABLE planillamaster ADD x VARCHAR( 2 ) NOT NULL AFTER nombre,ADD y VARCHAR( 2 ) NOT NULL AFTER x;
    #update planillamaster set x='01',y='00';
    #ALTER TABLE empresa ADD x VARCHAR( 2 ) NOT NULL AFTER empresa,ADD y VARCHAR( 2 ) NOT NULL AFTER x;
    #update empresa set x='01',y='01';
    #ALTER TABLE afp ADD remuneracionmax VARCHAR( 10 ) NOT NULL AFTER seguroinvalidez;
    #EOF  
    #echo "Hola a todos";
    #let NUM=$NUM+1;
#done
