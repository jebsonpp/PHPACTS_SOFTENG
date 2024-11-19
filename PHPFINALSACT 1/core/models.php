<?php  

require_once 'dbconfig.php';

function getAllUsers($pdo) {
	$sql = "SELECT * FROM applicants_data 
			ORDER BY first_name ASC";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getUserByID($pdo, $id) {
	$sql = "SELECT * from applicants_data WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function searchForAUser($pdo, $searchQuery) {
	
	$sql = "SELECT * FROM applicants_data WHERE 
			CONCAT(first_name,last_name,email,gender,
				position) 
			LIKE ?";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute(["%".$searchQuery."%"]);
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}



function insertNewUser($pdo, $first_name, $last_name, $email, 
	$gender, $position) {

	$sql = "INSERT INTO applicants_data 
			(
				first_name,
				last_name,
				email,
				gender,
				position
			)
			VALUES (?,?,?,?,?)
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([
		$first_name, $last_name, $email, 
		$gender, $position
	]);

	if ($executeQuery) {
		return true;
	}

}

function editUser($pdo, $first_name, $last_name, $email, $gender, 
	$position, $id) {

	$sql = "UPDATE applicants_data
				SET first_name = ?,
					last_name = ?,
					email = ?,
					gender = ?,
					position = ?
				WHERE id = ? 
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$first_name, $last_name, $email, $gender, 
		$position, $id]);

	if ($executeQuery) {
		return true;
	}

}


function deleteUser($pdo, $id) {
	$sql = "DELETE FROM applicants_data 
			WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return true;
	}
}




?>