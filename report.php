<!DOCTYPE html>
<!-- Make PHP show PHP errors on the HTML page, instead of failing silently. -->
<?php ini_set('display_startup_errors',1); ?>
<?php ini_set('display_errors',1); ?>
<?php error_reporting(-1); ?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Thanks for Reporting!</title>
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body>
		<?php include 'navbar.php'; ?>

	    <div class="container col-xxl-8 px-4 py-5">
 	        <h1>Thanks for your reporting!</h1>
 	        <p>Thanks. We'll get back to you as soon as possible.</p>
        </div>

    	<?php $email = $_POST['email']; ?>
    	<?php $witnesses = $_POST['witnesses']; ?>
    	<?php $description = $_POST['description']; ?> 	
    
    	<?php $to = 'To: ' . 'ychen878@wisc.edu' . '\r\n'; ?>
    	<?php $subject = 'Subject: Incident Report\r\n'; ?>
    	<?php $headers = 'From: ' . $email . '\r\n'; ?>
    	<?php $headers .= "Content-Type: text/plain; charset=utf-8\r\n"; ?>
    	<?php $message = "Incident Description: \r\n" ?>
    	<?php $message .= $description ?>
        <?php $message .=  "\r\n\r\n" ?>
    	<?php $message .= "Witnesses: \r\n" ?>
    	<?php $message .= $witnesses ?>
    
    	<?php mail($to, $subject, $message, $headers); ?>

	    <!-- Bootstrap JS-->
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>