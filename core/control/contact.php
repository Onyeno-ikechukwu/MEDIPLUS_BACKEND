<?php

  require '../module/vendor/autoload.php';


  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  
  require '../module/vendor/phpmailer/src/PHPMailer.php';
  require '../module/vendor/phpmailer/src/Exception.php';
  require '../module/vendor/phpmailer/src/SMTP.php';


if ($_REQUEST["REQUEST_METHOD"] = "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  require_once "../module/contact.php";
  require_once "../functions.php";
  
  $mail = new appointment($email, $name, $phone, $subject, $message);
  $mail -> sendMail();
}




