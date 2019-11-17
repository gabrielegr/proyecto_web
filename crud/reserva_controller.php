
<?php

require_once('crud_reserva.php');
require_once('../templates/reserva.php');
 
$crud= new CrudReserva();
$reserva= new Reserva();
	if (isset($_POST['insertar'])) {
        $reserva->setId($_POST['id']);
        $reserva->setHinicio($_POST['h_inicio']);
        $reserva->setHfin($_POST['h_fin']);
        $reserva->setDescripcion($_POST['descripcion']);
        $reserva->setEstado($_POST['estado']);
        $reserva->setFecha($_POST['fecha']);
        $reserva->setCantidad($_POST['cantidad']);
        $reserva->setFrecuencia($_POST['frecuencia']);
		$crud->insertar($reserva);
        header('Location: ../index.php');
        
	}elseif(isset($_POST['actualizar'])){
		$reserva->setId($_POST['id']);
        $reserva->setHinicio($_POST['h_inicio']);
        $reserva->setHfin($_POST['h_fin']);
        $reserva->setDescripcion($_POST['descripcion']);
        $reserva->setEstado($_POST['estado']);
        $reserva->setFecha($_POST['fecha']);
        $reserva->setCantidad($_POST['cantidad']);
        $reserva->setFrecuencia($_POST['frecuencia']);
		$crud->actualizar($reserva);
        header('Location: ../index.php');
        
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: ../index.php');		


	}elseif($_GET['accion']=='a'){
		header('Location: ../templates/actualizar.php');
	}
?>