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
<title>UntitWelcome To SAYIPL.comled Document</title>
<style type="text/css">
@import url("RCB/monsieurladoulaise_regular/stylesheet1.css");
</style>
<!-- mobile -->
<link href="RCB/monsieurladoulaise_regular/mobile.css" rel="stylesheet" type="text/css" media="only screen and (max-width:800px)">
<link href="RCB/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="RCB/jQuery/css/style.css" rel="stylesheet" type="text/css">
<script src="RCB/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
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
	left:921px;
	top:14px;
	width:133px;
	height:38px;
	z-index:11;
}
#apDiv2 {
	position:absolute;
	left:1073px;
	top:21px;
	width:118px;
	height:34px;
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
  <h3>&nbsp;</h3>
  <h2>Daniel Christian signed by Gloucestershire for FL T20</h2>
  <h3>Australian all rounder Daniel Christian has been signed by Gloucestershire for the Friends Life T20 tournament.<br>
    Christian has 1296 runs at a strike rate of 131.57 and a bowling average of 25.43 in domestic T20s along with 17 ODI and 11 T20I appearances for Australia.</h3>
  <h3>His 194 runs at an average of 24.25 and 10 wickets helped Brisbane Heat win the 2012-13 Big Bash League. </h3>
  <h3>“I am excited to join Gloucestershire. Having played in 2010 for Hampshire, I have already had a taste of county cricket and I am really looking forward to playing in England again”, said Christian.</h3>
  <h3>“I have two months in India for the IPL prior to joining the club which will be great preparation ahead of the English T20. I look forward to joining John Bracewell, Michael Klinger and the rest of the boys in June and pulling on a Gloucestershire shirt for the first time.”</h3>
  <h3>uge impact on his life. And the day your name is mentioned in the same breath as your hero, you've bridged the gap between dream and reality. For MS Dhoni, that day came after he played his fifth match for India. No sooner did he butcher the Pakistani bowlers on a sweltering April day in Vizag to score a 123-ball 148, the cricketing world started to hail him as the next Adam Gilchrist.</h3>
  <h3>Dhoni dedicated his maiden ODI century to Gilchrist, and a few years later, one got to know the respect was mutual. “The best compliment for me is when someone says they’ll pay to watch me play,” Gilchrist said. “And I can say that I’ll pay to watch MS Dhoni bat.” Four years have elapsed since the world’s best wicketkeeper-batsman made that statement, and the respect has only grown.</h3>
  <h3>Currently in India to lead Kings XI Punjab in IPL 2012, Gilchrist spared quality time to talk about the man and the cricketer he so admires. Responding to all the comparisons between him and Dhoni, Gilchrist said, “MS is not the next Gilchrist. He’s the first MS Dhoni”. </h3>
  <h3>Here’s more on what the legend had to say about Indian cricket’s most inspirational leader.</h3>
  <h3>&nbsp;</h3>
  <h3>&nbsp;</h3>
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

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>

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
</body>
</html>
