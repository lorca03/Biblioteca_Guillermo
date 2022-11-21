<?php

require_once 'core/request.php';
require_once 'core/app.php';
$config = require 'app/config.php';
App::bind('config', $config);
$conexion = App::getConexion();