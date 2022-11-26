<?php
require_once 'database/queryBuilder.php';

class LibrosRepositorio extends QueryBuilder
{
    public function __construct($tabla='libros',$entidad='Libro',$argumentos=['Cod_libro','Nombre_libro','Autor','Genero','Pais','Num_paginas','Año_edicion'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}