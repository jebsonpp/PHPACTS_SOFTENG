<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'admin/core/models.php'; ?>
<?php  
if (!isset($_SESSION['username'])) {
	header("Location: loginpage.php");
}

$getUserByID = getUserByID($pdo, $_SESSION['user_id']);

if ($getUserByID['is_admin'] == 1) {
	header("Location: admin/index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body Bgcolor ="Gray">
	<?php include 'navigation.php'; ?>

	<?php $getUserByID = getUserByID($pdo, $_GET['user_id']); ?>
	<div class="container" style="border-style: solid; width: 20%; height: 200px; margin-top: 30px; margin-left: auto; margin-right: auto; text-align: center;">
			<h3>Username: <span style="color: black"><?php echo $getUserByID['username']; ?></span></h3>
			<h3>First Name: <span style="color: black"><?php echo $getUserByID['first_name']; ?></span></h3>
			<h3>Last Name: <span style="color: black"><?php echo $getUserByID['last_name']; ?></span></h3>
			<h3>Date Joined: <span style="color: black"><?php echo $getUserByID['date_added']; ?></span></h3>
		</div>
	</div>
</body>
</html>