<?php
session_start();
?>
<?php 

include('connection.php');
include('mysqlprep.php');

$videos=mysql_prepare($_POST['videos']);



$result_set= mysql_query("UPDATE  `sayipl1`.`videos` SET `link`='$videos' WHERE `videos`.`id`=1");

if(!$result_set)
{
	die(" Database query failed : " . mysql_error());
}
else
{
	header("location: editvideos.php?remarks=success");
	
}
mysql_close($con);
?>
