<?php  
require_once 'core/dbConfig.php'; 
?>
<div class="navigation" style="text-align: center; margin-bottom: 50px;">
	<h1>Welcome HR <span style="color: blue;"><?php echo $_SESSION['username']; ?></span></h1>
	<a href="index.php">Home</a>
	<a href="profile.php?user_id=<?php echo $_SESSION['user_id']; ?>">Your Profile</a>
	<a href="messages.php">Messages</a>
	<a href="applications.php">Job applications</a>
	<a href="core/handleForms.php?logoutUserBtn">Logout</a>
</div>