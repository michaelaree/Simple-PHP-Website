<?php

require 'database.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        $content = getContentFromDatabase('home');
        break;

    case 'about':
        $content = getContentFromDatabase('about');
        break;

    case 'services':
        $content = getContentFromDatabase('services');
        break;

    default:
        $content = getContentFromDatabase('404');
}

function getContentFromDatabase($pageSlug) {
    global $conn;

    $sql = "SELECT content FROM users WHERE user_id = 1"; 
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':pageSlug', $pageSlug, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result ? $result['content'] : 'Page not found.';
}
