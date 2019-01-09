<?php
foreach(glob("controller/*.php") as $file){
    require $file;
}
require 'router.php';
$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);

$router->get('/', function() {
$controller = new Controller();
});
$router->get('/login', function() {
$controller = new LoginController();
//if($_SERVER['REQUEST_METHOD'] == 'POST')
$controller->login();
});
$router->get('/projekty', function() {
$controller = new ProjektyController();
});
$router->get('/laboratorium', function() {
$controller = new LaboratoriumController();
});
$router->get('/kontakt', function() {
$controller = new KontaktController();
});
require('views/404.php');
?>