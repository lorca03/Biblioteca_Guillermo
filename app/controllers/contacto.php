<?php

require_once 'core/app.php';
$config = require_once 'app/config.php';
App::bind('config', $config);
require_once 'utils/activa.php';
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
}
require_once 'app/views/contacto.view.php';
