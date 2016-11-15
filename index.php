<!DOCTYPE html>
<html>
<head>
	<title>Contact-page</title>
	<!-- Latest compiled and minified CSS -->
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<?php include 'includes/header.php'; ?>
	<div id="contact" class="pageContactMe">
	<div class="container">
	
	<div class="row">
			<div class="col-md-6 col-md-offset-3 make-center">
			<div class="well well-lg">
				<div class="contact-message"><h1 class="text-center">Contact me</h1>
				<hr>
				</div>
				<form name="contactForm" role="form" method="post" action="index.php">
					<fieldset>
						<div class="form-group">
						<label for="Inputname">Your name:</label><span class="required">*</span>
						<input type="text" class="form-control" name="Inputname" id="Inputname" placeholder="Enter your name">	
						</div>

						<div class="form-group">
						<label for="Inputmail">Your Email:</label><span class="required">*</span>
						<input type="text" class="form-control" name="Inputmail" id="Inputmail" placeholder="Enter your E-mail">	
						</div>

						<div class="form-group">
						<label for="Inputmessage">Your Message:</label><span class="required">*</span>
						<textarea class="form-control" name="Inputmessage" id="Inputmessage" placeholder="Enter your Message" rows="5"></textarea>
						</div>

						<div class="form-group">
							<input type="submit" class="btn pull-right btn-primary" name="submit" id="submit" value="Send">	
						</div>
                </fieldset>	
				</form>	
			</div>
			</div>	
				<div class="col-md-6 col-sm-4">
				</div>
			
	

	</div>
	</div><!--===================================CONTAINER ENDS================================-->
	</div>
<?php
if (isset($_POST['submit'])) {
	include 'send-form-database.php';
	include 'send-form-mail.php';
	
	//include 'send-form-mail.php';
	/*$to ="machy44@gmail.com";
	$from =$_POST['Inputmail'];
	$Inputname =$_POST['Inputname'];
	$subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $Inputname . " wrote the following:" . "\n\n" . $_POST['Inputmessage'];
    //$message = $Inputname " " . " wrote the following:" . "\n\n" .  $_POST['Inputmessage'];
    $message2 = "Here is a copy of your message " . $Inputname . "\n\n" . $_POST['Inputmessage'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $Inputname . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.  */
    
	}
?>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>