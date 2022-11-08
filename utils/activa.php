<?php
function comprobarActiva($ruta)
{
    if (strpos($_SERVER['REQUEST_URI'] , $ruta)) {
        return true;
    }
    if ($ruta=='index.php' && $_SERVER['REQUEST_URI']=='/') {
        return true;
    }
}
