<?php
	include('controller/controller.php');
	include('views/view.php');
	$request = array_merge($_GET, $_POST);
	$controller = new Controller($request);
	echo $controller->display();
?>