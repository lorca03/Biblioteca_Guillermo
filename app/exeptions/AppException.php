<?php
namespace  biblioteca\app\exeptions;
class AppException extends Exception{

    public function __construct($mensaje) {
        parent::__construct($mensaje);
        App::get('logger')->add($mensaje);
    }
}