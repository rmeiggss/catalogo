<?php 
/**
* 
*/
require_once 'model/CLEncuesta.php';
require_once 'libs/fpdf.php';

class EncuestaController
{
	private $modelencuesta;
	private $hoy;
	
	function __construct()
	{
		date_default_timezone_set('America/Lima');
		$this->hoy = date("Y-m-d h:i:s");
		$this->modelresultado = new Encuesta();
	}

	public function Index(){
		include_once 'views/Encuesta.php';
	}

	public function salida(){
		include_once 'views/Salida.php';
	}



	public function RegistrarEncuesta(){
		
		$dataencuesta = new Encuesta();
		//$marchivo->nombre_arch = $_REQUEST['nom_archivo'];
		$dataencuesta->Nombre = $_POST['nombre'];
		$dataencuesta->Descripcion_Cargo = $_POST['cargo'];
		$dataencuesta->Pregunta1 = $_POST['preg1'];
		$dataencuesta->Pregunta2 = $_POST['preg2'];
		$dataencuesta->Pregunta3 = $_POST['preg3'];
		$dataencuesta->Pregunta4 = $_POST['preg4'];
		$dataencuesta->Pregunta5 = $_POST['preg5'];
		$dataencuesta->Pregunta6 = $_POST['preg6'];
		$dataencuesta->Pregunta7 = $_POST['preg7'];
		$dataencuesta->Pregunta8 = $_POST['preg8'];
		$dataencuesta->Pregunta9 = $_POST['preg9'];
		$dataencuesta->Pregunta10 = $_POST['preg10'];
		$dataencuesta->Pregunta11 = $_POST['preg11'];
		$dataencuesta->Pregunta12 = $_POST['preg12'];
		$dataencuesta->Pregunta13 = $_POST['preg13'];
		$dataencuesta->Pregunta14 = $_POST['preg14'];
		$dataencuesta->Pregunta15 = $_POST['preg15'];
		$dataencuesta->Pregunta16 = $_POST['preg16'];
		$dataencuesta->Pregunta17 = $_POST['preg17'];
		$dataencuesta->Pregunta18 = $_POST['preg18'];
		$dataencuesta->Pregunta19 = $_POST['preg19'];
		$dataencuesta->Pregunta20 = $_POST['preg20'];
		$dataencuesta->Pregunta21 = $_POST['preg21'];
		$dataencuesta->Pregunta22 = $_POST['preg22'];
		$dataencuesta->Pregunta23 = $_POST['preg23'];
		$dataencuesta->Pregunta24 = $_POST['preg24'];
		$dataencuesta->Pregunta25 = $_POST['preg25'];
		$dataencuesta->Pregunta26 = $_POST['preg26'];
		$dataencuesta->Pregunta27 = $_POST['preg27'];
		$dataencuesta->Pregunta28 = $_POST['preg28'];
		$dataencuesta->Pregunta29 = $_POST['preg29'];

		$this->modelencuesta->Registrar($dataencuesta);
		echo "Registrado Correctamente";
	}

	public function ImprimirReporte(){
		$dataamc = new Encuesta();
		$dataamc->ID_Encuesta = $_POST["data-id"];
		$resultado = json_decode($this->modelresultado->ObtenerEncuesta($dataamc));
		$pdf = new Fpdf();
		$pdf->AddPage("P","","A4");
		$pdf->SetMargins(30,25,30);
		$pdf->SetFont("Arial","B",16);
		$pdf->Cell(0,30,"RESULTADOS DE LA ENCUESTA",0,1,"C");
		$pdf->SetFont("Arial","",12);
		$pdf->Cell(0,10,"Nombre del Encuestado: ".$resultado->Nombre,0,1);
		$pdf->Cell(0,10,"Descripcion del Cargo: ".$resultado->Descripcion_Cargo,0,1);
		$pdf->Cell(0,10,"Pregunta 1: ".$resultado->Pregunta1,0,1);
		//$pdf->Cell(0,10,"Correo Electronico: ".$resultado->correoe_alumno,0,1);
		//$pdf->Cell(0,10,"Celular: ".$resultado->celular_alumno,0,1);
		//$pdf->Cell(0,10,"DNI: ".$resultado->dni_alumno,0,1);
		//$pdf->SetFont("Arial","UB",16);
		//$pdf->Cell(0,15,"CURSO",0,1,"L");	
		//$pdf->SetFont("Arial","",12);	
		//$pdf->Cell(60,10,"Nombre Curso",1,0,"C");
		//$pdf->Cell(35,10,"F.Inicio",1,0,"C");
		//$pdf->Cell(35,10,"F.Fin",1,0,"C");
		//$pdf->Cell(30,10,"Nota Final",1,1,"C");
		//$pdf->Cell(60,10,$resultado->nombre_curso,1,0,"L");
		//$pdf->Cell(35,10,$resultado->fecha_inicio_matricula,1,0,"C");
		//$pdf->Cell(35,10,$resultado->fecha_fin_matricula,1,0,"C");
		//$pdf->Cell(30,10,$resultado->nota_curso,1,1,"R");
		$pdf->Output();
	}

	public function ListarEncuestas(){
		$modelencuesta = $this->modelresultado;
		include_once 'views/resultado.php';
	}
}
 ?>
