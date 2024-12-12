<?php require_once 'admin/core/models.php'; ?>
<?php require_once 'admin/core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications</title>
    <style>
        .container {
            border-style: solid;
            width: 20%;
            height: auto;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            padding: 10px;
            background-color: #f0f0f0;
        }
        body {
            background-color: grey;
        }
    </style>
</head>
<body>
<?php include 'navigation.php'; ?>

<?php

if (!isset($_SESSION['user_id'])) {
    echo "<p style='text-align:center;'>Please log in to view your applications.</p>";
    exit;
}

// Fetch applications for admin-posted jobs
$seeApplications = getAppliedJobsForAdminPostings($pdo, $_SESSION['user_id']);

if (is_string($seeApplications)) {
    echo "<p style='text-align:center;'>$seeApplications</p>";
} elseif (!empty($seeApplications)) {
    foreach ($seeApplications as $row) { ?>
        <div class="container">
            <h3>Application ID: <?php echo htmlspecialchars($row['application_id']); ?></h3>
            <h3>Company Name: <?php echo htmlspecialchars($row['companyName']); ?></h3>
            <h3>Job Position: <?php echo htmlspecialchars($row['jobPosition']); ?></h3>
            <h3>Starting Salary: <?php echo htmlspecialchars($row['startingSalary']); ?></h3>
            <h3>Pending Status: <?php echo htmlspecialchars($row['pending_status']); ?></h3>
        </div>
    <?php }
} else {
    echo "<p style='text-align:center;'>No applications found.</p>";
}
?>

</body>
</html>
