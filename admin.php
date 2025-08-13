<?php
include 'db_connect.php';

$admin_name = "admin";
$admin_email = "admin@example.com";
$admin_password = "admin";

// Hash the password
$hashed_password = password_hash($admin_password, PASSWORD_DEFAULT);

$sql = "INSERT INTO admin (name, email, password) VALUES ('$admin_name', '$admin_email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Admin created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
