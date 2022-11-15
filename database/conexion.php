<?php
  
class Conexion{
    public static function make($config){ 
        try{
            $config=$config['database'];
            $conexion = new PDO($config['connection'].';dbname='.$config['name'],
            $config['username'],
            $config['password'],
            $config['opciones']);
        }
        catch (PDOException $PDOExcepetion){ 
            die($PDOExcepetion->getMessage());
        }

        return $conexion;
    }
}

