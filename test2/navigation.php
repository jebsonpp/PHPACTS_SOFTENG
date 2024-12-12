<?php require_once 'admin/core/dbConfig.php'; ?>
<div class="navigationbar" style="text-align: center; margin-bottom: 50px;">
	<h1>Welcome Applicant <span style="color: blue;"><?php echo $_SESSION['username']; ?></span></h1>
	<a href="index.php">Home</a>
	<a href="pending.php">Pending Applications</a>
	<a href="profile.php?user_id=<?php echo $_SESSION['user_id']; ?>">Your Profile</a>
	<a href="admin/core/handleForms.php?logoutUserBtn=1">Logout</a>
</div>