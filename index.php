<?php
use biblioteca\core\Router;

try {
    require 'core/bootstrap.php';
    Router::load();
} catch (Exception $ex) {
    echo $ex->getMessage();
}