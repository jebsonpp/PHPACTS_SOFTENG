<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<?php  
if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}

$getUserByID = getAdminUserByID($pdo, $_SESSION['user_id']);

if ($getUserByID['is_admin'] == 0) {
	header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body bgColor="gray">
	<?php include 'navigation.php'; ?>

	<?php $getUserByID = getAdminUserByID($pdo, $_GET['user_id']); ?>
	<div class="container" style="border-style: solid; width: 20%; height: 200px; margin-top: 30px; margin-left: auto; margin-right: auto; text-align: center;">
			<h3>Username: <?php echo $getUserByID['username']; ?></span></h3>
			<h3>First Name: <?php echo $getUserByID['first_name']; ?></span></h3>
			<h3>Last Name: <?php echo $getUserByID['last_name']; ?></span></h3>
			<h3>Date Joined: <?php echo $getUserByID['date_added']; ?></span></h3>
		</div>
	</div>
</body>
</html>