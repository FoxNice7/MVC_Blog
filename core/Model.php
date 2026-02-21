<?php
class Model{
    
    protected $db;

    private $config;

    public function __construct(){
        $this->config = require_once '../config/config.php';
    }

    protected function connect(){
        $this->db = new PDO("host=$this->config['host'];dbname=$this->config['db_name'];", "$this->config['user']", "$this->config['pass']");

        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
}

?>