<?php require_once 'core/handling.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navigation.php'; ?>

	<h1>Insert a New user here!</h1>
	<form action="core/handling.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="last_name">
		</p>
		<p>
			<label for="firstName">Email</label> 
			<input type="text" name="email">
		</p>
		<p>
			<label for="firstName">Gender</label> 
			<input type="text" name="gender">
		</p>
		<p>
			<label for="firstName">position</label> 
			<input type="text" name="position">
		</p>
		<p>
			<input type="submit" name="insertApplicantBtn">
		</p>
	</form>
</body>
</html>