<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View Record</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<a href="index.php">Return to home</a>
	<?php $getAllInfoincustomer_rental = getAllInfoincustomer_rental($pdo,$_GET['customer_id']); ?>
	<<h1>Username: <?php echo $getAllInfoincustomer_rental['username']; ?></h1>
	<form action="core/handleforms.php?customer_id=<?php echo $_GET['customer_id']; ?>" method="POST">
		<p> <label for="car"> Car: </label>
            <select name="car"required>
            <option value="toyota">Toyota</option>
            <option value="honda">Honda</option>
            <option value="ford">Ford</option>
            <option value="bmw">Bmw</option>
            <option value="audi">Audi</option>
            </select>
		<p>
			<label for="rentaldate">Date of Rental</label> 
			<input type="date" name="rentaldate"required>
			
		</p>	
		<p>
			<label for="returndate">Date of Return</label> 
			<input type="date" name="returndate"required>
			
		</p>

		<p><input type="submit" name="insertRecordBtn"></p>
	</form>

	<table style="width:100%; margin-top: 50px;">
	  <tr>
	    <th>Rental ID</th>
	    <th>Car</th>
	    <th>Rental Date</th>
	    <th>Return Date</th>
	    <th>Date Added</th>
	    <th>Action</th>
	  </tr>
	  <?php $getRental = getRental($pdo, $_GET['customer_id']); ?>
	  <?php foreach ($getRental as $row) { ?>
	  <tr>
	  	<td><?php echo $row['rental_id']; ?></td>	  	
	  	<td><?php echo $row['car']; ?></td>	  	
	  	<td><?php echo $row['rentaldate']; ?></td>	  	
	  	<td><?php echo $row['returndate']; ?></td>	  	
	  	<td><?php echo $row['date_added']; ?></td>
	  	<td>
		   <a href="editrental.php?rental_id=<?php echo $row['rental_id']; ?>&customer_id=<?php echo $_GET['customer_id']; ?>">Edit</a>
		   <a href="deleterental.php?rental_id=<?php echo $row['rental_id']; ?>&customer_id=<?php echo $_GET['customer_id']; ?>">Delete</a>
	  	</td>	  	
	  </tr>
	<?php } ?>
	</table>

</body>
</html>