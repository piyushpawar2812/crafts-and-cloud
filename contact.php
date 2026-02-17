<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crafts N Cloud technology </title>
    <link rel="stylesheet" href="templatemo-prism-flux.css">
<!-- 


-->
</head>
<body>
<?php include "header.php"; ?>
<br>
    <br><br>
 <!-- Contact Section 
    <section class="contact-section" id="contact">-->
        <div class="section-header">
            <h2 class="section-title">Initialize Connection</h2>
            <p class="section-subtitle">Ready to transform your vision into reality? Let's connect.</p>
        </div>
        
        <div class="contact-container">
            <div class="contact-info">
                <a href="https://www.google.com/maps/place/Anandnagar,+Bhopal,+Madhya+Pradesh+462022/@23.2512561,77.4760511,2131m/data=!3m2!1e3!4b1!4m6!3m5!1s0x397c41e40648af0d:0xb256191a4c992275!8m2!3d23.2520103!4d77.4856647!16s%2Fg%2F1jkyjgkld?entry=ttu&g_ep=EgoyMDI2MDIwNC4wIKXMDSoKLDEwMDc5MjA3M0gBUAM%3D" target="_blank" class="info-item">
                    <div class="info-icon">📍</div>
                    <div class="info-text">
                        <h4>Location</h4>
                        <p>Bhopal</p>
                    </div>
                </a>
                
                <a href="mailto:hello@prismflux.io" class="info-item">
                    <div class="info-icon">📧</div>
                    <div class="info-text">
                        <h4>Email</h4>
                        <p>Support@craftsncloude.in</p>
                    </div>
                </a>
                
                <a href="tel:+91-10101010" class="info-item">
                    <div class="info-icon">📱</div>
                    <div class="info-text">
                        <h4>Phone</h4>
                        <p>+91-10101010</p>
                    </div>
                </a>
                
                <a href="" target="_blank" class="info-item">
                    <div class="info-icon">📅</div>
                    <div class="info-text">
                        <h4>Schedule Meeting</h4>
                        <p>Book a consultation</p>
                    </div>
                </a>
            </div>
        <?php
if(isset($_GET['status'])) {
    if($_GET['status'] == "success") {
        echo "<div style='color:green; padding:10px;'>Message sent successfully!</div>";
    } elseif($_GET['status'] == "error") {
        echo "<div style='color:red; padding:10px;'>Something went wrong. Try again.</div>";
    }
}
?>
            
            <form class="contact-form" id="contactForm" method="POST"
                                                action="contact_process.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="subject">Services</label>
                    <input type="text" id="services" name="services" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Transmit Message</button>
            </form>
        </div>
    </section>


<?php include "footer.php"; ?>



<script src="templatemo-prism-scripts.js"></script>
</body>
</html>
