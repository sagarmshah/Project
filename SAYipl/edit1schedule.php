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
<link href="MI/jQuery/css/style.css" rel="stylesheet" type="text/css">
<script src="MI/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
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
#uname {
	position:absolute;
	left:1005px;
	top:12px;
	width:113px;
	height:30px;
	z-index:11;
}
#apDiv2 {
	position:absolute;
	left:1135px;
	top:26px;
	width:85px;
	height:24px;
	z-index:12;
}
#apDiv3 {
	position:absolute;
	left:1020px;
	top:447px;
	width:108px;
	height:24px;
	z-index:13;
}
</style>
<link href="css/logout.css" rel="stylesheet" type="text/css">
</head>

<body>
<header></header>
<form name="form1" method="post" action="updateschedule.php">
<aside>
<label for="image"></label>
Image Path: <textarea name="image" id="image"><?php $result_set= mysql_query("SELECT * 
FROM  `schedule` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["aside"];
	}
	?></textarea></aside>

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
  
 <table width="200" border="1">
    <label for="content"></label>
    Fixture Table: <textarea name="content" id="content" cols="50" rows="20">
   <?php
	$result_set= mysql_query("SELECT * 
FROM  `schedule`  
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["content"];
	}
?>
</textarea></table>
<br/>
<br/>
<input type="submit" name="updateschedule" id="updateschedule" value="Update Page">
  </form>

</section>
<div id="uname">
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
</script>
</body>
</html>
<?php
mysql_close($con);
?>
