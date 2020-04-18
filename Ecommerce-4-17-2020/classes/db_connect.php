<!-- Class to connect to the database  -->
<?php

class db_connect
{
    public static $instance = null;
    
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
        if (self::$instance == null) {
            // Connect to the db here
            self::$instance = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname, $this->port);
            // Make sure the connection did not receive an error
            if ($this->conn->connect_error)
            {
                die('Failed to connect to MySQL - ' . $this->conn->connect_error);
            }
        }
        // Return the connection status
        return self::$instance;
    }
     
}

