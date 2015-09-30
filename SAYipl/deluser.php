<?php
session_start();
?>
<?php
	
	if(!isset($_SESSION['user_id']))
	{
		header("location: mysignin.php");
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign In to Sayipl.com</title>
<style type="text/css">
section {
	position: relative;
	top: 30px;
	width: 30%;
	z-index: 5;
	background-color: rgba(0,0,0,0.7);
	padding: 10px;
	float: right;
	height: 320px;
	border-radius: 0px 30px 0px 30px;
}
a {
	text-decoration: none;
	color: rgba(255,255,255,1);
}
p {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	color: rgba(255,255,255,1);
	margin: 5px;
	padding: 5px;
	font-size: 14px;
	text-decoration: none;
}

body {
	background-image: url(images/finalphoto.jpg);
	background-repeat: repeat;
}
aside {
	position: absolute;
	left: 20px;
	top: 37px;
	width: 45%;
	z-index: 6;
	background-color: rgba(0,0,0,0.6);
	border-radius: 30px 0px 30px 0px;
}
h1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 30px;
	font-style: normal;
	font-weight: bolder;
	color: rgba(191,49,68,1);
	text-decoration: none;
	word-spacing: normal;
	margin: 15px;
	padding: 15px;
}
h4 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 11px;
	color: rgba(255,255,255,1);
	word-spacing: 2px;
	letter-spacing: 2px;
}
</style>
<link href="file:///C|/wamp/www/SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<style type="text/css"></style>
<script src="file:///C|/wamp/www/SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#006600" link="#FFFFFF">

<section>
<h1>Welcome, <?php echo $_SESSION['firstname']; ?></h1>
<br/>
<h4> DELETING A USER: </h4>
<form name="form1" method="POST" action="http://localhost:/SAYipl/delete.php">
<h4>Firstname of the user: 
  <span id="sprytextfield1">
  <label for="firstname4"></label>
  <input type="text" name="firstname" id="firstname4">
  <span class="textfieldRequiredMsg">A value is required.<br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  </span></span></h4>
<h4>Lastname of the user: 
  <span id="sprytextfield2">
  <label for="lastname5"></label>
  <input type="text" name="lastname" id="lastname5">
  <span class="textfieldRequiredMsg">A value is required.<br>
  </span></span></h4>
<h4>Email of the user:  <span id="sprytextfield4">
<label for="email5"></label>
<input type="text" name="email" id="email5">
<span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></h4>

<input type="submit" name="Delete" id="submit" value="Delete">
</form>
</section>
<script type="text/javascript">
var sprytextfield3 = new Spry.Widget.ValidationTextField("username", "email", {validateOn:["blur", "change"]});
var sprypassword1 = new Spry.Widget.ValidationPassword("password", {validateOn:["blur", "change"], minChars:5, maxChars:10});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "email");
</script>
</body>
</html>
<?php
mysql_close($con);
?>

