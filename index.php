<?php
session_start();


define('APP_ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', 'ikechukwu');
define('SITE_TITLE', 'mediplus');


$url = @explode('/', trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/'))[1];
$url = empty($url) ? '/' : $url;

$routes = [
    // 
    '/'=>'home.php',
    'home'=>'home.php',
    'appointment'=>'appointment.php',
    'blog'=>'blog-single.php',
    'contact'=>'contact.php',
    'portfolio'=>'portfolio-details.php',
    'services'=>'services.php',
    '404'=>'404.php'
    
];

if (@in_array($routes[$url], $routes)) {
    require $routes[$url];
}else{
    require $routes['404'];
    die;
}


