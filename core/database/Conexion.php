<?php
namespace database;
class Conexion{
    public static function make(){ 
        try{
            $config=App::get('config')['database'];
            $conexion = new PDO($config['connection'].';dbname='.$config['name'],
            $config['username'],
            $config['password'],
            $config['opciones']);
        }
        catch (PDOException $PDOExcepetion){ 
            throw new Database_exception('La conexion con la base de datos no se ha podido realizar');
        }

        return $conexion;
    }
}

