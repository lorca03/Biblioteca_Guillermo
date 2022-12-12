<?php


$repoLibros = new LibrosRepositorio();
$arrayLibros = $repoLibros->findAll();
$filasLibros = '';
for ($i = 0; $i < count($arrayLibros); $i++) {
    $filasLibros .= "<option>" . $arrayLibros[$i]->getCod_libro() . ' - ' . $arrayLibros[$i]->getNombre_libro() . "</option>";
}
$repoUsuarios = new UsuarioRepositorio();
$arrayUsuarios = $repoUsuarios->findAll();
$filasUsuarios = '';
for ($i = 0; $i < count($arrayUsuarios); $i++) {
    $filasUsuarios .= "<option>" . $arrayUsuarios[$i]->getCod_usuario() . ' - '. $arrayUsuarios[$i]->getNombre() . ' ' . $arrayUsuarios[$i]->getApellidos() . "</option>";
}

$enviar = !empty($_POST['enviar']) ? $_POST['enviar'] : null;
$enviarPrestamo = !empty($_POST['enviarPrestamo']) ? $_POST['enviarPrestamo'] : null;
try {
    if ($enviar === 'Enviar') {
        $file = new File('imagen');
        $file->saveUploadFile(Colaborador::RUTA_IMAGEN);

        $colaboradorReposito = new ColaboradorRepositorio();
        $colaboradorReposito->save(new Colaborador($_POST['nameCol'], $_POST['descripcionCol'], $file->getFilename()));
    }
    if ($enviarPrestamo === 'Enviar') {
        $repoPrestamo = new PrestamosRepositorio();
        $repoPrestamo->save(new Prestamo('',substr($_POST['Libro'],0,strpos($_POST['Libro'],' ')),
        substr($_POST['usuario'],0,strpos($_POST['usuario'],' ')),
        $_POST['fechaSalida'],$_POST['fechaMaxima'],null,'false'));
    }
} catch (Exception $ex) {
    echo "<script> alert('" . $ex->getMessage() . "')</script>";
}
require_once 'app/views/administracion.view.php';

$selectColab = new ColaboradorRepositorio();
$arraycolab = $selectColab->findAll();
shuffle($arraycolab);
?>
<div class="imagenesFooter">
    <?php
    for ($i = 0; $i < 3; $i++) {
        echo "<img src='" . $arraycolab[$i]->getUrlImagen() . "' alt='" . $arraycolab[$i]->getDescripcion() . "'>";
    } ?>

</div>