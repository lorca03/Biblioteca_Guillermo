<?php
require_once 'utils/activa.php';
require_once 'entity/colaborador.php';
require_once 'database/conexion.php';
require_once './utils/file.php';
$config = require 'app/config.php';

$enviar = !empty($_POST['enviar']) ? $_POST['enviar'] : null;
try {
    $conexion = Conexion::make($config);
    if ($enviar === 'Enviar') {
        $nombre = !empty($_POST['nameCol']) ? $_POST['nameCol'] : null;
        $descripcion = !empty($_POST['descripcionCol']) ? $_POST['descripcionCol'] : null;
        $imagen = !empty($_POST['imagen']) ? $_POST['imagen'] : null;
        $file = new File('imagen');
        $file->saveUploadFile(Colaborador::RUTA_IMAGEN);
        $consulta = 'INSERT INTO COLABOLADORES (nombre,descripcion,imagen) values (:nombre,:descripcion,:imagen)';
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(array(":nombre" => $nombre, ":descripcion" => $descripcion, ":imagen" => $file->getFilename()));
    }
} catch (Exception $ex) {
    echo "<script> alert('" . $ex->getMessage() . "')</script>";
}
require_once 'views/colaboradores.view.php';
