<?php
/**
* 
*/
class Conexion
{
	
	
	function __construct()
	{
		
	}

	public static function Conectar()
	{
		$host="localhost";
		$db="encuesta";
		$user="root";
		$pass="";

		try {
			$con = new PDO("mysql:host=".$host."; dbname=".$db,$user,$pass);
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $con;
			
		} catch (PDOException $e) {

			print "Error " . $e->getMessage().".";
			die();
			
		}
	}
}
?>