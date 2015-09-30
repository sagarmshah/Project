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
<title>Welcome To SAYIPL.com</title>
<style type="text/css">
@import url("RCB/monsieurladoulaise_regular/stylesheet1.css");
</style>
<!-- mobile -->
<link href="RCB/monsieurladoulaise_regular/mobile.css" rel="stylesheet" type="text/css" media="only screen and (max-width:800px)">
<link href="RCB/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<style type="text/css">
#RCB_J {
	left: 16px;
	top: 97px;
	width: 316px;
	height: 594px;
}
#RCB_CAP {
	position: absolute;
	left: 321px;
	top: 85px;
	width: 320px;
	height: 594px;
}
</style>
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
	left:920px;
	top:12px;
	width:109px;
	height:37px;
	z-index:11;
}
#apDiv2 {
	position:absolute;
	left:1064px;
	top:25px;
	width:109px;
	height:39px;
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
<div id="apDiv1">
<p> Welcome, <?php echo $_SESSION['firstname']; ?></p>
</div>
<div id="apDiv2">
<a href="logout.php"> Log Out </a>
</div>
<body>
<section>
  <h1><strong>Royal Challenge</strong>RS  Merchandises</h1><div id="RCB_J">
<h2><strong>Royal Challengers  Jersey</strong></h2>
<p><img src="RCB/Images/RCB Merchandises/rcb_jersey.png" width="270" height="320" alt="RCB Jersey"></p>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="sayipl@yahoo.in">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Royal Challanger Jersey">
<input type="hidden" name="item_number" value="RCB_Jersey">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
<table>
<tr><td><input type="hidden" name="on0" value="Size and Cost">Size and Cost</td></tr><tr><td><select name="os0">
	<option value="SMALL">SMALL $5.00 USD</option>
	<option value="MEDIUM">MEDIUM $10.00 USD</option>
	<option value="LARGE">LARGE $15.00 USD</option>
</select> </td></tr>
</table>
<table>
<tr><td>Quantity:</td></tr><tr><td><input type="text" name="quantity" value="1"></td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="option_select0" value="SMALL">
<input type="hidden" name="option_amount0" value="5.00">
<input type="hidden" name="option_select1" value="MEDIUM">
<input type="hidden" name="option_amount1" value="10.00">
<input type="hidden" name="option_select2" value="LARGE">
<input type="hidden" name="option_amount2" value="15.00">
<input type="hidden" name="option_index" value="0">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

  </div>
<div id="RCB_CAP">
  <h2><strong>Royal Challengers Cap </strong></h2>
<p><img src="RCB/Images/RCB Merchandises/rcb_cap.png" width="270" height="320" alt="RCB CAP"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></p>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="sayipl@yahoo.in">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Royal Challanger Cap">
<input type="hidden" name="item_number" value="RCB_Cap">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
<table>
<tr><td><input type="hidden" name="on0" value="Size and Cost">Size and Cost</td></tr><tr><td><select name="os0">
	<option value="REGULAR">REGULAR $10.00 USD</option>
</select> </td></tr>
</table>
<table>
<tr><td>Quantity:</td></tr><tr><td><input type="text" name="quantity" value="1"></td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="option_select0" value="REGULAR">
<input type="hidden" name="option_amount0" value="10.00">
<input type="hidden" name="option_index" value="0">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


</div>
</section>
<p>&nbsp;</p>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<h2>&nbsp;</h2>
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
