<?php
session_start();
?>
<?php 
// code for sign in
include('connection.php');
include('mysqlprep.php');

$email=mysql_prepare($_POST['username']);
$password=mysql_prepare($_POST['password']);
$hashed_password=sha1($password);


$result_set= mysql_query("SELECT id, firstname, lastname, team FROM register WHERE email = '{$email}' AND hashed_password =  '{$hashed_password}'");

if(!$result_set)
{
	die(" Database query failed : " . mysql_error());
}
elseif(mysql_num_rows($result_set) == 1)
{
	//$found_user= mysql_fetch_array($result_set);
	
	while($row = mysql_fetch_array($result_set))
	{
		
		
		if($row["team"]=="MI")
		{
			header("location: http://localhost:/SAYipl/index.php");
		}
		elseif($row["team"]=="RCB")
		{
			header("location: http://localhost:/SAYipl/index1.php");
		}
		
		elseif($row["team"]=="staff")
		{
			header("location: http://localhost:/SAYipl/staff.php");
		}
		
		$_SESSION['user_id']= $row['id'];
	    $_SESSION['firstname']= $row['firstname'];
	}
	
}
else
{
	header("location: http://localhost:/SAYipl/login/mysignin.php");
}
mysql_close($con);
?>
