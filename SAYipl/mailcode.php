<?php
session_start();
include('connection.php');
include('mysqlprep.php');


$fname=mysql_prepare($_POST['First Name']);

$email=mysql_prepare($_POST['email']);
$message=mysql_prepare($_POST['Message']);

$subject= "Contact form submitted !";
$to= 'sagar_shah92@live.com';

$body= <<<HTML
$message
HTML;

$headers = "FROM: $email\r\n";
$headers .= "Content-type: text/html\r\n";

$success= mail($to, $subject, $body, $headers);
if($success)
{
	header("location: ContactForm/contactthanks.html");
}
else
{
	header("location: ContactForm/error.html");
}
mysql_close($con);
?>
