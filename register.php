<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize user inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Save the user credentials to the database
    // ... (database connection and INSERT query)

    // Redirect to login page or dashboard after successful registration
    header("Location: login.php");
    exit();
}
?>

<!-- Registration Form -->
<!-- ... (HTML form code) -->
