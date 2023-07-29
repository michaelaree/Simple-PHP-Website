<?php include_once("templates/header.php"); ?>

    <h1>Contact Us</h1>
    <p>You can contact us using the form below:</p>
    <form action="thank_you.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
    <p><a href="index.php">Back to Home</a></p>
    <p><a href="about.php">Learn more about us</a></p>

<?php include_once("templates/footer.php"); ?>
