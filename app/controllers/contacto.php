<?php
use biblioteca\app\entity\Mensaje;
use biblioteca\app\repository\ColaboradorRepositorio;
use biblioteca\app\repository\MensajeRepositorio;
use biblioteca\core\App;

$enviar = !empty($_POST['enviar']) ? $_POST['enviar'] : null;
$error = false;
$erroremail = false;
if ($enviar === 'Enviar') {
    $nombre = !empty($_POST['name']) ? $_POST['name'] : '';
    $email = !empty($_POST['email']) ? $_POST['email'] : '';
    $mensaje = !empty($_POST['mensaje']) ? $_POST['mensaje'] : '';
    if ($nombre == '' || $email == '' || $mensaje == '') {
        $error=true;
        echo '<script language="javascript"> alert("Todos los campos deben estar rellenados");</script>';
    } else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $error=true;
            $erroremail=true;
            echo '<script language="javascript"> alert("El email no es correcto");</script>';
        }
    }
    if ($error==false && $erroremail==false) {
        $repoMensaje = App::getRepository(MensajeRepositorio::class);
        $repoMensaje->save(new Mensaje($email,$nombre,$mensaje));
        $mailer=App::get('mailer');
        $mailer->send('Gracias por contactarnos!',$email,$nombre,'Hola, bienvenido a nuestra biblioteca. Estamos orgullosos de tenerte en el equipo. Analizaremos su comentario, muchas gracias.');
    }
}
require_once '../app/views/contacto.view.php';

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
