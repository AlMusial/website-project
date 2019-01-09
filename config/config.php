<?php
$dbserver = 'localhost';
$dbuser = 'root';
$dbname = "users";
try {
	$connection = new PDO("mysql:host=$dbserver;dbname=$dbname", $dbuser);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "CREATE TABLE user(
		id INT NOT NULL AUTO_INCREMENT,
		username varchar(255) NOT NULL,
		password varchar(255) NOT NULL,
		PRIMARY KEY(id))";
	$connection->exec($sql);
	echo "Database created";
	} catch (PDOException $e) {
	echo "Could not create database: " . $e->getMessage();
	}
$connection = null;
?>