<?php
require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['Submitbtn'])) {
    // Insert operation
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $car = trim($_POST['car']);
    $returndate = trim($_POST['returndate']);
    $paymentmode = trim($_POST['paymentmode']);
    $destinationstart = trim($_POST['destinationstart']);
    $destinationend = trim($_POST['destinationend']);

    $query = insertIntoRental_Record($pdo, $firstname, $lastname, $car, $returndate, $paymentmode, $destinationstart, $destinationend);

    if ($query) {
        header("Location: ../index.php");
        exit;
    } else {
        echo "Failed Query";
    }
}

if (isset($_POST['editSubmitBtn'])) {
    // Edit operation
    if (isset($_GET['customer_id'])) {
        $customer_id = $_GET['customer_id'];
    } else {
        echo "No customer ID provided.";
        exit;
    }

    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $car = trim($_POST['car']);
    $returndate = trim($_POST['returndate']);
    $paymentmode = trim($_POST['paymentmode']);
    $destinationstart = trim($_POST['destinationstart']);
    $destinationend = trim($_POST['destinationend']);

    if (!empty($customer_id) && !empty($firstname) && !empty($lastname) && !empty($car) && !empty($returndate) && !empty($paymentmode) && !empty($destinationstart) && !empty($destinationend)) {
        $query = updateRecord($pdo, $customer_id, $firstname, $lastname, $car, $returndate, $paymentmode, $destinationstart, $destinationend);

        if ($query) {
            header("Location: ../index.php");
            exit;
        } else {
            echo "Update failed";
        }
    } else {
        echo "Please fill all fields.";
    }
}

if (isset($_POST['deleteSubmitBtn'])) {
    // Delete operation
    if (isset($_GET['customer_id'])) {
        $customer_id = $_GET['customer_id'];
        $query = deleterecord($pdo, $customer_id);

        if ($query) {
            header("Location: ../index.php");
            exit;
        } else {
            echo "Deletion failed";
        }
    } else {
        echo "No customer ID provided for deletion.";
    }
}
?>



?>





?>