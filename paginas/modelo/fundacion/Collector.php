<?php
include_once('BaseDatos.php');

// Define configuration
define("DB_HOST", "localhost");
define("DB_USER", "postgres");
define("DB_PASS", "postgres");
define("DB_NAME", "supportyou");


class Collector extends BaseDatos
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new BaseDatos($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
