<?php 

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$formcontent="From: $name\nSubject: $subject\nMessage: $message";
		$recipient = "sarahkurd.98@gmail.com";
		$my_subject = "CP Club Basketball Contact Form Message\n";
		$mailheader = "From: $email\r\n";
		if(mail($recipient, $my_subject, $formcontent, $mailheader)){
			echo "Thank You!"." ".$name.", we will get back to you shortly!";
		}else{
			echo "Something went wrong."
		}
	}
	
?>