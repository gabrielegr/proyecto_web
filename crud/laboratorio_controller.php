
<?php

require_once('crud_laboratorio.php');
require_once('../templates/laboratorio.php');
 
$crud= new CrudLaboratorio();
$laboratorio= new laboratorio();
	if (isset($_POST['insertar'])) {
        $laboratorio->setNumero($_POST['numero']);
        $laboratorio->setPuestos($_POST['puestos']);
		$crud->insertar($laboratorio);
        header('Location: ../index.php');
        
	}elseif(isset($_POST['actualizar'])){
		$laboratorio->setNumero($_POST['numero']);
        $laboratorio->setPuestos($_POST['puestos']);
		$crud->actualizar($laboratorio);
        header('Location: ../index.php');
        
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['numero']);
		header('Location: ../index.php');		

        
	}elseif($_GET['accion']=='a'){
		header('Location: ../templates/actualizar.php');
	}
?>