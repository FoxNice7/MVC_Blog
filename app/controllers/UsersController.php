<?php
require_once __DIR__.'/../models/User.php';
class UsersController extends Controller
{
    private User $user;
    public function __construct($methodName)
    {
        $this->$methodName();
    }

    private function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userName = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['pass'];
            $role = $_POST['role'];
            $this->user = new User($userName, $email, $password, $role);
        } else {
            require_once __DIR__ . '/../views/users/register.php';
        }
    }

}