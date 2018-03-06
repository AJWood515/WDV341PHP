<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wdv341";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO wdv341_event (event_name, event_description, event_presenter)
    VALUES (:event_name, :event_description, :event_presenter)");
    $stmt->bindParam(':event_name', $eventName);
    $stmt->bindParam(':event_description', $eventDescription);
    $stmt->bindParam(':event_presenter', $eventPresenter);

    $eventName = "PHP Event";
    $eventDescription = "Learning PHP Database";
    $eventPresenter = "Jeff Guillion";
    $stmt -> execute();
    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
 ?>
