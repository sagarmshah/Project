<?php
session_start();
?>
<?php 

include('connection.php');
include('mysqlprep.php');

$link1=mysql_prepare($_POST['link1']);
$link2=mysql_prepare($_POST['link2']);
$link3=mysql_prepare($_POST['link3']);
$link4=mysql_prepare($_POST['link4']);
$link5=mysql_prepare($_POST['link5']);
$link6=mysql_prepare($_POST['link6']);
$link7=mysql_prepare($_POST['link7']);
$link8=mysql_prepare($_POST['link8']);
$link9=mysql_prepare($_POST['link9']);
$link10=mysql_prepare($_POST['link10']);
$link11=mysql_prepare($_POST['link11']);
$link12=mysql_prepare($_POST['link12']);




$result_set= mysql_query("UPDATE  `sayipl1`.`gallery` SET `link1`='$link1', `link2`='$link2', `link3`='$link3', `link4`='$link4', `link5`='$link5', `link6`='$link6', `link7`='$link7', `link8`='$link8', `link9`='$link9', `link10`='$link10', `link11`='$link11', `link12`='$link12' WHERE `gallery`.`id`=1");

if(!$result_set)
{
	die(" Database query failed : " . mysql_error());
}
else
{
	header("location: editgallery.php?remarks=success");
	
}
mysql_close($con);
?>
