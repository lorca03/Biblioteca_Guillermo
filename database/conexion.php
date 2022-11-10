<?php

class Conexion{
    public static function make(){ 
        try{
            $opciones = [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_PERSISTENT =>true
            ];
                $conexion = new PDO('mysql:host=localhost;dbname=pruebas','root','',$opciones);
                
        }
        
        catch (PDOException $PDOExcepetion){ 
            die($PDOExcepetion->getMessage());
        }

        return $conexion;
    }
}

Conexion::make();
