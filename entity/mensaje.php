<?php
require_once 'database/IEntity.php';
class Mensaje implements IEntity
{
    private $nombre;
    private $mensaje;
    private $email;

    public function __construct($nombre, $mensaje, $email)
    {
        $this->nombre = $nombre;
        $this->mensaje = $mensaje;
        $this->email = $email;
    }
    
    public function toArray(){
        return [
            'email'=>$this->getemail(),
            'nombre'=>$this->getNombre(),
            'mensaje'=>$this->getmensaje()
        ];
    }
    /*Getters y Setters */
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    public function getmensaje()
    {
        return $this->mensaje;
    }
    public function setmensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }
    public function getemail()
    {
        return $this->email;
    }
    public function setemail($email)
    {
        $this->email = $email;

        return $this;
    }
}
