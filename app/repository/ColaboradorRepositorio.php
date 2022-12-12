<?php
namespace biblioteca\app\repository;

//require_once 'database/QueryBuilder.php';

use database\QueryBuilder;

class ColaboradorRepositorio extends QueryBuilder
{
    public function __construct($tabla='colaboradores',$entidad='Colaborador',$argumentos=['nombre','descripcion','imagen'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}
