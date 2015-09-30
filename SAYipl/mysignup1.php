<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
section {
	position:absolute;
	left:13px;
	top:43px;
	width:40%;
	z-index:10;
	background-color: rgba(0,0,0,0.6);
	padding: 5px;
}
p {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 14px;
	color: rgba(255,255,255,1);
}
h1 {
	color: #FFF;
	text-shadow: 5px 5px 5px rgba(0,102,0,1);
}
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background-image: url(SIGNUPNEW.png);
	background-repeat: repeat;
}
</style>
</head>

<body>
<p>&nbsp;</p>
<section>
  <h1>SIGN UP</h1>
  <form name="form1" method="post" action="code.php">
    <span id="sprytextfield1">
      <label for="fname"></label>
    </span>
    <p>FIRST NAME:<span id="sprytextfield2">
    <label for="fname2"></label>
    <input type="text" name="fname" id="fname2">
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
    <p>LAST NAME:<span id="sprytextfield4">
      <label for="lname"></label>
      <input type="text" name="lname" id="lname">
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
    <p>ADDRESS:<span id="sprytextarea1">
      <label for="addres"></label>
      <textarea name="addres" id="addres" cols="45" rows="5"></textarea>
    <span id="countsprytextarea1">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span></span></p>
    <p>EMAIL:<span id="sprytextfield3">
      <label for="email"></label>
      <input type="text" name="email" id="email">
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></p>
    <p>PASSWORD:<span id="sprypassword1">
    <label for="PASS"></label>
    <input type="password" name="PASS" id="PASS">
    <span class="passwordRequiredMsg">A value is required.</span><span class="passwordMinCharsMsg">Minimum number of characters not met.</span><span class="passwordMaxCharsMsg">Exceeded maximum number of characters.</span></span></p>
    <p>CONFIRM:<span id="spryconfirm1">
      <label for="confirm"></label>
      <input type="password" name="confirm" id="confirm">
    <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></p>
    <p>PHONE NUMBER:<span id="sprytextfield5">
    <label for="number"></label>
    <input type="text" name="number" id="number">
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></p>
    <p>FAVORITE TEAM:
      <label for="favteam"></label>
      <select name="favteam" id="favteam">
        <option value="MI" selected>MUMBAI INDIANS</option>
        <option value="RCB">ROYAL CHALLANGE BANGALORE</option>
      </select>
    </p>
    <p>
      <input type="submit" name="submit" id="submit" value="Submit">
      <input type="reset" name="reset" id="reset" value="Reset">
    </p>
    <p>&nbsp;</p>
  </form>
</section>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {minChars:8, maxChars:12});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {counterType:"chars_count", counterId:"countsprytextarea1"});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "PASS", {validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "integer");
</script>
</body>
</html>