<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-54-243-255-57.compute-1.amazonaws.com");
define("DB_USER", "fdnvjivqsjeqkc");
define("DB_PASS", "42ae7786c89a211e5b2912dc44d36ecc081654ddefccf2cfb48d86d6c6d03ed8");
define("DB_NAME", "dn9r0d4er3li4");


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
