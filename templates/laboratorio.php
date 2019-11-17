<?php
	class Laboratorio{
		private $numero;
        private $puestos;
        private $frecuencia;
 
		function __construct($numero,$puestos,$frecuencia){

			$this->numero = $numero;
			$this->puestos = $puestos;   
			$this->frecuencia = $frecuencia;   
		}
 
		public function getNumero(){
		return $this->numero;
		}
 
		public function setNumero($numero){
			$this->numero= $numero;
		}
 
		public function getPuestos(){
			return $this->puestos;
		}
 
		public function setPuestos($puestos){
			$this->puestos= $puestos;
		}
 
		public function getFrecuencia(){
		return $this->frecuencia;
		}
 
		public function setFrecuencia($frecuencia){
			$this->frecuencia = $frecuencia;
		}

	}
?>