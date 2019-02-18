<?php
$name=$_POST[['name'];
$visitor_email=$_POST[['email'];
$message=$_POST['message'];

	$email_from='Martinchege1998@gmail.com';//

	$email_subject="New Form Submission";//email contect or subject

	$email_boddy="User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"user message: $message.\n";//all contect in the email body will be sent to your email.
	$to="martinchege1998@g,ail.com";
	$headers="from: $email_from\r\n";

	$headers="Reply-To: $visitors_email\r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("location: index.html");//where to contact and get the message to connect to the end user email.
?>