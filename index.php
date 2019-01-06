<?php
include 'router.php';
$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);
$router->get('/', 'views/default');
?>