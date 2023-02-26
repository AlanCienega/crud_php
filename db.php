<?php
session_start();

$dbhost = 'db';
$dbuser = 'root';
$dbpass = 'mypassword';
$dbname = 'crud_php';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>