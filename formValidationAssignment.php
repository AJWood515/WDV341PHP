<?php
$name = "";
$socialSecurity = "";
$response = "";
$nameErrMsg = "";
$socialErrMsg = "";
$radioErrMsg = "";
$validForm = false;

function validName(){
	global $name, $nameErrMsg, $vaildForm;
	if($name == ""){
		$nameErrMsg = "Name can not be empty.";
		$validForm = false;
	}

}
function validSocial(){
	global $socialSecurity, $socialErrMsg, $vaildForm;
	if($socialSecurity == ""){
		$socialErrMsg = "Social Security number can not be empty.";
		$validForm = false;
	}

}
function validRadio(){
	global $response, $radioErrMsg, $validForm;
	if ($response == "") {
		$radioErrMsg = "Please select oneof the options.";
		$validForm = false;
	}

}

if( isset($_POST['submit']) )
{
	$name = $_POST['inName'];
	$socialSecurity = $_POST['inEmail'];
	$response = $_POST['RadioGroup1'];
	$validForm = true;

	/*validName();
	validRadio();
	validSocial();

	if($validForm){
		$form = array ($name, $socialSecurity, $response);
	}*/
}

?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Intro PHP - Form Validation Example</title>
<style>

#orderArea	{
	width:600px;
	background-color:#CF9;
}

.error	{
	color:red;
	font-style:italic;
}
</style>
</head>

<body>
<h1>WDV341 Intro PHP</h1>
<h2>Form Validation Assignment


</h2>
<div id="orderArea">
  <form id="form1" name="form1" method="post" action="formValidationAssignment.php">
  <h3>Customer Registration Form</h3>
  <table width="587" border="0">
    <tr>
      <td width="117">Name:</td>
      <td width="246"><input type="text" name="inName" id="inName" size="40" value="<?php echo $name; ?>" /></td>
      <td width="210" class="error"></td>
    </tr>
    <tr>
      <td>Social Security</td>
      <td><input type="text" name="inEmail" id="inEmail" size="40" value="<?php echo $socialSecurity; ?>" /></td>
      <td class="error"></td>
    </tr>
    <tr>
      <td>Choose a Response</td>
      <td><p>
        <label>
          <input type="radio" name="RadioGroup1" id="RadioGroup1_0" value = "radio_0" <?php if ($response == 'radio_0'){echo 'checked = "checked"';} ?>>
          Phone</label>
        <br>
        <label>
          <input type="radio" name="RadioGroup1" id="RadioGroup1_1" value = "radio_1" <?php if ($response == 'radio_1'){echo 'checked = "checked"';} ?>>
          Email</label>
        <br>
        <label>
          <input type="radio" name="RadioGroup1" id="RadioGroup1_2" value = "radio_2" <?php if ($response == 'radio_2'){echo 'checked = "checked"';} ?>>
          US Mail</label>
        <br>
      </p></td>
      <td class="error"></td>
    </tr>
  </table>
  <p>
		<!--<?php //echo $response; ?>-->
    <input type="submit" name="submit" id="button" value="Register" />
    <input type="reset" name="button2" id="button2" value="Clear Form" />
		<br/>
		<!--<?php// foreach($form as $value){
			//echo "$value<br/>";}?> -->
  </p>
</form>
</div>

</body>
</html>
