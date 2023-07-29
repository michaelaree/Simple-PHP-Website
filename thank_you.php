<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"] ?? '';
    $email = $_POST["email"] ?? '';
    $message = $_POST["message"] ?? '';
} else {
    header("Location: contact.php");
    exit();
}
?>

<?php include_once("templates/header.php"); ?>

<h1>Thank You</h1>
<p>Thank you for contacting us, <?php echo $name; ?>!</p>
<p>We have received your message:</p>
<blockquote>
    <?php echo $message; ?>
</blockquote>
<p>We will get back to you soon at <?php echo $email; ?>.</p>
<p><a href="index.php">Back to Home</a></p>
<p><a href="about.php">Learn more about us</a></p>
<p><a href="contact.php">Contact us again</a></p>



<?php include_once("templates/footer.php"); ?>