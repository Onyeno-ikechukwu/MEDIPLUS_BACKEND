<?php

function appointment($email, $name, $phone, $dept, $doc, $date, $message){
  
  $mail = new PHPMailer\PHPMailer\PHPMailer(true);
  
  try {
      //Server settings
      // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

      $mail->isSMTP();                                            //Send using SMTP
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send 
      $mail->Username   = 'onyenoikechukwu081006@gmail.com';                     //SMTP username
      $mail->Password   = 'dwhvtljdwrjwbplh';                               //SMTP password


      $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;        //Enable implicit TLS encryption
      $mail->Port       = 465;                           
      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('onyenoikechukwu081006@gmail.com', 'MEDIPLUS');
      $mail->addAddress('onyenoikechukwu081006@gmail.com', $name);     //Add a recipient

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'APPOINTMENT FROM MEDIPLUS';
      $mail->Body    = "<h2>Appointment Booked</h2>
      <p>Name: ".$name."</p>
      <p>Email: ".$email."</p>
      <p>Phone number: ".$phone."</p>
      <p>Department of appointment: ".$dept."</p>
      <p>Doctor: ".$doc."</p>
      <p>Date: ".$date."</p>
      <p>Message: ".$message."</p>";

      $mail->send();
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}

function appointmentContact($email, $name, $phone, $subject, $message){
  
  $mail = new PHPMailer\PHPMailer\PHPMailer(true);
  
  try {
      //Server settings
      // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

      $mail->isSMTP();                                            //Send using SMTP
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send 
      $mail->Username   = 'onyenoikechukwu081006@gmail.com';                     //SMTP username
      $mail->Password   = 'dwhvtljdwrjwbplh';                               //SMTP password


      $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;        //Enable implicit TLS encryption
      $mail->Port       = 465;                           
      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('onyenoikechukwu081006@gmail.com', 'MEDIPLUS');
      $mail->addAddress('onyenoikechukwu081006@gmail.com', $name);     //Add a recipient

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'MESSAGE FROM MEDIPLUS';
      $mail->Body    = "<h2>".strtoupper($name)." Wants to Contact Us</h2>
      <h4>Full details</h4>
      <p>Name: ".$name."</p>
      <p>Email: ".$email."</p>
      <p>Phone number: ".$phone."</p>
      <p>Department of appointment: ".$subject."</p>
      <p>Message: ".$message."</p>";

      $mail->send();
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}


function subscribe($email){
  
  $mail = new PHPMailer\PHPMailer\PHPMailer(true);
  
  try {
      //Server settings
      // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

      $mail->isSMTP();                                            //Send using SMTP
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send 
      $mail->Username   = 'onyenoikechukwu081006@gmail.com';                     //SMTP username
      $mail->Password   = 'dwhvtljdwrjwbplh';                               //SMTP password


      $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;        //Enable implicit TLS encryption
      $mail->Port       = 465;                           
      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('onyenoikechukwu081006@gmail.com', 'MEDIPLUS');
      $mail->addAddress('onyenoikechukwu081006@gmail.com', "CLIENT");     //Add a recipient

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'SUBSCRIPTION FROM MEDIPLUS';
      $mail->Body    = "<h2>Subscription From This Client</h2>
      <p>Email: ".$email."</p>";

      $mail->send();
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}

function errorHandler($email, $name, $phone, $dept, $doc, $date, $message){
  if (empty($email) || empty($name) || empty($phone) || empty($dept) || empty($doc) || empty($date) || empty($message)) {
    return true;
  }else{
    return false;
  }
  
}

function errorHandlerContact($email, $name, $phone, $subject, $message){
  if (empty($email) || empty($name) || empty($phone) || empty($subject) || empty($message)) {
    return true;
  }else{
    return false;
  }
  
}

function errorHandlercomment($first, $last, $email, $message){
  if (empty($first) || empty($last) || empty($email) || empty($message) ) {
    return true;
  }else{
    return false;
  } 
  if (!filter_var($email, FILETR_VALIDATE_EMAIL)) {
    return true;
  }else{
    return false;
  } 
}

function errorHandler1($email){
  if (empty($email)) {
    return true;
  }else{
    return false;
  }
  
}