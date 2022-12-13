<?php
namespace biblioteca\app\exeptions;
use Exception;

class Database_exception extends Exception{

    public function __construct($mensaje) {
        parent::__construct($mensaje);
        App::get('logger')->add($mensaje);
    }
}
