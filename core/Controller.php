<?php
require_once '../app/controllers/PostsController.php';
require_once '../app/controllers/CommentsController.php';
require_once '../app/controllers/UsersController.php';
class Controller{

    private $controller;
    
    public function __construct(string $controllerName, string $methodName){
       switch($controllerName){
            case 'posts':
                $this->controller = new PostsController($methodName);
                break;
            case 'users':
                $this->controller = new UsersController($methodName);
                break;
            case 'comments':
                $this->controller = new CommentsController();
                break;
            default:
                throw new Exception('wrong controller');
       }
    }

    protected function render($view, ?array $data = null){
        require_once $view;
    }
}