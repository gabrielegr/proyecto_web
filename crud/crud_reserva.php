
<?php
require_once('conexion.php');

class CrudReserva
{
    public function __construct()
    { }

    public function insertar($reserva)
    {
        $db = Db::conectar();
        $insert = $db->prepare('INSERT INTO reserva (id,h_inicio, h_fin,estado, descripcion, fecha, cantidad,frecuencia) values(:id,:hinicio, :hfin,:estado,:descripcion, :fecha, :cantidad, :frecuencia),');
        $insert->bindValue('id', $reserva->getId());
        $insert->bindValue('hinicio', $reserva->getHinicio());
        $insert->bindValue('hfin', $reserva->getHfin());
        $insert->bindValue('hfin', $reserva->getId());
        $insert->bindValue('estado', $reserva->getEstado());
        $insert->bindValue('descripcion', $reserva->getDescripcion());
        $insert->bindValue('fecha', $reserva->getDescripcion());
        $insert->bindValue('cantidad', $reserva->getCantidad());
        $insert->bindValue('frecuencia', $reserva->getFrecuencia());
        $insert->execute();
    }

    public function mostrar()
    {
        $db = Db::conectar();
        $listaReservas = [];
        $select = $db->query('SELECT * FROM reserva');

        foreach ($select->fetchAll() as $reserva) {
            $myReserva = new Reserva();
            $myReserva->setId($reserva['id']);
            $myReserva->setHinicio($reserva['h_inicio']);
            $myReserva->setHfin($reserva['h_fin']);
            $myReserva->setDescripcion($reserva['descripcion']);
            $myReserva->setEstado($reserva['estado']);
            $myReserva->setFecha($reserva['fecha']);
            $myReserva->setCantidad($reserva['cantidad']);
            $myReserva->setFrecuencia($reserva['frecuencia']);
            $listareservas = $myReserva;
        }
        return $listaReservas;
    }

    public function eliminar($id)
    {
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM reserva WHERE id=:id');
        $eliminar->bindValue('id', $id);
        $eliminar->execute();
    }

    public function obtenerReserva($id)
    {
        $db = Db::conectar();
        $select = $db->prepare('SELECT * FROM reserva WHERE id=:id');
        $select->bindValue('id', $id);
        $select->execute();
        $reserva = $select->fetch();
        $myReserva = new Reserva();
        $myReserva->setId($reserva['id']);
        $myReserva->setHinicio($reserva['h_inicio']);
        $myReserva->setHfin($reserva['h_fin']);
        $myReserva->setDescripcion($reserva['descripcion']);
        $myReserva->setEstado($reserva['estado']);
        $myReserva->setFecha($reserva['fecha']);
        $myReserva->cantidad($reserva['cantidad']);
        $myReserva->frecuencia($reserva['frecuencia']);
        return $myReserva;
    }

    public function actualizar($reserva)
    {
        $db = Db::conectar();
        $actualizar = $db->prepare('UPDATE reserva SET h_inicio=:h_inicio, h_fin=:h_fin, descripcio=:descripcion, estado=:estado , fecha=:fecha ,cantidad=:cantidad, frecuencia=:frecuencia   WHERE id=:id');
        $insert->bindValue('hinicio', $reserva->getHinicio());
        $insert->bindValue('hfin', $reserva->getHfin());
        $insert->bindValue('hfin', $reserva->getId());
        $insert->bindValue('estado', $reserva->getEstado());
        $insert->bindValue('descripcion', $reserva->getDescripcion());
        $insert->bindValue('fecha', $reserva->getDescripcion());
        $insert->bindValue('cantidad', $reserva->getCantidad());
        $insert->bindValue('frecuencia', $reserva->getFrecuencia());
        $actualizar->execute();
    }
}
?>