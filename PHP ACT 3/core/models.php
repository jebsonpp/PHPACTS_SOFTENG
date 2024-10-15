<?php
require_once 'dbConfig.php';

function insertIntoRental_Record($pdo,$firstname,$lastname,$car,$returndate,$paymentmode,$destinationstart,$destinationend){


    $sql = "INSERT INTO rental_record (first_name,last_name,car,returndate,paymentmode,destinationstart,destinationend) VALUES (?,?,?,?,?,?,?)";

    $stmt = $pdo ->prepare ($sql);

    if($stmt -> execute([$firstname,$lastname,$car,$returndate,$paymentmode,$destinationstart,$destinationend])){
        return true;

    }
}

function seeRecord($pdo){
    $sql = "SELECT * FROM rental_record";
    $stmt = $pdo ->prepare($sql);
    if($stmt -> execute()){
        return $stmt -> fetchAll();

    }

}

function getrecordbyid($pdo,$customer_id) {
    $sql = "SELECT * FROM rental_record WHERE customer_id = ?";
    $stmt = $pdo ->prepare($sql);
    if($stmt ->execute([$customer_id])){
        return $stmt ->fetch();
    }
}

function updateRecord($pdo,$customer_id,$firstname,$lastname,$car,$returndate,$paymentmode,$destinationstart,$destinationend){
    $sql = "UPDATE rental_record
                SET first_name = ?,
                    last_name= ?,
                    car= ?,
                    returndate= ?,
                    paymentmode= ?,
                    destinationstart= ?,
                    destinationend= ?";

$stmt = $pdo ->prepare($sql);
if($stmt -> execute([$firstname,$lastname,$car,$returndate,$paymentmode,$destinationstart,$destinationend])){
    return true;
}

}

function deleterecord($pdo,$customer_id){
    $sql = "DELETE FROM rental_record WHERE customer_id = ?";
    $stmt = $pdo ->prepare($sql);

    if($stmt ->execute([$customer_id]));
    return true;
}
?>