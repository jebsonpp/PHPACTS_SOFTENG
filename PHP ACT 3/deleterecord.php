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
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getrecordbyid = getrecordbyid($pdo, $_GET['customer_id']); ?>
	<form action="core/handleForms.php?customer_id=<?php echo $_GET['customer_id']; ?>" method="POST">

		<div class="Container" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getrecordbyid['first_name']; ?></p>
			<p>Last Name: <?php echo $getrecordbyid['last_name']; ?></p>
			<p>Car: <?php echo $getrecordbyid['car']; ?></p>
			<p>Date of Return: <?php echo $getrecordbyid['returndate']; ?></p>
			<p>mode of payment: <?php echo $getrecordbyid['paymentmode']; ?></p>
			<p>Start of Destination: <?php echo $getrecordbyid['destinationstart']; ?></p>
			<p>End of Destination: <?php echo $getrecordbyid['destinationend']; ?></p>
			<input type="submit" name="deleteSubmitBtn" value="Delete">
		</div>
	</form>
</body>
</html>
