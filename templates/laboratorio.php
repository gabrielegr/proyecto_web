<?php
	class Laboratorio{
		private $numero;
        private $puestos;
 
		function __construct($numero,$puestos){

			$this->numero = $numero;
			$this->puestos = $puestos;   
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
 


	}
?>