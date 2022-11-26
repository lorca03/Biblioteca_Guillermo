<?php
require_once 'database/IEntity.php';
class Usuario implements IEntity
{
    private $cod_usuario;
    private $nombre;
    private $apellidos;
    private $DNI;
    private $domicilio;
    private $poblacion;
    private $fecha_nacimiento;

    public function __construct($cod_usuario, $nombre, $apellidos, $DNI, $domicilio, $poblacion, $fecha_nacimiento)
    {
        $this->cod_usuario = $cod_usuario;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->DNI = $DNI;
        $this->domicilio = $domicilio;
        $this->poblacion = $poblacion;
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function toArray()
    {
        return [
            'Cod_usuario' => $this->getcod_usuario(),
            'Nombre' => $this->getnombre(),
            'Apellidos' => $this->getapellidos(),
            'DNI' => $this->getDNI(),
            'Domicilio' => $this->getdomicilio(),
            'Poblacion' => $this->getpoblacion(),
            'Fecha_nacimiento' => $this->getfecha_nacimiento()
        ];
    }
    /*Getters y settesrs */

    public function getcod_usuario()
    {
        return $this->cod_usuario;
    }
    public function setcod_usuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;

        return $this;
    }
    public function getnombre()
    {
        return $this->nombre;
    }
    public function setnombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    public function getapellidos()
    {
        return $this->apellidos;
    }
    public function setapellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }
    public function getDNI()
    {
        return $this->DNI;
    }
    public function setDNI($DNI)
    {
        $this->DNI = $DNI;

        return $this;
    }
    public function getdomicilio()
    {
        return $this->domicilio;
    }
    public function setdomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }
    public function getpoblacion()
    {
        return $this->poblacion;
    }
    public function setpoblacion($poblacion)
    {
        $this->poblacion = $poblacion;

        return $this;
    }
    public function getfecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }
    public function setfecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;

        return $this;
    }
}
