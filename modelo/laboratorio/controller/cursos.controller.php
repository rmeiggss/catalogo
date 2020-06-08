<?php 
require_once 'model/CLCursos.php';
session_start();

class CursosController
{
    private $modelcursos;
    private $hoy;

    function __construct()
    {
        date_default_timezone_set('America/Lima');
        $this->hoy = date("Y-m-d h:i:s");
        $this->modelcursos = new Cursos();
    }

    public function Index(){
        include_once 'views/cursos.php';
    }

    public function RegistrarCurso(){
        $datacursos = new Cursos();
        $datacursos->Nombre_Curso = $_POST['nomcurso'];
        $datacursos->Descripcion_Curso = $_POST['descurso'];
        $datacursos->Fecha_Inicio_Dictado = $_POST['fechacurso'];
        $datacursos->Estado_Curso = $_POST['estadocurso'];
        $datacursos->Descuento_Curso = $_POST['descuentoscurso'];
        $datacursos->Costo_del_Curso = $_POST['costocurso'];
        $resultado = $this->modelcursos->Registrar($datacursos);
        echo json_encode($resultado);
    }

    public function EliminarCurso(){
        $datacursos = new Cursos();
        $datacursos->id_curso = $_POST['id_curso'];
        $resultado = $this->modelcursos->Eliminar($datacursos);
        echo json_encode($resultado);
    }

    public function ObtenerCurso(){
        $datacursos = new Cursos();
        $datacursos->id_curso = $_POST['id_curso'];
        $resultado = $this->modelcursos->ObtenerCurso($datacursos);
        echo json_encode($resultado);
    }

    public function EditarCurso(){
        $datacursos = new Cursos();
        $datacursos->nombre_curso = $_POST['nomcurso-edit'];
        $datacursos->descripcion_curso = $_POST['descurso-edit'];
        $datacursos->fecha_inicio = $_POST['fechacurso-edit'];
        $datacursos->Estado_Curso = $_POST['estadocurso-edit'];
        $datacursos->Descuento_curso = $_POST['descuentoscurso-edit'];
        $datacursos->costo_curso = $_POST['costocurso-edit'];
        $datacursos->id_curso = $_POST['codcurso-edit'];
        $resultado = $this->modelcursos->Editar($datacursos);
        echo json_encode($resultado);
    }
}
 ?>
