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
<title>UntitWelcome To SAYIPL.comled Document</title>
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
	left:985px;
	top:12px;
	width:119px;
	height:34px;
	z-index:11;
}
#logout {
	position:absolute;
	left:1113px;
	top:18px;
	width:78px;
	height:28px;
	z-index:12;
}
#apDiv3 {
	position:absolute;
	left:1065px;
	top:711px;
	width:108px;
	height:24px;
	z-index:13;
}
</style>
<link href="css/logout.css" rel="stylesheet" type="text/css">
</head>

<body>

<header></header>
<form name="updatenews" method="post" action="updatenews.php">
<aside>
Image Path : <br /><br /><textarea name="image" id="image" cols="20" rows="5"><?php $result_set= mysql_query("SELECT * 
FROM  `news`  
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["aside"];
	}
	?></textarea>
</aside>

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
  
  
    <label for="title"></label>
    Title : <h2><textarea name="title" id="title" cols="20" rows="5"><?php
	$result_set= mysql_query("SELECT * 
FROM  `news`  
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["title"];
	}
?></textarea></h2>
  
  Sub-Title : <h2><br>
    <textarea name="subtitle" id="subtitle" cols="30" rows="5"><?php
	$result_set= mysql_query("SELECT * 
FROM  `news` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["subtitle"];
	}
?></textarea>
  </h2>

  Content : <p> <textarea name="content" id="content" cols="90" rows="10"><?php
	$result_set= mysql_query("SELECT * 
FROM  `news` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["content"];
	}
?></textarea></p>

  <p>&nbsp;</p>
  <h4>&nbsp;</h4>
 <input type="submit" name="updatenews" id="updatenews" value="Update Page">
</form>
</section>
<div id="uname">
<p> Welcome, <?php echo $_SESSION['firstname']; ?></p>
</div>
<div id="logout">
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

