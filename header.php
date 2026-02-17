    <!-- Navigation Header -->
    <header class="header" id="header">
        <nav class="nav-container">
            <a href="index.php" class="logo">
                <div class="logo-icon">
                    <div class="logo-prism">
                        <div class="prism-shape"></div>
                    </div>
                </div>
                <span class="logo-text">
                    <span class="prism">Crafts N Cloud </span>
                    <!--  <span class="prism">Cloud</span> -->
                </span>
            </a>

            <ul class="nav-menu" id="navMenu">
                <li><a href="index.php" class="nav-link active" section id="home">Home</a></li>
                <li><a href="about.php" class="nav-link" section id="about">About</a></li>
                <li><a href="services.php" class="nav-link" section id="services">Our Services</a></li>
                <li><a href="achievements.php" class="nav-link" section id="achievement">Achievements</a></li>
                <li><a href="contact.php" class="nav-link" section id="contact">Contact</a></li>
            </ul>


        </nav>
  <!--to active toggle bar-->
  <script>
document.addEventListener("DOMContentLoaded", function () {
    const currentPath = window.location.pathname.split("/").pop() || "services.php";
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach(link => {
        const href = link.getAttribute("href");
        if (href === currentPath) {
            link.classList.add("active");
        } else {
            link.classList.remove("active");
        }
    });
});
</script>
        
    </header>
<br>
<br>
