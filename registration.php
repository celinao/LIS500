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

		<div class="container col-xxl-8 px-4 py-5">
			<h1>Registration</h1>

			<form method="POST" action="signup.php" enctype="multipart/form-data">
				<div class="mb-3">
					<label for="first_name" class="form-label">First Name*</label>
					<input type="text" class="form-control" id="first_name" name="first_name" required>
				</div>
				<div class="mb-3">
					<label for="last_name" class="form-label">Last Name*</label>
					<input type="text" class="form-control" id="last_name" name="last_name" required>
				</div>
				<div class="mb-3">
					<label for="title" class="form-label">Title</label>
					<input type="text" class="form-control" id="title" name="title">
				</div>
				<div class="mb-3">
					<label for="comp_org" class="form-label">Company/Organization</label>
					<input type="text" class="form-control" id="comp_org" name="comp_org">
				</div>
				<div class="mb-3">
					<label for="email" class="form-label">Email*</label>
					<input type="email" class="form-control" id="email" name="email" required>
				</div>
				<div class="mb-3">
					<label for="tel" class="form-label">Phone</label>
					<input type="tel" class="form-control" id="tel" name="tel">
				</div>
				<div class="mb-3">
					<label for="accommodation" class="form-label">Accommodation</label>
					<textarea id="accommodation" name="accommodation" class="form-control"></textarea>
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<!-- Bootstrap JS-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>
