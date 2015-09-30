<?php
session_start();
include('connection.php');
include('mysqlprep.php');

$fname= mysql_prepare($_POST['fname']);
$lname= mysql_prepare($_POST['lname']);
$address= mysql_prepare($_POST['addres']);
$email= mysql_prepare($_POST['email']);
$password= mysql_prepare($_POST['PASS']);
$contact= mysql_prepare($_POST['number']);
$teams= mysql_prepare($_POST['favteam']);
$hashed_password= sha1($password);

$result_set= mysql_query("INSERT INTO `register`(`firstname`, `lastname`, `address`, `email`, `hashed_password`, `phone`, `team`) VALUES('$fname', '$lname', '$address', '$email', '$hashed_password', '$contact', '$teams')");

if(!$result_set)
{
	die(" Database query failed : " . mysql_error());
}
else
{		
		$position=$_GET['position'];
		
		
		if ($position=='admin')
		{
			header("location: http://localhost:/SAYipl/staff.php?comment=adminsuccess");
		}
		else
		{
			header("location: http://localhost:/SAYipl/login/mysignin.php");
		}
		
	
}
mysql_close($con);
?>
