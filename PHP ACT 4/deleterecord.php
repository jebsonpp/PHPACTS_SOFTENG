<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
	        body {
            font-family: 'Courier New', Courier, monospace;
        }
        input {
            font-size: 1.5em;
            height: 50px;
            width: 200px;
        }
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getrecordbycustomer_rental = getrecordbycustomer_rental($pdo, $_GET['customer_id']); ?>
	<form action="core/handleforms.php?customer_id=<?php echo $_GET['customer_id']; ?>" method="POST">
		<div class="Container" style="border-style: solid; 
		font-family: 'Arial';">
			<p>User name: <?php echo $getrecordbycustomer_rental['username']; ?></p>
			<p>First Name: <?php echo $getrecordbycustomer_rental['first_name']; ?></p>
			<p>Last Name: <?php echo $getrecordbycustomer_rental['last_name']; ?></p>
			<p>mode of payment: <?php echo $getrecordbycustomer_rental['paymentmode']; ?></p>

			<input type="submit" name="deleteSubmitBtn" value="Delete">
		</div>
	</form>
</body>
</html>
