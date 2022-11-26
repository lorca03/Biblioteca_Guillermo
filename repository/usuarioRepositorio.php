<?php
require_once 'database/queryBuilder.php';

class UsuarioRepositorio extends QueryBuilder
{
    public function __construct($tabla='usuarios',$entidad='Usuario',$argumentos=['Cod_usuario','Nombre','Apellidos','DNI','Domicilio','Poblacion','Fecha_nacimiento'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}