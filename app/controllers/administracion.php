<?php
use biblioteca\app\entity\Colaborador;
use biblioteca\app\entity\Prestamo;
use biblioteca\app\repository\ColaboradorRepositorio;
use biblioteca\app\repository\LibrosRepositorio;
use biblioteca\app\repository\PrestamosRepositorio;
use biblioteca\app\repository\UsuarioRepositorio;
use biblioteca\app\utils\File;
use biblioteca\core\App;

$repoLibros = App::getRepository(LibrosRepositorio::class);
$arrayLibros = $repoLibros->findAll();
$filasLibros = '';
for ($i = 0, $iMax = count($arrayLibros); $i < $iMax; $i++) {
    $filasLibros .= "<option>" . $arrayLibros[$i]->getCod_libro() . ' - ' . $arrayLibros[$i]->getNombre_libro() . "</option>";
}
$repoUsuarios =App::getRepository(UsuarioRepositorio::class);
$arrayUsuarios = $repoUsuarios->findAll();
$filasUsuarios = '';
for ($i = 0, $iMax = count($arrayUsuarios); $i < $iMax; $i++) {
    $filasUsuarios .= "<option>" . $arrayUsuarios[$i]->getCod_usuario() . ' - '. $arrayUsuarios[$i]->getNombre() . ' ' . $arrayUsuarios[$i]->getApellidos() . "</option>";
}

$enviar = !empty($_POST['enviar']) ? $_POST['enviar'] : null;
$enviarPrestamo = !empty($_POST['enviarPrestamo']) ? $_POST['enviarPrestamo'] : null;
try {
    if ($enviar === 'Enviar') {
        $file = new File('imagen');
        $file->saveUploadFile(Colaborador::RUTA_IMAGEN);

        $colaboradorReposito = App::getRepository(ColaboradorRepositorio::class);
        $colaboradorReposito->save(new Colaborador($_POST['nameCol'], $_POST['descripcionCol'], $file->getFilename()));
    }
    if ($enviarPrestamo === 'Enviar') {
        $repoPrestamo = App::getRepository(PrestamosRepositorio::class);
        /*$repoPrestamo->save(new Prestamo('',substr($_POST['Libro'],0,strpos($_POST['Libro'],' ')),
        substr($_POST['usuario'],0,strpos($_POST['usuario'],' ')),
        $_POST['fechaSalida'],$_POST['fechaMaxima'],null,'false'));*/
        App::get('mypdf')->new_document(
        substr($_POST['usuario'],strpos($_POST['usuario'],'-')+1),
        substr($_POST['Libro'],strpos($_POST['Libro'],'-')+1),
        $_POST['fechaSalida']);
    }
} catch (Exception $ex) {
    echo "<script> alert('" . $ex->getMessage() . "')</script>";
}
require_once '../app/views/administracion.view.php';

$selectColab =App::getRepository(ColaboradorRepositorio::class);
$arraycolab = $selectColab->findAll();
shuffle($arraycolab);
?>
<div class="imagenesFooter">
    <?php
    for ($i = 0; $i < 3; $i++) {
        echo "<img src='" . $arraycolab[$i]->getUrlImagen() . "' alt='" . $arraycolab[$i]->getDescripcion() . "'>";
    } ?>

</div>