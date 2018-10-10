<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'From: davidalxeup@gmail.com';
//my email
$to = 'david.deng.aus@gmail.com';
$subject = 'New Inquiry from My webpage';

$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if($_POST['submit']){
	if(mail($to,$subject,$body,$from) ){
		
		header("location: http://www.daviddeng.com.au/contact.html");
		echo"<script>alert('Your message has been sent!');</script>";
		
	} else {
		echo'<p>Something went wrong, plese go back and try again! Thanks.</p>';
	}

}
?>
