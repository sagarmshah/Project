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
#apDiv4 {
	position:absolute;
	left:927px;
	top:848px;
	width:101px;
	height:23px;
	z-index:14;
}
</style>
<link href="css/logout.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="apDiv3"> <a href="edit1index.php"> Edit Page </a></div>
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
  <h3><?php 
$remarks=$_GET['remarks'];
		
		
		if ($remarks=='success')
		{
		echo 'Updation Successful !!';
		}
		
		
?></h3>
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
FROM  `index` 
LIMIT 0 , 30");  
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
  <strong><a class="twitter-timeline" data-dnt="true" href="https://twitter.com/mipaltan" data-widget-id="304160603579236352">&nbsp;&nbsp;&nbsp;&nbsp; Tweets by MumbaiIndians</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</strong></section> 
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

<div id="uname">
<p> Welcome, <?php echo $_SESSION['firstname']; ?></p>
</div>
<div id="logout">
<a href="logout.php"> Log Out </a>
</div>
<div id="apDiv4">
<a href="staff.php"> Back to Staff </a>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
<?php
mysql_close($con);
?>
