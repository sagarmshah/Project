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
<style type="text/css">
#MI_J {
	left: 16px;
	top: 97px;
	width: 316px;
	height: 594px;
}
#MI_CAP {
	position: absolute;
	left: 321px;
	top: 85px;
	width: 320px;
	height: 594px;
}
</style>
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
	left:998px;
	top:10px;
	width:100px;
	height:27px;
	z-index:11;
}
#logout {
	position:absolute;
	left:1126px;
	top:17px;
	width:67px;
	height:32px;
	z-index:12;
}
#apDiv3 {
	position:absolute;
	left:1023px;
	top:901px;
	width:108px;
	height:24px;
	z-index:13;
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
<div id="uname">
<p> Welcome, <?php echo $_SESSION['firstname']; ?></p>
</div>
<div id="logout">
<a href="logout.php"> Log Out </a>
</div>
<body>
<section>
  <h1>Mumbai Indans Merchandises</h1><div id="MI_J">
 <form name="form1" method="post" action="updateshop.php">
Title for Image 1: <h2><strong><label for="title1"></label><textarea name="title1" id="title1" cols="30" rows="1"><?php $result_set= mysql_query("SELECT * FROM  `shop` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["title1"];
	}
	?></textarea></strong></h2>
<p>



  <label for="jerseyimage"></label>
  Path for Image 1: <textarea name="jerseyimage" id="jerseyimage" cols="30" rows="3"><?php $result_set= mysql_query("SELECT * 
FROM  `shop` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["jerseyimage"];
	}
	?></textarea>

<p>
  <br><br><br>
  
  

<table>
<tr><td><label for="jerseysize"></label>
  Size and Cost for Image 1: <textarea name="jerseysize" id="jerseysize" cols="30" rows="3"><?php $result_set= mysql_query("SELECT * 
FROM  `shop` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["jerseysize"];
	}
	?></textarea> </td></tr>
<tr><td>
</table>


 
 </div>
<div id="MI_CAP">
  Title for Image 2: <h2><strong><label for="title2"></label><textarea name="title2" id="title2" cols="30" rows="1"><?php $result_set= mysql_query("SELECT * FROM  `shop` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["title2"];
	}
	?></textarea></strong></h2>
<p><label for="capimage"></label>
  Path for Image 2: <textarea name="capimage" id="capimage" cols="30" rows="3"><?php $result_set= mysql_query("SELECT * 
FROM  `shop` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["capimage"];
	}
	?></textarea></p>

<table>
<tr><td>
	<label for="capsize"></label>
  Size and Cost for Image 2: <textarea name="capsize" id="capsize" cols="30" rows="3"><?php $result_set= mysql_query("SELECT * 
FROM  `shop` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["capsize"];
	}
	?></textarea>
</td></tr>
</table>


<br/><br/><br/><br/><br/><br/>
<input type="submit" name="updateshop" id="updateshop" value="Update Page">
</form> 



</div>
</section>
<footer>
    <br>
    <br>
    <br>
    <br>
     
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