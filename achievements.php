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

  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Our Clients</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Inter", system-ui, sans-serif;
    }

    body {
      background: radial-gradient(circle at top, #111827, #020617);
      color: #e5e7eb;
    }

    .clients-section {
      padding: 100px 20px;
    }

    .clients-container {
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

    .clients-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 28px;
    }

    .client-card {
      background: linear-gradient(145deg, #0f172a, #020617);
      border: 1px solid rgba(255, 255, 255, 0.06);
      padding: 35px 20px;
      border-radius: 18px;
      transition: all 0.35s ease;
      position: relative;
      overflow: hidden;
      cursor: pointer;
    }

    .client-card::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(
        120deg,
        transparent,
        rgba(56, 189, 248, 0.2),
        transparent
      );
      opacity: 0;
      transition: opacity 0.4s ease;
    }

    .client-card:hover::before {
      opacity: 1;
    }

    .client-card:hover {
      transform: translateY(-10px) scale(1.03);
      border-color: rgba(56, 189, 248, 0.45);
      box-shadow: 0 25px 50px rgba(56, 189, 248, 0.18);
    }

    .client-logo {
      width: 80px;
      height: 80px;
      margin: 0 auto 20px;
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.04);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .client-logo img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    .client-name {
      font-size: 18px;
      font-weight: 600;
      color: #e5e7eb;
    }

    .client-card:hover .client-name {
      color: #38bdf8;
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

  <section class="clients-section" id="clients">
    <div class="clients-container">
      <h2 class="section-title">Our Clients</h2>
      <p class="section-subtitle">
        Trusted by leading brands and organizations
      </p>

      <div class="clients-grid" id="clientsGrid">
        <!-- JS injects client cards -->
      </div>
    </div>
  </section>

  <footer>
    © 2026 Crafts n Cloud — Building Trusted Partnerships
  </footer>

  <script>
    const clients = [
      { name: "Ayaan Enterprise", logo: "images/webb.png" },
      { name: "AdTech Solutions", logo: "images/adtech.png" },
      { name: "MDP Infra", logo: "images/mdp.png" },
      { name: "MPEB Bhopal", logo: "images/mpeb.jpg" },
      { name: "NewRise Tech", logo: "images/newrise.jpg" },
      { name: "Oracle", logo: "" },
      { name: "Xtranet", logo: "images/extranet.png" }
    ];

    const clientsGrid = document.getElementById("clientsGrid");

    clients.forEach(client => {
      const card = document.createElement("div");
      card.className = "client-card";

      card.innerHTML = `
        <div class="client-logo">
          <img src="${client.logo}" alt="${client.name} logo">
        </div>
        <div class="client-name">${client.name}</div>
      `;

      clientsGrid.appendChild(card);
    });
  </script>

</body>
</html>


<?php include "footer.php"; ?>


<script src="templatemo-prism-scripts.js"></script>
</body>
</html>