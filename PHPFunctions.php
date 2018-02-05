<!Doctype html>
<html>
<head>
<title>PHP Functions</title>

<?php
$userdate = strtotime($_POST['userDate']);
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
    </h2>

  </body>
</html>
