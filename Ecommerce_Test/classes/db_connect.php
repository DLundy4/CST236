<?php

// Class to connect to the database
class db_connect
{
    
    // Make all properties private
    private $dbhost = '';
    private $dbuser = '';
    private $dbpass = '';
    private $dbname = '';
    private $charset = '';
    private $port = '';
    
    function connect()
    {
        // Set all the properties
        $this->dbhost = 'localhost';
        $this->dbuser = 'root';
        $this->dbpass = 'root';
        $this->charset = 'utf8';
        $this->dbname = 'ecommerce';
        $this->port = '3306';
        $this->conn = "";
        
       // Connect to the db here
        //$this->conn = new mysqli("localhost", "root", "root", "ecommerce", "3306");
        $this->conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname, $this->port);
        // Make sure the connection did not receive an error
        if ($this->conn->connect_error)
        {
            die('Failed to connect to MySQL - ' . $this->conn->connect_error);
        }
        // Return the connection status
        return $this->conn;       
    }
     
}

