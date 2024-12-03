<?php  

require_once 'dbconfig.php';
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

			if ($insertQuery['status'] == '202') {
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
			$_SESSION['status'] = '404';
			header("Location: ../register.php");
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
			header("Location: ../login.php");
		}
	}

	else {
		$_SESSION['message'] = "Please make sure there are no empty input fields";
		$_SESSION['status'] = '400';
		header("Location: ../register.php");
	}

}

if (isset($_GET['logoutUserBtn'])) {
	unset($_SESSION['username']);
	header("Location: ../loginpage.php");
}


if (isset($_POST['insertApplicantBtn'])) {
	$insertApplicant = insertNewApplicant($pdo,$_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['gender'], $_POST['position']);

	if ($insertApplicant) {
		$_SESSION['message'] = "Insert Sucess!";
		header("Location: ../index.php");
	}
}


if (isset($_POST['editApplicantBtn'])) {
	$editApplicant = editApplicant($pdo,$_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['gender'], $_POST['position'], $_GET['id']);

	if ($editApplicant) {
		$_SESSION['message'] = "Edit Success";
		header("Location: ../index.php");
	}
}

if (isset($_POST['deleteApplicantBtn'])) {
	$deleteApplicant = deleteApplicant($pdo,$_GET['id']);

	if ($deleteApplicant) {
		$_SESSION['message'] = "Successfully deleted!";
		header("Location: ../index.php");
	}
}

if (isset($_GET['searchBtn'])) {
	$searchForAnApplicant = searchForAnApplicant($pdo, $_GET['searchInput']);
	foreach ($searchForAnApplicant as $row) {
		echo "<tr> 
				<td>{$row['id']}</td>
				<td>{$row['first_name']}</td>
				<td>{$row['added_by']}</td>
				<td>{$row['last_name']}</td>
				<td>{$row['email']}</td>
				<td>{$row['gender']}</td>
				<td>{$row['position']}</td>
			  </tr>";
	}
}

?>