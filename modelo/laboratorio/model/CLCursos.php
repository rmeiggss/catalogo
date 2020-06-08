<?php 
include_once 'CLConexion.php';
class Cursos
{
    private $con;
    public $id_curso;
    public $nombre_curso;
    public $descripcion_curso;
    public $fecha_inicio;
    public $estado_curso;
    public $descuento_curso;
    public $costo_inicio;
    
    function __construct()
    {
        $this->con = Conexion::Conectar();
        //$this->con = $this->con->Conectar();
    }

    public function Listar(){
        try {
                $stmt = $this->con->prepare("SELECT * FROM curso");
                $stmt->execute();

                return $stmt->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {
                die($e->getMessage());
        }
    }
    
    public function Registrar(Cursos $cur){
        try {
            $stmt = $this->con->prepare("INSERT INTO curso(Nombre_Curso,Descripcion_Curso,Fecha_Inicio_Dictado,Estado_Curso,Descuento_Curso,Costo_del_Curso) values (?,?,?,?,?,?)");
            $resultado = $stmt->execute(array($cur->Nombre_Curso,$cur->Descripcion_Curso,$cur->Fecha_Inicio_Dictado,$cur->Estado_Curso,$cur->Descuento_Curso,$cur->Costo_del_Curso));
            return $resultado;

        } catch (Exception $e) {
                die($e->getMessage());
        }
    }

    public function Editar(Cursos $cur){
        try {
            $sql  = "UPDATE curso SET Nombre_Curso=?,Descripcion_Curso=?,Fecha_Inicio_Dictado=?,Estado_Curso=?,Descuento_Curso=?,Costo_del_Curso=? where ID_Curso=?"; 
            $stmt = $this->con->prepare($sql);
            $resultado = $stmt->execute(array($cur->nombre_curso,$cur->descripcion_curso,$cur->fecha_inicio,$cur->Estado_Curso,$cur->Descuento_curso,$cur->costo_curso,$cur->id_curso));
            return $resultado;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar(Cursos $cur){
        try {
            $stmt = $this->con->prepare("DELETE FROM curso where id_curso = ?");
            return $stmt->execute(array($cur->id_curso));

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerCurso(Cursos $cur){
        try {
            $stmt = $this->con->prepare("SELECT * FROM curso where id_curso = ?");
            $stmt->execute(array($cur->id_curso));
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
 ?>