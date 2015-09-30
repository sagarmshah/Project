<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign Up For Sayipl.com</title>
<style type="text/css">
section {
	position: absolute;
	left: 29px;
	top: 18px;
	width: 535px;
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
<link href="../../../Users/COMPAQ/Desktop/project/project/Registration/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="../../../Users/COMPAQ/Desktop/project/project/Registration/SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<link href="../../../Users/COMPAQ/Desktop/project/project/Registration/SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<link href="../../../Users/COMPAQ/Desktop/project/project/Registration/SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css">
<link href="../../../Users/COMPAQ/Desktop/project/project/Registration/SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<script src="../../../Users/COMPAQ/Desktop/project/project/Registration/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../../../Users/COMPAQ/Desktop/project/project/Registration/SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="../../../Users/COMPAQ/Desktop/project/project/Registration/SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="../../../Users/COMPAQ/Desktop/project/project/Registration/SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<script src="../../../Users/COMPAQ/Desktop/project/project/Registration/SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
</head>

<body bgcolor="#006600">

<section>
<h1>SIGN UP</h1>
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="2">
		<div align="center">
		
	    </div></td>
  </tr>
</table>
<form name="form1" method="get" action="code.php">
  <p>
    <label for="fname"></label>
    FIRST  NAME:<span id="sprytextfield1">
    <label for="fname"></label>
    <input type="text" name="fname" id="fname">
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p>LAST NAME:
    <label for="lname"></label>
    <span id="sprytextfield2">
    <label for="lname"></label>
    <input type="text" name="lname" id="lname">
    <span class="textfieldRequiredMsg">A value is required.</span></span>  </p>
  <p>ADDRESS:
    <label for="addr"></label>
    <span id="sprytextarea1">
    <label for="addr"></label>
    <textarea name="addr" id="addr" cols="45" rows="5"></textarea>
<span class="textareaRequiredMsg">A value is required.</span></span>  </p>
  <p>EMAIL ID:
    <label for="email"></label>
    <span id="sprytextfield3">
    <label for="email"></label>
    <input type="text" name="email" id="email">
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span>  </p>
  <p>PASSWORD:
    <label for="pass"></label>
    <span id="sprypassword1">
    <label for="pass"></label>
    <input type="password" name="pass" id="pass">
    <span class="passwordRequiredMsg">A value is required.</span></span>  </p>
  <p>CONFIRM:
    <label for="confirm"></label>
    <span id="spryconfirm1">
    <label for="confirm"></label>
    <input type="password" name="confirm" id="confirm">
    <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span>  </p>
  <p>PHONE NUMBER:<span id="sprytextfield4">
  <label for="number"></label>
  <input type="text" name="number" id="number">
  <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></p>
  <p>FAVORITE TEAM:<span id="spryselect1">
    <label for="team"></label>
    <select name="team" id="team">
      <option value="RCB" name="RCB">ROYAL CHALLANGE BANGALORE</option>
      <option value="MI" name="MI" selected>MUMBAI INDIANS</option>
</select>
    <span class="selectRequiredMsg">Please select an item.</span></span></p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit">
      &nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" id="reset" value="Reset">
  </p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</section>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur", "change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["blur", "change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email", {validateOn:["blur", "change"]});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["blur", "change"]});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "pass", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "phone_number", {format:"phone_custom", validateOn:["blur", "change"]});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["blur", "change"]});
</script>
</body>
</html>
