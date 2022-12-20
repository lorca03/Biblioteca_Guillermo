<?php
namespace biblioteca\core;
use biblioteca\app\exeptions\NotFoundException;
use biblioteca\core\App;
use biblioteca\core\Request;

App::bind('rutas',require __DIR__.'/../app/routes.php');
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
