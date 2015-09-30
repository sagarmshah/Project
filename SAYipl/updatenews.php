<?php
session_start();
?>
<?php 

include('connection.php');
include('mysqlprep.php');

$image=mysql_prepare($_POST['image']);
$title=mysql_prepare($_POST['title']);
$subtitle=mysql_prepare($_POST['subtitle']);
$content=mysql_prepare($_POST['content']);


$result_set= mysql_query("UPDATE  `sayipl1`.`news` SET `aside`='$image', `title`='$title', `subtitle`='$subtitle', `content`='$content' WHERE `news`.`id`=1");

if(!$result_set)
{
	die(" Database query failed : " . mysql_error());
}
else
{
	header("location: editnews.php?remarks=success");
	
}
mysql_close($con);
?>
