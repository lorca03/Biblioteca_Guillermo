<?php
use biblioteca\app\repository\ColaboradorRepositorio;
use biblioteca\app\repository\LibrosRepositorio;
use biblioteca\app\repository\MensajeRepositorio;
use biblioteca\app\repository\PrestamosRepositorio;
use biblioteca\app\repository\UsuarioRepositorio;
use biblioteca\core\App;

$usuarios=App::getRepository(UsuarioRepositorio::class);
$libros=App::getRepository(LibrosRepositorio::class);
$prestamos=App::getRepository(PrestamosRepositorio::class);
$mensajes=App::getRepository(MensajeRepositorio::class);
$colaboradores=App::getRepository(ColaboradorRepositorio::class);
$totales=[count($usuarios->findAll()),count($libros->findAll()),count($prestamos->findAll()),count($mensajes->findAll()),count($colaboradores->findAll())];


require_once '../app/views/index.view.php';

$selectColab = App::getRepository(ColaboradorRepositorio::class);
$arraycolab = $selectColab->findAll();
shuffle($arraycolab);
?>
<div class="container imagenesFooter">
    <?php
    for ($i = 0; $i < 3; $i++) {
        echo "<img src='" . $arraycolab[$i]->getUrlImagen() . "' alt='" . $arraycolab[$i]->getDescripcion() . "'>";
    } ?>

</div>