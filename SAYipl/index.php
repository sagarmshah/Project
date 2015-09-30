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
<link href="css/logout.css" rel="stylesheet" type="text/css">
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
#apDiv1 {
	position:absolute;
	left:850px;
	top:560px;
	width:221px;
	z-index:13;
}
</style>
</head>

<body>

<header>
</header>
<div id="uname"><p>Welcome, <?php echo $_SESSION['firstname']; ?></p>
</div>
<div id="logout"><a href="logout.php">LOGOUT</a></div>

<nav>
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="index.php">HOME</a></li>
<li><a href="news.php">NEWS</a></li>
    <li><a href="schedule.php">SCHEDULE</a></li>
    <li><a href="videos.php">VIDEOS</a></li>
<li><a href="gallery.php">GALLERY</a></li>
    <li><a href="shop.php">SHOP</a></li>
    <li><a href="about.php">ABOUT</a></li>
  </ul>
</nav>
<form name="form1" method="post" action="">
  <div>Content for New Div Tag Goes Here</div>
  <input type="submit" name="button" id="button" value="Submit">
</form>
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
 <?php
	$result_set= mysql_query("SELECT * 
FROM  `index` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo "<h3>".$row["content"]."</h3>";
	}
?>
  <p>&nbsp; </p>
  <ul>
    <li>
      <h3><a href="MI/news.html" target="_self"><?php $result_set= mysql_query("SELECT * 
FROM  `index`
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["link"];
	}
	?></a>.</h3>
    </li>
    <li>
      <h3><a href="MI/news.html"><?php $result_set= mysql_query("SELECT * 
FROM  `index`
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["link1"];
	}
	?></a></h3>
    </li>
    <li>
      <h3><a href="MI/news.html"><?php $result_set= mysql_query("SELECT * 
FROM  `index` LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["link2"];
	}
	?><br>
      </a></h3>
    </li>
    <li>
      <h3><a href="MI/news.html"><?php $result_set= mysql_query("SELECT * 
FROM  `index`
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["link3"];
	}
	?><br>
      </a></h3>
    </li>
    <li>
      <h3><a href="MI/news.html"><?php $result_set= mysql_query("SELECT * 
FROM  `index`
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["link4"];
	}
	?><br>
      </a></h3>
    </li>
    <li>
      <h3><a href="MI/news.html"><?php $result_set= mysql_query("SELECT * 
FROM  `index`
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["link5"];
	}
	?></a></h3>
      <p>&nbsp;</p>
    </li>
  </ul>
</section> 
<aside>
<img src="<?php $result_set= mysql_query("SELECT * 
FROM  `index`
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["aside"];
	}
	?>" width="244" height="646" alt="MUMBAI INDIANS COLLAGE"></aside>
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


<div id="apDiv1">
<strong><a class="twitter-timeline" data-dnt="true" href="https://twitter.com/mipaltan" data-widget-id="304160603579236352">&nbsp;&nbsp;&nbsp;&nbsp; Tweets by MumbaiIndians</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</strong>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
<?php
mysql_close($con);
?>
