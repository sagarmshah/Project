<?php
session_start();
?>
<?php 
// code for sign in
include('connection.php');

$result_set= mysql_query("SELECT * 
FROM  `index` 
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
		echo $row['content'];
	}
}
mysql_close($con);
?>