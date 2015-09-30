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
@import url("RCB/monsieurladoulaise_regular/stylesheet1.css");
</style>
<!-- mobile -->
<link href="RCB/monsieurladoulaise_regular/mobile.css" rel="stylesheet" type="text/css" media="only screen and (max-width:800px)">
<link href="RCB/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<style type="text/css"></style>
<link href="RCB/css/default.css" rel="stylesheet" type="text/css">
<link href="RCB/jQuery/css/style.css" rel="stylesheet" type="text/css">
<script src="RCB/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="RCB/js/jquery.js" type="text/javascript"></script>
<script src="RCB/js/mobilyblocks.js" type="text/javascript"></script>
<script src="RCB/includes/jquery-1.4.2.js" type="text/javascript"></script>
<script src="RCB/jQuery/js/jquery.jsocial.js" type="text/javascript"></script>
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
	left:941px;
	top:20px;
	width:124px;
	height:36px;
	z-index:11;
}
#apDiv2 {
	position:absolute;
	left:1091px;
	top:28px;
	width:100px;
	height:32px;
	z-index:12;
}
</style>
</head>

<body>
<nav>
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="index1.php">HOME</a></li>
<li><a href="news1.php">NEWS</a></li>
    <li><a href="schedule1.php">SCHEDULE</a></li>
    <li><a href="videos1.php">VIDEOS</a></li>
<li><a href="gallery1.php">GALLERY</a></li>
    <li><a href="shop1.php">SHOP</a></li>
    <li><a href="about1.php">ABOUT</a></li>
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
  <h3>Royal Challengers Bangalore (often abbreviated as RCB) is a cricket team based in Bangalore that plays in the Indian Premier League. The team is currently led by Virat Kohli and coached by South African Ray Jennings. The team is owned by Vijay Mallya, through his flagship firm UB Group.The director of the team is Sidhartha Mallya. RCB plays all its home matches at the M. Chinnaswamy Stadium. The franchise has been one of the most successful and consistent in the IPL having reached the semis/play-off's every season apart from 2008 and 2012. It has qualified for three seasons of the Champions League Twenty20 tournament, until in 2012, RCB came fifth in the points table, and failed to qualify for either the playoffs or the Champions League Twenty20 2012</h3>
  <p>&nbsp; </p>
  <ul>
    <li>
      <h3>Daniel Christian signed by Gloucestershire for FL T20</h3>
    </li>
    <li>
      <h3>Karun Nair puts in another strong all-round performance</h3>
    </li>
    <li>
      <h3>Mukund, KB in TN Syed Mushtaq Ali Trophy squad</h3>
    </li>
    <li>
      <h3>Vijay Zol takes West Zone to Deodhar final</h3>
    </li>
  </ul>
  <strong><a class="twitter-timeline" data-dnt="true" href="https://twitter.com/RCBTweets" data-widget-id="304160603579236352">&nbsp;&nbsp;&nbsp;&nbsp; Tweets by RoyalChallangeBangalore</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</strong></section> 
<header>
</header>
<aside></aside>
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
<p> Welcome, <?php echo $_SESSION['firstname']; ?></p>
</div>
<div id="apDiv2">
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
