<?php
require_once 'dbConfig.php';
require_once 'models.php';

if(isset($_POST['Submitbtn'])) {

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$car = $_POST['car'];
$returndate = $_POST['returndate'];
$paymentmode = $_POST['paymentmode'];
$destinationstart = $_POST['destinationstart'];
$destinationend = $_POST['destinationend'];

$query = insertIntoRental_Record($pdo,$firstname,$lastname,$car,$rentaldate,$returndate,$paymentmode,$destinationstart,$destinationend);



if($query) {
    header("location:../index.php");
}
else {
    echo "Failed Query";
}


}

if (isset($_POST['editSubmitBtn'])) {
	$customer_id = $_GET['customer_id'];
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
		}
		else {
			echo "Update failed";
		}

	}


}

if (isset($_POST['deleteSubmitBtn'])) {

	$query = deleterecord($pdo, $_GET['customer_id']);

	if ($query) {
		header("Location: ../index.php");
        exit;
	}
	else {
		echo "Deletion failed";
	}
}






?>