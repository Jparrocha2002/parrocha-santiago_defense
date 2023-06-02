<?php
include "polymorphism.php";

class Db extends Database
{
    public $conn;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "defense";

    public function initialize()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password);
        $this->conn->query("CREATE DATABASE IF NOT EXISTS $this->dbname");
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname); 
        echo "connect";  
    }
    
    public function sql($sql)
    {
        return $this->conn->query($sql);
    }
}
?>