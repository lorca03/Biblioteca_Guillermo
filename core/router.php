<?php
class Router
{
    private $routes;
    public function define($routes)
    {
        $this->routes = $routes;
    }
    public function direct($uri)
    {
        if (array_key_exists($uri,$this->routes)) {
            return $this->routes[$uri];
        }else {
            throw new NotFoundException("URI no definida");
        }
    }
    /*public static function load($uri)
    {
        if (array_key_exists($uri,self::$routes)) {
            return require self::$routes[$uri];
        }else {
            throw new NotFoundException("URI no definida");
        }
    }*/
}
