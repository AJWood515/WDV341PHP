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
//print_r($_POST);

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
$careerGoals ="";
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
$goalsErrMsg = "";
$wordsErrMsg = "";
$validFormMsg = "";
$validForm = false;

function validEmailLogin(){
  global $emailLogin, $emailErrMsg, $validForm;
  $emailErrMsg = "";
  if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$emailLogin))		//Copied straight from W3Schools.  Uses a Regular Expression
  	{
		$validForm = false;
  		$emailErrMsg = "Invalid email format";
  	}
}
function validName(){
  global $firstName, $lastName, $firstNameErrMsg, $lastNameErrMsg, $validForm;
  $firstNameErrMsg = "";
	if($firstName == "")
	{
		$validForm = false;
		$firstNameErrMsg = "Name cannot be empty";
	}
  elseif(!preg_match("/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/", $firstName)){
    $validForm = false;
    $firstNameErrMsg="No special chaacters.";
  }
  $lastNameErrMsg = "";

	if($lastName == "")
	{
		$validForm = false;
		$lastNameErrMsg = "Name cannot be empty";
	}
  elseif(!preg_match("/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/", $lastName)){
    $validForm = false;
    $lastNameErrMsg="No special chaacters.";
  }
}
function validProgram(){
  global $program, $programTwo, $programErrMsg, $programTwoErrMsg, $validForm;
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
  global $email, $emailErrMsg, $emailLogin, $emailLoginErrMsg, $validForm;
  $emailErrMsg = "";
  if($email = ""){
    $emailErrMsg =" Email can't be blank.";
    $validForm = false;
  }
  if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
  	{
		$validForm = false;
  		$emailErrMsg = "Invalid email format";
  	}
  /*elseif (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$emailLogin))		//Copied straight from W3Schools.  Uses a Regular Expression
    {
    $validForm = false;
      $emailLoginErrMsg = "Invalid email format";
    }*/
}
function validLinkedIn(){
  global $linkedIn, $linkedInErrMsg, $validForm;
  if ($linkedIn == ""){
    $validForm = false;
    $linkedInErrMsg = "Must not be empty.";
  }
  elseif(!preg_match("/http(s)?:\/\/([w]{3}\.)?linkedin\.com\/in\/([a-zA-Z0-9-]{5,30})\/?/", $linkedIn)){
    $validForm = false;
    $linkedInErrMsg = "Must be a valid LinkedIn profile.";
  }
}
function validWebsite(){
  global $website, $websiteTwo, $websiteErrMsg, $websiteTwoErrMsg, $validForm;
  if ($website == ""){
    $websiteErrMsg = "Website must not be blank";
    $validForm = false;
  }
  elseif (!preg_match("/^((http:\/\/www\.)|(www\.)|(http:\/\/))[a-zA-Z0-9._-]+\.[a-zA-Z.]{2,5}$/", $website)){
        $websiteErrMsg = "Invalid Website.";
        $vaildForm = false;
  }
/*  if ($websiteTwo == ""){
    $websiteTwoErrMsg = "Website must not be blank";
    $validForm = false;
  }
  elseif (!preg_match("/@^(http\:\/\/|https\:\/\/)?([a-z0-9][a-z0-9\-]*\.)+[a-z0-9][a-z0-9\-]*$@i/", $websiteTwo)){
        $websiteTwoErrMsg = "Invalid Website.";
        $vaildForm = false;
  }*/
}
function validHometown(){
  global $hometown, $hometownErrMsg, $validForm;
  if ($hometown==""){
    $validForm= false;
    $hometownErrMsg ="Hometown must not be blank.";
  }
}
function validGoals(){
  global $careerGoals, $goalsErrMsg, $validForm;
  if($careerGoals == ""){
    $goalsErrMsg = "Please add carrer goals.";
    $validForm = false;
  }
  elseif (!preg_match("/^(a-z|A-Z|0-9)*[^#$%^&*()']*$/", $careerGoals)){
    $goalsErrMsg = "No special characters.";
    $validForm = false;
  }
}
function validThreeWords(){
  global $threeWords, $wordsErrMsg, $validForm;
  if($threeWords == ""){
    $wordsErrMsg = "Please describe yourself in three words";
    $validForm = false;
  }
  elseif (!preg_match("/^(a-z|A-Z|0-9)*[^#$%^&*()']*$/", $threeWords)){
    $wordsErrMsg = "No special characters.";
    $validForm = false;
  }
}
if( isset($_POST['submitBio']) )
{
  $emailLogin = $_POST["emailToLogin"];
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $program = $_POST["program"];
  $programTwo = $_POST["program2"];
  $website = $_POST["websiteAddress"];
  $email = $_POST["email"];
  $linkedIn = $_POST["linkedIn"];
  $websiteTwo = $_POST["websiteAddress2"];
  $hometown = $_POST["hometown"];
  $careerGoals = trim($_POST["careerGoals"]);
  $threeWords = $_POST["threeWords"];
  $validForm = true;

validName();
validProgram();
validWebsite();
validHometown();
validGoals();
validThreeWords();
validLinkedIn();
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

<?php
if($validForm){
?>
    <h3>Thanks</h3>
    <p> Got it!</p>
  </div>
<?php
}
else{
  ?>
<div class="main form">
	<h2></h2>
	</table>
	<form id="portfolioBioForm" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
		<table>
		<tr>
		<td>Login Email:<br> <input type="text" id="emailToLogin" name="emailToLogin" value = "<?php echo $emailLogin; ?>"/></td>
		</tr>
		<tr>
		<td>First Name:<br> <input type="text" id="firstName" name="firstName" value ="<?php echo $firstName; ?>" /><br><span class="error" id="firstNameError"><?php echo $firstNameErrMsg; ?></span></td>
		</tr>
		<tr>
		<td>Last Name:<br> <input type="text" id="lastName" name="lastName" value = "<?php echo $lastName; ?>" /><br><span class="error" id="lastNameError"><?php echo $lastNameErrMsg; ?></span></td>
		</tr>
		<tr>
		<td >Program:<br> <select id="program" name="program" value = "<?php echo $program; ?>">
				<option value="default">---Select Your Program---</option>
				<option value="animation" <?php if($program == "animation") {echo 'selected = "selected"';}?>>Animation</option>
				<option value="graphicDesign" <?php if($program == "graphicDesign") {echo 'selected = "selected"';}?>>Graphic Design</option>
				<option value="photography" <?php if($program == "photography") {echo 'selected = "selected"';}?>>Photography</option>
				<option value="videoProduction" <?php if($program == "videoProduction") {echo 'selected = "selected"';}?>>Video Production</option>
				<option value="webDevelopment" <?php if($program == "webDevelopment") {echo 'selected = "selected"';}?>>Web Development</option>
			</select><br><span class="error" id="programError"><?php echo "$programErrMsg"; ?></span><td>
		</tr>
		<tr>
		<td >Secondary Program:<br> <select id="program2" name="program2" value = "<?php echo $programTwo; ?>">
				<option value="none" >---No Secondary Program---</option>
				<option value="animation" <?php if($program == "animation") {echo 'selected = "selected"';}?>>Animation</option>
				<option value="graphicDesign" <?php if($program == "graphicDesign") {echo 'selected = "selected"';}?>>Graphic Design</option>
				<option value="photography" <?php if($program == "photography") {echo 'selected = "selected"';}?>>Photography</option>
				<option value="videoProduction" <?php if($program == "videoProduction") {echo 'selected = "selected"';}?>>Video Production</option>
				<option value="webDevelopment" <?php if($program == "webDevelopment") {echo 'selected = "selected"';}?>>Web Development</option>
			</select><br><span class="error" id="program2Error"><?php echo "$programTwoErrMsg"; ?></span><td>
		</tr>
		<tr>
		<td>Website Address:<br> <input type="text" id="websiteAddress" name="websiteAddress" value= "<?php echo $website; ?>"/><br><span class="error" id="websiteAddressError"><?php echo $websiteErrMsg; ?></span></td>
		</tr>
		<tr>
		<td>Personal Email:<br><input type="text" id="email" name="email" value="<?php echo $email; ?>" /><br><span class="error" id="emailError"><?php echo $emailErrMsg; ?></span></td>
		</tr>
		<tr>
		<td>LinkedIn Profile:<br><input type="text" id="linkedIn" name="linkedIn" value="<?php echo $linkedIn; ?>"/><br><span class="error" id="linkedInError"><?php echo $linkedInErrMsg; ?></span></td>
		<tr>
		<td><span class="secondWeb">Secondary Website Address (git repository, etc.):<br> <input type="text" id="websiteAddress2" name="websiteAddress2" value="<?php echo $websiteTwo; ?>"/><br><span class="error" id="websiteAddress2Error"><?php "$websiteTwoErrMsg"; ?></span></span></td>
		</tr>
		<tr>
		<td>Hometown:<br> <input type="text" id="hometown" name="hometown" value="<?php echo $hometown; ?>"/><br><span class="error" id="hometownError"><?php echo $hometownErrMsg; ?></span></td>
		</tr>
		<tr>
		<td>Career Goals:<br> <textarea id="careerGoals" name="careerGoals" value="<?php echo $careerGoals; ?>"/> </textarea><br><span class="error" id="careerGoalsError"><?php echo $goalsErrMsg; ?> </span></td>
		</tr>
		<tr>
		<td>3 Words that Describe You:<br> <input type="text" id="threeWords" name="threeWords" value="<?php echo $threeWords; ?>" /><br><span class="error" id="threeWordsError"><?php echo $wordsErrMsg; ?></span></td>
		<p class="robotic" id="pot">
			<label>Leave Blank</label>
			<input type="hidden" name="inRobotest" id="inRobotest" class="inRobotest" />
		</p>
		<input type="hidden" id="submitConfirm" name="submitConfirm" value="submitConfirm"/>
		</tr>
		<tr>
		<td><input type="submit" id="submitBio" name="submitBio" value="Submit Bio" /></td>
		</tr>
		<tr>
		<td><input type="reset" id="resetBio" name="resetBio" value="Reset Bio"/></td>
		</tr>
		</table>
	</form>
	</div>
<?php }
?>

</section>
</section>
</section>
</div>
</body>
</section>

</html>
