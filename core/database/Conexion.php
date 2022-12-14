<?php
namespace biblioteca\core\database;
use biblioteca\app\exeptions\AppException;
use biblioteca\app\exeptions\Database_exception;
use biblioteca\core\App;
use PDO;
use PDOException;

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

