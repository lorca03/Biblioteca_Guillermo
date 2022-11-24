<?php
try {
    require 'core/bootstrap.php';
    Router::load();
} catch (Exception $ex) {
    echo $ex->getMessage();
}
