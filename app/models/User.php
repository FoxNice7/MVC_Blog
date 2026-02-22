<?php
require_once __DIR__. '/../../core/Model.php';
class User extends Model
{
    private $userName;
    private $email;
    private $password;
    private $role;

    public function __construct($userName, $email, $hPassword, $role)
    {
        parent::__construct();
        $this->connect();

        $this->userName = $userName;
        $this->email = $email;
        $this->password = $hPassword;
        $this->role = $role;

        $this->createAccount();
    }

    private function createAccount(){
        $stmt = $this->db->prepare('SELECT * FROM users WHERE email = :email');

        $stmt->execute([
            ':email' => $this->email
        ]);

        if($stmt->columnCount() < 0){
            throw new Exception('Account already exist');
        }

        $stmt = $this->db->prepare('INSERT INTO users(username,email,password, created_at) VALUES (:username,:email,:password, NOW())');

        $stmt->execute([
            ':username' => $this->userName,
            ':email' => $this->email,
            ':password' => $this->password
        ]);


    }

}


?>