<?php
require 'core/bootstrap.php';

$router = new Router();
require 'app/routes.php';
//Router::load(Request::uri());
require $router->direct(Request::uri());

