<?php
include 'Router.php';
$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);
$router->get('/', 'views/default');
$router->get('users', 'views/users');
?>