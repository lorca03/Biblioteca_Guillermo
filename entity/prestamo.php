<?php
require_once 'database/IEntity.php';
class Prestamo implements IEntity
{
    private $Num_pedido;
    private $Cod_libro;
    private $Cod_usuario;
    private $Fecha_salida;
    private $Fecha_maxima_dev;
    private $Fecha_devolucion;
    private $Devuelto;

    public function __construct($Num_pedido, $Cod_libro, $Cod_usuario, $Fecha_salida, $Fecha_maxima_dev, $Fecha_devolucion, $Devuelto)
    {
        $this->Num_pedido = $Num_pedido;
        $this->Cod_libro = $Cod_libro;
        $this->Cod_usuario = $Cod_usuario;
        $this->Fecha_salida = $Fecha_salida;
        $this->Fecha_maxima_dev = $Fecha_maxima_dev;
        $this->Fecha_devolucion = $Fecha_devolucion;
        $this->Devuelto = $Devuelto;
    }

    public function toArray()
    {
        return [
            'Num_pedido' => $this->getNum_pedido(),
            'Cod_libro' => $this->getCod_libro(),
            'Cod_usuario' => $this->getCod_usuario(),
            'Fecha_salida' => $this->getFecha_salida(),
            'Fecha_maxima_dev' => $this->getFecha_maxima_dev(),
            'Fecha_devolucion' => $this->getFecha_devolucion(),
            'Devuelto' => $this->getDevuelto()
        ];
    }
    /*Getters y settesrs */

    public function getNum_pedido()
    {
        return $this->Num_pedido;
    }
    public function setNum_pedido($Num_pedido)
    {
        $this->Num_pedido = $Num_pedido;

        return $this;
    }
    public function getCod_libro()
    {
        return $this->Cod_libro;
    }
    public function setCod_libro($Cod_libro)
    {
        $this->Cod_libro = $Cod_libro;

        return $this;
    }
    public function getCod_usuario()
    {
        return $this->Cod_usuario;
    }
    public function setCod_usuario($Cod_usuario)
    {
        $this->Cod_usuario = $Cod_usuario;

        return $this;
    }
    public function getFecha_salida()
    {
        return $this->Fecha_salida;
    }
    public function setFecha_salida($Fecha_salida)
    {
        $this->Fecha_salida = $Fecha_salida;

        return $this;
    }
    public function getFecha_maxima_dev()
    {
        return $this->Fecha_maxima_dev;
    }
    public function setFecha_maxima_dev($Fecha_maxima_dev)
    {
        $this->Fecha_maxima_dev = $Fecha_maxima_dev;

        return $this;
    }
    public function getFecha_devolucion()
    {
        return $this->Fecha_devolucion;
    }
    public function setFecha_devolucion($Fecha_devolucion)
    {
        $this->Fecha_devolucion = $Fecha_devolucion;

        return $this;
    }
    public function getDevuelto()
    {
        return $this->Devuelto;
    }
    public function setDevuelto($Devuelto)
    {
        $this->Devuelto = $Devuelto;

        return $this;
    }
}
