<?php
session_start();
include "PHP_database_Connection.php";

$username = "";
$password = "";
$usernameErrMsg ="";
$passwordErrMsg = "";
$checked = 0;
$validForm = false;
$errmessage = "";

if (isset($_SESSION['message']))
$message = $_SESSION['message'];
else
$message = "";

function validateUsername(){
  global $username, $usernameErrMsg, $validForm;
  if($username == ""){
    $validForm = false;
    $usernameErrMsg = "Username can't be empty.";
  }

}
function validatePassword(){
  global $password, $passwordErrMsg, $validForm;
  if($password == ""){
    $validForm = false;
    $passwordErrMsg = "Password can't be empty.";
  }

}


if(isset($_POST['submit'])){
//echo print_r($_POST);
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  $validForm = true;

  validateUsername();
  validatePassword();

  if($validForm){
    $query= $conn -> prepare("SELECT * FROM event_user WHERE event_user_name = '$username' AND event_user_password = '$password'");
    $query->bindParam(':event_user_name', $username);
    $query->bindParam(':event_user_password', $password);
    $query -> execute();
    $result = $query->fetch();
    $checked = $query->rowcount();


    }


      if($checked > 0){
        $_SESSION['message'] = "Welcome user";
        $_SESSION['user'] = true;
        header("Location: selectEventsDeuce.php");
      }
      else{

      $errmessage = "Sorry try again.";

      }



  }




?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div id = "container">
<header>
<h1>Log In</h1>
<?php echo "<h3>$errmessage</h3>";?>
<div class="header">
</div>

</header>

<form id="form1" name="form1" method="post" action="login.php">
<p>
  User name:<br>
    <input type="textbox" name="username" value="<?php echo $username ?>"><?php echo $usernameErrMsg ?><br>
    User password:<br>
    <input type="password" name="password"><?php echo $passwordErrMsg ?>
</p>
<p>
  <input type="submit" name="submit" id="button" value="Sign In" />
  <input type="reset" name="button2" id="button2" value="Reset" />
  <br/>
</p>
</form>
</body>

</html>
