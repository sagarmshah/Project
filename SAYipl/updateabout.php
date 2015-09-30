<?php
session_start();
?>
<?php 

include('connection.php');
include('mysqlprep.php');


$title=mysql_prepare($_POST['title']);
$content=mysql_prepare($_POST['content']);




$result_set= mysql_query("UPDATE  `sayipl1`.`about` SET `title`='$title', `content`='$content' WHERE `about`.`id`=1");

if(!$result_set)
{
	die(" Database query failed : " . mysql_error());
}
else
{
	header("location: editabout.php?remarks=success");
	
}
mysql_close($con);
?>
