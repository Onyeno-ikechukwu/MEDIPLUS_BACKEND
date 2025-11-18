<?php

require '../module/vendor/autoload.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require '../module/vendor/phpmailer/src/PHPMailer.php';
require '../module/vendor/phpmailer/src/Exception.php';
require '../module/vendor/phpmailer/src/SMTP.php';

if ($_REQUEST["REQUEST_METHOD"] = "POST") {
  $email = $_POST['email'];

  require_once "../module/subscribe.php";
  require_once "../functions.php";
  
  $mail = new subscribe($email);
  $mail ->subscribemail();
  header("location: ../../service");
}
