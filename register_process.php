<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form_db";

try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        
        $stmt = $conn->prepare("SELECT id, password_hash FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $row = $stmt->fetch();

        if ($row && password_verify($password, $row['password_hash'])) {
           
            $_SESSION["user_id"] = $row['id'];
            header("Location: dashboard.php"); 
            exit(); 
        } else {
            echo "Invalid username or password.";
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>