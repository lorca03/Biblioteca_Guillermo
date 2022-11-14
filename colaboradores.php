<?php
require_once 'utils/activa.php';
require_once 'entity/colaborador.php';
require_once 'database/conexion.php';
require_once './utils/file.php';

$enviar = !empty($_POST['enviar']) ? $_POST['enviar'] : null;
if ($enviar === 'Enviar') {
    try {
        $conexion=Conexion::make();
        $nombre = !empty($_POST['nameCol']) ? $_POST['nameCol'] : null;
        $descripcion = !empty($_POST['descripcionCol']) ? $_POST['descripcionCol'] : null;
        $imagen = !empty($_POST['imagen']) ? $_POST['imagen'] : null;
        $file=new File('imagen');
        $consulta='INSERT INTO COLABOLADORES (nombre,descripcion,imagen) VALUES (:nombre,:descripcion,:imagen)';
        $resultado=$conexion->prepare($consulta);
        $resultado->execute(array(":nombre"=>$nombre,":descripcion"=>$descripcion,":imagen"=>$file->getFilename()));
        
        $constructor= array('nombre','descripcion','imagen');
        $consulta2='SELECT * FROM COLABOLADORES';
        $resultado2=$conexion->prepare($consulta2);
        $resultado2->execute();
        $arraycolab=$resultado2->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Colaborador', $constructor);
        foreach ($arraycolab as  $value) {
            echo "<h1>".$value->getNombre()."</h1>";
        }

        
        /*$colaborador = new Colaborador($nombre, $descripcion, $imagen);
        $file->saveUploadFile($colaborador->getUrlImagen());*/
    } catch (Exception $ex) {
        echo "<script> alert('".$ex->getMessage()."')</script>";
    }
   
}

require_once 'views/colaboradores.view.php';
