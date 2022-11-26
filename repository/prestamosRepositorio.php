<?php
require_once 'database/queryBuilder.php';

class LibrosRepositorio extends QueryBuilder
{
    public function __construct($tabla='prestamos',$entidad='Prestamo',$argumentos=['Num_pedido','Cod_libro','Cod_usuario','Fecha_salida','Fecha_maxima_dev','Fecha_devolucion','Devuelto'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}