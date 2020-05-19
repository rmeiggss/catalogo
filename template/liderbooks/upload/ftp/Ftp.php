<?php
class Ftp{
	private $_path;
	private $_dir;
	private $_arrDir = array();
	private $_arrElem = array();
	private $_arrPath = array();
	public function __construct($ruta,$estilo){
		$this->_path   = $ruta;
		$this->_dir    = dir($ruta);	
		$this->_estilo = $estilo;
		$this->_arrPath=explode("/",$ruta);
		$this->_cadPath=$this->_arrPath[0];
		for($i=1;$i<count($this->_arrPath);$i++){
			$this->_cadPath=$this->_cadPath."/".$this->_arrPath[$i];
		}		
		//echo $this->_cadPath;
	}
	
	public function abrir_conexion(){
		return $this->_dir->read();
	}
	
	public function cerrar_conexion(){
		$this->_dir->close();
	}
	
	public function leer_directorio(){
		while($elemento=$this->abrir_conexion()){
			if(is_dir($this->_path."/".$elemento) && $elemento!="." && $elemento!=".."){
				$this->_arrDir[]=$elemento;
			}
			elseif($elemento!="." && $elemento!=".."){
				$arrel=explode('.',$elemento);
				$this->_arrElem[]=$elemento;
				$indice2[]=$arrel[1];
			}
		}
		$this->cerrar_conexion();
		if($this->_arrDir!='')	  sort($this->_arrDir);
		if($this->_arrElem!='')   {array_multisort($indice2,$this->_arrElem);};
		$resultado = array('0'=>$this->_arrDir,'1'=>$this->_arrElem);
		return $resultado;
	}
	
	public function mostrar_directorio(){
		$matriz=$this->leer_directorio();
		$tablaHTML="<table style='width:100%'>";
		$tablaHTML.="<tr height='30px' backgroundcolor='#A9A9F5'>";
		$tablaHTML.="<td align='center' width='15'>Todos</td>";		
		$tablaHTML.="<td align='center'>Nombres</td>";		
		$tablaHTML.="<td align='center'>Tipo</td>";		
		$tablaHTML.="<td align='center'>Tamaño</td>";		
		$tablaHTML.="<td align='center'>Acciones</td>";		
		$tablaHTML.="</tr>";	
		$tablaHTML.="<tr>";
		$tablaHTML.="<td align='center'><input type='checkbox' id='chk' name='chk'></td>";
		$tablaHTML.="<td align='left'><a href='#' onclick=\"subir_directorio('$this->_cadPath');\">..</a></td>";
		$tablaHTML.="<td align='center' class='".$this->_estilo."'></td>";
		$tablaHTML.="<td align='right' class='".$this->_estilo."'></td>";
		$tablaHTML.="<td align='center' class='".$this->_estilo."'></td>";
		$tablaHTML.="</tr>";		
		$i=1;
		
		/*$directorio=dir($this->_cadPath);
		while(($file=$directorio->read())!="false"){
			echo $file."<br>";
		}
		$directorio->close();
		*/
		foreach($matriz as $indice=>$valor){
			foreach($valor as $ind=>$val){
				$background=(($i%2)==0 ? "background:#E0E0F8;":"");
				
				$arrval=explode(".",$val);
				if(is_dir($val)){
					$imagen="<img src='images/folder.jpg' border='0' width='20' height='20'/>";	
				}
				else{
					if($arrval[1]=='txt'){
						$imagen="<img src='images/archivo.gif' border='0' width='20' height='20'/>";
					}
					elseif($arrval[1]=='pdf'){
						$imagen="<img src='images/pdf.gif' border='0' width='20' height='20'/>";
					}
					elseif($arrval[1]=='doc' || $arrval[1]=='docx'){
						$imagen="<img src='images/word.jpg' border='0' width='20' height='20'/>";
					}
					elseif($arrval[1]==''){
						$imagen="<img src='images/folder.jpg' border='0' width='20' height='20'/>";				
					}
					elseif($arrval[1]=='gif' || $arrval[1]=='jpg' || $arrval[1]=='png'){
						$imagen="<img src='images/jpg.jpg' border='0' width='20' height='20'/>";
					}	
					elseif($arrval[1]=='xls' || $arrval[1]=='xlsx'){
						$imagen="<img src='images/excel.gif' border='0' width='20' height='20'/>";
					}	
					elseif($arrval[1]=='ppt' || $arrval[1]=='pptx'){
						$imagen="<img src='images/ppt.jpg' border='0' width='20' height='20'/>";
					}
					elseif($arrval[1]=='zip' || $arrval[1]=='rar'){
						$imagen="<img src='images/rar.gif' border='0' width='20' height='20'/>";
					}					
					else{
						$imagen="<img src='images/archivo.gif' border='0' width='20' height='20'/>";				
					}
				}
				$tablaHTML.="<tr style='".$background."'>";
				$tablaHTML.="<td align='center'><input type='checkbox' id='chk' name='chk'></td>";
				//if(is_dir($val)){
					$tablaHTML.="<td align='left'><a href='#' onclick=\"mostrar_directorio('$this->_cadPath','$val');\">".$imagen."<span class='".$this->_estilo."'>&nbsp;".$val."</span></a></td>";
					$tablaHTML.="<td align='center' class='".$this->_estilo."'></td>";
				//}
				/*else{
					$tablaHTML.="<td align='left'><a href='download.php?file=".$val."'>".$imagen."<span class='".$this->_estilo."'>&nbsp;".$val."</span></a></td>";
					$tablaHTML.="<td align='center' class='".$this->_estilo."'>".$arrval[1]."</td>";
				}*/
				
				$tablaHTML.="<td align='right' class='".$this->_estilo."'>".round((filesize($val)/1024),2)."</td>";
				$tablaHTML.="<td align='center' class='".$this->_estilo."'><a href='#' onclick=\"eliminar('$val')\">Eliminar</a></td>";
				$tablaHTML.="</tr>";	
				$i++;				
			}
		}
		$tablaHTML.="</table>";
		return $tablaHTML;
	}
	
	public function crear_directorio($dir){
		$directorio=$this->_path."/".$dir;
		echo $directorio;
		mkdir(trim($directorio),0777);
		return true;
	}
	
	public function subir_directorio(){
		$arruta=explode("\\",$this->_path);
		for($i=0;$i<count($arruta)-1;$i++){
			if($i==0){
				$ruta_nueva=$arruta[$i];	
			}
			else{
				$ruta_nueva=$ruta_nueva."\\".$arruta[$i];
			}
		}
		return $ruta_nueva;
	}
	public function elimina_directorio($directorio){
		$arrdir = explode('.',$directorio);
		print_r($arrdir);
		if(count($arrdir)==1){
			rmdir($directorio);
		}
		return true;
	}
}
?>
