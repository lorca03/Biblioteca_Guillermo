<?php
$repoLibros = new LibrosRepositorio();
$arrayLibros = $repoLibros->findAll();
$filastabla = '';
for ($i = 0; $i < count($arrayLibros); $i++) {
    $devueltoArray=$repoLibros->prestado($arrayLibros[$i]->getCod_libro());
    if (count($devueltoArray)==0) {
        $devuelto='true'; 
    }else{
        $devuelto=$devueltoArray[(count($devueltoArray)-1)][0];
    }
    if ($devuelto==='true') {
       $color='verde';
    } else {
        $color='rojo';
    }
    $filastabla .= "<tr>
        <th scope='row' style='color: #71c5d0;'>" . $arrayLibros[$i]->getCod_libro() . "</th>
        <td>" . $arrayLibros[$i]->getNombre_libro() . "</td>
        <td>" . $arrayLibros[$i]->getAutor() . "</td>
        <td>" . $arrayLibros[$i]->getGenero() . "</td>
        <td>" . $arrayLibros[$i]->getPais() . "</td>
        <td>" . $arrayLibros[$i]->getNum_paginas() . "</td>
        <td>" . $arrayLibros[$i]->getAno_edicion() . "</td>
        <td class=".$color.">". $devuelto  . "</td>
      </tr>";
}
$enviar = !empty($_POST['enviar']) ? $_POST['enviar'] : null;
try {
    if ($enviar === 'Enviar') {
        $repoLibro = new LibrosRepositorio();
        $repoLibro->save(new Libro('', $_POST['Nombre'], $_POST['Autor'], $_POST['Genero'], $_POST['Pais'], $_POST['Paginas'], $_POST['Año']));
        $message="Se ha guardado un nuevo libro";
        App::get('logger')->add($message);
    }
} catch (Exception $ex) {
    echo "<script> alert('" . $ex->getMessage() . "')</script>";
}
require_once 'app/views/libros.view.php';

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