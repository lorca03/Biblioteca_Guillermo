<?php
class App{
    private  static $contenedor=[];

    public static function bind($clave,$valor)
    {
        static::$contenedor[$clave]=$valor;
    }
    public static function get($clave)
    {
        if (!array_key_exists($clave,static::$contenedor)) {
            throw new AppException('No se ha encontrado la clave '.$clave.'en el contenedor');
        }
        return static::$contenedor[$clave];
    }
}