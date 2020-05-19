<?php
class Combo{
    private $arrayCombo;
    private $optionsHTML;
    public function __construct($_arrayCombo=array()){
        $this->arrayCombo = empty($_arrayCombo)?array():$_arrayCombo;
        $this->arrayCombo = is_array($this->arrayCombo)?$this->arrayCombo:array();
    }
    public function getArrayCombo(){
        return $this->arrayCombo;
    }
    public function setArrayCombo($_arrayCombo){
       $arrayCombo = empty($_arrayCombo)?array():$_arrayCombo;
    }
    public function getOptionsHTML($indSel='',$valorDefault=''){
        $_optionsHTML = "";
        $valorDefault=empty($valorDefault)?'Seleccionar':$valorDefault;
        $_optionsHTML = $valorDefault=='null' || $valorDefault==null?"":"<option value=\"\">$valorDefault</option>";
        foreach ($this->arrayCombo as $indice => $valor){
                $selected = $indSel == $indice?"selected='selected'":"";
                $_optionsHTML.= "\t"."<option value='$indice' $selected>".$valor."</option>"."\n";
        }
        $this->optionsHTML = $_optionsHTML;
        return $this->optionsHTML;
    }
    public function getSelecccionHTML($option,$identificador,$estilo,$evento,$funcion,$ancho=''){
        $eventos='';
        $valor=!empty($option)?1:0;
        if($valor==1){
                $identificador=!empty($identificador)?"id='".$identificador."'":"";
                $estilo=!empty($estilo)?"class='".$estilo."'":"";
                $ancho=!empty($ancho)?"style='width:".$ancho."'":"";
                $cadenaEvento=!empty($evento)?1:0;
                if($cadenaEvento==1){
                        $evento=split(',',$evento);
                        foreach ($evento as $indice => $valor){
                                $eventos.=$valor.'="'.$funcion.'" ';
                        }
                }
        $html = "<select $identificador $estilo $eventos $ancho >".$option."</select>";
        }
        else	$html=$option;
        return $html;
    }
}
?>
