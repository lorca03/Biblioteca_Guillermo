<?php
require_once 'database/queryBuilder.php';

class PrestamosRepositorio extends QueryBuilder
{
    public function __construct($tabla = 'prestamos', $entidad = 'Prestamo', $argumentos = ['Num_pedido', 'Cod_libro', 'Cod_usuario', 'Fecha_salida', 'Fecha_maxima_dev', 'Fecha_devolucion', 'Devuelto'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
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
