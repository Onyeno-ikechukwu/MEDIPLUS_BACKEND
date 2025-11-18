<?php

if($_REQUEST["REQUEST_METHOD"] = "POST"){
  $first = $_POST["first-name"];
  $last = $_POST["last-name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  require_once "../module/db.php";
  require_once "../module/comments.php";
  require_once "../functions.php";

  $comments = new comments($first, $last, $email, $message);
  $comments -> addComment();
}