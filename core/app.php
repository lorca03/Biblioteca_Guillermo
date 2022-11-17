<?php
require_once 'database/conexion.php';
require_once 'exeptions/appException.php';
class App{
    private  static $contenedor=[];

    public static function bind($clave,$valor)
    {
        static::$contenedor[$clave]=$valor;
    }
    public static function get($clave)
    {
        if (!array_key_exists($clave,static::$contenedor)) {
            throw new AppException('No se ha encontrado la clave '.$clave.' en el contenedor');
        }
        return static::$contenedor[$clave];
    }
    public static function getConexion()
    {
        if (!array_key_exists('conexion',static::$contenedor)) {
            static::$contenedor['conexion']=Conexion::make();
        }
        return static::$contenedor['conexion'];
    }
}