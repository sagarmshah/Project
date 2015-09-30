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
#apDiv1 {
	position:absolute;
	left:998px;
	top:10px;
	width:100px;
	height:27px;
	z-index:11;
}
#apDiv2 {
	position:absolute;
	left:1126px;
	top:17px;
	width:67px;
	height:32px;
	z-index:12;
}
#apDiv3 {
	position:absolute;
	left:1015px;
	top:827px;
	width:108px;
	height:24px;
	z-index:13;
}
#apDiv4 {
	position:absolute;
	left:1017px;
	top:871px;
	width:110px;
	height:26px;
	z-index:14;
}
</style>
<link href="css/logout.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="apDiv3"> <a href="edit1shop.php"> Edit Page </a> </div>
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
<div id="apDiv4">
<a href="staff.php"> Back to Staff </a>
</div>
<body>
<section>
  <h1>Mumbai Indans Merchandises</h1><div id="MI_J">
<h2><strong><?php $result_set= mysql_query("SELECT * FROM  `shop` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["title1"];
	}
	?></strong></h2>
<p><img src="<?php $result_set= mysql_query("SELECT * 
FROM  `shop` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["jerseyimage"];
	}
	?>" width="240" height="320" alt="MI Jersey">
<br><br><br>


<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="sayipl@yahoo.in">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Mumbai Indians Jersey">
<input type="hidden" name="item_number" value="J_MI">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
<table>
<tr><td><input type="hidden" name="on0" value="Sizes">Sizes and Cost</td></tr><tr><td><select name="os0">
	<?php $result_set= mysql_query("SELECT * 
FROM  `shop` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["jerseysize"];
	}
	?>
</select> </td></tr>
<tr><td><table>
<tr><td>Quantity:</td></tr><tr><td><input type="text" name="quantity" value="1"></td></tr>
</table>
</table>
<p>
  <input type="hidden" name="currency_code" value="USD">
  <input type="hidden" name="option_select0" value="Small">
  <input type="hidden" name="option_amount0" value="10.00">
  <input type="hidden" name="option_select1" value="Medium">
  <input type="hidden" name="option_amount1" value="15.00">
  <input type="hidden" name="option_select2" value="Large">
  <input type="hidden" name="option_amount2" value="20.00">
  <input type="hidden" name="option_index" value="0">
  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</p>
<h3><?php 
		$remarks=$_GET['remarks'];
		
		
		if ($remarks=='success')
		{
		echo 'Updation Successful !!';
		}
		
		
?></h3>
</form>

 
 </div>
<div id="MI_CAP">
  <h2><strong><?php $result_set= mysql_query("SELECT * FROM  `shop` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["title2"];
	}
	?></strong></h2>
<p><img src="<?php $result_set= mysql_query("SELECT * 
FROM  `shop` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["capimage"];
	}
	?>" width="240" height="320" alt="MI Jersey"></p>
<p><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></p>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="sayipl@yahoo.in">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Mumbai Indians Cap">
<input type="hidden" name="item_number" value="C_MI">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
<table>
<tr><td><input type="hidden" name="on0" value="Cost">Cost</td></tr><tr><td><select name="os0">
	<?php $result_set= mysql_query("SELECT * 
FROM  `shop` 
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["capsize"];
	}
	?>
</select> </td></tr>
</table>
<table>
<tr><td>Quantity:</td></tr><tr><td><input type="text" name="quantity" value="1"></td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="option_select0" value="REGULAR">
<input type="hidden" name="option_amount0" value="5.00">
<input type="hidden" name="option_index" value="0">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
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