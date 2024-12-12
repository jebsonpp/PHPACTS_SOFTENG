<?php require_once 'admin/core/models.php'; ?>
<?php require_once 'admin/core/dbConfig.php'; ?>
<?php require_once 'admin/core/handleForms.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body Bgcolor="Grey">
<?php include 'navigation.php'; ?>
<?php
	$seeApplications = getAllJobApplication($pdo); 
	foreach($seeApplications as $row){ ?>
	<div class="container" style="border-style: solid; width: 20%; height: 210px; margin-top: 30px; margin-left: auto; margin-right: auto; text-align: center;">
		<h3>Application id: <?php echo $row['application_id']?></h3>
		<h3>Company Name: <?php echo $row['companyName']?></h3>
		<h3>Job Position: <?php echo $row['jobPosition']?></h3>
		<h3>Starting Salary: <?php echo $row['startingSalary']?></h3>
        <?php if (isset($_SESSION['message'])) { ?>
		<h3 style="color: green;"><?php echo $_SESSION['message']; ?></h3>
	<?php } unset($_SESSION['message']); ?>

	<form action="admin/core/handleForms.php" method="POST" enctype="multipart/form-data">
		<p>
			<input type="file" name="file">
		</p>
        <p>
            <input type="text" name="message" size="100" style="width: 80%;"placeholder="Why do you think you're the best fit for this job?">
        </p>
		<p>
			<input type="submit" name="insertApplyingBtn">
		</p>
	</div>
	<?php } 
    
    ?>


</body>
</html>