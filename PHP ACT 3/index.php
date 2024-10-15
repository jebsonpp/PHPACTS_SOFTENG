<?php require_once 'core/dbConfig.php'?>
<?php require_once 'core/models.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Management</title>
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
<h3>Welcome to the Student Management System. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstname">First Name:</label> <input type="text" name="firstname"></p>
		<p><label for="lastname">Last Name:</label> <input type="text" name="lastname"></p>
		<p><label for="car">Car:</label> <input type="text" name="car"></p>
		<p><label for="returndate">Return Date:</label> <input type="date" name="returndate"></p>
		<p><label for="paymentmode">Mode of Payment:</label> <input type="text" name="paymentmode"></p>
		<p><label for="destinationstart">Start of Destination:</label> <input type="text" name="destinationstart"></p>
		<p><label for="destinationend">End of Destination:</label> <input type="text" name="destinationend"></p>
        <p><input type="submit" name="Submitbtn"></p>
    </form>

<?php
$seeRecord = seeRecord($pdo);
foreach ($seeRecord as $row) { ?>
    <div class="container" style="border-style: solid; width: 50%; height: 380px; margin-top: 20px;">
        <h3>Customer id: <?php echo $row['customer_id']; ?></h3>
        <h3>First Name: <?php echo $row['first_name']; ?></h3>
        <h3>Last Name: <?php echo $row['last_name']; ?></h3>
        <h3>Car: <?php echo $row['car']; ?></h3>
        <h3>Return Date: <?php echo $row['returndate']; ?></h3>
        <h3>Mode of Payment: <?php echo $row['paymentmode']; ?></h3>
        <h3>Start of Destination: <?php echo $row['destinationstart']; ?></h3>
        <h3>End of Destination: <?php echo $row['destinationend']; ?></h3>
        <h3>Rental Date: <?php echo $row['rentaldate']; ?></h3>
        
        <a href="editrecord.php?customer_id=<?php echo $row['customer_id']; ?>">Edit</a>
        <a href="deleterecord.php?customer_id=<?php echo $row['customer_id']; ?>">Delete</a>
    </div>
<?php } ?>

</body>
</html>
