<?php
$connection = mysqli_connect('localhost', 'root', 'root');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'blood_bank');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>