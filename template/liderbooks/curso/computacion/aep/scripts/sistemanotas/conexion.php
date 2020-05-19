<?php
function conexion(){
    $host = "localhost";
    $port = "5432";
    $user = "postgres";
    $password = "123456";
    $dbname   = "instituto";
    $esquema  = "public";
    if(!($cn=pg_connect("host=$host user=$user port=$port password=$password dbname=$dbname"))){
        echo 'Error conectandose a la base de datos';
        exit();
    }
}
conexion();
?>
