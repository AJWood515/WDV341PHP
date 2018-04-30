<?php
session_start();
include "PHP_database_Connection.php";
$conn=null;
session_destroy();

header("Location: selectEventsDeuce.php")

?>
