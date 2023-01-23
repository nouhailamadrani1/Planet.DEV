<?php

 session_start();


 class Db {

    public $dsn = "mysql:host=localhost;dbname=planet";
    public $username = "root";
    public $password = "";
    
    public function connection(){
        try
        {
            $conn = new PDO($this->dsn, $this->username, $this->password);
            //  echo "Connected successfully";
             return $conn;
        } catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }}
