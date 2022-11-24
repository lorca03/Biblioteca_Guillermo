<?php
App::bind('rutas',require 'app/routes.php');
class Router
{
    public static function load()
    {
        if (array_key_exists(Request::uri(),App::get('rutas'))) {
            return require App::get('rutas')[Request::uri()];
        }else {
            throw new NotFoundException("URI no definida");
        }
    }
}
