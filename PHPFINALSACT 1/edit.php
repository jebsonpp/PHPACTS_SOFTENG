<?php require_once 'core/handling.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php $getApplicantByID = getApplicantByID($pdo, $_GET['id']); ?>
	<h1>Edit Here!</h1>
	<form action="core/handling.php?id=<?php echo $_GET['id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name" value="<?php echo $getApplicantByID['first_name']; ?>">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $getApplicantByID['last_name']; ?>">
		</p>
		<p>
			<label for="firstName">Email</label> 
			<input type="text" name="email" value="<?php echo $getApplicantByID['email']; ?>">
		</p>
		<p>
			<label for="firstName">Gender</label> 
			<input type="text" name="gender" value="<?php echo $getApplicantByID['gender']; ?>">
		</p>
		<p>
			<label for="firstName">position</label> 
			<input type="text" name="position" value="<?php echo $getApplicantByID['position']; ?>">
		</p>
			<input type="submit" value="Save" name="editApplicantBtn">
		</p>
	</form>
</body>
</html>