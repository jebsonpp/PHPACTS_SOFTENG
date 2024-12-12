<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<?php require_once 'core/handleForms.php'; ?>

<?php  
if (!isset($_SESSION['username'])) {
    header("Location: ../loginpage.php");
}

$getUserByID = getAdminUserByID($pdo, $_SESSION['user_id']);

if ($getUserByID['is_admin'] == 0) {
    header("Location: ../index.php");
}

// Display and clear session message
$message = '';
if (isset($_SESSION["message"])) {
    $message = $_SESSION["message"];
    unset($_SESSION["message"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;"bgColor="gray">
    <?php include 'navigation.php'; ?>
    
    <?php if (!empty($message)): ?>
        <div class="alert" style="color: green; font-weight: bold; margin: 10px;">
            <?php echo htmlspecialchars($message); ?>
        </div>
    <?php endif; ?>

    <div class="job-posting-container">
        <h1>Write a Job Post Here!</h1>
        <form action="core/handleForms.php" method="post">
            <p>
                <label for="companyName">Company: </label>
                <input type="text" name="companyName">
            </p>
            <p>
                <label for="jobPosition">Position: </label>
                <input type="text" name="jobPosition">
            </p>
            <p>
                <label for="startingSalary">Starting Salary: </label>
                <input type="text" name="startingSalary">
            </p>
            <p>
                <input type="submit" name="InsertJobBtn">
            </p>
        </form>
    </div>
</body>
</html>
