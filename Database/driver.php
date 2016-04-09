<?php

require_once __DIR__.'/vendor/autoload.php';

namespace Database;

/**
* Db driver
*/
class Driver
{
  protected $db_conn;
  
  function __construct()
  {
    $dotenv = new Dotenv\Dotenv(__DIR__);
    $dotenv->load();

    $host     = getenv('DB_HOST');
    $username = getenv('DB_USERNAME');
    $password = getenv('DB_PASSWORD');
    $database = getenv('DB_DATABASE');
    $port     = getenv('DB_PORT');

    $this->db_conn = mysqli_connect($host, $username, $password, $database, $port);
    if (!$this->db_conn) {
      throw new Exception('Database connection error');
    }
  }

  function getConnection()
  {
    return $this->db_conn;
  }

  function __destruct()
  {
    mysqli_close($this->db_conn);
  }
}