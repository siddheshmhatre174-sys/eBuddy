<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin_styles.css">
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">
            <img src="logo.webp" alt="College Logo">
            <h2 class="website-name">eBuddy</h2>
        </div>
        
        <div class="nav-links">
            <a href="view.php">Manage Students</a>
            <a href="add.php">Add Student</a>
            <a href="reviews.php">Reviews</a>
            <a href="2.php">Study Materials</a>
            <a href="upload materials.php">Upload Materials</a>
            <a href="course_a.php">Courses</a>
            <a href="home.php" class="logout-btn">Logout</a>
        </div>
    </nav>

    <!-- Background Section -->
    <div class="dashboard-background">
        <div class="dashboard-content">
            <h1>Welcome Admin</h1>
            <div class="buttons">
                <a href="view.php" class="btn">Manage Students</a>
                <a href="upload materials.php" class="btn">Upload Materials</a>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <section class="footer" id="footer">
    <footer class="footer">
        <div class="footer-container">
            <!-- Quick Links -->
             <div class="footer-section quick-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="logins.php">Browse Material</a></li>
                    <li><a href="logins.php">Update Profile</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                </ul>
            </div>
            
            <!-- Social Media Links -->
             <div class="footer-section social-links">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="www.facebook.com"><img src="css/l1.png" alt="Facebook"></a>
                    <a href="www.twitter.com"><img src="css/l3.png" alt="Twitter"></a>
                    <a href="www.instagram.com"><img src="css/l2.png" alt="Instagram"></a>
                    <a href="www.linkdin.com"><img src="css/l4.png" alt="LinkedIn"></a>
                </div>
            </div>
            
            <!-- Contact Information -->
             <div class="footer-section contact-info">
                <h3>Contact Info</h3>
                <p>Email: siddheshm@gmail.com</p>
                <p>Phone: +91 7894561230</p>
                <p>Address: Rasayani</p>
            </div>
        </div>
        
        <!-- Footer Bottom -->
         <div class="footer-bottom">
            <p>&copy; 2024 eBuddy College E-Library. All rights reserved.</p>
        </div>
    </footer>

    </section>

    <script src="admin_dashboard.js"></script>
</body>
</html>
