<?php
use biblioteca\app\entity\Usuario;
use biblioteca\app\repository\ColaboradorRepositorio;
use biblioteca\app\repository\PrestamosRepositorio;
use biblioteca\app\repository\UsuarioRepositorio;
use biblioteca\core\App;

$repoPersonal = App::getRepository(UsuarioRepositorio::class);
$arrayUsuarios = $repoPersonal->findAll();
$optionsUsuario = '';
$filastabla = '<th COLSPAN="7">Selecciona un usuario</th>';
$select = !empty($_POST['selectUsuarios']) ? $_POST['selectUsuarios'] : null;
for ($i = 0, $iMax = count($arrayUsuarios); $i < $iMax; $i++) {
    if ($select == $arrayUsuarios[$i]->getnombre() . ' ' . $arrayUsuarios[$i]->getApellidos()) {
        $optionsUsuario .= "<option selected>" . $arrayUsuarios[$i]->getnombre() . ' ' . $arrayUsuarios[$i]->getApellidos() . "</option>";
    } else {
        $optionsUsuario .= "<option>" . $arrayUsuarios[$i]->getnombre() . ' ' . $arrayUsuarios[$i]->getApellidos() . "</option>";
    }
}
if (isset($_POST['MostraLibros'])) {
    $filastabla = '';
    $repoPrestamos = App::getRepository(PrestamosRepositorio::class);
    $arrayLibrosUsuario = $repoPrestamos->librosUsuario($select);
    for ($i = 0, $iMax = count($arrayLibrosUsuario); $i < $iMax; $i++) {
        if ($arrayLibrosUsuario[$i]->getDevuelto()==='true') {
            $color='verde';
         } else {
             $color='rojo';
         }
        $filastabla .= "<tr>
        <th scope='row' style='color: #71c5d0;'>" . $arrayLibrosUsuario[$i]->getNum_pedido() . "</th>   
        <td>" . $arrayLibrosUsuario[$i]->getCod_libro() . "</td>
        <td>" . $arrayLibrosUsuario[$i]->getCod_usuario() . "</td>
        <td>" . $arrayLibrosUsuario[$i]->getFecha_salida() . "</td>
        <td>" . $arrayLibrosUsuario[$i]->getFecha_maxima_dev() . "</td>
        <td>" .  $arrayLibrosUsuario[$i]->getFecha_devolucion() . "</td>
        <td class=".$color.">" . $arrayLibrosUsuario[$i]->getDevuelto() . "</td>
      </tr>";
    };
}

$enviar = !empty($_POST['enviar']) ? $_POST['enviar'] : null;
try {
    if ($enviar === 'Enviar') {
        $repoPersonal->save(new Usuario('', $_POST['Nombre'], $_POST['Apellidos'], $_POST['DNI'], $_POST['Domicilio'], $_POST['Poblacion'], $_POST['Fecha']));
    }
} catch (Exception $ex) {
    echo "<script> alert('" . $ex->getMessage() . "')</script>";
}

require_once '../app/views/personal.view.php';

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