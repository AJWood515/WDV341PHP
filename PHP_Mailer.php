<!Doctype html>
<html>
  <head>
    <title>PHP Mailer</title>

    <?php

      $sendToMail = $_POST['sendTo'];
      $sentFromMail = $_POST['sentFrom'];
      $emailSubjectMail = $_POST['emailSubject'];
      $emailMsgMail = $_POST['emailMsg'];

    ?>

  </head>

  <body>
    Send an Email to someone. Must have a return address.
    <form name ="form" action = "emailTester.php" method ="post" >
        Send To: <input type = "text" name = "sendTo" value = "Send To"/><br/>
        Sent From: <input type = "text" name = "sentFrom" value = "Sent From"/><br/>
        Email Subject: <input type="text" name ="emailSubject" value="Email Subject" /><br/>
        Email Message:<br/> <textarea rows ="4" cols="50" name="emailMsg">Email Message</textarea><br/><br/>
        <input type = "submit" value = "Send Email"/><br/>


  </body>

</html>
