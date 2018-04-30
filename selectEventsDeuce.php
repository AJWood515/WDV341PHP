<?php
include "PHP_database_Connection.php";
session_start();

//print_r($_SESSION);
if (isset($_SESSION['message'])){
  $message = $_SESSION['message'];
}
else{
  $message = "";
}
if (isset($_SESSION['user'])){
  $user =  $_SESSION['user'];
}
else{

  $user = "";
}
try{

  $stmt = $conn -> prepare("SELECT * FROM wdv341_event");
  $stmt -> execute();

  ?>
  <body>

  <?php  echo "<h3>$message</h3>"; ?>
  <p>
<table border='1'>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Description</td>
    <td>Presenter</td>
    <td>Date</td>
    <td>Time</td>
    <?php
    if($user){
      echo"
    <td>UPDATE</td>
		<td>DELETE</td>
    <br/>";
  }?>

<?php

  while($result = $stmt-> fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
      echo "<td>".$result['event_id']."</td>";
      echo "<td>".$result['event_name']."</td>";
      echo "<td>".$result['event_description']."</td>";
      echo "<td>".$result['event_presenter']."</td>";
      echo "<td>".$result['event_date']."</td>";
      echo "<td>".$result['event_time']."</td>";
      if($user){
        echo "<td><a href='updateEventForm.php?eventID=" . $result['event_id'] . "'>Update</a></td>";
        echo "<td><a href='deleteEvent.php?eventID=" . $result['event_id'] . "'>Delete</a></td>";
      }
    echo "</tr>";
  }

}
catch (PDOException $e){
  echo "Error: ". $e->getMessage();
}
$conn = null;
?>
</p>
<?php
if($user){
  echo "<p>
    <form id='form1' name='form1' method='post' action='logout.php'>
    <input type='submit' name='submit' id='button' value='Log Out' />
    </form>
    </p>
  ";
}
else
{
  echo "<p>
    <form id='form1' name='form1' method='post' action='loginExtra.php'>
    <input type='submit' name='submit' id='button' value='Log In' />
    </form>
    </p>
  ";
}
?>

</body>
