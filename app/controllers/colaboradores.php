<?php

$enviar = !empty($_POST['enviar']) ? $_POST['enviar'] : null;
try {
    $conexion = App::getConexion();
    if ($enviar === 'Enviar') {
        $file = new File('imagen');
        $file->saveUploadFile(Colaborador::RUTA_IMAGEN);

        $colaboradorReposito=new ColaboradorRepositorio();
        $colaborador=new Colaborador($_POST['nameCol'],$_POST['nameCol'],$file->getFilename());
        $colaboradorReposito->save($colaborador);
    }
} catch (Exception $ex) {
    echo "<script> alert('" . $ex->getMessage() . "')</script>";
}
require_once 'app/views/colaboradores.view.php';

$conexion = App::getConexion();
$constructor = array(
    'nombre',
    'descripcion',
    'imagen'
);
$selectColab = new ColaboradorRepositorio();
$arraycolab = $selectColab->findAll();
shuffle($arraycolab);
?>
<div class="container imagenesFooter">
    <?php
    for ($i = 0; $i < 3; $i++) {
        echo "<img src='" . $arraycolab[$i]->getUrlImagen() . "' alt='" . $arraycolab[$i]->getDescripcion() . "'>";
    } ?>

</div>
