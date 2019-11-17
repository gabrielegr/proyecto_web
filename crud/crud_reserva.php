
<?php
require_once('conexion.php');

class CrudReserva
{
    public function __construct()
    { }

    public function insertar($reserva)
    {
        $db = Db::conectar();
        $insert = $db->prepare('INSERT INTO reserva (h_inicio, h_fin,estado, descripcion, fecha, cantidad) values(:hinicio, :hfin,:estado,:descripcion, :fecha, :cantidad),');
        $insert->bindValue('hinicio', $reserva->getHinicio());
        $insert->bindValue('hfin', $reserva->getHfin());
        $insert->bindValue('estado', $reserva->getEstado());
        $insert->bindValue('descripcion', $reserva->getDescripcion());
        $insert->bindValue('fecha', $reserva->getDescripcion());
        $insert->bindValue('cantidad', $reserva->getDescripcion());
        $insert->execute();
    }

    public function mostrar()
    {
        $db = Db::conectar();
        $listareservas = [];
        $select = $db->query('SELECT * FROM reserva');

        foreach ($select->fetchAll() as $reserva) {
            $myReserva = new Reserva();
            $myReserva->setHinicio($reserva['h_inicio']);
            $myReserva->setHfin($reserva['h_fin']);
            $myReserva->setDescripcion($reserva['descripcion']);
            $myReserva->setFecha($reserva['fecha']);
            $myReserva->cantidad($reserva['cantidad']);
            $listareservas = $myReserva;
        }
        return $listareservas;
    }

    public function eliminar($nombre)
    {
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM usuario WHERE nombre=:nombre');
        $eliminar->bindValue('nombre', $nombre);
        $eliminar->execute();
    }

    public function obtenerReserva($nombre)
    {
        $db = Db::conectar();
        $select = $db->prepare('SELECT nombre,tipo FROM usuario WHERE nombre=:nombre');
        $select->bindValue('nombre', $nombre);
        $select->execute();
        $reserva = $select->fetch();
        $myReserva = new Reserva();
        $myReserva->setNombre($reserva['nombre']);
        $myReserva->setAutor($reserva['tipo']);
        return $myReserva;
    }

    public function actualizar($reserva)
    {
        $db = Db::conectar();
        $actualizar = $db->prepare('UPDATE usuario SET nombre=:nombre, tipo=:tipo, contraseña=:contraseña  WHERE nombre=:nombre');
        $actualizar->bindValue('nombre', $reserva->getNombre());
        $actualizar->bindValue('reserva', $reserva->getTipo());
        $actualizar->bindValue('anio', $reserva->getContraseña());
        $actualizar->execute();
    }
}
?>