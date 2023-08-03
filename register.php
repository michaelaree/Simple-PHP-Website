<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'contact_form_db';

    
    $connection = mysqli_connect($host, $username, $password, $dbname);

    
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error() . " (Error number: " . mysqli_connect_errno() . ")");
    }

    
    $username = isset($_POST['username']) ? mysqli_real_escape_string($connection, $_POST['username']) : '';
    $password = isset($_POST['password']) ? mysqli_real_escape_string($connection, $_POST['password']) : '';

    
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($connection, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'ss', $username, $hashedPassword);
        if (mysqli_stmt_execute($stmt)) {
            
            echo "User registered successfully!";
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    
    mysqli_close($connection);
}
?>



