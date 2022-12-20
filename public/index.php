<?php
use biblioteca\core\Router;

try {
    require __DIR__.'\..\core\bootstrap.php';
    Router::load();
} catch (Exception $ex) {
    echo $ex->getMessage();
}