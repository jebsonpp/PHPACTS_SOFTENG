<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
</head>
<body>
<?php
    $food = $_POST['food'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];
    $timestamp = date("Y-m-d H:i:s");
    
    $prices = array(
        "adobo" => 60,
        "pinakbet" => 60,
        "rice" => 50
    );
    
    $total_cost = $prices[$food] * $quantity;
    
    $change = $cash - $total_cost;

    echo "<h1>Receipt:</h1>";
    echo "<h2>You ordered: $food</h2>";
    echo "<h3>Quantity: $quantity</h3>";
    echo "<h3>The total cost is: ₱$total_cost</h3>";
    echo "<h3>Your change is: ₱$change</h3>";
    echo "<p>Thank you for your order!</p>";
    echo "<h3> $timestamp </h3>";

    if ($cash < $total_cost) {
        header("Location: handleform.php ");
        exit();
    }
?>



</body>
</html>