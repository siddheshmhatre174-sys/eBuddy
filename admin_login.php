<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];

    // Use a prepared statement to prevent SQL injection
    $sql = $conn->prepare("SELECT * FROM admin WHERE email = ?");
    $sql->bind_param("s", $admin_email);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Verifying the password using password_verify
        if (password_verify($admin_password, $row['password'])) {
            echo "Admin login successful!";
            // Start session and set session variables, if needed
            session_start();
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_email'] = $row['email'];
            // Redirect to admin dashboard
            header('Location: admin_dashboard.php');
        } else {
            echo "Invalid admin password!";
        }
    } else {
        echo "No admin found with that email!";
    }

    $conn->close();
}
?>
