<?php
	include "PHP_database_ConnectionSkillsTest.php";

  $stmt = $conn -> prepare("SELECT * FROM wdv341_events");
  $stmt -> execute();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WDV341 Intro PHP  - Display Events Example</title>
    <style>
		.eventBlock{
			width:500px;
			margin-left:auto;
			margin-right:auto;
			background-color:#CCC;

		}

		.displayEvent{
			text_align:left;
			font-size:18px;
      color: black;
		}

		.displayDescription {
			margin-left:100px;
		}
	</style>
</head>

<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>Example Code - Display Events as formatted output blocks</h2>
    <h3> <?php echo $stmt->rowcount(); ?> Events are available today.</h3>

<?php
	//Display each row as formatted output
	while( $result = $stmt->fetch(PDO::FETCH_ASSOC) )
	//Turn each row of the result into an associative array
  	{
      $date= strtotime($result['event_day']);
		//For each row you have in the array create a block of formatted text
?>
	<p>
        <div class="eventBlock">
            <div>
            	<span class="displayEvent">Event:<?php echo $result['event_name'] ?></span>
            	<span class="displayDescription">Description:<?php echo $result['event_description'] ?></span>
            </div>
            <div>
            	Presenter:<?php echo $result['event_presenter'] ?>
            </div>
            <div>
            	<span class="displayTime">Time:<?php echo $result['event_time']?></span>
            </div>
            <div>
            	<span class="displayDate">Date:<?php echo date("m/d/y", $date) ?></span>
            </div>
        </div>
    </p>

<?php
  	}//close while loop

	$conn = null;	//Close the database connection
?>
</div>
</body>
</html>
