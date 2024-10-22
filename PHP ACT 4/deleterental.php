<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="core/handleforms.php?rental_id=<?php echo $_GET['rental_id']; ?>&customer_id=<?php echo $_GET['customer_id']; ?>" method="POST">
				<input type="submit" name="deleteRecordBtn" value="Delete">
			</form>	
	<?php $getCustomerrecordbyId = getCustomerrecordbyId($pdo, $_GET['rental_id']); ?>
	<h1>Are you sure you want to delete this record?</h1>
	<div class="container" style="border-style: solid; height: 400px;">
		<h2>Car: <?php echo $getCustomerrecordbyId['car'] ?></h2>
		<h2>Date of Rental: <?php echo $getCustomerrecordbyId['rentaldate'] ?></h2>
		<h2>Date of Return: <?php echo $getCustomerrecordbyId['returndate'] ?></h2>
		<h2>Date Added: <?php echo $getCustomerrecordbyId['date_added'] ?></h2>

		<div class="deleteRentalBtn" style="float: right; margin-right: 10px;">

					
			
		</div>	

	</div>
</body>
</html>