<?php
require_once 'database/IEntity.php';
class Prestamo implements IEntity
{
    private $num_pedido;
    private $cod_libro;
    private $cod_usuario;
    private $fecha_salida;
    private $fecha_maxima_dev;
    private $fecha_devolucion;
    private $devuelto;

    public function __construct($num_pedido, $cod_libro, $cod_usuario, $fecha_salida, $fecha_maxima_dev, $fecha_devolucion, $devuelto)
    {
        $this->num_pedido = $num_pedido;
        $this->cod_libro = $cod_libro;
        $this->cod_usuario = $cod_usuario;
        $this->fecha_salida = $fecha_salida;
        $this->fecha_maxima_dev = $fecha_maxima_dev;
        $this->fecha_devolucion = $fecha_devolucion;
        $this->devuelto = $devuelto;
    }

    public function toArray()
    {
        return [
            'Num_pedido' => $this->getnum_pedido(),
            'Cod_libro' => $this->getcod_libro(),
            'Cod_usuario' => $this->getcod_usuario(),
            'Fecha_salida' => $this->getfecha_salida(),
            'Fecha_maxima_dev' => $this->getfecha_maxima_dev(),
            'Fecha_devolucion' => $this->getfecha_devolucion(),
            'Devuelto' => $this->getdevuelto()
        ];
    }
    /*Getters y settesrs */

    public function getnum_pedido()
    {
        return $this->num_pedido;
    }
    public function setnum_pedido($num_pedido)
    {
        $this->num_pedido = $num_pedido;

        return $this;
    }
    public function getcod_libro()
    {
        return $this->cod_libro;
    }
    public function setcod_libro($cod_libro)
    {
        $this->cod_libro = $cod_libro;

        return $this;
    }
    public function getcod_usuario()
    {
        return $this->cod_usuario;
    }
    public function setcod_usuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;

        return $this;
    }
    public function getfecha_salida()
    {
        return $this->fecha_salida;
    }
    public function setfecha_salida($fecha_salida)
    {
        $this->fecha_salida = $fecha_salida;

        return $this;
    }
    public function getfecha_maxima_dev()
    {
        return $this->fecha_maxima_dev;
    }
    public function setfecha_maxima_dev($fecha_maxima_dev)
    {
        $this->fecha_maxima_dev = $fecha_maxima_dev;

        return $this;
    }
    public function getfecha_devolucion()
    {
        return $this->fecha_devolucion;
    }
    public function setfecha_devolucion($fecha_devolucion)
    {
        $this->fecha_devolucion = $fecha_devolucion;

        return $this;
    }
    public function getdevuelto()
    {
        return $this->devuelto;
    }
    public function setdevuelto($devuelto)
    {
        $this->devuelto = $devuelto;

        return $this;
    }
}
