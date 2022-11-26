<?php

$usuarios=new UsuarioRepositorio();
$libros=new LibrosRepositorio();
$prestamos=new PrestamosRepositorio();
$mensajes=new MensajeRepositorio();
$colaboradores=new ColaboradorRepositorio();
$totales=[count($usuarios->findAll()),count($libros->findAll()),count($prestamos->findAll()),count($mensajes->findAll()),count($colaboradores->findAll())];


require_once 'app/views/index.view.php';

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