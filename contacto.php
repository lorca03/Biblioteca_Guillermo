<?php

require_once 'utils/activa.php';
require_once 'views/contacto.view.php';

$enviar = !empty($_POST['enviar']) ? $_POST['enviar'] : null;
$nombre = !empty($_POST['name']) ? $_POST['name'] : '';
$nombre = !empty($_POST['email']) ? $_POST['email'] : '';
$nombre = !empty($_POST['mensaje']) ? $_POST['mensaje'] : '';
if ($enviar === 'Enviar') {
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    if ($nombre == '' || $email=='' || $mensaje=='') {
        echo '<script language="javascript"> alert("Todos los campos deben estar rellenados");</script>';
    }else{
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            echo '<script language="javascript"> alert("El email no es correcto");</script>';
        }
    }
}
