<?php

namespace Database;

/**
* Db model
*/
class Model
{
  protected $name = "";
  protected $table = "";
  protected $query = "";

  function __construct($name, $table)
  {
    $this->name = $name;
    $this->table = $table;
  }

  function insert($fields_values)
  {
    $this->query += "insert into ".$table." (";

    $first = true;
    foreach ($fields_values as $key => $value) 
    {
      if (!$first) $this->query += ",";
      $this->query += $key;
      $first = false;
    }
    $this->query += ") values (";

    $first = true;
    foreach ($fields_values as $key => $value) 
    {
      if (!$first) $this->query += ",";
      $this->query += "'".$value."'";
      $first = false;
    }
    $this->query += ");";

    $result = mysqli_execute($this->query);
    $this->query = "";
    return $result;
  }

  function select($fields, $conditions)
  {
    $this->query += "select ";

    $first = true;
    foreach ($fields as $field) 
    {
      if (!$first) $this->query += ",";
      $this->query += $field;
      $first = false;
    }
    $this->query += " from ".$this->table;

    if ($conditions)
    {
      $this->query += " where ";
      $first = true;
      foreach ($conditions as $field => $comparison) 
      {
        if (!$first) $this->query += " and ";

        foreach ($comparison as $operator => $value) 
          $this->query += $field." ".$operator." '".$value"'";

        $first = false;
      }
    }
    $this->query += ";";

    $result = mysqli_execute($this->query);
    $this->query = "";
    return $result;
  }
}