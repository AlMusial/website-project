<?php
$connection = mysqli_connect('localhost', 'root', '', 'userdatabase');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}