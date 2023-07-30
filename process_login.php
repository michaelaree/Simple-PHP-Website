<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'contact_form_db';

    
    $connection = mysqli_connect($host, $username, $password, $database);

   
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error() . " (Error number: " . mysqli_connect_errno() . ")");
    }

   
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $Password_hash = password_hash($password, PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO login (username,password) VALUES ('$username','$Password_hash')";

    if (mysqli_query($connection, $sql)) {
       
        echo "User login successfully!";
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    
    mysqli_close($connection);
}
?>