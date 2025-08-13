<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College E-Library</title>
    <link rel="stylesheet" href="css/indexd.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.webp" alt="College Logo">
            <h1 class="website-name">eBuddy</h1>
        </div>
        <nav class="navbar">
            <ul class="nav-menu" id="nav-menu">
                <li><a href="#about">About Us</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="logins.php">Login/Sign-Up</a></li>
            </ul>
            <div class="hamburger" id="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <section class="hero-section">
        <div class="hero-content">
            <h2>Welcome to College E-Library</h2>
            <p>Your portal to access previous year question papers and study materials.</p>
            <div class="cta-buttons">
                <a href="#explore" class="cta-btn">Explore Library</a>
                <a href="logins.php" class="cta-btn">Get Started</a>
            </div>
        </div>
    </section>

    
    <!-- About Us Section -->
    <section class="about-us" id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Our College E-Library is designed to provide students with easy access to a wide range of study materials, including previous year question papers, notes, and other resources. We aim to enhance the learning experience by making essential academic content available anytime, anywhere.</p>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <h2>Features</h2>
            <ul>
                <li>Access to previous year question papers.</li>
                <li>Downloadable study materials in PDF format.</li>
                <li>User-friendly dashboards for both students and administrators.</li>
                <li>Secure login and registration process.</li>
            </ul>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section class="contact-us" id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form class="contact-form">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" class="cta-btn">Send Message</button>
            </form>
        </div>
    </section>

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
     

    <script src="indexd.js"></script>
</body>
</html>


