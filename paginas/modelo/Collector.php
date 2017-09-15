<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-54-243-255-57.compute-1.amazonaws.com");
define("DB_USER", "aosfstsewpekae");
define("DB_PASS", "ed0431f1884a76f7944e9a8776d37eb13e12c297d42a7653f532ae6f6acb58a4");
define("DB_NAME", "deqk0ef50jua26");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
