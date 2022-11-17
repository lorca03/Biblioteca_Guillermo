<?php
require_once 'utils/activa.php';

require_once 'core/app.php';
$config = require_once 'app/config.php';
App::bind('config', $config);
require_once 'views/libros.view.php'; 