<?php
session_start();
include('connection.php'); 	
include('mysqlprep.php');


$fname=mysql_prepare($_POST['firstname']);
$lname=mysql_prepare($_POST['lastname']);
$email=mysql_prepare($_POST['email']);

$result_set= mysql_query("SELECT * 
FROM  `register` 
WHERE  `firstname` =  '{$fname}'
AND  `lastname` =  '{$lname}'
AND  `email` =  '{$email}'
LIMIT 0 , 30");



if(!$result_set)
{
	die(" Database query failed : " . mysql_error());
}
elseif(mysql_num_rows($result_set) == 1)
{
	//$found_user= mysql_fetch_array($result_set);
while($row = mysql_fetch_array($result_set))
	{	
 
 		$id= $row["id"];
		mysql_query("DELETE FROM `sayipl1`.`register` WHERE `register`.`id` = '{$id}'");

	}
	header("location: staff.php?remarks=delete");;
	
}
else
{
	header("location: staff.php?remarks=notdelete");;
}

mysql_close($con);
?>
