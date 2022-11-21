<?php
require_once 'repository/colaboradorRepositorio.php';
require_once 'entity/colaborador.php';
require_once 'core/request.php';
require_once 'core/app.php';
require_once 'database/queryBuilder.php';
require_once 'utils/activa.php';
require_once 'utils/file.php';
require_once 'core/router.php';
$config = require 'app/config.php';
App::bind('config', $config);
$conexion = App::getConexion();