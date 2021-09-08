<?php

class db{
    public $conn;
    private $servername = "localhost:3306";
    private $username="root";
    private $dbname ="mvc";
    private $pass = "";

    public function __construct(){
        $this->conn = mysqli_connect($this->servername,$this->username,$this->pass);
        mysqli_select_db($this->conn,$this->dbname);
        mysqli_query($this->conn,"SET NAME 'uft8'");
    }

   
}