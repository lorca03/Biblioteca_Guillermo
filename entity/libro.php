<?php
require_once 'database/IEntity.php';
class Libro implements IEntity
{
    private $Cod_libro;
    private $Nombre_libro;
    private $Autor;
    private $Genero;
    private $Pais;
    private $Num_paginas;
    private $Ano_edicion;

    public function __construct($Cod_libro, $Nombre_libro, $Autor, $Genero, $Pais, $Num_paginas, $Ano_edicion)
    {
        $this->Cod_libro = $Cod_libro;
        $this->Nombre_libro = $Nombre_libro;
        $this->Autor = $Autor;
        $this->Genero = $Genero;
        $this->Pais = $Pais;
        $this->Num_paginas = $Num_paginas;
        $this->Ano_edicion = $Ano_edicion;
    }

    public function toArray()
    {
        return [
            'Cod_libro' => $this->getCod_libro(),
            'Nombre_libro' => $this->getNombre_libro(),
            'Autor' => $this->getAutor(),
            'Genero' => $this->getGenero(),
            'Pais' => $this->getPais(),
            'Num_paginas' => $this->getNum_paginas(),
            'Ano_edicion' => $this->getAno_edicion()
        ];
    }
    /*Getters y settesrs */

    public function getCod_libro()
    {
        return $this->Cod_libro;
    }
    public function setCod_libro($Cod_libro)
    {
        $this->Cod_libro = $Cod_libro;

        return $this;
    }
    public function getNombre_libro()
    {
        return $this->Nombre_libro;
    }
    public function setNombre_libro($Nombre_libro)
    {
        $this->Nombre_libro = $Nombre_libro;

        return $this;
    }
    public function getAutor()
    {
        return $this->Autor;
    }
    public function setAutor($Autor)
    {
        $this->Autor = $Autor;

        return $this;
    }
    public function getGenero()
    {
        return $this->Genero;
    }
    public function setGenero($Genero)
    {
        $this->Genero = $Genero;

        return $this;
    }
    public function getPais()
    {
        return $this->Pais;
    }
    public function setPais($Pais)
    {
        $this->Pais = $Pais;

        return $this;
    }
    public function getNum_paginas()
    {
        return $this->Num_paginas;
    }
    public function setNum_paginas($Num_paginas)
    {
        $this->Num_paginas = $Num_paginas;

        return $this;
    }
    public function getAno_edicion()
    {
        return $this->Ano_edicion;
    }
    public function setAno_edicion($Ano_edicion)
    {
        $this->Ano_edicion = $Ano_edicion;

        return $this;
    }
}
