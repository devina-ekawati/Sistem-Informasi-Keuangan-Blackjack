<?php

namespace Database;

require_once 'Driver.php';

/**
* Db model
*/
class Model
{
  protected $table;
  protected $query;
  private $driver;

  function __construct($table)
  {
    $this->driver = new Driver;
    $this->table = $table;
  }

  function insert($fields_values)
  {
    $this->query .= "insert into ".$this->table." (";

    $first = true;
    foreach ($fields_values as $key => $value) 
    {
      if (!$first) $this->query .= ",";
      $this->query .= $key;
      $first = false;
    }
    $this->query .= ") values (";

    $first = true;
    foreach ($fields_values as $key => $value) 
    {
      if (!$first) $this->query .= ",";
      $this->query .= "'".$value."'";
      $first = false;
    }
    $this->query .= ");";

    $result = $this->driver->exec($this->query);
    $this->query = "";
    return $result;
  }

  function select($fields = null, $conditions = null)
  {
    $this->query .= "select ";

    if ($fields)
    {
      $first = true;
      foreach ($fields as $field) 
      {
        if (!$first) $this->query .= ",";
        $this->query .= $field;
        $first = false;
      }
    }
    else
    {
      $this->query .= "*";
    }

    $this->query .= " from ".$this->table;

    if ($conditions)
    {
      $this->query .= " where ";
      $first = true;
      foreach ($conditions as $field => $comparison) 
      {
        if (!$first) $this->query .= " and ";

        foreach ($comparison as $operator => $value) 
          $this->query .= $field." ".$operator." '".$value."'";

        $first = false;
      }
    }
    $this->query .= ";";
    echo $this->query;

    $result = $this->driver->exec($this->query);
    $this->query = "";
    return $result;
  }
}