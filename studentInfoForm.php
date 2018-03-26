<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>DMACC Portfolio Day Bio Form</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- css3-mediaqueries.js for IE less than 9 -->

<script src="css3-mediaqueries.js"></script>
<script src="jquery-3.2.1.js"></script>
<script>

	$(document).ready(function(){
		if( $("select[name=program]	option:selected").val() == "webDevelopment")
		{
			$(".secondWeb").css("display", "inline");
		}
		else
		{
			$(".secondWeb").css("display", "none");
		}

		$("select#program").change(function(){
			if( $("select#program option:checked").val() == "webDevelopment")
			{
				$(".secondWeb").css("display", "inline");
			}
			else
			{
				$(".secondWeb").css("display", "none");
			}
		});

		function resetForm(){
			$("#firstName").val("");
			$("#lastName").val("");
			$("#program").val("default");
			$("#websiteAddress").val("");
			$("#websiteAddress2").val("");
			$("#email").val("");
			$("#hometown").val("");
			$("#careerGoals").val("");
			$("#threeWords").val("");
		}
	});


	</script>

  <style>
	img{
		display: block;
		margin: 0 auto;
	}
	.frame{
		background-image: url("orange popsicle.jpg");
		padding: 1em;
	}
	.frame2{
		background-image: url("citrus.jpg");
		padding: 1.3em;
	}
	body{
		background-image: url("bodacious.png");
		margin: 1.5em;
	}

	.main {
		padding: 1em;
		background-color: white;
	}
	form{
		text-align: center;
	}
	h2 {
		text-align: center;
	}
	.robotic{
		display: none;
	}

	.form {
		background-color:white;
		padding-left: 5em;
	}
	p {
		align:left;
	}
	.citrus{
		margin: auto;
		background-image: url("raspberry.jpg");
		padding: 1.3em;
		width: 70%;
	}
	.bamboo{
		background-image: url("bamboo.jpg");
		padding: 1em;
	}
	.violet{
		background-image: url("ultra violet.png");
		padding: .5em;
	}
	.secondWeb{
		display: none;
	}
	table{
		margin: auto;
	}
	table td{
		padding-bottom: .75em;
	}
	.error{
		font-style: italic;
		color: #d42a58;
		font-weight: bold;
	}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  img {
    width:100%;
  }
  .form {
	width:100%;
	padding-left: .1em;
	padding-top: .1em;
  }
  .citrus {
	background-image:none;
  }
  .bamboo {
	background-image:none;
  }
  .violet {
	background-image:none;
  }
  .secondWeb{
		display: none;
	}
  table{
		margin: auto;
	}
  table td{
		padding-bottom: .5em;
	}
}

  </style>

<!-- Input Field validations.

validateFirstName
	// valid first name should only include letters, numbers, and spaces
	// ... must be present


validateLastName
	// valid last name should only include letters, numbers and spaces
	// ... must be present

validateProgram
	//valid program must not be default options

validateWebsiteAddress
	//valid URL format

validateWebsiteAddress2
	//valid URL format

validateLinkedIn
	//valid URL to linkedin.com

validateEmail
	//valid email should be in a proper format
	//Matches: bob@aol.com | bob@wrox.co.uk | bob@domain.info |123@123.123
	//Non-Matches: a@b | notanemail | bob@@.

validateHometown
	// valid name should only include letters, numbers, spaces, and commas
	// ... must be present

validateCareerGoals
	//valid career goals should include only numbers, letters, spaces, and basic punctuation

validateThreeWords
	//valid three-words should include only numbers, letters, spaces, and basic punctuation

-->

<?php
$emailLogin = "";
$firstName = "";
$lastName = "";
$program = "";
$programTwo = "";
$website = "";
$email = "";
$linkedIn = "";
$websiteTwo = "";
$hometown = "";
$careerGoals = "";
$threeWords = "";

