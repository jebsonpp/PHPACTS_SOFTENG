<?php 
session_start();
require_once 'core/models.php';
require_once 'core/dbConfig.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}


?>
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
        select {
            font-size: 1.5em;
            height: 50px;
            width: 200px;
        }
    </style>

</head>


<body>
<h3>Welcome to the Car rental management.</h3>
	<form action="core/handleforms.php" method="POST">
        <p><label for="username">User Name:</label> <input type="text" name="username" required></p>
		<p><label for="firstname">First Name:</label> <input type="text" name="firstname" required></p>
		<p><label for="lastname">Last Name:</label> <input type="text" name="lastname"required></p>
		<p><label for="paymentmode">Mode of Payment:</label>
            <select name = "paymentmode" required>
                <option value = "Card"> Card</option>
                <option value = "Cash"> Cash</option>
            </select>
        <p><input type="submit" name="Submitbtn"></p>
        <a href="core/handleForms.php?logoutUser=1">Logout</a>
        
    </form>

<?php

$seeRecord = seeRecord($pdo);
foreach ($seeRecord as $row) { ?>
    <div class="container" style="border-style: solid; width: 30%; height: 250px; margin-top: 30px;">
        <h3>Customer ID: <?php echo htmlspecialchars($row['customer_id']); ?></h3>
        <h3>User Name: <?php echo htmlspecialchars($row['username']); ?></h3>
        <h3>First Name: <?php echo htmlspecialchars($row['first_name']); ?></h3>
        <h3>Last Name: <?php echo htmlspecialchars($row['last_name']); ?></h3>
        <h3>Mode of Payment: <?php echo htmlspecialchars($row['paymentmode']); ?></h3>

        <a href="viewrecord.php?customer_id=<?php echo htmlspecialchars ($row['customer_id']); ?>">View Record</a>
        <a href="editrecord.php?customer_id=<?php echo htmlspecialchars ($row['customer_id']); ?>">Edit</a>
        <a href="deleterecord.php?customer_id=<?php echo htmlspecialchars ($row['customer_id']); ?>">Delete</a>
    </div>

<?php } ?>

</body>
</html>