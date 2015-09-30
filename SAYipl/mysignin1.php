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
<style type="text/css"></style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#006600" link="#FFFFFF">

<section>
<h1>LOG IN</h1>
<form name="form1" method="post" action="code1.php">
<p>&nbsp;</p>
<p>EMAIL ID:&nbsp;&nbsp;&nbsp;&nbsp;    
  <label for="mail"></label>
  <span id="userid">
  <label for="username"></label>
  <input type="text" name="username" id="username">
  <span class="textfieldRequiredMsg"><br/>A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></p>
<p>PASSWORD:
    <label for="PASS"></label>
    <span id="upassword">
    <label for="password"></label>
    <input type="password" name="password" id="password">
    <span class="passwordRequiredMsg"><br/>A value is required.</span></span></p>
  <p>
    <input type="submit" name="submit" id="submit" value="Sign In">
&nbsp;&nbsp;&nbsp;&nbsp;  </p>
  <p><em><a href="mysignup.php" target="_self">Open an Account?</a></em></p>
  
</form>
<h2>
<?php 
		//$remarks=$_GET['remarks'];
		
		$remark=$_GET['remark'];
		
		if($remark=='logout')
		{
			echo '<h4>You have logged out !</h4>';
		}
		
	?>
</h2>
</section>
<aside>
  <blockquote>
    <h1> ABOUT IPL </h1>
    <h4>The Indian Premier League (IPL) is a professional league for Twenty20 cricket championship in India. It was initiated by the Board of Control for Cricket in India (BCCI), headquartered in Mumbai, Maharashtraand is supervised by BCCI Vice President Rajeev Shukla, who serves as the league's Chairman and Commissioner. It is currently contested by nine teams, consisting of players from around the cricketing world. It was started after an altercation between the BCCI and the Indian Cricket League.<br>
      In 2010, IPL became the first sporting event ever to be broadcast live on YouTube. Its brand value is estimated to be around US$2.99 billion in fifth season. However, the league has been engulfed by series of corruption scandals where allegations of cricket betting, money laundering and spot fixing were witnessed.<br>
      The Premier League is generally considered to be the world's showcase for Twenty20 cricket, a shorter format of cricket consisting only 20 overs. Top Indian and international players take part in IPL, contributing to what is the world's &quot;richest cricket tournament&quot;.<br>
    In 2012 the naming rights for the series was awarded to Pepsi. Two eligible bids were received, with Pepsi winning over Airtel with a bid of  396.8 crore.</h4>
  </blockquote>
</aside>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("userid", "email");
var sprypassword1 = new Spry.Widget.ValidationPassword("upassword");
</script>
</body>
</html>
