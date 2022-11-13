<?php
require_once 'utils/activa.php';
require_once 'entity/colaborador.php';
require_once 'assets/file/file.php';
$enviar = !empty($_POST['enviar']) ? $_POST['enviar'] : null;
if ($enviar === 'Enviar') {
    $nombre = !empty($_POST['nameCol']) ? $_POST['nameCol'] : null;
    $descripcion = !empty($_POST['descripcionCol']) ? $_POST['descripcionCol'] : null;
    $imagen = !empty($_POST['imagen']) ? $_POST['imagen'] : null;
    $file=new File('imagen');
    $colaborador = new Colaborador($nombre, $descripcion, $imagen);
    $file->saveUploadFile($colaborador->getUrlImagen());
}

require_once 'views/colaboradores.view.php';
