<?php
require_once '../app/controllers/PostsController.php';
require_once '../app/controllers/CommentsController.php';
require_once '../app/controllers/UsersController.php';
class Controller{

    private $controller;
    
    public function __construct(string $controllerName){
       switch($controllerName){
            case 'posts':
                $this->controller = new PostsController();
                break;
            case 'users':
                $this->controller = new UsersController();
                break;
            case 'comments':
                $this->controller = new CommentsController();
                break;
            default:
                throw new Exception('wrong controller');
       }
    }
}