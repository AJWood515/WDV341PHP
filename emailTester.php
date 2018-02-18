<!Doctype html>
<html>
<head>
<title>PHP Emailer</title>
</head>

<body>
  <p>
    <?php
     $emailTo;
      include 'Emailer.php';
      $newEmail = new Emailer();

      $newEmail->setSendTo("ajwood2@dmacc.edu");
      $newEmail->setSentFrom("admin@homealexwoodwork.us");
      $newEmail->setEmailMsg("Hello, This is sending a message to you.");
      $newEmail->setEmailSubject("PHP Email.");

      $newEmail->sendEmail($newEmail);
    ?>
      Send To:<?php echo $newEmail->getSendTo(); ?><br/>
      Send From: <?php echo $newEmail->getSentFrom(); ?><br/>
      Email Message: <?php echo $newEmail->getEmailMsg(); ?> <br/>
      Email Subject: <?php echo $newEmail->getEmailSubject(); ?> <br/>

  </p>
</body>
