<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="Form" content="form for contact on mail, for searching for listing the commited forms">
	<title>Contact-page</title>
	<!-- Latest compiled and minified CSS -->
	<?php include 'includes/head.php';?>
</head>
<body>
	<?php include 'includes/header.php';?> <!--==============This is menu header=========-->
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
						<input type="text" class="form-control" name="Inputname" id="Inputname" placeholder="Enter your name" required>	
						</div>

						<div class="form-group">
						<label for="Inputmail">Your Email:</label><span class="required">*</span>
						<input type="text" class="form-control" name="Inputmail" id="Inputmail" placeholder="Enter your E-mail" required>	
						</div>

						<div class="form-group">
						<label for="Inputmessage">Your Message:</label><span class="required">*</span>
						<textarea class="form-control" name="Inputmessage" id="Inputmessage" placeholder="Enter your Message" rows="5" required></textarea>
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
	//include 'send-form-mail.php';
	
    
	}
?>
<!-- Latest compiled and minified JavaScript -->

</body>
</html>