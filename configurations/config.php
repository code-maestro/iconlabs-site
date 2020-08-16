<?php

// THE CONNECTION CLASS FILE
  class Dbh{

    // CONNECTION VARIABLES
    private $servername;
    private $username;
    private $password;
    private $dbname;

    // THE CONNECT METHOD
    protected function connect(){

      try {
        //code...
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "must_parking";
  
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
  
        return $conn;
        
      } catch (Exception $e) {
        echo "CONNECTION FAILED" . $e->getMessage();
      }
    }
  }