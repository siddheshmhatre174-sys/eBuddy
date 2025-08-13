<?php
$host = 'localhost';
$db = 'cld';
$user = 'root';
$pass = '';
$port = '3306'; // Use port 3306 as requested

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>

