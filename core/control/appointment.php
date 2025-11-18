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
  $dept = $_POST['department'];
  $doc = $_POST['doctor'];
  $date = $_POST['date'];
  $message = $_POST['message'];

  require_once "../module/appiontment.php";
  require_once "../functions.php";
  
  $mail = new appointment($email, $name, $phone, $dept, $doc, $date, $message);
  $mail -> sendMail();
}




