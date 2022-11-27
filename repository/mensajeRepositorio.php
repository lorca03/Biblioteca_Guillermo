<?php
require_once 'database/queryBuilder.php';

class MensajeRepositorio extends QueryBuilder
{
    public function __construct($tabla='mensajes',$entidad='Mensaje',$argumentos=['email','nombre','mensaje'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}