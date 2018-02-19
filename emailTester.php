<!Doctype html>
<html>
<head>
<title>PHP Emailer</title>
</head>

<body>
  <p>
    <?php
    $sendToMail = $_POST['sendTo'];
    $sentFromMail = $_POST['sentFrom'];
    $emailSubjectMail = $_POST['emailSubject'];
    $emailMsgMail = $_POST['emailMsg'];
     $emailTo;
      include 'PHP_Mailer';
      include 'Emailer.php';
      $newEmail = new Emailer();

      $newEmail->setSendTo($sendToMail);
      $newEmail->setSentFrom($sentFromMail);
      $newEmail->setEmailMsg($emailMsgMail);
      $newEmail->setEmailSubject($emailSubjectMail);

      $newEmail->sendEmail($newEmail);
    ?>
      Send To:<?php echo $newEmail->getSendTo(); ?><br/>
      Send From: <?php echo $newEmail->getSentFrom(); ?><br/>
      Email Subject: <?php echo $newEmail->getEmailSubject(); ?> <br/>
      Email Message: <?php echo $newEmail->getEmailMsg(); ?> <br/>
    <strong>  Your message has been sent!</strong>
  </p>
</body>
