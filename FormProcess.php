<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FormProcess</title>
</head>

<body>
	<?php
	//define variables and set to empty values
	$name_error = $email_error = $phone_error = "";
	$name = $email = $phone = $message = $success = "";
	
	//check if name is empty
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
			$name_error = "Name is required, first and last prefered.";
		//check if name only contains characters and whitespace	
		} else {
			$name = test_input($_POST["name"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$name_error =  "Only letters and white space is allowed in this field.";
			}
		}
		//check if email is empty
		if (empty($_POST["email"])) {
			$email_error = "Email is required.";
		//check if email is formatted correctly
		} else {
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$email_error = "Please use a correctly formatted email. (name@gmail.com)";
			}
		}
		//check if phone is empty
		if (empty($_POST["phone"])) {
			$phone_error = "Please enter a phone number you can be reached at.";
		//check if phone number is formatted correctly		
		} else {
			$phone = test_input($_POST["phone"]);
			if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phone)) {
				$phone_error = "Invalid phone number.";
			}
		}
		if (empty($_POST["message"])) {
			$message = "";
		//check if phone number is formatted correctly		
		} else {
			$message = test_input($_POST["message"]);
		}
		//if there are no errors submit the data
		if ($name_error == '' and $email_error == '' and $phone_error == '') {
			$message_body = '';
			unset($_POST['submit']);
			foreach ($_POST as $key => $value){
				$message_body .= "$key: $value\n";
			}
		$to = 'emmartin1@usf.edu';
		$subject = 'Contact Form Data';
		if (mail($to, $subject, $message_body)){
			$success = "Your information has been saved, thank you for contacting us!";
			$name = $email = $phone = $message = '';
		}	
		}
	}
	//function to clean the input
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	
	//emmartin1@usf.edu
	
	
	?>
</body>
</html>