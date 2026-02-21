<?php

class User
{
    private $userName;
    private $email;
    private $password;
    private $role;

    public function __construct($userName, $email, $password, $role)
    {
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

}


?>