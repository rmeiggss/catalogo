<?php
class Contador{
    private $_total;
    private $_por_hoja;
    private $_hojas;
    private $_pagina_seleccionada;
    private $_bloque;
    private $_archivo;
    private $_ruta_imagen;
    public function  __construct($total_registros,$registros_por_hoja,$hojas_por_bloque,$ruta_imagen) {
        $this->_ruta_imagen=$ruta_imagen;
        $this->_archivo=trim(str_replace($_SERVER['REQUEST_URI'],'', $_SERVER['PHP_SELF']));
        $this->_total=$total_registros;
        $this->_por_hoja=$registros_por_hoja;
        $this->_hojas=($total_registros%$registros_por_hoja=='0' ? ($total_registros/$registros_por_hoja):ceil($total_registros/$registros_por_hoja));
        $this->_bloque=ceil($this->_hojas/$hojas_por_bloque);
        $this->_hojas_visibles=$hojas_por_bloque;
    }
    public function mostrar($pagina_seleccionada){
    	if(isset($_REQUEST['bloque_seleccionado'])){$bloque_seleccionado=$_REQUEST['bloque_seleccionado'];}else{$bloque_seleccionado='';}
        if($pagina_seleccionada==''){$pagina_seleccionada=1;}
        if($bloque_seleccionado==''){$bloque_seleccionado=1;}
        $penultima_hoja=$this->_hojas-1;
        $penultima_hoja2=(($bloque_seleccionado-1)*$this->_hojas_visibles)+($this->_hojas%$this->_bloque)+1;
        $inicial=(($bloque_seleccionado-1)*$this->_hojas_visibles);
        $final=(($this->_hojas_visibles+$inicial > $this->_hojas) ? $this->_hojas:($this->_hojas_visibles+$inicial));
        $arrnumero="<form name='paginador' id='paginador'><span class='miclase' valign='middle'>";
        $arrnumero.="<a href='#' onclick=\"muestra_pagina('$this->_archivo',1);\">1</a>";
        $arrnumero.=(($bloque_seleccionado=='1') ? " ":" ... ");
        if($bloque_seleccionado==1){
            for($i=2;$i<=$this->_total;$i++){
                if($i<=$this->_hojas_visibles){
                    $arrnumero=$arrnumero." "."<a href='#' onclick=\"muestra_pagina('$this->_archivo',$i);\">".$i."</a>";
                }
                else{
                    break;
                }
            }
            if($final<($penultima_hoja+1)){
                $arrnumero.=(($this->_hojas==$this->_hojas_visibles) ? " ":($penultima_hoja==$penultima_hoja2 ? " ":" ... "));
                $arrnumero.="<a href='#' onclick=\"muestra_pagina('$this->_archivo',$this->_hojas);\">".$this->_hojas."</a>";
            }
        }
        else{
            for($i=$inicial;$i<=$final;$i++){
                if($i<$final){
                    $arrnumero=$arrnumero." "."<a href='#' onclick=\"muestra_pagina('$this->_archivo',$i);\">".$i."</a>";
                }
                else{
                    if($final==$penultima_hoja+1){
                        $arrnumero.="&nbsp;<a href='#' onclick=\"muestra_pagina('$this->_archivo',$this->_hojas);\">".$this->_hojas."</a>";
                    }
                    else{
                        $arrnumero.=(($this->_hojas==$this->_hojas_visibles) ? " ":($penultima_hoja==$penultima_hoja2 ? " ":" ... "));
                        $arrnumero.="<a href='#' onclick=\"muestra_pagina('$this->_archivo',$this->_hojas);\">".$this->_hojas."</a>";
                    }
                }
            }
            if($final<($penultima_hoja+1) && ($penultima_hoja==$penultima_hoja2)){
                $arrnumero.=(($this->_hojas==$this->_hojas_visibles) ? " ":($penultima_hoja==$penultima_hoja2 ? " ":" ... "));
                $arrnumero.="<a href='#' onclick=\"muestra_pagina('$this->_archivo',$this->_hojas);\">".$this->_hojas."</a>";
            }
        }
        $arrnumero.="&nbsp;&nbsp;<a href='#' onclick=\"atras('$this->_archivo',$this->_hojas_visibles);\"><image src='".$this->_ruta_imagen."atras.jpg' border='0'></a>";
        $arrnumero.="&nbsp;<a href='#' onclick=\"siguiente('$this->_archivo',$this->_hojas_visibles);\"><image src='".$this->_ruta_imagen."adelante.jpg' border='0'></a></span>";
        $arrnumero.="<input type='hidden' name='pagina_seleccionada' id='pagina_seleccionada' value='".$pagina_seleccionada."' size='5'>";
        $arrnumero.="<input type='hidden' name='bloque_seleccionado' id='bloque_seleccionado' value='".$bloque_seleccionado."' size='5'>";
        $arrnumero.="<input type='hidden' name='bloque' id='bloque' value='".$this->_bloque."' size='5'>";
        $arrnumero.="</form>";
        return $arrnumero;
    }
}
?>
<?php
/*$pagina_seleccionada=1;
$registros=50;
$registros_por_hoja=5;
$hojas_por_bloque=4;
$bloque="";
$numeros=new Contador($total_registros,$registros_por_hoja,$hojas_por_bloque,$ruta_imagen);
$cadena=$numeros->mostrar();
echo $cadena;
 */
?>

