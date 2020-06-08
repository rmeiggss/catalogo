<?php
include_once 'CLConexion.php';
class Usuarios
{
    private $con;
    public $user_usuario;
    public $pass_usuario;

    function __construct()
    {
        $this->con = Conexion::Conectar();
    }

    public function AccesoUsuarios(Usuarios $users){
        try {
            $sql = "select * from usuarios where user_usuario=? and pass_usuario=?";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam(1, $users->user_usuario, PDO::PARAM_STR);
            $stmt->bindParam(2, $users->pass_usuario, PDO::PARAM_STR);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            return $resultado;	
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
?>