<?php
session_start();
if (isset($_POST['submitBtn'])) {
	// set the data session for username and passowrd
   $FirstName = $_POST['firstName'];
   $Password = $_POST['password'];
	// checks if the values are already logged in
   if (isset($_SESSION['firstName']) && isset($_SESSION['password'])) {
	   //if same mesage appears. hashed password
       if ($_SESSION['firstName'] === $FirstName && password_verify($Password, $_SESSION['password'])) {
           $message = "User is already logged in.";
       } else {
           $_SESSION['firstName'] = $FirstName;
           $_SESSION['password'] = password_hash($Password,PASSWORD_DEFAULT);
       }
	// if new values reset 
   } else {
       $_SESSION['firstName'] = $FirstName;
       $_SESSION['password'] = password_hash($Password, PASSWORD_DEFAULT);
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form action="" method="POST">
     <p><input type="text" placeholder="First name here" name="firstName"></p>
     <p><input type="password" placeholder="Password here" name="password"></p>
     <p><input type="submit" value="Submit" name="submitBtn"></p>
  </form>

  <a href="unset.php">Logout</a>

  <h2>
	user logged in:
	<?php
	if (isset($_SESSION['firstName'])) {
	   echo $_SESSION['firstName'];
	   
	}
	?>
 </h2>
 <h2>
	password
	<?php
	if (isset($_SESSION['password'])) {
	   echo $_SESSION['password'];
	}
	?>
 </h2>
 <h2>
	<?php
	if (isset($message)) {
	   echo $message;
	}
	?>
 </h2>
</body>
</html>