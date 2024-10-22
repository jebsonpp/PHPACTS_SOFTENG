<?php
require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['Submitbtn'])) {

    $query = insertIntoCustomer_rental($pdo,$_POST['username'],$_POST['firstname'],$_POST['lastname'],$_POST['paymentmode']);
    if ($query) {
        header("Location: ../index.php");
        exit;
    } else {
        echo "Failed Query";
    }
}

if (isset($_POST['editSubmitBtn'])) {
    $query = updatecustomer_rental($pdo, $_POST['userName'], $_POST['firstName'], $_POST['lastName'], $_POST['paymentmode'], $_GET['customer_id']);

    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "Failed";
    }
}


if (isset($_POST['deleteSubmitBtn'])) {
    // Delete operation
    if (isset($_GET['customer_id'])) {
        $customer_id = $_GET['customer_id'];    
        $query = deletecustomer_rental($pdo, $customer_id);

        if ($query) {
            header("Location: ../index.php");
            exit;
        } else {
            echo "Deletion failed";
        }
    } 
}

if (isset($_POST['insertRecordBtn'])) {

    if(!!empty($_POST['car']) && !!empty($_POST['rentaldate']) && !!empty($_POST['returndate']) && !!empty($_GET['customer_id']));

        $query = insertIntoRental($pdo, $_POST['car'], $_POST['rentaldate'],$_POST['returndate'],$_GET['customer_id']);

        if ($query) {
            header("Location: ../viewrecord.php?customer_id=" .$_GET['customer_id']);
        }
        else {
            echo "Insertion failed";
        }
}

if (isset($_POST['editRecordBtn'])) {

	if (!empty($_POST['car']) && !empty($_POST['rentaldate'])&& !empty($_POST['returndate']) && !empty($_GET['rental_id'])) {

		$query = updateCustomerrecordByID($pdo, $_POST['car'], $_POST['rentaldate'], $_POST['returndate'],$_GET['rental_id']);

		if ($query) {
			header("Location: ../viewrecord.php?customer_id=" .$_GET['customer_id']);
		}
		
		else {
			echo "Update failed";
		}

	}


}

if (isset($_POST['deleteRecordBtn']))  {
$query = deleteCustomerRecordById($pdo, $_GET['rental_id']);

if ($query) {
    header("Location: ../viewrecord.php?customer_id=" .$_GET['customer_id']);
} else {
    echo "Deletion failed";
}
}

?>
