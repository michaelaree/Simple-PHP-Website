<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user_id"]) || !isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// If the user is logged in, display the dashboard content
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard, <?php echo $_SESSION["username"]; ?>!</h1>
    <p>This is your personalized dashboard content.</p>
    

    <h2>Recent Activities</h2>
    <ul>
        <li>Logged in on <?php echo date('Y-m-d H:i:s'); ?></li>
        <li>Uploaded a new file</li>
        <li>Updated profile information</li>
    </ul>

    <a href="logout.php">Logout</a>
</body>
</html>
