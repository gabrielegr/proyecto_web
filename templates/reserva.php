<?php
	class Reserva{

		private $usuario;
		private $fecha;
        private $hinicio;
		private $hfin;
        private $cantidad;
        private $descripcion;
        private $estado;
 
		function __construct($usuario, $fecha, $hinicio, $hfin, $cantidad, $descripcion){
			$this->usuario = $usuario;
			$this->fecha = $fecha;   
			$this->hinicio = $hinicio;   
			$this->hfin = $hfin;   
			$this->cantidad = $cantidad;   
			$this->descripcion = $descripcion;   
			$this->estado = false;   

		}
 
		public function getUsuario(){
		return $this->usuario;
		}
 
		public function setNombre($usuario){
			$this->usuario = $usuario;
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
	
	
	
	}
?>