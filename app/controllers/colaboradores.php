<?php
require_once 'utils/activa.php';
require_once 'entity/colaborador.php';
require_once 'repository/colaboradorRepositorio.php';
require_once 'database/queryBuilder.php';
require_once 'core/app.php';
require_once './utils/file.php';
$config = require_once 'app/config.php';
App::bind('config', $config);

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
