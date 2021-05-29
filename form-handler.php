<?php 

	$name = $_post['name'];

	$visitor_email = $_post['email'];

	$subject = $_post['subject'];

	$message = $_post['message'];

	$email_from = 'info@learnohid.com';

	$email_subject = 'New From Submission';

	$email_body = "user name: $name.\n".
				  "user email: $visitor_email.\n".
				  "subject: $subject.\n".
				  "user message: $message.\n";

	$to =' mehediohid@gmail.com';

	$headers = "From: $email_from \r\n";

	$headers = "Reply-to: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	headers("Location: contuct3.html");






 ?>









































<!---

 $name = $_post['name'];
	$visitor_email = $_post['email'];
	$subject = $_post['subject'];
	$message = $_post['message'];

	$email_from = 'info@learnohid.com';
	$email_subject = 'New Form Submission';
	$email_body = "user name: $name.\n".
				  "user email: $visitor_email.\n".
				  "subject: $subject.\n".
				  "user message: $message.\n";
	$to = 'mehediohid@gmail.com';
	$header ="From: $email_from \r\n";
	$header .="Reply-to: $visitor_email \r\n";	-->