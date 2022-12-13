<?php
namespace biblioteca\app\exeptions;
use Exception;

class NotExitsExeption extends Exception{

    public function __construct($mensaje) {
        parent::__construct($mensaje);
        App::get('logger')->add($mensaje);
    }
}