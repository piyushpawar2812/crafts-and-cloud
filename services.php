<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crafts N Cloud technology </title>
    <link rel="stylesheet" href="templatemo-prism-flux.css">
<!-- 

TemplateMo 600 Prism Flux

https://templatemo.com/tm-600-prism-flux

-->
</head>
<body>

<?php include "header.php"; ?>

  <!-- ===== CSS ===== -->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Inter", system-ui, sans-serif;
    }

    body {
      background: radial-gradient(circle at top, #3c3d3f, #020617);
      color: #e5e7eb;
      min-height: 100vh;
    }

    .skills-section {
      padding: 100px 20px;
    }

    .skills-container {
      max-width: 1200px;
      margin: auto;
      text-align: center;
    }

    .section-title {
      font-size: 42px;
      font-weight: 700;
      margin-bottom: 10px;
      color: #ffffff;
    }

    .section-subtitle {
      font-size: 16px;
      color: #9ca3af;
      margin-bottom: 60px;
    }

    .skills-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 24px;
    }

    .skill-card {
      background: linear-gradient(145deg, #0f172a, #020617);
      border: 1px solid rgba(255, 255, 255, 0.05);
      padding: 32px 20px;
      border-radius: 16px;
      font-size: 18px;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.35s ease;
      position: relative;
      overflow: hidden;
    }

    .skill-card::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(
        120deg,
        transparent,
        rgba(56, 189, 248, 0.18),
        transparent
      );
      opacity: 0;
      transition: opacity 0.4s ease;
    }

    .skill-card:hover::before {
      opacity: 1;
    }

    .skill-card:hover {
      transform: translateY(-8px) scale(1.03);
      color: #38bdf8;
      border-color: rgba(56, 189, 248, 0.4);
      box-shadow: 0 20px 40px rgba(56, 189, 248, 0.15);
    }

    footer {
      text-align: center;
      padding: 40px 0;
      color: #6b7280;
      font-size: 14px;
    }
  </style>
</head>

<body>

  <section class="skills-section" id="skills">
    <div class="skills-container">
      <h2 class="section-title">Technical Arsenal</h2>
      <p class="section-subtitle">
        Modern technologies we use to build powerful digital experiences
      </p>

      <div class="skills-grid" id="skillsGrid">
        <!-- JS will inject skills here -->
      </div>
    </div>
  </section>

  <!-- ===== JavaScript ===== -->
  <script>
    const skills = [
      "HTML5",
      "CSS3",
      "JavaScript",
      "React",
      "Next.js",
      "Node.js",
      "Express.js",
      "MongoDB",
      "MySQL",
      "AWS",
      "Docker",
      "Git & GitHub"
    ];

    const skillsGrid = document.getElementById("skillsGrid");

    skills.forEach(skill => {
      const card = document.createElement("div");
      card.className = "skill-card";
      card.textContent = skill;
      skillsGrid.appendChild(card);
    });
  </script>

</body>
</html>
<?php include "footer.php"; ?>
<script src="templatemo-prism-scripts.js"></script>
</body>
</html>