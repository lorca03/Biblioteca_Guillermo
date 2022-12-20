<?php

require  __DIR__. '/../vendor/autoload.php';

use biblioteca\app\utils\MyLog;
use biblioteca\app\utils\MyMail;
use biblioteca\app\utils\MyPdf;
use biblioteca\core\App;
use biblioteca\core\Router;

$config = require __DIR__.'/../app/config.php';
App::bind('config', $config);
App::bind('mailer', new MyMail());
App::bind('mypdf', new MyPdf());
App::bind('logger', MyLog::load($config['logs']['filename']));
$conexion = App::getConexion();