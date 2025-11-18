<?php

class appointment{
  private $name;
  private $email;
  private $phone;
  private $subject;
  private $message;

  public function __construct($email, $name, $phone, $subject, $message){
    $this -> name = $name;
    $this -> email = $email;
    $this -> phone = $phone;
    $this -> subject = $subject;
    $this -> message = $message;
  }

  private $error;
  private function formValidation(){
    
    if (errorHandlerContact($this -> email, $this -> name, $this -> phone, $this -> subject, $this -> message)) {
      $this -> error = "You can not leave any of the column empty";
    }
    return $this -> error;
  }

  public function sendMail(){
    if ($this -> formValidation()) {
      session_start();
      $_SESSION["error"] = $this -> error;
      header("location: ../../contact");
    } else {
      appointmentContact($this -> email, $this -> name, $this -> phone, $this -> dept, $this -> doc, $this -> date, $this -> message);
      header("location: ../../contact");
    }
  } 
}