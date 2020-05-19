<?php
class Visitas{
    private $_path_image;
    private $_file_contador;
    private $_numero;
    private $_fp;
    private $_resultado;
    private $_tipo;
    function  __construct($path_image,$path_contador,$tipo_de_visualizacion) {
        $this->_path_image=$path_image;
        $this->_file_contador=$path_contador;
        $this->_tipo=$tipo_de_visualizacion;
        $this->_fp=fopen($path_contador,"r");
        $numero=trim(fread($this->_fp,filesize($path_contador)));
        if($numero==''){
            $this->_numero=1;
        }
        else{
            $this->_numero=$numero;
        }
    }
    function inicializar(){
        fclose($this->_fp);
        $fp2=fopen($this->_file_contador,"w");
        fputs($fp2,1);
        fclose($fp2);
        $this->mostrar();
    }
    function aumentar(){
        fclose($this->_fp);
        $fp2=fopen($this->_file_contador,"w");
        $this->_resultado=$this->_numero+1;
        fputs($fp2,$this->_resultado);
        fclose($fp2);
        $this->mostrar();
    }
    function disminuir(){

    }
    function mostrar(){
        if($this->_tipo=='1'){
            echo $this->_numero;
        }
        elseif($this->_tipo=='2'){
            $imagen="";
            for($i=0;$i<strlen($this->_numero);$i++){
                $numero_imagen=substr($this->_numero,$i,1);
                $ruta_imagen=$this->_path_image.$numero_imagen.".gif";
                $imagen.="<image alt='$numero_imagen' src='$ruta_imagen'>";
            }
            print $imagen;
        }
    }
}
?>
<?php
/*//$ruta_imagen,$ruta_archivo_contador,$tipo_de_visualizacion
$contador=new Visitas("../contador/","../contador/contador.dat",'2');
//$contador->inicializar();
$contador->aumentar();
 */
?>