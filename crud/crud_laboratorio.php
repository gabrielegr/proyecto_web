<?php
require_once('conexion.php');
 
	class CrudLaboratorio{
        public function __construct(){}
        
		public function insertar($laboratorio){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO laboratorio (numero,puestos) values(:numero,:puestos)');
			$insert->bindValue('numero',$laboratorio->getNumero());
			$insert->bindValue('puestos',$laboratorio->getPuestos());
			$insert->execute();
 
		}
 
		public function mostrar(){
			$db=Db::conectar();
			$listaLaboratorios=[];
			$select=$db->query('SELECT numero,puestos FROM laboratorio');
 
			foreach($select->fetchAll() as $laboratorio){
				$myLaboratorio= new Laboratorio();
				$myLaboratorio->setNumero($laboratorio['numero']);
				$myLaboratorio->setPuestos($laboratorio['puestos']);
				$listaLaboratorios=$myLaboratorio;
			}
			return $listaLaboratorios;
        }
        
		public function eliminar($numero){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM laboratorio WHERE numero=:numero');
			$eliminar->bindValue('numero',$numero);
			$eliminar->execute();
		}
 
		public function obtenerLaboratorio($numero){
			$db=Db::conectar();
			$select=$db->prepare('SELECT numero,puestos FROM laboratorio WHERE numero=:numero');
			$select->bindValue('numero',$numero);
			$select->execute();
			$laboratorio=$select->fetch();
			$myLaboratorio= new laboratorio();
			$myLaboratorio->setNumero($laboratorio['numero']);
            $myLaboratorio->setPuestos($laboratorio['puestos']);
			return $myLaboratorio;
        }
        
		public function actualizar($laboratorio){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE laboratorio SET numero=:numero, puestos=:puestos WHERE numero=:numero');
			$actualizar->bindValue('numero',$laboratorio->getNumero());
            $actualizar->bindValue('laboratorio',$laboratorio->getPuestos());
			$actualizar->execute();
		}
	}
?>