<?php

class UsersController extends Controller
{
    public function __construct($methodName)
    {
         $this->$methodName();
    }
    
    private function register(){
        require_once __DIR__.'/../views/users/register.php';
    }

}