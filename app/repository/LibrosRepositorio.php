<?php
namespace biblioteca\app\repository;

use database\QueryBuilder;

class LibrosRepositorio extends QueryBuilder
{
    public function __construct($tabla='libros',$entidad='Libro',$argumentos=['Cod_libro','Nombre_libro','Autor','Genero','Pais','Num_paginas','Ano_edicion'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
    public function prestado($libro)
    {
            $sql = 'select devuelto from prestamos where cod_libro='.$libro;
            return parent::execute($sql,'array');
    }
}