<?php
namespace biblioteca\app\exeptions;
use biblioteca\core\App;
use Exception;

class NotFoundException extends Exception{

    public function __construct($mensaje) {
        parent::__construct($mensaje);
        App::get('logger')->add($mensaje);
    }
}