<?php

class Database {
    private $server_name = "localhost";
    private $username = "root";
    private $password = "root"; 
    private $db_name = "the_company";
    protected $conn;

    public function __construct(){  // BE CAREFULL TO SPELLING!!!
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);
        // protected $conn holds the connection to the databse.
        // Use $this->conn each time you interact with the db.

        if($this->conn->connect_error){
            die("Unable to connect to database ". $this->db_name . ": ". $this->conn->connect_error);
        }
    }
}

// delete later
// $db = new Database;