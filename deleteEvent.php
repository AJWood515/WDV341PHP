<?php
session_start();

$event_id = $_GET['eventID'];
include "PHP_database_Connection.php";

$stmt = $conn->prepare("DELETE FROM wdv341_event WHERE event_id = $event_id ");
$stmt -> bindParam('event_id', $event_id);
$stmt -> execute();
$deleted = $stmt->rowcount();
if($deleted > 0 )
 $_SESSION['message'] = "Row Deleted.";

else
  $_SESSION['message'] = "There was an error.";

$conn = null;

header('Location: selectEventsDeuce.php');

?>
