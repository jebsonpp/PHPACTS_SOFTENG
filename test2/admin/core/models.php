<?php  
require_once 'dbConfig.php';
function checkIfUserExists($pdo, $username) {
	$response = array();
	$sql = "SELECT * FROM user_accounts WHERE username = ?";
	$stmt = $pdo->prepare($sql);

	if ($stmt->execute([$username])) {

		$userInfoArray = $stmt->fetch();

		if ($stmt->rowCount() > 0) {
			$response = array(
				"result"=> true,
				"status" => "200",
				"userInfoArray" => $userInfoArray
			);
		}

		else {
			$response = array(
				"result"=> false,
				"status" => "400",
				"message"=> "User doesn't exist from the database"
			);
		}
	}

	return $response;

}

function insertNewUser($pdo, $username, $first_name, $last_name, $password) {
	$response = array();
	$checkIfUserExists = checkIfUserExists($pdo, $username); 

	if (!$checkIfUserExists['result']) {

		$sql = "INSERT INTO user_accounts (username, first_name, last_name, password) 
		VALUES (?,?,?,?)";

		$stmt = $pdo->prepare($sql);

		if ($stmt->execute([$username, $first_name, $last_name, $password])) {
			$response = array(
				"status" => "200",
				"message" => "User successfully inserted!"
			);
		}

		else {
			$response = array(
				"status" => "400",
				"message" => "An error occured with the query!"
			);
		}
	}

	else {
		$response = array(
			"status" => "400",
			"message" => "User already exists!"
		);
	}

	return $response;
}


function getAdminUserByID($pdo, $user_id) {
	$sql = "SELECT * FROM user_accounts WHERE user_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$user_id]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function InsertNewJobApplication($pdo,$companyName,$jobPosition,$startingSalary,$user_id){
	$sql = "INSERT INTO applications(companyName,jobPosition,startingSalary,user_id)
	VALUES (?,?,?,?)";
	$stmt = $pdo ->prepare($sql);

	if($stmt -> execute([$companyName,$jobPosition,$startingSalary,$user_id]))
	return true;

}

function getAllJobApplication($pdo){
	$sql = "SELECT * FROM applications";
	$stmt = $pdo -> prepare($sql);

	if($stmt -> execute()){
		return $stmt ->fetchAll();
	}


}


function getrecordbyapplication_id($pdo,$application_id) {
    $sql = "SELECT * FROM applications WHERE application_id = ?";
    $stmt = $pdo ->prepare($sql);
    if($stmt ->execute([$application_id])){
        return $stmt ->fetch();
    }
}

function getUserByID($pdo, $user_id) {
	$sql = "SELECT * FROM user_accounts WHERE user_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$user_id]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function insertNewApplyingForJobs($pdo,$file_name,$message,$user_id) {
	$sql = "INSERT INTO applying_for_jobs(file_name,message,user_id) VALUES (?,?,?)";
	$stmt = $pdo ->prepare($sql);

	if($stmt -> execute([$file_name,$message,$user_id]))
	return true;
}

function getAppliedJobsForAdminPostings($pdo, $user_id) {
    if (empty($user_id)) {
        throw new InvalidArgumentException("User ID cannot be empty.");
    }

    // SQL query to fetch applications by user_id where the posting admin is an admin
    $sql = "SELECT applying_for_jobs.*, applications.*, user_accounts.is_admin 
            FROM applying_for_jobs
            JOIN applications ON applying_for_jobs.application_id = applications.application_id
            JOIN user_accounts ON applications.user_id = user_accounts.user_id
            WHERE applying_for_jobs.user_id = ? AND user_accounts.is_admin = 1";

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_id]);
        $results = $stmt->fetchAll();

        if (empty($results)) {
            return "No applications found for jobs posted by an admin.";
        }

        return $results;
    } catch (PDOException $e) {
        return "Error: " . $e->getMessage();
    }
}

function getMessagesForHR($pdo) {
    // Fetch all messages where sender is an applicant
    $sql = "SELECT m.id, m.sender_id, m.content, m.created_at, m.status, u.name AS applicant_name
            FROM messages m
            JOIN users u ON m.sender_id = u.id
            ORDER BY m.created_at DESC";  // Order by message creation time
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

