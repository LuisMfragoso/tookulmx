<?php
  $receiving_email_address = 'luis.fragoso@tookul.mx';

  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $content = "Name: " . $name . "Surname: " . $surname "\nEmail " . $email . "\nSubject " . $subject . "\nMessage " . $message; 
  mail($receiving_email_address, "Email", $content);
  header("Location:https://luisfragoso.tookul.mx/#contact");

?>
