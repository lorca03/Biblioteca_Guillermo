<?php
namespace biblioteca\app\repository;
require_once 'database/QueryBuilder.php';

class MensajeRepositorio extends QueryBuilder
{
    public function __construct($tabla='mensajes',$entidad='Mensaje',$argumentos=['email','nombre','mensaje'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}