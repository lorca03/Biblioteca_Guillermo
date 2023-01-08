<?php
use biblioteca\app\entity\Mensaje;
use biblioteca\app\repository\ColaboradorRepositorio;
use biblioteca\app\repository\MensajeRepositorio;
use biblioteca\core\App;

$enviar = !empty($_POST['enviar']) ? $_POST['enviar'] : null;
$error = false;
$erroremail = false;
$errorlocalidad = false;
if ($enviar === 'Enviar') {
    $nombre = !empty($_POST['name']) ? $_POST['name'] : '';
    $email = !empty($_POST['email']) ? $_POST['email'] : '';
    $localidad = !empty($_POST['localidad']) ? $_POST['localidad'] : '';
    $mensaje = !empty($_POST['mensaje']) ? $_POST['mensaje'] : '';
    if ($nombre == '' || $email == '' || $mensaje == ''|| $localidad == '') {
        $error=true;
        echo '<script language="javascript"> alert("Todos los campos deben estar rellenados");</script>';
    } else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $error=true;
            $erroremail=true;
            echo '<script language="javascript"> alert("El email no es correcto");</script>';
        }else{
            $cURLConnection = curl_init();
            curl_setopt($cURLConnection, CURLOPT_URL, "https://api.mymappi.com/v2/places/autocomplete?apikey=ec8a3deb-4786-4b13-b250-a27ccd4f67d5&q=".$localidad."&auto_focus=true&layers=locality&country_code=ES&lang=es");
            curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($cURLConnection);
            curl_close($cURLConnection);
            $json_result = json_decode($result,true);
            if (count($json_result['data'])==0){
                $error=true;
                $errorlocalidad=true;
                echo '<script language="javascript"> alert("La Localidad no es correcta");</script>';
            }else{
                $localidad=$json_result['data'][0]['locality'];
                $errorlocalidad=false;
            }
            //var_dump( $json_result['data']/*[0]['locality']*/);
        }
    }
    if ($error==false && $erroremail==false && $errorlocalidad==false) {
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
