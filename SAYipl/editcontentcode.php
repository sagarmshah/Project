<?php
session_start();
include('connection.php');
include('mysqlprep.php');


switch (mysql_prepare($_POST["teams"]))
 {
  case "MI":
   header("location: editindex.php");
   break;
  case "RCB":
   header("location: editindex1.php");
   break;
  case "RR":
   header("location: editindex2.php");
   break;
  case "CSK":
   header("location: editindex3.php");
   break;
  case "KKR":
   header("location: editindex4.php");
   break;
  case "HYD":
   header("location: editindex5.php");
   break;
  case "KXIP":
   header("location: editindex6.php");
   break;
  case "DD":
   header("location: editindex7.php");
   break;
  case "PWI":
   header("location: editindex8.php");
   break;
   default : header("location: staff.php");
   break;
  }		
		
		
	

mysql_close($con);
?>
