<?php

require_once "db.php";

class view extends db{
  public function fetch(){
      $query = "SELECT * FROM users";
      $stmt = parent :: connect() -> prepare($query);
      $stmt -> execute();
      $result = $stmt -> get_result();
      return $result;
  }
}