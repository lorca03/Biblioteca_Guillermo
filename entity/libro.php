<?php
require_once 'database/IEntity.php';
class Colaborador implements IEntity
{
    private $cod_libro;
    private $nombre_libro;
    private $autor;
    private $género;
    private $país_del_autor;
    private $num_paginas;
    private $año_edicion;

    public function __construct($Cod_libro, $Nombre_libro, $Autor, $Género,$País_del_autor,$Num_paginas, $Año_edicion)
    {
        $this->cod_libro = $Cod_libro;
        $this->nombre_libro = $Nombre_libro;
        $this->autor = $Autor;
        $this->género = $Género;
        $this->país_del_autor = $País_del_autor;
        $this->num_paginas = $Num_paginas;
        $this->año_edicion = $Año_edicion;
    }
    /*Getters y Setters */
    

    public function getUrlImagen()
    {
        return self::RUTA_IMAGEN.$this->imagen;
    }
    public function toArray(){
        return [
            'nombre'=>$this->getNombre(),
            'descripcion'=>$this->getDescripcion(),
            'imagen'=>$this->getImagen()
        ];
    }
}
