<?php
class DatabaseConnection {
	private $dbHost;
    private $dbUser;
    private $dbPass;
    private $dbName;

    function __construct() {
        $this->dbHost = "localhost";
        $this->dbUser = "root";
        $this->dbPass = "";
        $this->dbName = "php_fms_test";

        $connection = mysql_connect($this->dbHost, $this->dbUser, $this->dbPass)
            or die("Could not connect to the database:<br />" . mysql_error());
        
        mysql_select_db($this->dbName, $connection) 
            or die("Database error:<br />" . mysql_error());        
    }
}