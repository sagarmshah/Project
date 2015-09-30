<?php
session_start();
?>
<?php 
// code for sign in
include('connection.php');


$result_set= mysql_query("SELECT * FROM register WHERE id='18'");

if(!$result_set)
{
	die(" Database query failed : " . mysql_error());
}
elseif(mysql_num_rows($result_set) == 1)
{
	//$found_user= mysql_fetch_array($result_set);
	
	while($row = mysql_fetch_array($result_set))
	{
		$password= sha1($row["hashed_password"]);
		mysql_query("UPDATE register SET hashed_password='{$password}' WHERE id='18'");
	}
}
mysql_close($con);
?>