$emailLoginErrMsg = "";
$firstNameErrMsg = "";
$lastNameErrMsg = "";
$programErrMsg = "";
$programTwoErrMsg = "";
$websiteErrMsg = "";
$emailErrMsg = "";
$linkedInErrMsg = "";
$websiteTwoErrMsg = "";
$hometownErrMsg = "";
$careerGoalsErrMsg = "";
$threeWordsErrMsg = "";
$validForm = false;

function validEmailLogin(){
  global $emailLogin, $emailErrMsg;
  $emailErrMsg = "";
  if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$emailLogin))		//Copied straight from W3Schools.  Uses a Regular Expression
  	{
		$validForm = false;
  		$emailErrMsg = "Invalid email format";
  	}
}
function validName(){
  global $firstName, $lastName, $firstNameErrMsg, $lastNameErrMsg;
  $firstNameErrMsg = "";

	if($firstName == "")
	{
		$validForm = false;
		$firstNameErrMsg = "Name cannot be empty";
	}
  $lastNameErrMsg = "";

	if($lastName == "")
	{
		$validForm = false;
		$lastNameErrMsg = "Name cannot be empty";
	}

}
function validProgram(){
  global $program, $programTwo, $programErrMsg, $programTwoErrMsg;
  if ($program == "default"){
    $programErrMsg = "Please select program.";
    $validForm = false;
  }
  if ($programTwo == ""){
    $programTwoErrMsg = "Please select program.";
    $vaildForm = false;
  }
}
function validEmail(){
  global $email, $emailErrMsg, $emailLogin, $emailLoginErrMsg;
  $emailErrMsg = "";
  if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
  	{
		$validForm = false;
  		$emailErrMsg = "Invalid email format";
  	}
  if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$emailLogin))		//Copied straight from W3Schools.  Uses a Regular Expression
    {
    $validForm = false;
      $emailLoginErrMsg = "Invalid email format";
    }
}
function validWebsite(){
  global $website, $websiteTwo, $websiteErrMsg, $websiteTwoErrMsg;
  if ($website == ""){
    $websiteErrMsg = "Website must not be blank";
    $validForm = false;
  }
  if (!preg_match("/@^(http\:\/\/|https\:\/\/)?([a-z0-9][a-z0-9\-]*\.)+[a-z0-9][a-z0-9\-]*$@i/", $website)){
        $websiteErrMsg = "Invalid Website.";
        $vaildForm = false;
  }
  if ($websiteTwo == ""){
    $websiteTwoErrMsg = "Website must not be blank";
    $validForm = false;
  }
  if (!preg_match("/@^(http\:\/\/|https\:\/\/)?([a-z0-9][a-z0-9\-]*\.)+[a-z0-9][a-z0-9\-]*$@i/", $websiteTwo)){
        $websiteTwoErrMsg = "Invalid Website.";
        $vaildForm = false;
  }
}
function validHometown(){
  if ($hometown==""){
    $validForm= false;
    $hometownErrMsg ="Hometown must not be blank.";
  }
}
function validGoals(){
  if($careerGoals ==""){
    $careerGoalsErrMsg = "Please add carrer goals.";
    $validForm = false;
  }
}
function validThreeWords(){
  if($threeWords == ""){
    $wordsErrMsg = "Please describe yourself in three words";
    $validForm = false;
  }
}


if(isset($_Post["submitBio"]) ){
  $emailLogin = $_POST["emailToLogin"];
  $firstName = $_Post["firstName"];
  $lastName = $_POST["lastName"];
  $program = $_POST["program"];
  $programTwo = $_POST["program2"];
  $website = $_POST["websiteAddress"];
  $email = $_POST["email"];
  $linkedIn = $_POST["linkedIn"];
  $websiteTwo = $_POST["websiteAddress2"];
  $hometown = $_POST["hometown"];
  $careerGoals = $_POST["careerGoals"];
  $threeWords = $_POST["threeWords"];
  $validForm = true;

validEmail();
validName();
validProgram();
validWebsite();
validHometown();
validGoals();
validThreeWords();

}


 ?>

</head>

<section class="orange">
<body>
<div class="frame2">
<div class="frame">

  <div class="main">
  <div><img src="madonna.gif" alt="Mix gif" ></div>
  <br>

