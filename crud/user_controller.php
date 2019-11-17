<?php

require_once('crud_user.php');
require_once('../templates/user.php');
 
$crud= new CrudUser();
$user= new User();
	if (isset($_POST['insertar'])) {
        $user->setNombre($_POST['nombre']);
        $user->setTipo($_POST['tipo']);
        $user->setContraseña($_POST['contraseña']);
		$crud->insertar($user);
        header('Location: ../index.php');
        
	}elseif(isset($_POST['actualizar'])){
		$user->setNombre($_POST['nombre']);
        $user->setTipo($_POST['tipo']);
        $user->setContraseña($_POST['contraseña']);
		$crud->actualizar($user);
        header('Location: ../index.php');
        
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['nombre']);
		header('Location: ../index.php');		

        
	}elseif($_GET['accion']=='a'){
		header('Location: ../templates/actualizar.php');
	}
?>