<?php
namespace biblioteca\app\entity;
use database\IEntity;

class Usuario implements IEntity
{
    private $Cod_usuario;
    private $Nombre;
    private $Apellidos;
    private $DNI;
    private $Domicilio;
    private $Poblacion;
    private $Fecha_nacimiento;

    public function __construct($Cod_usuario, $Nombre, $Apellidos, $DNI, $Domicilio, $Poblacion, $Fecha_nacimiento)
    {
        $this->Cod_usuario = $Cod_usuario;
        $this->Nombre = $Nombre;
        $this->Apellidos = $Apellidos;
        $this->DNI = $DNI;
        $this->Domicilio = $Domicilio;
        $this->Poblacion = $Poblacion;
        $this->Fecha_nacimiento = $Fecha_nacimiento;
    }

    public function toArray()
    {
        return [
            'Cod_usuario' => $this->getCod_usuario(),
            'Nombre' => $this->getNombre(),
            'Apellidos' => $this->getApellidos(),
            'DNI' => $this->getDNI(),
            'Domicilio' => $this->getDomicilio(),
            'Poblacion' => $this->getPoblacion(),
            'Fecha_nacimiento' => $this->getFecha_nacimiento()
        ];
    }
    /*Getters y settesrs */

    public function getCod_usuario()
    {
        return $this->Cod_usuario;
    }
    public function setCod_usuario($Cod_usuario)
    {
        $this->Cod_usuario = $Cod_usuario;

        return $this;
    }
    public function getNombre()
    {
        return $this->Nombre;
    }
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;

        return $this;
    }
    public function getApellidos()
    {
        return $this->Apellidos;
    }
    public function setApellidos($Apellidos)
    {
        $this->Apellidos = $Apellidos;

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
    public function getDomicilio()
    {
        return $this->Domicilio;
    }
    public function setDomicilio($Domicilio)
    {
        $this->Domicilio = $Domicilio;

        return $this;
    }
    public function getPoblacion()
    {
        return $this->Poblacion;
    }
    public function setPoblacion($Poblacion)
    {
        $this->Poblacion = $Poblacion;

        return $this;
    }
    public function getFecha_nacimiento()
    {
        return $this->Fecha_nacimiento;
    }
    public function setFecha_nacimiento($Fecha_nacimiento)
    {
        $this->Fecha_nacimiento = $Fecha_nacimiento;

        return $this;
    }
}
