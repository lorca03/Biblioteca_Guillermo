<?php
require_once 'database/queryBuilder.php';

class ColaboradorRepositorio extends QueryBuilder
{
    public function __construct($tabla='colaboradores',$entidad='Colaborador',$argumentos=['nombre','descripcion','imagen'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}
