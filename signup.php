<!-- Make PHP show PHP errors on the HTML page, instead of failing silently. -->
<?php ini_set('display_startup_errors',1); ?>
<?php ini_set('display_errors',1); ?>
<?php error_reporting(-1); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration</title>
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body>

		<?php include 'navbar.php'; ?>

		<?php

		$fname = $_POST["first_name"];
		$lname = $_POST["last_name"];
		$title = array_key_exists("title", $_POST) ? $_POST["title"] : "n/a";
		$comp_org = array_key_exists("comp_org", $_POST) ? $_POST["comp_org"] : "n/a";
		$email = $_POST["email"];
		$tel = array_key_exists("tel", $_POST) ? $_POST["tel"] : "n/a";
		$accommodation = array_key_exists("accommodation", $_POST) ? $_POST["accommodation"] : "n/a";

    	$to = 'To: ' . 'ychen878@wisc.edu' . '\r\n';
    	$subject = 'Subject: Registration \r\n';
    	$headers = 'From: ' . $email . '\r\n';
    	$headers .= "Content-Type: text/plain; charset=utf-8\r\n";
    	$message = "First name: " . $fname . "Last name: " . $lname . "\r\n";
    	$message .= "Title: " . $title . "\r\n";
    	$message .= "Company/Organization: " . $comp_org . "\r\n";
    	$message .= "Tel: " . $tel . "\r\n";
    	$accommodation .= "Accomodation: " . $accommodation . "\r\n";

    	mail($to, $subject, $message, $headers);

		?>

		<div class="container col-xxl-8 px-4 py-5">
			<h1>Thanks for registration!</h1>
		</div>
		<!-- Bootstrap JS-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>
