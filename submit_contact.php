<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    $connection = mysqli_connect('your_db_host', 'your_db_username', 'your_db_password', 'your_db_name');

    if (!$connection) {
        die("Database connection error: " . mysqli_connect_error());
    }

    $query = "INSERT INTO contact_submissions (name, email, message) VALUES ('$name', '$email', '$message')";
    mysqli_query($connection, $query);

    
    mysqli_close($connection);

   
    header("Location: contact.php?status=success");
    exit();
} else {
    header("Location: contact.php");
    exit();
}
