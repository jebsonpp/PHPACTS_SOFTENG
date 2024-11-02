<?php
require_once 'dbConfig.php';

function insertIntoCustomer_Rental($pdo, $username, $first_name, $last_name, $paymentmode) {
    $sql = "INSERT INTO customer_rental (username, first_name, last_name, paymentmode) VALUES (?, ?, ?, ?)";
    
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$username, $first_name, $last_name, $paymentmode])) {
        return true;
    } 
}


function seeRecord($pdo){
    $sql = "SELECT * FROM customer_rental";
    $stmt = $pdo ->prepare($sql);
    if($stmt -> execute()){
        return $stmt -> fetchAll();

    }

}

function getrecordbycustomer_rental($pdo,$customer_id) {
    $sql = "SELECT * FROM customer_rental WHERE customer_id = ?";
    $stmt = $pdo ->prepare($sql);
    if($stmt ->execute([$customer_id])){
        return $stmt ->fetch();
    }
}

function updatecustomer_rental($pdo, $username, $first_name, $last_name, $paymentmode, $customer_id) {
    $sql = "UPDATE customer_rental
                SET username = ?,
                    first_name = ?,
                    last_name = ?,
                    paymentmode = ?
                WHERE customer_id = ?";

    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$username, $first_name, $last_name, $paymentmode, $customer_id])) {
        return true;
    }
}


function deletecustomer_rental($pdo,$customer_id){
    $deletesql = "DELETE FROM rental WHERE customer_id = ?";
    $deletestmt = $pdo -> prepare($deletesql);
    $executedelete = $deletestmt ->execute([$customer_id]);

    if($executedelete) {
        $sql = "DELETE FROM customer_rental WHERE customer_id = ?";
        $stmt = $pdo ->prepare($sql);
        $executeQuery = $stmt->execute([$customer_id]);

        if($executeQuery){
            return true;
        }
        

    }


}

function getRental($pdo,$customer_id){
    $sql = "SELECT
                rental.rental_id,
                rental.car,
                rental.rentaldate,
                rental.returndate,
                rental.date_added
            FROM rental
            JOIN customer_rental ON rental.customer_id = customer_rental.customer_id
            WHERE rental.customer_id = ?
            GROUP BY rental.car
            ";

$stmt = $pdo ->prepare($sql);
if ($stmt -> execute([$customer_id]));
    return $stmt -> fetchAll();
}

function insertIntoRental($pdo,$car,$rentaldate,$returndate,$customer_id){
    $sql = "INSERT INTO rental (car,rentaldate,returndate,customer_id)VALUES(?,?,?,?)";
    $stmt = $pdo ->prepare($sql);
    
    if($stmt -> execute([$car,$rentaldate,$returndate,$customer_id]));
        return true;
}



function getCustomerrecordbyId($pdo, $rental_id) {
	$sql = "SELECT 
				rental.rental_id,
				rental.car,
				rental.rentaldate,
				rental.returndate,
                rental.date_added
			FROM rental
			JOIN customer_rental ON rental.customer_id = customer_rental.customer_id
			WHERE rental.rental_id  = ?     
			GROUP BY rental.car";

	$stmt = $pdo->prepare($sql);
	if ($stmt ->execute([$rental_id])) {
		return $stmt->fetch();
	}
}

function getAllInfoincustomer_rental($pdo, $customer_id) {
	$sql = "SELECT * FROM customer_rental WHERE customer_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$customer_id]);
	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function updateCustomerrecordByID($pdo, $car, $rentaldate, $returndate, $rental_id) {
	$sql = "UPDATE rental
			SET car = ?,
				rentaldate = ?,
                returndate = ?
			WHERE rental_id = ?
			";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$car, $rentaldate, $returndate,$rental_id]);

	if ($executeQuery) {
		return true;
	}
}
function deleteCustomerRecordById($pdo,$rental_id){
    $sql = "DELETE FROM rental WHERE rental_id = ?";
    $stmt = $pdo ->prepare($sql);
    if($stmt ->execute([$rental_id]));
    return true;
    
}

function getUserByUsername($username) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM user_login1 WHERE username = ?");
    $stmt->execute([trim($username)]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Check if a user with the same username or email already exists
function getUserByUsernameOrEmail($username, $email) {
    global $pdo;
    $sql = "SELECT * FROM user_login1 WHERE username = :username OR email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':username' => $username, ':email' => $email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Register a new user
function registerUser($username, $email, $password) {
    global $pdo;
    $sql = "INSERT INTO user_login1 (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([':username' => $username, ':email' => $email, ':password' => $password]);
}


?>