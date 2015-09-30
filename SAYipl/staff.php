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
<title>Sign In to Sayipl.com</title>
<style type="text/css">
section {
	position: relative;
	top: 30px;
	width: 30%;
	z-index: 5;
	background-color: rgba(0,0,0,0.7);
	padding: 10px;
	float: right;
	height: 320px;
	border-radius: 0px 30px 0px 30px;
}
a {
	text-decoration: none;
	color: rgba(255,255,255,1);
}
p {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	color: rgba(255,255,255,1);
	margin: 5px;
	padding: 5px;
	font-size: 14px;
	text-decoration: none;
}

body {
	background-image: url(images/finalphoto.jpg);
	background-repeat: repeat;
}
aside {
	position: absolute;
	left: 20px;
	top: 37px;
	width: 45%;
	z-index: 6;
	background-color: rgba(0,0,0,0.6);
	border-radius: 30px 0px 30px 0px;
}
h1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 30px;
	font-style: normal;
	font-weight: bolder;
	color: rgba(191,49,68,1);
	text-decoration: none;
	word-spacing: normal;
	margin: 15px;
	padding: 15px;
}
h4 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 11px;
	color: rgba(255,255,255,1);
	word-spacing: 2px;
	letter-spacing: 2px;
}
</style>
<link href="file:///C|/wamp/www/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="file:///C|/wamp/www/SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<style type="text/css"></style>
<script src="file:///C|/wamp/www/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="file:///C|/wamp/www/SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
</head>

<body bgcolor="#006600" link="#FFFFFF">

<section>
<h1>Welcome, <?php echo $_SESSION['firstname']; ?></h1>
<br/><?php 
		$remarks=$_GET['remarks'];
		$comment= $_GET['comment'];
		
		
		if ($remarks=='delete')
		{
			echo '<h4>User is deleted !!</h4>';
		}
		elseif($remarks=='notdelete')
		{
			echo '<h4>User has not been deleted !!</h4>';
		}
		if($comment=='adminsuccess')
		{
			echo '<h4>User has been added !</h4>';
		}
		
		
	?>
<h4> STAFF AREA </h4>
 <p> 1) <a href="mysignup.php">Add a User</a></p>
 <p> 2) <a href="deluser.php">Delete a User</a></p>
 <p> 3) <a href="editcontent.php">Edit Content</a></p>
 <p> 4) <a href="logout.php">Logout</a></p>
 

</section>
<script type="text/javascript">
var sprytextfield3 = new Spry.Widget.ValidationTextField("username", "email", {validateOn:["blur", "change"]});
var sprypassword1 = new Spry.Widget.ValidationPassword("password", {validateOn:["blur", "change"], minChars:5, maxChars:10});
</script>
</body>
</html>
<?php
mysql_close($con);
?>

