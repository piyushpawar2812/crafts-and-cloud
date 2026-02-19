<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crafts N Cloud Technology</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="templatemo-prism-flux.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: radial-gradient(ellipse at top, #1e293b 0%, #0f172a 40%, #020617 100%);
            color: #e2e8f0;
            min-height: 100vh;
            line-height: 1.6;
        }
        /* Skills Section */
        .skills-section {
            padding: 4rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #f1f5f9;
        }

        .section-subtitle {
            text-align: center;
            color: #94a3b8;
            font-size: 1.15rem;
            margin-bottom: 4rem;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1.5rem;
        }

        .skill-card {
            background: linear-gradient(145deg, #1e293b, #111827);
            border: 1px solid rgba(59, 69, 94, 0.5);
            border-radius: 16px;
            padding: 2rem 1.2rem;
            text-align: center;
            font-size: 1.1rem;
            font-weight: 600;
            color: #cbd5e1;
            transition: all 0.4s ease;
        }

        .skill-card:hover {
            transform: translateY(-10px) scale(1.04);
            border-color: #60a5fa;
            box-shadow: 0 25px 50px -12px rgba(56,189,248,0.25);
            color: #7dd3fc;
        }

        .skill-icon {
            font-size: 2.6rem;
            margin-bottom: 1rem;
            display: block;
        }

        footer {
            text-align: center;
            padding: 4rem 1rem 2rem;
            color: #64748b;
            font-size: 0.95rem;
            border-top: 1px solid rgba(59,69,94,0.3);
        }
    </style>
</head>

<body>

<?php include "header.php"; ?>


<section class="skills-section" id="skills">
    <h2 class="section-title">Our Technical Arsenal</h2>
    <p class="section-subtitle">Cutting-edge tools & technologies we master to deliver exceptional results</p>

    <div class="skills-grid" id="skillsGrid"></div>
</section>

<?php include "footer.php"; ?>

<script>
const skills = [
  { name: "HTML5", icon: "🌐" },
  { name: "CSS3 / Tailwind", icon: "🎨" },
  { name: "JavaScript", icon: "⚡" },
  { name: "React", icon: "⚛️" },
  { name: "Next.js", icon: "🚀" },
  { name: "Node.js", icon: "🟢" },
  { name: "Express.js", icon: "📡" },
  { name: "MongoDB", icon: "🍃" },
  { name: "MySQL", icon: "🐬" },
  { name: "AWS", icon: "☁️" },
  { name: "Docker", icon: "🐳" },
  { name: "Git & GitHub", icon: "🔧" }
];

const grid = document.getElementById("skillsGrid");

skills.forEach(skill => {
  const card = document.createElement("div");
  card.className = "skill-card";
  card.innerHTML = `
    <span class="skill-icon">${skill.icon}</span>
    ${skill.name}
  `;
  grid.appendChild(card);
});
</script>

<script src="templatemo-prism-scripts.js"></script>

</body>
</html>
