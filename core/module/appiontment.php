<?php

class appointment{
  private $name;
  private $email;
  private $phone;
  private $dept;
  private $doc;
  private $date;
  private $message;

  public function __construct($email, $name, $phone, $dept, $doc, $date, $message){
    $this -> name = $name;
    $this -> email = $email;
    $this -> phone = $phone;
    $this -> dept = $dept;
    $this -> doc = $doc;
    $this -> date = $date;
    $this -> message = $message;
  }

  private $error;
  private function formValidation(){
    
    if (errorHandler($this -> email, $this -> name, $this -> phone, $this -> dept, $this -> doc, $this -> date, $this -> message)) {
      $this -> error = "You can not leave any of the column empty";
    }
    return $this -> error;
  }

  public function sendMail(){
    if ($this -> formValidation()) {
      session_start();
      $_SESSION["error"] = $this -> error;
      header("location: ../../home");
    } else {
      appointment($this -> email, $this -> name, $this -> phone, $this -> dept, $this -> doc, $this -> date, $this -> message);
      header("location: ../../home");
    }
  } 
}