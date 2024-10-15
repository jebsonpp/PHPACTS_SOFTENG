<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Record</title>
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
	<?php 
        $getrecordbyid = getrecordbyid($pdo,$_GET['customer_id']);?>
	<form action="core/handleForms.php?customer_id=<?php echo $_GET['customer_id']; ?>" method="POST">
		<p>
			<label for="firstname">First Name</label> 
			<input type="text" name="firstname" value="<?php echo htmlspecialchars($getrecordbyid['first_name']); ?>">
		</p>
		<p>
			<label for="lastname">Last Name</label> 
			<input type="text" name="lastname" value="<?php echo htmlspecialchars($getrecordbyid['last_name']); ?>">
		</p>
		<p>
			<label for="car">Car</label>
			<input type="text" name="car" value="<?php echo htmlspecialchars($getrecordbyid['car']); ?>">
		</p>
		<p>
			<label for="returndate">Return Date</label>
			<input type="text" name="returndate" value="<?php echo htmlspecialchars($getrecordbyid['returndate']); ?>">
		</p>
		<p>
			<label for="paymentmode">Payment Mode</label>
			<input type="text" name="paymentmode" value="<?php echo htmlspecialchars($getrecordbyid['paymentmode']); ?>">
		</p>
		<p>
			<label for="destinationstart">Destination Start</label>
			<input type="text" name="destinationstart" value="<?php echo htmlspecialchars($getrecordbyid['destinationstart']); ?>">
		</p>
		<p>
			<label for="destinationend">Destination End</label>
			<input type="text" name="destinationend" value="<?php echo htmlspecialchars($getrecordbyid['destinationend']); ?>">
		</p>
		<p>
			<input type="submit" name="editSubmitBtn">
		</p>
	</form>
</body>
</html>

