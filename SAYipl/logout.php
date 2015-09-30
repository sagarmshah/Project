<?php

	session_start();
	
	$_SESSION= array();
	
	if(isset($_COOKIE[session_name()]))
	{
		setcookie(session_name(), '', time()-4200, '/');
	}
	
	session_destroy();
	
	header("location: http://localhost:/SAYipl/login/mysignin.php?remark=logout");
?>
	