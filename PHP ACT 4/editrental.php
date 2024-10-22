<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<a href="viewrecord.php?customer_id=<?php echo $_GET['customer_id']; ?>">
	View The Projects</a>
	<h1>Edit here!</h1>
	<?php $getCustomerrecordbyId = getCustomerrecordbyId($pdo, $_GET['rental_id']); ?>
	<form action="core/handleforms.php?rental_id=<?php echo $_GET['rental_id']; ?>&customer_id=<?php echo $_GET['customer_id']; ?>" method="POST">
		<p><label for="car"> Car: </label> 
			<select name="car" required>
				<option value="toyota">Toyota</option>
				<option value="honda">Honda</option>
				<option value="ford">Ford</option>
				<option value="bmw">Bmw</option>
				<option value="audi">Audi</option>
				value="<?php echo $getCustomerrecordbyId['car']; ?>">
			</select>
		</p>
        <p>
			<label for="rentaldate">Date of Rental: </label> 
			<input type="date" name="rentaldate" value="<?php echo $getCustomerrecordbyId['rentaldate']; ?>">
		</p>
		<p>
			<label for="returndate">Date of Return</label> 
			<input type="date" name="returndate" value="<?php echo $getCustomerrecordbyId['returndate']; ?>">
			<input type="submit" name="editRecordBtn">
		</p>
	</form>
</body>
</html>
