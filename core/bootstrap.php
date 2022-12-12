<?php

use biblioteca\app\utils\MyLog;

require  __DIR__. '/../vendor/autoload.php';

//require_once __DIR__ . '/../utils/MyLog.php';
/* repositorios
require_once 'repository/usuarioRepositorio.php';
require_once 'repository/librosRepositorio.php';
require_once 'repository/mensajeRepositorio.php';
require_once 'repository/prestamosRepositorio.php';
require_once 'repository/ColaboradorRepositorio.php';*/
/*entidades
require_once 'entity/colaborador.php';
require_once 'entity/usuario.php';
require_once 'entity/libro.php';
require_once 'entity/mensaje.php';
require_once 'entity/prestamo.php';
*/


//require_once 'database/IEntity.php';
//require_once 'core/Request.php';
//require_once 'core/App.php';
//require_once 'database/queryBuilder.php';
//require_once 'utils/activa.php';
//require_once 'utils/file.php';
//require_once 'core/router.php';
//require_once 'exeptions/notFoundExeption.php';

$config = require 'app/config.php';
App::bind('config', $config);
App::bind('logger', MyLog::load('logs/biblioteca.log'));
$conexion = App::getConexion();