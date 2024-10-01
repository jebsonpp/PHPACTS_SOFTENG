<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PART 2: ORDER MANAGEMENT SYSTEM</title>
</head>
<body>
<h1>Welcome to the Canteen! </h1>
    <ul>
        <li>adobo - ₱100</li>
        <li>pinakbet- ₱80</li>
        <li>rice - ₱50</li>
    </ul>
    <form action="index2.php" method="post">
        <label for="food">Choose your order:</label>
        <select name="food" id="food">
            <option value="adobo">adobo</option>
            <option value="pinakbet">pinakbet</option>
            <option value="rice">rice</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1"><br><br>
        <label for="cash">Cash payment:</label>
        <input type="number" name="cash" id="cash" min="0"><br><br>
        <input type="submit" value="Place Order">
    </form>

</body>
</html>