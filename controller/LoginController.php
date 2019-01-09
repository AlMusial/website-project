<?php
class LoginController {
	public function __construct() {
		require dirname(__FILE__).'\..\views\login.php';
	}
	public function login() {
		session_start();
		require_once dirname(__FILE__).'\..\config\connect.php';
		if (isset($_POST['username']) and isset($_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$query = "SELECT * FROM `users` WHERE username='$username' and password='".sha1($password)."'";
			$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
			$count = mysqli_num_rows($result);
			if ($count == 1) {
				$_SESSION['username'] = $username;
			} else {
				echo 'Invalid Login Credentials.';
			}
		}
	}
}
?>