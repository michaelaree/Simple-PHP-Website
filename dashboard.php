<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}


$submissions = array(
    array('name' => 'John Doe', 'email' => 'john@example.com', 'message' => 'Sample message 1'),
    array('name' => 'Jane Smith', 'email' => 'jane@example.com', 'message' => 'Sample message 2'),
    
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    
</head>
<body>
    <h1>Welcome to your Dashboard, <?php echo $username; ?>!</h1>
    <p>Hello, <?php echo $_SESSION['username']; ?>! You are now logged in.</p>
    <h2>Contact Form Submissions</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
        <?php foreach ($submissions as $submission): ?>
        <tr>
            <td><?php echo $submission['name']; ?></td>
            <td><?php echo $submission['email']; ?></td>
            <td><?php echo $submission['message']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
