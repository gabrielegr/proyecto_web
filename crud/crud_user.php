
<?php
require_once('conexion.php');
 
	class CrudUser{
        public function __construct(){}
        
		public function insertar($user){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO usuario (nombre,contraseña,tipo)) values(:nombre,:contraseña,:tipo)');
			$insert->bindValue('nombre',$user->getNombre());
			$insert->bindValue('contraseña',$user->getContraseña());
			$insert->bindValue('tipo',$user->getTipo());
			$insert->execute();
 
		}
 
		public function mostrar(){
			$db=Db::conectar();
			$listaUsers=[];
			$select=$db->query('SELECT nombre,tipo FROM usuario');
 
			foreach($select->fetchAll() as $user){
				$myUser= new User();
				$myUser->setNombre($user['nombre']);
				$myUser->setTipo($user['tipo']);
				$listaUsers=$myUser;
			}
			return $listaUsers;
        }
        
		public function eliminar($nombre){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM usuario WHERE nombre=:nombre');
			$eliminar->bindValue('nombre',$nombre);
			$eliminar->execute();
		}
 
		public function obtenerUser($nombre){
			$db=Db::conectar();
			$select=$db->prepare('SELECT nombre,tipo FROM usuario WHERE nombre=:nombre');
			$select->bindValue('nombre',$nombre);
			$select->execute();
			$user=$select->fetch();
			$myUser= new User();
			$myUser->setNombre($user['nombre']);
			$myUser->setTipo($user['tipo']);
			return $myUser;
        }
        
		public function actualizar($user){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE usuario SET nombre=:nombre, tipo=:tipo, contraseña=:contraseña  WHERE nombre=:nombre');
			$actualizar->bindValue('nombre',$user->getNombre());
            $actualizar->bindValue('user',$user->getTipo());
            $actualizar->bindValue('anio',$user->getContraseña());
			$actualizar->execute();
		}
	}
?>