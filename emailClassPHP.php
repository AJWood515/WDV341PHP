<?php

class Emailer {
  private $sendto = "";
  private $sentFrom = "";
  private $emailMsg= "";
  private $emailSubject= "";

  public function __construct()
  {

  }

  public function setSendTo($inSendTo)
  {
    $this->sendTo = $inSendTo;
  }
  public function setSentFrom($inSentFrom)
  {
    $this->sentFrom = $inSentFrom;
  }
  public function setEmailMsg($inEmailMsg)
  {
    $inEmailMsg = htmlentities($inEmailMsg);
    $inEmailMsg = wordwrap($inEmailMsg, 70, "\n");
    $this->emailMsg = $inEmailMsg;
  }
  public function setEmailSubject($inEmailSubject)
  {
    $this->emailSubject = $inEmailSubject;
  }
  public function getSentto()
  {
    return $this->sendTo;
  }
  public function getSentFrom()
  {
    return $this->sentFrom;
  }
  public function getEmailSubject()
  {
    return $this->emailSubject;
  }
  public getEmailMsg()
  {
    return $this->emailMsg;
  }
  public function sendEmail()
  {
    $headers = "From: $this->sentFrom" . "\n";
    return mail($this->sendTo, $this->emailSubject, $this->emailMsg, $headers);
  }

}
?>
