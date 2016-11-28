<?php
class Ordenador{
	public $marca;
	public $numRam;
public function __construct($marca,$numRam){
			
	$this->marca = $marca;
	$this->numRam = $numRam;
	
}
public function getMarca(){
	 return $this->marca;
}
public function getNumRam(){
	return $this->numRam;
}
public function setMarca($marca){
	$this->marca=$marca;
}
public function setNumRam($numRam){
	$this->numRam=$numRam;
}

}