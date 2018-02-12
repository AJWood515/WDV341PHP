<!Doctype html>
<html>
<head>
<title>PHP Functions</title>

<?php
$userdate = strtotime($_POST['userDate']);
$string = $_POST['userInput'];
function AmericanDate()
{
  global $userdate;
  $date = date('m/d/y', $userdate);
  echo $date;
}
function InterDate()
{
  global $userdate;
  $interDate = date('d/m/y', $userdate);
  echo $interDate;
}
function stringCount()
{
    global $string;
    echo strlen($string);
}
function trimStr()
{
  global $string;
  echo trim($string);
}
function lowerCase()
{
  global $string;
  echo strtolower($string);
}
function compare()
{
  global $string;
  $compared = strcasecmp($string, "DMACC");
  if ($compared == 0)
  {
    echo "The strings does have 'DMACC' in it.";
  }
  else {
    echo "The strings does not have 'DMACC' in it.";
  }

}

?>
</head>
  <body>
    <h1>PHP Functions</h1>

    <form name ="form" action = "PHPFunctions.php" method ="post" >
      <input type = "text" name = "userDate" value = "mm/dd/yyyy"/><br/>
      <input type = "textarea" name="userInput" value="Hey, type stuff here!"/><br/>

      <input type = "submit"/><br/>



    </form>
    <h2>
      American Date :<?php AmericanDate(); ?><br/>
      International Date :<?php InterDate(); ?><br/>
      Character Count:<?php stringCount() ?><br/>
      Trimmed: <?php trimStr() ?><br/>
      LowerCase: <?php lowerCase() ?><br/>
      Does it have "DMACC" in it? <?php compare() ?>
    </h2>

  </body>
</html>
