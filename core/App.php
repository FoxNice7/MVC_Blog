<?php
require_once 'Controller.php';
class App
{

    private $controller;
    public function __construct()
    {
        $scriptName = dirname($_SERVER['SCRIPT_NAME']);

        $uri = $_SERVER['REQUEST_URI'];

        $uri = substr($uri, strlen($scriptName));

        $uri = trim(parse_url($uri, PHP_URL_PATH), '/');

        $segments = explode('/', $uri);
        
        $controllerName = (!empty($segments[0])) ? (string) $segments[0] : 'users';

        $methodName = (!empty($segments[1])) ? (string) $segments[1] : 'register';

        try{
            $this->controller = new Controller($controllerName, $methodName);
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
        
    }

}