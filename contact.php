<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crafts N Cloud technology </title>
    <link rel="stylesheet" href="templatemo-prism-flux.css">

</head>
<body>
<?php include "header.php"; ?>
<br>
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
$status = "";

if(isset($_GET['status'])) {
    if($_GET['status'] == "success") {
        $status = "success";
    } elseif($_GET['status'] == "error") {
        $status = "error";
    }
}
?>
<div id="toast" class="toast"></div>            

            <form class="contact-form" id="contactForm" method="POST"
                                                action="contact_process.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input  placeholder="Name" type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input placeholder="hello@aaaa.com" type="email" id="email" name="email" required>
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



<style>

.toast {
    position: fixed;
    top: 30px;
    right: 30px;
    padding: 16px 22px;
    min-width: 260px;
    border-radius: 14px;
    font-size: 15px;
    font-weight: 500;
    color: #fff;
    backdrop-filter: blur(14px);
    background: rgba(30, 41, 59, 0.85);
    box-shadow: 0 15px 40px rgba(0,0,0,0.3);
    transform: translateX(120%);
    opacity: 0;
    transition: all 0.5s ease;
    z-index: 9999;
}

.toast.show {
    transform: translateX(0);
    opacity: 1;
}

.toast.success {
    border-left: 5px solid #22c55e;
}

.toast.error {
    border-left: 5px solid #ef4444;
}

</style>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const status = "<?php echo $status; ?>";
    const toast = document.getElementById("toast");

    if (status === "success") {
        showToast("✅ Message sent successfully!", "success");
    }

    if (status === "error") {
        showToast("❌ Something went wrong. Try again.", "error");
    }

    function showToast(message, type) {
        toast.textContent = message;
        toast.className = "toast show " + type;

        setTimeout(() => {
            toast.classList.remove("show");
        }, 4000);

        // Remove ?status= from URL without reload
        window.history.replaceState({}, document.title, window.location.pathname);
    }

});
</script>

</body>
</html>
