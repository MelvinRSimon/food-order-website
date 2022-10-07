<?php

class DBConnection{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'food-order';

    public $conn;

    public function __construct()
    {
        if(!isset($conn)){
            $conn = new mysqli('localhost', 'root', '', 'food-order');

            if(!$conn){
                echo 'Çannot connect to database server';
                exit;
            }
        }
    }

    public function __destruct()
    {
        $this->conn->close();
    }

}

?>