<?php

class subscribe{
  private $email;

  public function __construct($email){
    $this -> email = $email;
  }

  private $error;
  private function formValidation(){
    
    if (errorHandler1($this -> email)) {
      $this -> error = "You can not leave the column empty";
    }
    return $this -> error;
  }

  public function subscribemail(){
    if (!$this -> formValidation()) {
      subscribe($this -> email);
    }
  }

  
}