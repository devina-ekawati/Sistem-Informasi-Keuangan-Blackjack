<?php

namespace Database;

require_once __DIR__.'\vendor\autoload.php';

/**
* Db driver
*/
class Driver
{
  protected $db_conn;
  
  function __construct()
  {
    $dotenv = new \Dotenv\Dotenv(__DIR__);
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

  function exec($query)
  {
    $res = mysqli_query($this->db_conn, $query);
    if ($res === true)
      return mysqli_insert_id($this->db_conn);
    else return $res;
  }

  function __destruct()
  {
    mysqli_close($this->db_conn);
  }
}