<!--<a href = 'dmaccPortfolioDayLogout.php'>Log Out</a>-->

<section class="citrus">
<section class="bamboo">
<section class="violet">

	<div class="main form">

	<h2></h2>
	</table>
	<form id="portfolioBioForm" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">

		<table>
		<tr>
		<td>Login Email:<br> <input type="text" id="emailToLogin" name="emailToLogin" /></td>
		</tr>
		<tr>
		<td>First Name:<br> <input type="text" id="firstName" name="firstName" /><br><span class="error" id="firstNameError"><?php echo $firstNameErrMsg?></span></td>
		</tr>
		<tr>
		<td>Last Name:<br> <input type="text" id="lastName" name="lastName" /><br><span class="error" id="lastNameError"></span><?php echo $lastNameErrMsg ?></td>
		</tr>
		<tr>
		<td >Program:<br> <select id="program" name="program">
				<option value="default">---Select Your Program---</option>
				<option value="animation" >Animation</option>
				<option value="graphicDesign" >Graphic Design</option>
				<option value="photography" >Photography</option>
				<option value="videoProduction" >Video Production</option>
				<option value="webDevelopment" >Web Development</option>
			</select><br><span class="error" id="programError"><?php echo $programErrMsg ?></span><td>
		</tr>
		<tr>
		<td >Secondary Program:<br> <select id="program2" name="program2">
				<option value="none" >---No Secondary Program---</option>
				<option value="animation" >Animation</option>
				<option value="graphicDesign" >Graphic Design</option>
				<option value="photography" >Photography</option>
				<option value="videoProduction" >Video Production</option>
				<option value="webDevelopment" >Web Development</option>
			</select><br><span class="error" id="program2Error"><?php echo $programTwoErrMsg ?></span><td>
		</tr>
		<tr>
		<td>Website Address:<br> <input type="text" id="websiteAddress" name="websiteAddress" /><br><span class="error" id="websiteAddressError"><?php $websiteErrMsg ?></span></td>
		</tr>
		<tr>
		<td>Personal Email:<br><input type="text" id="email" name="email"  /><br><span class="error" id="emailError"><?php echo $emailErrMsg ?></span></td>
		</tr>
		<tr>
		<td>LinkedIn Profile:<br><input type="text" id="linkedIn" name="linkedIn" /><br><span class="error" id="linkedInError"></span></td>
		<tr>
		<td><span class="secondWeb">Secondary Website Address (git repository, etc.):<br> <input type="text" id="websiteAddress2" name="websiteAddress2" value=""/><br><span class="error" id="websiteAddress2Error"><?php $websiteTwoErrMsg ?></span></span></td>
		</tr>
		<tr>
		<td>Hometown:<br> <input type="text" id="hometown" name="hometown" /><br><span class="error" id="hometownError"><?php echo $hometownErrMsg ?></span></td>
		</tr>
		<tr>
		<td>Career Goals:<br> <textarea id="careerGoals" name="careerGoals"> </textarea><br><span class="error" id="careerGoalsError"><?php $goalsErrMsg?> </span></td>
		</tr>
		<tr>
		<td>3 Words that Describe You:<br> <input type="text" id="threeWords" name="threeWords" value=""/><br><span class="error" id="threeWordsError"><?php $wordsErrMsg?></span></td>
		<p class="robotic" id="pot">
			<label>Leave Blank</label>
			<input type="hidden" name="inRobotest" id="inRobotest" class="inRobotest" />
		</p>
		<input type="hidden" id="submitConfirm" name="submitConfirm" value="submitConfirm"/>
		</tr>
		<tr>
		<td><input type="button" id="submitBio" name="submitBio" value="Submit Bio" /></td>
		</tr>
		<tr>
		<td><input type="reset" id="resetBio" name="resetBio" value="Reset Bio"/></td>
		</tr>
		</table>
	</form>

	</div>


</section>
</section>
</section>

</div>

</body>
</section>

</html>
