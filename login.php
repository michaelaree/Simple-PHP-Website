
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize user inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the user exists in the database
    // ... (database connection and SELECT query)

    if ($user && password_verify($password, $user['password_hash'])) {
        // User authentication successful
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials
        $error_message = "Invalid username or password.";
    }
}
?>




<!DOCTYPE html>
<html>
<head>
    <title>Login successfully!</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        
    </header>

    <main>
        <h1>Login successfully!</h1>
        <form action="process_login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="Login">
        </form>
    </main>

    <footer>
        &copy; <?php echo date('Y'); ?> 
    </footer>
</body>
</html>
