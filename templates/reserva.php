<?php
	class Reserva{

		private $fecha;
        private $hinicio;
		private $hfin;
        private $cantidad;
        private $descripcion;
		private $estado;
		private $id;
		private $frecuencia;


		
		function __construct( $fecha, $hinicio, $hfin, $cantidad, $descripcion,$usuario,$frecuencia){
			$this->id=$usuario . $fecha . $hinicio;
			$this->fecha = $fecha;   
			$this->hinicio = $hinicio;   
			$this->hfin = $hfin;   
			$this->cantidad = $cantidad;   
			$this->descripcion = $descripcion;  
			$this->frecuencia= $frecuencia; 
			$this->estado = false;   

		}

 
		public function getFecha(){
			return $this->fecha;
		}
 
		public function setFecha($fecha){
			$this->fecha = $fecha;
		}
 
		public function getHinicio(){
		return $this->hinicio;
		}
 
		public function setHinicio($hinicio){
			$this->hinicio = $hinicio;
		}

		public function getHfin(){
			return $this->hfin;
		}
 
		public function setHfin($hfin){
			$this->hfin = $hfin;
		}
		public function getCantidad(){
			return $this->cantidad;
		}
 
		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}

		public function getDescripcion(){
			return $this->descripcion;
		}
 
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}

		public function getEstado(){
			return $this->estado;
		}
 
		public function setEstado($estado){
			$this->estado = $estado;
		}

		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}	
	
		public function getFrecuencia(){
			return $this->frecuencia;
		}
 
		public function setFrecuencia($frecuencia){
			$this->frecuencia = $frecuencia;
		}	
	
	}
?>