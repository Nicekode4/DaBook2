<?php

/**
 * Class dbconf
 * Klasse til database oplysninger
 * Nedarver db klassen og opretter forbindelse til database
 */
class dbconf extends db {
  
  function __construct() {
    $servername = "localhost";
$username = "root";
$password = "";
$databasename = "myawesomedb";

      $this->dbhost = $servername;
    $this->dbuser = $username;
      $this->dbpassword = $password;
      $this->dbname = $databasename;
      $db = parent::connect();
  }
}	
?> 