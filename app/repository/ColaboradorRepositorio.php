<?php
namespace biblioteca\app\repository;
use biblioteca\app\entity\Colaborador;
use biblioteca\core\database\QueryBuilder;

class ColaboradorRepositorio extends QueryBuilder
{
    public function __construct($tabla='colaboradores',$entidad=Colaborador::class,$argumentos=['nombre','descripcion','imagen'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}
