<?php
include "PHP_database_Connection.php";



session_start();
$message = $_SESSION['message'];

try{
  $stmt = $conn -> prepare("SELECT * FROM wdv341_event");
  $stmt -> execute();

  ?>
<table border='1'>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Description</td>
    <td>Presenter</td>
    <td>Date</td>
    <td>Time</td>
    <td>UPDATE</td>
		<td>DELETE</td>
    <br/>
  <?php if ($_SESSION['message'] != '')
  {
     echo $_SESSION['message'];
     $_SESSION['message']='';
   }
   ?>

<?php

  while($result = $stmt-> fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
      echo "<td>".$result['event_id']."</td>";
      echo "<td>".$result['event_name']."</td>";
      echo "<td>".$result['event_description']."</td>";
      echo "<td>".$result['event_presenter']."</td>";
      echo "<td>".$result['event_date']."</td>";
      echo "<td>".$result['event_time']."</td>";
      echo "<td><a href='updateEvent.php?eventID=" . $result['event_id'] . "'>Update</a></td>";
      echo "<td><a href='deleteEvent.php?eventID=" . $result['event_id'] . "'>Delete</a></td>";
    echo "</tr>";
  }

}
catch (PDOException $e){
  echo "Error: ". $e->getMessage();
}
$conn = null;
