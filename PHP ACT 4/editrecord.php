<?php require_once 'core/handleForms.php'; ?>
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
<?php 
    // Fetch the record to edit based on customer_id
    if (isset($_GET['customer_id'])) {
        $customer_id = $_GET['customer_id'];
        $getrecordbycustomer_rental = getrecordbycustomer_rental($pdo, $customer_id);
    } else {
        echo "No customer ID provided.";
        exit;
    }
?>
    <form action="core/handleforms.php?customer_id=<?php echo $_GET['customer_id']; ?>" method="POST">
        <p>
            <label for="userName">User Name: </label> 
            <input type="text" name="userName" value="<?php echo $getrecordbycustomer_rental['username']; ?>">
        </p>
        <p>
            <label for="firstName">First Name: </label> 
            <input type="text" name="firstName" value="<?php echo $getrecordbycustomer_rental['first_name']; ?>">
        </p>
        <p>
            <label for="lastName">Last Name: </label> 
            <input type="text" name="lastName" value="<?php echo $getrecordbycustomer_rental['last_name']; ?>">
        </p>
        <p>
            <label for="paymentmode">Mode of Payment:</label>
            <select name="paymentmode" required>
                <option value="Card" <?php if ($getrecordbycustomer_rental['paymentmode'] == 'Card') echo 'selected'; ?>>Card</option>
                <option value="Cash" <?php if ($getrecordbycustomer_rental['paymentmode'] == 'Cash') echo 'selected'; ?>>Cash</option>
            </select>
        </p>
        <p>
            <input type="submit" name="editSubmitBtn">
        </p>
    </form>
</body>
</html>