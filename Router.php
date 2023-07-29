<?php

$request_uri = $_SERVER['REQUEST_URI'];


$request_uri = strtok($request_uri, '?');


$base_path = '/';


$routes = array(
    $base_path => 'home.php',
    $base_path . 'about' => 'about.php',
    $base_path . 'contact' => 'contact.php',
    $base_path . 'thank_you' => 'thank_you.php',
);


if (array_key_exists($request_uri, $routes)) {
    
    include_once($routes[$request_uri]);
} else {
    
    http_response_code(404);
    echo '404 Not Found';
}
?>
