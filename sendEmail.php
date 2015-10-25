<?php
session_start();
echo($_SESSION["message"]);
if(isset($_POST['submit']))
  {
      $replyToEmail = $_POST['fromEmail'];
      $to      = $_POST['toEmail'];
      $subject = $_POST['emailSubject'];
      $message = $_SESSION["message"];
      $headers = 'From:' . $replyToEmail . "\r\n" .
          'Reply-To:'. $replyToEmail. "\r\n" .
          'X-Mailer: PHP/' . phpversion();

      mail($to, $subject, $message, $headers);
      echo ("Email Sent");
  }
  header("Location: index.php");
 ?>
