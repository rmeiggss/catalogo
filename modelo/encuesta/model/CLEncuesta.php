<?php 
/**
* 
*/
include_once 'CLConexion.php';
class Encuesta
{
	private $con;

	public $Nombre;
	public $Descripcion_Cargo;
	public $Pregunta1;
	public $Pregunta2;
	public $Pregunta3;
	public $Pregunta4;
	public $Pregunta5;
	public $Pregunta6;
	public $Pregunta7;
	public $Pregunta8;
	public $Pregunta9;
	public $Pregunta10;
	public $Pregunta11;
	public $Pregunta12;
	public $Pregunta13;
	public $Pregunta14;
	public $Pregunta15;
	public $Pregunta16;
	public $Pregunta17;
	public $Pregunta18;
	public $Pregunta19;
	public $Pregunta20;
	public $Pregunta21;
	public $Pregunta22;
	public $Pregunta23;
	public $Pregunta24;
	public $Pregunta25;
	public $Pregunta26;
	public $Pregunta27;
	public $Pregunta28;
	public $Pregunta29;
	
	
	function __construct()
	{
		$this->con = Conexion::Conectar();
		//$this->con = $this->con->Conectar();
	}

	public function Listar(){

        //
        try {
                $stmt = $this->con->prepare("SELECT * FROM encuesta");
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {
                die($e->getMessage());
        }
    }

	public function Registrar(Encuesta $enc){
		try {
			$stmt = $this->con->prepare("INSERT INTO encuesta(Nombre,Descripcion_Cargo,Pregunta1,Pregunta2,Pregunta3,Pregunta4,Pregunta5,Pregunta6,Pregunta7,Pregunta8,Pregunta9,Pregunta10,Pregunta11,Pregunta12,Pregunta13,Pregunta14,Pregunta15,Pregunta16,Pregunta17,Pregunta18,Pregunta19,Pregunta20,Pregunta21,Pregunta22,Pregunta23,Pregunta24,Pregunta25,Pregunta26,Pregunta27,Pregunta28,Pregunta29) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->execute(array($enc->Nombre,$enc->Descripcion_Cargo,$enc->Pregunta1,$enc->Pregunta2,$enc->Pregunta3,$enc->Pregunta4,$enc->Pregunta5,$enc->Pregunta6,$enc->Pregunta7,$enc->Pregunta8,$enc->Pregunta9,$enc->Pregunta10,$enc->Pregunta11,$enc->Pregunta12,$enc->Pregunta13,$enc->Pregunta14,$enc->Pregunta15,$enc->Pregunta16,$enc->Pregunta17,$enc->Pregunta18,$enc->Pregunta19,$enc->Pregunta20,$enc->Pregunta21,$enc->Pregunta22,$enc->Pregunta23,$enc->Pregunta24,$enc->Pregunta25,$enc->Pregunta26,$enc->Pregunta27,$enc->Pregunta28,$enc->Pregunta29));
			
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

		public function ObtenerEncuesta(Encuesta $encuesta){
		try{
			$stmt = $this->con->prepare("SELECT * FROM encuesta where ID_Encuesta = ?");
			$stmt->execute(array($encuesta->ID_Encuesta));
			return json_encode($stmt->fetch(PDO::FETCH_OBJ));
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
}
 ?>