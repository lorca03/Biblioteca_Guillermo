<?php
namespace biblioteca\app\repository;
use biblioteca\core\database\QueryBuilder;
use biblioteca\app\entity\Mensaje;

class MensajeRepositorio extends QueryBuilder
{
    public function __construct($tabla='mensajes',$entidad=Mensaje::class,$argumentos=['email','nombre','mensaje'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}