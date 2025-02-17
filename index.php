<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // The recipient email address
    $to = "info@mohaki.com";
    
    // Subject of the email
    $subject = "New Contact Form Submission from " . $name;
    
    // Construct the email content
    $body = "You have received a new message from your website contact form.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";
    
    // Headers to specify from email
    $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        $success_message = "Thank you for your message. We'll get back to you soon!";
    } else {
        $error_message = "Sorry, something went wrong. Please try again later.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohaki - محاكي</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Navigation Bar -->
    <header>
        <div class="navbar">
            <br />
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-text">
            <h1>Welcome to Mohaki - محاكي</h1>
            <p>Enhance Your Shooting Skills with Professional Simulators</p>
            <div class="porshor-buttons">
                <button onclick="openPorshor('english')">English Brochure</button>
                <button onclick="openPorshor('arabic')">Arabic Brochure</button>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <p>Have questions or want to know more about our services? Reach out to us!</p>
        <div class="contact-container">
            <div class="contact-form">
                <h3>Get In Touch</h3>
                <?php if (isset($success_message)) { ?>
                    <p style="color: green;"><?php echo $success_message; ?></p>
                <?php } elseif (isset($error_message)) { ?>
                    <p style="color: red;"><?php echo $error_message; ?></p>
                <?php } ?>
                <form action="index.php" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
            <div class="contact-info">
                <h3>Stay Connected!</h3>
                <p>Whatsapp: +971 503 401 506</p>
                <p>Email: info@mohaki.com</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Mohaki. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
