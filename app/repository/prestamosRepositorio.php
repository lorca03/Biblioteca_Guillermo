<?php
namespace biblioteca\app\repository;
require_once 'database/queryBuilder.php';

class PrestamosRepositorio extends QueryBuilder
{
    public function __construct($tabla = 'prestamos', $entidad = 'Prestamo', $argumentos = ['Num_pedido', 'Cod_libro', 'Cod_usuario', 'Fecha_salida', 'Fecha_maxima_dev', 'Fecha_devolucion', 'Devuelto'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
    public function save($entidadObjeto)
    {
        $sql = "SELECT * from ". $this->tabla ." where cod_usuario=". $entidadObjeto->getCod_usuario() ." and devuelto='false'";
        $pdoStatment = $this->conexion->prepare($sql);
        if ($pdoStatment->execute() === false) {
            throw new Database_exception('No se ha podido ejecutar la query solicitada');
        }
        $array=$pdoStatment->fetchAll();
        $json=json_decode(file_get_contents('storage/configBiblio.json'));
        if (count($array)>=$json->{'maxPrestamos'}){
            throw new Database_exception('No puedes pedir mas libros. Ya tienes 5 prestamos sin devolver');
        }else{
            parent::save($entidadObjeto);
        }
    }

    public function librosUsuario($usuario)
    {
        $nombre = substr($usuario,0,strpos($usuario,' '));
        $apellidos = substr($usuario,strpos($usuario,' ')+1);
        $sql = "select * from prestamos where cod_usuario=(select cod_usuario 
                                                                from usuarios 
                                                                where Nombre='" . $nombre . "' and
                                                                Apellidos='" . $apellidos . "')";
        return parent::execute($sql, 'objetos');
    }
}
