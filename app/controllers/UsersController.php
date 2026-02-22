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

            try{
                $this->user = new User($userName, $email, $password, $role);
                header('Location: ../posts/index');
                exit();
            }catch(Exception $e){
                $error = $e->getMessage();
                require_once __DIR__ . '/../views/errors.php';
            }
        
        } else {
            require_once __DIR__ . '/../views/users/register.php';
        }
    }

}