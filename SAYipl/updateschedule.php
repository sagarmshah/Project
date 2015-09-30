<?php
session_start();
?>
<?php 

include('connection.php');
include('mysqlprep.php');

$image=mysql_prepare($_POST['image']);
$content=mysql_prepare($_POST['content']);


$result_set= mysql_query("UPDATE  `sayipl1`.`schedule` SET `aside`='$image', `content`='$content' WHERE `schedule`.`id`=1");

if(!$result_set)
{
	die(" Database query failed : " . mysql_error());
}
else
{
	header("location: editschedule.php?remarks=success");
	
}
mysql_close($con);
?>
