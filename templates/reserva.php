<?php
	class Reserva{
		private $id;
		private $usuario;
		private $fecha;
        private $h_inicio;
        private $h_fin;
        private $cantidad;
        private $descripcion;
        private $estado;
 
		function __construct(){}
 
		public function getNombre(){
		return $this->nombre;
		}
 
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
 
		public function getAutor(){
			return $this->autor;
		}
 
		public function setAutor($autor){
			$this->autor = $autor;
		}
 
		public function getAnio_edicion(){
		return $this->anio_edicion;
		}
 
		public function setAnio_edicion($anio_edicion){
			$this->anio_edicion = $anio_edicion;
		}
		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}
	}
?>