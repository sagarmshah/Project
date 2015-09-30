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
#apDiv1 {
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
#apDiv4 {
	position:absolute;
	left:888px;
	top:447px;
	width:114px;
	height:23px;
	z-index:14;
}
</style>
<link href="css/logout.css" rel="stylesheet" type="text/css">
</head>

<body>
<header></header>
<aside>
<img src="<?php $result_set= mysql_query("SELECT * 
FROM  `schedule` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["aside"];
	}
	?>" width="244" height="646" alt="MUMBAI INDIANS COLLAGE"></aside>

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
  <table cellpadding="5" cellspacing="3">
   <?php
	$result_set= mysql_query("SELECT * 
FROM  `schedule`  
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["content"];
	}
?>
</table>
<p><a href="http://in.bookmyshow.com/cricket/mumbai-indians/?rc=Zm5zaE9mZignJywgJ1dTTUknLCAnMTAwMDInLCAnRVQwMDAxMzUxOScsICcwODowMCBQTScpOw==&utm_source=MI-MS-MATCH&utm_campaign=&utm_content=&utm_medium=" target="_new">BOOK NOW</a></p>
<h4><?php 
$remarks=$_GET['remarks'];
		
		
		if ($remarks=='success')
		{
		echo 'Updation Successful !!';
		}
		
		
?></h4>
</section>
<div id="uname">
<p> Welcome, <?php echo $_SESSION['firstname']; ?></p>
</div>
<div id="logout">
<a href="logout.php"> Log Out </a>
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
<div id="apDiv3"> <a href="edit1schedule.php"> Edit Page </a></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
<?php
mysql_close($con);
?>

