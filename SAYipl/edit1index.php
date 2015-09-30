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
// code for sign in
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
<style type="text/css"></style>
<link href="MI/css/default.css" rel="stylesheet" type="text/css">
<link href="MI/jQuery/css/style.css" rel="stylesheet" type="text/css">
<script src="MI/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="MI/js/jquery.js" type="text/javascript"></script>
<script src="MI/js/mobilyblocks.js" type="text/javascript"></script>
<script src="MI/includes/jquery-1.4.2.js" type="text/javascript"></script>
<script src="MI/jQuery/js/jquery.jsocial.js" type="text/javascript"></script>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2520523" binding="#OAWidget" />
  <oa:widget wid="2149023" binding="#social" />
</oa:widgets>
-->
</script>
<style type="text/css">
#uname {
	position:absolute;
	left:948px;
	top:13px;
	width:119px;
	height:25px;
	z-index:11;
}
#logout {
	position:absolute;
	left:1105px;
	top:19px;
	width:76px;
	height:29px;
	z-index:12;
}
#apDiv3 {
	position:absolute;
	left:1044px;
	top:847px;
	width:108px;
	height:24px;
	z-index:13;
}
</style>
<link href="css/logout.css" rel="stylesheet" type="text/css">
</head>

<body>

<header>
</header>

<nav>
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="editindex.php">HOME</a></li>
<li><a href="editnews.php">NEWS</a></li>
    <li><a href="editschedule.php">SCHEDULE</a></li>
    <li><a href="editvideos.php">VIDEOS</a></li>
<li><a href="editgallery.php">GALLERY</a></li>
    <li><a href="editshop.php">SHOP</a></li>
    <li><a href="editabout.php">ABOUT</a></li>
  </ul>
</nav>
<section>
<h3>&nbsp;</h3>
  <blockquote>
    <blockquote>
      <blockquote>
        <blockquote>
          <h1 class="head1"><strong>Team Overview</strong></h1>
        </blockquote>
      </blockquote>
    </blockquote>
  </blockquote>
 
<form name="form1" method="post" action="updateindex.php">
  <label for="content"></label>
  Content: <textarea name="content" id="content" cols="90" rows="8"><?php
	$result_set= mysql_query("SELECT * 
FROM  `index`   
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo "<h3>".$row["content"]."</h3>";
	}
?></textarea>
 
  <p>&nbsp; </p>
  <ul>
    <li>
      
        <label for="link"></label>
      <h3>  Link 1 : <textarea name="link" id="link"><?php $result_set= mysql_query("SELECT * 
FROM  `index` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["link"];
	}
	?></textarea></h3>
        </li>
    <li>
      <label for="link1"></label>
      <h3>  Link 2 : <textarea name="link1" id="link1"><?php $result_set= mysql_query("SELECT * 
FROM  `index` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["link1"];
	}
	?></textarea></h3>
    </li>
    <li>
      <label for="link2"></label>
      <h3>  Link 3 : <textarea name="link2" id="link2"><?php $result_set= mysql_query("SELECT * 
FROM  `index` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["link2"];
	}
	?></textarea></h3>    </li>
    <li>
      <label for="link3"></label>
      <h3>  Link 4 : <textarea name="link3" id="link3"><?php $result_set= mysql_query("SELECT * 
FROM  `index` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["link3"];
	}
	?></textarea></h3>    </li>
    <li>
      <label for="link4"></label>
      <h3>  Link 5 : <textarea name="link4" id="link4"><?php $result_set= mysql_query("SELECT * 
FROM  `index` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["link4"];
	}
	?></textarea></h3>    
    </li>
    <li>
      <label for="link5"></label>
      <h3>  Link 6 : <textarea name="link5" id="link5"><?php $result_set= mysql_query("SELECT * 
FROM  `index` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["link5"];
	}
	?></textarea>
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="updateindex" id="updateindex" value="Update Page">
      </h3>     
     <p>&nbsp;</p>
    </li>
  </ul>
  <strong><a class="twitter-timeline" data-dnt="true" href="https://twitter.com/mipaltan" data-widget-id="304160603579236352">&nbsp;&nbsp;&nbsp;&nbsp; Tweets by MumbaiIndians</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</strong></section> 

<aside>
  <label for="image"></label>
Image Path: <textarea name="image" id="image"><?php $result_set= mysql_query("SELECT * 
FROM  `index` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["aside"];
	}
	?></textarea>
</aside>

</form>
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

<div id="uname">
<p> Welcome, <?php echo $_SESSION['firstname']; ?></p>
</div>
<div id="logout">
<a href="logout.php"> Log Out </a>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
<?php
mysql_close($con);
?>
