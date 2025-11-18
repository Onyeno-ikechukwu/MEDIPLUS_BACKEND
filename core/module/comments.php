<?php

class comments extends db{
  private $first;
  private $last;
  private $email;
  private $message;

  public function __construct($first, $last, $email, $message){
    $this -> first = $first;
    $this -> last = $last;
    $this -> email = $email;
    $this -> message = $message;
  }

  private function insert() {
    $query = "INSERT INTO users (firstname, lastname, email, message) VALUES (?,?,?,?)";
    $stmt = parent:: connect() -> prepare($query);
    $stmt -> execute([$this -> first, $this -> last, $this -> email, $this -> message]);
    $pdo = null;
    $stmt = null;
  }
  
  private $error;
  private function formhandler(){
    if (errorHandlercomment($this -> first, $this -> last, $this -> email, $this -> message)) {
      $this -> error = "put valid details or There is an empty column";
    }
    return $this -> error;
  }

  public function addComment(){
    if($this -> formhandler()){
      session_start();
      $_SESSION["error"] = $this ->error;
      header("location: ../../blog");
    } else {
      unset($_SESSION["error"]);
      $this -> insert();
      header("location: ../../blog");
    }
  }

}