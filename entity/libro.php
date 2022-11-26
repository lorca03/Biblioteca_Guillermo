<?php
require_once 'database/IEntity.php';
class Libro implements IEntity
{
    private $cod_libro;
    private $nombre_libro;
    private $autor;
    private $género;
    private $país_del_autor;
    private $num_paginas;
    private $año_edicion;

    public function __construct($Cod_libro, $Nombre_libro, $Autor, $Género, $País_del_autor, $Num_paginas, $Año_edicion)
    {
        $this->cod_libro = $Cod_libro;
        $this->nombre_libro = $Nombre_libro;
        $this->autor = $Autor;
        $this->género = $Género;
        $this->país_del_autor = $País_del_autor;
        $this->num_paginas = $Num_paginas;
        $this->año_edicion = $Año_edicion;
    }

    public function toArray()
    {
        return [
            'Cod_libro' => $this->getCod_libro(),
            'Nombre_libro' => $this->getNombre_libro(),
            'Autor' => $this->getAutor(),
            'Genero' => $this->getGénero(),
            'Pais' => $this->getPaís_del_autor(),
            'Num_paginas' => $this->getNum_paginas(),
            'Año_edicion' => $this->getAño_edicion()
        ];
    }
    /*Getters y settesrs */

    public function getCod_libro()
    {
        return $this->cod_libro;
    }
    public function setCod_libro($cod_libro)
    {
        $this->cod_libro = $cod_libro;

        return $this;
    }
    public function getNombre_libro()
    {
        return $this->nombre_libro;
    }
    public function setNombre_libro($nombre_libro)
    {
        $this->nombre_libro = $nombre_libro;

        return $this;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }
    public function getGénero()
    {
        return $this->género;
    }
    public function setGénero($género)
    {
        $this->género = $género;

        return $this;
    }
    public function getPaís_del_autor()
    {
        return $this->país_del_autor;
    }
    public function setPaís_del_autor($país_del_autor)
    {
        $this->país_del_autor = $país_del_autor;

        return $this;
    }
    public function getNum_paginas()
    {
        return $this->num_paginas;
    }
    public function setNum_paginas($num_paginas)
    {
        $this->num_paginas = $num_paginas;

        return $this;
    }
    public function getAño_edicion()
    {
        return $this->año_edicion;
    }
    public function setAño_edicion($año_edicion)
    {
        $this->año_edicion = $año_edicion;

        return $this;
    }
}
