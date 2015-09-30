<?php
session_start();
?>
<?php
	
	if(!isset($_SESSION['user_id']))
	{
		header("location: http://localhost:/SAYipl/login/mysignin.php");
	}
?>
<?php 

include('connection.php');
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>Welcome To SAYIPL.com</title>
<style type="text/css">
@import url("MI/monsieurladoulaise_regular/stylesheet.css");
</style>
<!-- mobile -->
<link href="MI/monsieurladoulaise_regular/mobile.css" rel="stylesheet" type="text/css" media="only screen and (max-width:800px)">
<link href="MI/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="MI/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="MI/SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<link href="MI/jQuery/css/style.css" rel="stylesheet" type="text/css">
<script src="MI/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="MI/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="MI/SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="MI/includes/jquery-1.4.2.js" type="text/javascript"></script>
<script src="MI/jQuery/js/jquery.jsocial.js" type="text/javascript"></script>
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
	left:994px;
	top:13px;
	width:109px;
	height:33px;
	z-index:11;
}
#apDiv2 {
	position:absolute;
	left:1122px;
	top:17px;
	width:84px;
	height:33px;
	z-index:12;
}
#apDiv3 {
	position:absolute;
	left:849px;
	top:864px;
	width:108px;
	height:24px;
	z-index:13;
}
#apDiv4 {
	position:absolute;
	left:727px;
	top:865px;
	width:106px;
	height:24px;
	z-index:14;
}
</style>
<link href="css/logout.css" rel="stylesheet" type="text/css">
</head>

<body>
<header></header>
<nav>
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="editindex.php">HOME</a></li>
    <li><a href="editnews.php">NEWS</a></li>
    <li><a href="editschedule.php">SCHEDULE</a>    </li>
    <li><a href="editvideos.php">VIDEOS</a></li>
<li><a href="editgallery.php">GALLERY</a></li>
    <li><a href="editshop.php">SHOP</a></li>
    <li><a href="editabout.php">ABOUT</a></li>
  </ul>
</nav>
<section>
  <h2>&nbsp;</h2>
  <h2>Lets connect.</h2>
  <h3><?php 
		$remarks=$_GET['remarks'];
		
		
		if ($remarks=='success')
		{
		echo 'Updation Successful !!';
		}
		
		
?></h3>
  <h3> <?php $result_set= mysql_query("SELECT * 
FROM  `about` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["title"];
	}
	?>.</h3>
  <p><a href="http://maps.google.co.in/maps?client=safari&rls=en&oe=UTF-8&redir_esc=&um=1&ie=UTF-8&q=usha+pravin+gandhi&fb=1&gl=in&hq=usha+pravin+gandhi&hnear=0x3be7c6306644edc1:0x5da4ed8f8d648c69,Mumbai,+Maharashtra&cid=0,0,14287806575989376830&sa=X&ei=MH4jUdfhJ8W4rAeB3oHgCA&ved=0CI4BEPwSMAA" target="_blank"> <?php $result_set= mysql_query("SELECT * 
FROM  `about` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["content"];
	}
	?></a></p>
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
      <input type="submit" name="SEND" id="SEND" value="SEND">
    </p>
    <p>&nbsp;</p>
<p>&nbsp;</p>
  </form>
  <p>&nbsp;</p>
</section>
<div id="uname">
<p> Welcome, <?php echo $_SESSION['firstname']; ?></p>
</div>
<div id="logout">
<a href="logout.php"> Log Out </a>
</div>
<div id="apDiv3">
<a href="edit1about.php"> Edit Page </a>
</div>
<div id="apDiv4">
<a href="staff.php"> Back to Staff </a>
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
<?php
mysql_close($con);
?>