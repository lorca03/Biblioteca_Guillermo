<?php
namespace biblioteca\app\utils;
class MyLog{
    private $log;

    private function __construct($filename)
    {
        $this->log=new Monolog\Logger('name');
        $this->log->pushHandler(new Monolog\Handler\StreamHandler($filename,Monolog\Level::Info));
    }
    public static function load($filename){
        return new MyLog($filename);
    }
    public function add($message){
        $this->log->info($message);
    }
}
