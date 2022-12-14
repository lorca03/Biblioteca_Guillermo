<?php
namespace biblioteca\app\repository;
use biblioteca\core\database\QueryBuilder;
use biblioteca\app\entity\Usuario;


class UsuarioRepositorio extends QueryBuilder
{
    public function __construct($tabla='usuarios',$entidad=Usuario::class,$argumentos=['Cod_usuario','Nombre','Apellidos','DNI','Domicilio','Poblacion','Fecha_nacimiento'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}