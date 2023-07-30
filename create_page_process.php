<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form_db";

try {
   
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
       
        $title = htmlspecialchars($_POST["title"]);
        $content = htmlspecialchars($_POST["content"]);

       
        $stmt = $conn->prepare("INSERT INTO pages (title, content) VALUES (:title, :content)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->execute();

        echo "Page created successfully!";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
