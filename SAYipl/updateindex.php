<?php
session_start();
?>
<?php 

include('connection.php');
include('mysqlprep.php');

$image=mysql_prepare($_POST['image']);
$link=mysql_prepare($_POST['link']);
$link1=mysql_prepare($_POST['link1']);
$link2=mysql_prepare($_POST['link2']);
$link3=mysql_prepare($_POST['link3']);
$link4=mysql_prepare($_POST['link4']);
$link5=mysql_prepare($_POST['link5']);
$content=mysql_prepare($_POST['content']);


$result_set= mysql_query("UPDATE  `sayipl1`.`index` SET `aside`='$image', `link`='$link', `link1`='$link1', `link2`='$link2', `link3`='$link3', `link4`='$link4', `link5`='$link5', `content`='$content' WHERE `index`.`id`=4");

if(!$result_set)
{
	die(" Database query failed : " . mysql_error());
}
else
{
	header("location: editindex.php?remarks=success");
	
}
mysql_close($con);
?>
