<?php
include "databaseInfoSkillsTest.php";

try {
   $conn = new PDO("mysql:host=$servername;dbname=ajwood515_wdv341", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "<script>console.log('Connected successfully') </script>";
   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
?>
