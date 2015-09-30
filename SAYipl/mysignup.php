<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign Up For Sayipl.com</title>
<style type="text/css">
section {
	position: absolute;
	left: 20px;
	top: 18px;
	width: 543px;
	z-index: 5;
	background-color: rgba(0,0,0,0.7);
}
p {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	color: rgba(255,255,255,1);
	margin: 5px;
	padding: 5px;
	font-size: 14px;
}
h1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 30px;
	font-style: normal;
	font-weight: bolder;
	color: rgba(255,255,255,1);
	text-decoration: none;
	word-spacing: normal;
	margin: 15px;
	padding: 15px;
}
</style>
<style type="text/css">
body {
	background-image: url(finalphoto.jpg);
	background-repeat: repeat-x;
}
</style>
<style type="text/css">
footer {
	position:absolute;
	top:570px;
	width:100%;
	z-index:6;
	background-image: url(login/images/common-footer-psd.png);
	background-repeat: repeat;
	opacity: 0.9;
	height: 129px;
	left: 0px;
}
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#FFFFFF">

<section>
  <h1>SIGN UP</h1>
<form name="form1" method="POST" action="http://localhost:/SAYipl/code.php?position=admin">
  <p>
    <label for="fname">FIRST NAME:</label>
    <span id="sprytextfield1">
    <label for="fname"></label>
    <input type="text" name="fname" id="fname">
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p>LAST NAME:<span id="sprytextfield2">
    <label for="lname"></label>
    <input type="text" name="lname" id="lname">
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p>ADDRESS:<span id="sprytextarea1">
    <label for="addres"></label>
    <textarea name="addres" id="addres" cols="45" rows="5"></textarea>
    <span class="textareaRequiredMsg">A value is required.</span></span></p>
  <p>EMAIL ID:<span id="sprytextfield3">
  <label for="email"></label>
  <input type="text" name="email" id="email">
  <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></p>
  <p>PASSWORD:<span id="sprypassword1">
    <label for="PASS"></label>
    <input type="password" name="PASS" id="PASS">
    <span class="passwordRequiredMsg">A value is required.</span></span></p>
  <p>CONFIRM:<span id="spryconfirm1">
    <label for="CONFIRM"></label>
    <input type="password" name="CONFIRM" id="CONFIRM">
    <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></p>
  <p>PHONE NUMBER:<span id="sprytextfield4">
  <label for="number"></label>
  <input type="text" name="number" id="number">
  <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></p>
  <p>FAVORTIE TEAM:
    <label for="favteam"></label>
    <select name="favteam" id="favteam">
      <option value="MI" selected>MUMBAI INDIANS</option>
      <option value="RCB">ROYAL CHALLENGERS</option>
    </select>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="SUBMIT">
    <input type="reset" name="reset" id="reset" value="RESET">
  </p>
  
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</section>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "PASS");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer");
</script>
</body>
</html>
