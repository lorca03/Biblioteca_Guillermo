<?php

use biblioteca\app\utils\MyLog;

require  __DIR__. '/../vendor/autoload.php';

//require_once __DIR__ . '/../utils/MyLog.php';
/* repositorios
require_once 'repository/UsuarioRepositorio.php';
require_once 'repository/LibrosRepositorio.php';
require_once 'repository/MensajeRepositorio.php';
require_once 'repository/PrestamosRepositorio.php';
require_once 'repository/ColaboradorRepositorio.php';*/
/*entidades
require_once 'entity/Colaborador.php';
require_once 'entity/Usuario.php';
require_once 'entity/Libro.php';
require_once 'entity/Mensaje.php';
require_once 'entity/Prestamo.php';
*/


//require_once 'database/IEntity.php';
//require_once 'core/Request.php';
//require_once 'core/App.php';
//require_once 'database/QueryBuilder.php';
//require_once 'utils/activa.php';
//require_once 'utils/File.php';
//require_once 'core/Router.php';
//require_once 'exeptions/NotFoundExeption.php';

$config = require 'app/config.php';
App::bind('config', $config);
App::bind('logger', MyLog::load('logs/biblioteca.log'));
$conexion = App::getConexion();