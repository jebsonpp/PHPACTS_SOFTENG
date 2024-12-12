<?php  
require_once 'dbConfig.php';
require_once 'models.php';


if (isset($_POST['insertNewUserBtn'])) {
	$username = trim($_POST['username']);
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$password = trim($_POST['password']);
	$confirm_password = trim($_POST['confirm_password']);

	if (!empty($username) && !empty($first_name) && !empty($last_name) && !empty($password) && !empty($confirm_password)) {

		if ($password == $confirm_password) {

			$insertQuery = insertNewUser($pdo, $username, $first_name, $last_name, password_hash($password, PASSWORD_DEFAULT));
			$_SESSION['message'] = $insertQuery['message'];

			if ($insertQuery['status'] == '200') {
				$_SESSION['message'] = $insertQuery['message'];
				$_SESSION['status'] = $insertQuery['status'];
				header("Location: ../loginpage.php");
			}

			else {
				$_SESSION['message'] = $insertQuery['message'];
				$_SESSION['status'] = $insertQuery['status'];
				header("Location: ../registerpage.php");
			}

		}
		else {
			$_SESSION['message'] = "Please make sure both passwords are equal";
			$_SESSION['status'] = '400';
			header("Location: ../registerpage.php");
		}

	}

	else {
		$_SESSION['message'] = "Please make sure there are no empty input fields";
		$_SESSION['status'] = '400';
		header("Location: ../registerpage.php");
	}
}
if (isset($_POST['loginUserBtn'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	if (!empty($username) && !empty($password)) {

		$loginQuery = checkIfUserExists($pdo, $username);
		$userIDFromDB = $loginQuery['userInfoArray']['user_id'];
		$usernameFromDB = $loginQuery['userInfoArray']['username'];
		$passwordFromDB = $loginQuery['userInfoArray']['password'];

		if (password_verify($password, $passwordFromDB)) {
			$_SESSION['user_id'] = $userIDFromDB;
			$_SESSION['username'] = $usernameFromDB;
			header("Location: ../index.php");
		}

		else {
			$_SESSION['message'] = "Username/password invalid";
			$_SESSION['status'] = "400";
			header("Location: ../loginpage.php");
		}
	}

	else {
		$_SESSION['message'] = "Please make sure there are no empty input fields";
		$_SESSION['status'] = '400';
		header("Location: ../registerpage.php");
	}

}
if (isset($_GET['logoutUserBtn'])) {
	unset($_SESSION['user_id']);
	unset($_SESSION['username']);
	header("Location: ../loginpage.php");
}
if (isset($_POST['insertAdminNewUserBtn'])) {
	$username = trim($_POST['username']);
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$password = trim($_POST['password']);
	$confirm_password = trim($_POST['confirm_password']);

	if (!empty($username) && !empty($first_name) && !empty($last_name) && !empty($password) && !empty($confirm_password)) {

		if ($password == $confirm_password) {

			$insertQuery = insertNewUser($pdo, $username, $first_name, $last_name, password_hash($password, PASSWORD_DEFAULT));
			$_SESSION['message'] = $insertQuery['message'];

			if ($insertQuery['status'] == '200') {
				$_SESSION['message'] = $insertQuery['message'];
				$_SESSION['status'] = $insertQuery['status'];
				header("Location: ../loginpage.php");
			}

			else {
				$_SESSION['message'] = $insertQuery['message'];
				$_SESSION['status'] = $insertQuery['status'];
				header("Location: ../registerpage.php");
			}

		}
		else {
			$_SESSION['message'] = "Please make sure both passwords are equal";
			$_SESSION['status'] = '400';
			header("Location: ../registerpage.php");
		}

	}

	else {
		$_SESSION['message'] = "Please make sure there are no empty input fields";
		$_SESSION['status'] = '400';
		header("Location: ../registerpage.php");
	}
}
if(isset($_POST['InsertJobBtn'])){
	$insertJob = InsertNewJobApplication($pdo,$_POST['companyName'],$_POST['jobPosition'],$_POST['startingSalary'],$_SESSION['user_id']);

	if($insertJob){
		$_SESSION["message"] = "Successfully Inserted!";
		header("Location:../index.php");
	}

}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['insertApplyingBtn'])) {

	// Get file name
	$fileName = $_FILES['file']['name'];

	// Get temporary file name
	$tempFileName = $_FILES['file']['tmp_name'];

	// Get file extension
	$fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

	// Generate random characters for image name
	$uniqueID = sha1(md5(rand(1,9999999)));

	// Combine image name and file extension
	$fileName = $uniqueID.".".$fileExtension;
	
	$insertApplying = insertNewApplyingForJobs($pdo,$fileName,$_POST['message'],$_SESSION['user_id']);

	// Store actual 'image file' to images folder
	if ($insertApplying) {

		// Specify path
		$folder = "../../uploaded_files/".$fileName;

		// Move file to the specified path 
		if (move_uploaded_file($tempFileName, $folder)) {
			header("Location: ../index.php");
		}
	}

}