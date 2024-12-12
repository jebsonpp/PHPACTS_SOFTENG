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
<body Bgcolor="Grey">																		
	<?php include 'navigation.php'; ?>
	<h1 style="text-align: center;">Jobs Available</h1>
	<?php
	$seeApplications = getAllJobApplication($pdo); 
	foreach($seeApplications as $row){ ?>
	<div class="container" style="border-style: solid; width: 20%; height: 210px; margin-top: 30px; margin-left: auto; margin-right: auto; text-align: center;">
		<h3>Application id: <?php echo $row['application_id']?></h3>
		<h3>Company Name: <?php echo $row['companyName']?></h3>
		<h3>Job Position: <?php echo $row['jobPosition']?></h3>
		<h3>Starting Salary: <?php echo $row['startingSalary']?></h3>
		<a href="applying.php">Apply</a>
	</div>
	<?php } ?>

</body>
</html>