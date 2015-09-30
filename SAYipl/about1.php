<?php
session_start();
?>
<?php
	
	if(!isset($_SESSION['user_id']))
	{
		header("location: http://localhost:/SAYipl/login/mysignin.php");
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>Welcome To SAYIPL.com</title>
<style type="text/css">
@import url("RCB/monsieurladoulaise_regular/stylesheet1.css");
</style>
<!-- mobile -->
<link href="RCB/monsieurladoulaise_regular/mobile.css" rel="stylesheet" type="text/css" media="only screen and (max-width:800px)">
<link href="RCB/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="RCB/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="RCB/SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<link href="RCB/jQuery/css/style.css" rel="stylesheet" type="text/css">
<script src="RCB/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="RCB/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="RCB/SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="RCB/includes/jquery-1.4.2.js" type="text/javascript"></script>
<script src="RCB/jQuery/js/jquery.jsocial.js" type="text/javascript"></script>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2149023" binding="#social" />
</oa:widgets>
-->
</script>
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:951px;
	top:20px;
	width:107px;
	height:33px;
	z-index:11;
}
#apDiv2 {
	position:absolute;
	left:1089px;
	top:30px;
	width:102px;
	height:36px;
	z-index:12;
}
</style>
</head>

<body>
<header></header>
<nav>
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="index1.php">HOME</a></li>
    <li><a href="news1.php">NEWS</a></li>
    <li><a href="schedule1.php">SCHEDULE</a>    </li>
    <li><a href="videos1.php">VIDEOS</a></li>
<li><a href="gallery1.php">GALLERY</a></li>
    <li><a href="shop1.php">SHOP</a></li>
    <li><a href="about1.php">ABOUT</a></li>
  </ul>
</nav>
<section>
  <h2>&nbsp;</h2>
  <h2>Lets connect.</h2>
  <h3>&nbsp;</h3>
  <h3> All the ipl fans can connect at sayipl.com. We would love to hear your reviews on our website. Email us at <a href="mailto: sayipl@gmail.com">sayipl(at)gmail(dot)com</a>.</h3>
  <p><a href="http://maps.google.co.in/maps?client=safari&rls=en&oe=UTF-8&redir_esc=&um=1&ie=UTF-8&q=usha+pravin+gandhi&fb=1&gl=in&hq=usha+pravin+gandhi&hnear=0x3be7c6306644edc1:0x5da4ed8f8d648c69,Mumbai,+Maharashtra&cid=0,0,14287806575989376830&sa=X&ei=MH4jUdfhJ8W4rAeB3oHgCA&ved=0CI4BEPwSMAA" target="_blank"> Usha Pravin Gandhi College of Management,<br>
    Bhaktivedanta Swami Marg,<br>
    Vile Parle West,<br>
  Mumbai.</a></p>
  <p>&nbsp;</p>
  <form name="form1" method="post" action="">
    <span id="nameTextField">
      <label for="First Name"></label>
      <input type="text" name="First Name" id="First Name">
      <span class="textfieldRequiredMsg">A value is required.</span></span>
    
    <p><span id="emailTextField">
    <label for="email"></label>
    <input type="text" name="email" id="email">
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></p>
    <p><span id="messageTextArea">
    <label for="Message"></label>
    <textarea name="Message" id="Message" cols="45" rows="5"></textarea>
    <span id="countmessageTextArea">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMinCharsMsg">Minimum number of characters not met.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="Submit">
    </p>
    <p>&nbsp;</p>
<p>&nbsp;</p>
  </form>
  <p>&nbsp;</p>
</section>
<div id="apDiv1">
<p> Welcome, <?php echo $_SESSION['firstname']; ?></p>
</div>
<div id="apDiv2">
<a href="logout.php"> Log Out </a>
</div>
<p>&nbsp;</p>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<h2>&nbsp;</h2>

<footer>
 <br><br><br><br>
  <div class="social"></div>
  <script type="text/javascript">
// BeginOAWidget_Instance_2149023: #social
	
	$('.social').jsocial({
			twitter		:  'myID',
			facebook	:  'facebook.com/myID',
			flickr		:  '',
			delicious	:  '',
			linked		:  'linkedin.com/in/myID',
			youtube		:  'youtube.com/myID',
			feed		:  '',
			friendfeed	:  '',
			digg		:  '',
			lastfm		:  '',
			center		: false,	
			inline		: true,
			small		: false,
			newPage		: true
		});
	

// EndOAWidget_Instance_2149023
  </script>
  <br><br>
    
  <p><strong> &nbsp;&nbsp; sayipl.com &copy; 2013</strong></p>

</footer>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("nameTextField", "none", {hint:"Your Full Name", validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("emailTextField", "email", {hint:"Your email", validateOn:["blur"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("messageTextArea", {minChars:1, maxChars:500, validateOn:["blur"], counterType:"chars_remaining", counterId:"countmessageTextArea", hint:"Your Message"});
</script>
</body>
</html>
