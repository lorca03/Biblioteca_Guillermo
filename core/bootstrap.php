<?php

use biblioteca\app\utils\MyLog;
use biblioteca\app\utils\MyMail;
use biblioteca\core\App;
use biblioteca\core\Router;

require  __DIR__. '/../vendor/autoload.php';

$config = require 'app/config.php';
App::bind('config', $config);
App::bind('mailer', new MyMail());
App::bind('logger', MyLog::load('logs/biblioteca.log'));
$conexion = App::getConexion();