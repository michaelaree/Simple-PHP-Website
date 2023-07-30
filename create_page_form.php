<!DOCTYPE html>
<html>

<head>
    <title>Create New Page</title>
</head>

<body>
    <h1>Create New Page</h1>
    <form action="create_page_process.php" method="POST">
        <label for="title">Page Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="content">Page Content:</label>
        <textarea id="content" name="content" rows="5" cols="50" required></textarea>
        <br>
        <input type="submit" value="Create Page">
    </form>
</body>

</html>