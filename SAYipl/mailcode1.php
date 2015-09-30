<?php   
session_start();
include('mysqlprep.php');  
$mail_to = 'seematrikha@hotmail.com'; 


$name = mysql_prepare($_POST['fname']);    
$mail_from = mysql_prepare($_POST['email']);
$message = mysql_prepare($_POST['message']);       


$subject = "Message from visitor " . $name;       


$body_message =  "From: " . $name . "\r\n";     
$body_message .= "E-mail: " . $mail_from . "\r\n";     
$body_message .= "Message: " . $message;       


$headers = "From: " . $mail_from . "\r\n";     
$headers .= "Reply-To: " . $mail_from . "\r\n";       

$mail_sent = mail($mail_to, $subject, $body_message, $headers);       

if ($mail_sent == true)
{          
	echo "Success";
}
else 
{      
	echo "Fail";
}

?>

