<?php
session_start();
?>
<?php 

include('connection.php');
include('mysqlprep.php');

$jerseyimage=mysql_prepare($_POST['jerseyimage']);
$jerseysize=mysql_prepare($_POST['jerseysize']);
$capimage=mysql_prepare($_POST['capimage']);
$capsize=mysql_prepare($_POST['capsize']);
$title1=mysql_prepare($_POST['title1']);
$title2=mysql_prepare($_POST['title2']);




$result_set= mysql_query("UPDATE  `sayipl1`.`shop` SET `jerseyimage`='$jerseyimage', `jerseysize`='$jerseysize', `capimage`='$capimage', `capsize`='$capsize', `title1`='$title1', `title2`='$title2' WHERE `shop`.`id`=2");

if(!$result_set)
{
	die(" Database query failed : " . mysql_error());
}
else
{
	header("location: editshop.php?remarks=success");
	
}
mysql_close($con);
?>
