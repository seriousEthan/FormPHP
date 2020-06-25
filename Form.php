<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Form</title>
</head>

<body>
	<html>
<head>
<meta charset="utf-8">
<title>ContactForm</title>
<?php include('FormProcess.php'); ?>
<link href="Form.css" rel="stylesheet" type="text/css">

</head>

<body>
	<div class="container">  
	  <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
		<h3>Contact Us</h3>
		<h4>Please give us your info so we can get back to you! </h4>
		<fieldset>
		  <input placeholder="Your first and last name" type="text" tabindex="1" name="name" value="<?= $name ?>"  autofocus>
	      <span class="error"><?= $name_error ?></span>
		</fieldset>
		<fieldset>
		  <input placeholder="Your Email Address" type="text" tabindex="2" name="email" value="<?= $email ?>" >
		  <span class="error"><?= $email_error ?></span>
		</fieldset>
		<fieldset>
		  <input placeholder="Your Phone Number" type="text" tabindex="3" name="phone" value="<?= $phone ?>" >
		  <span class="error"><?= $phone_error ?></span>
		</fieldset>
			<fieldset>
		  <textarea placeholder="Type your Message Here...." tabindex="5" type="text" name="message" value="<?= $message ?>" ></textarea>
		</fieldset>
		<fieldset>
		  <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
		</fieldset>
		<div class="success"><?= $success; ?></div>
	  </form>
 
  
</div>
</body>
</html>

</body>
</html>