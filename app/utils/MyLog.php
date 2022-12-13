<?php
namespace biblioteca\app\utils;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
class MyLog{
    private $log;

    private function __construct($filename)
    {
        $this->log=new Logger('name');
        $this->log->pushHandler(new StreamHandler($filename,Level::Info));
    }
    public static function load($filename){
        return new MyLog($filename);
    }
    public function add($message){
        $this->log->info($message);
    }
}
