<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BhaajiBazaar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  >
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #e0ffe0, #f5fff5);
    }

    .welcome-section {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #4CAF50;
      color: white;
      flex-direction: column;
      animation: fadeOut 2s ease-in-out 3s forwards;
    }

    @keyframes fadeOut {
      to { opacity: 0; visibility: hidden; }
    }

    .main-section {
      display: none;
      animation: fadeIn 1s ease-in-out forwards;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; display: block; }
    }

    .feature-card {
      transition: transform 0.3s, box-shadow 0.3s;
      border-radius: 20px;
      padding: 25px;
      text-align: center;
      background-color: #ffffff;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    }

    .about-section {
      background-color: #f9f9f9;
      padding: 40px;
      border-radius: 20px;
      margin-top: 30px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
    }

    .btn-explore {
      background: linear-gradient(45deg, #4CAF50, #45a049);
      color: white;
      font-weight: bold;
      font-size: 18px;
      padding: 10px 25px;
      border: none;
      border-radius: 30px;
      margin-top: 25px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-explore:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    
.explore-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 50px;
}

.explore-glow-btn {
  position: relative;
  display: inline-block;
  padding: 15px 35px;
  background: linear-gradient(90deg, #00c9ff, #92fe9d);
  color: #fff;
  font-size: 20px;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: 50px;
  text-decoration: none;
  box-shadow: 0 0 15px rgba(0, 201, 255, 0.5);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  overflow: hidden;
  z-index: 1;
}

.explore-glow-btn::before {
  content: "";
  position: absolute;
  top: 0;
  left: -75%;
  width: 50%;
  height: 100%;
  background: rgba(255, 255, 255, 0.2);
  transform: skewX(-20deg);
  transition: left 0.5s ease;
  z-index: -1;
}

.explore-glow-btn:hover {
  transform: scale(1.08);
  box-shadow: 0 0 30px rgba(0, 201, 255, 0.7);
}

.explore-glow-btn:hover::before {
  left: 150%;
}


.feature-card-custom {
  background: linear-gradient(135deg, #e3fdfd, #cbf1f5);
  padding: 30px;
  border-radius: 20px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  text-align: center;
  height: 100%;
}

.feature-card-custom:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
}

.feature-card-custom h4 {
  font-size: 1.5rem;
  font-weight: bold;
  color: #007b5e;
  margin-bottom: 15px;
}

.feature-card-custom p {
  font-size: 1rem;
  color: #333;
}


.about-enhanced {
  background: linear-gradient(135deg, #f3fcf0, #dff5e3);
  border-radius: 20px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
  color: #2c3e50;
  line-height: 1.7;
  font-size: 1.05rem;
}

.about-enhanced h3 {
  font-size: 2rem;
  font-weight: 700;
  color: #1e8449;
}

.about-enhanced .highlight-text {
  color: #148f77;
  font-weight: bold;
}

.welcome-section {
  background-image: url('https://img.freepik.com/premium-psd/vegetable-grocery-delivery-promotion-web-banner-facebook-cover-instagram-template_502896-109.jpg'); /* Replace with your image URL */
  background-size: cover;
  background-position: center;
  height: 100vh;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

.welcome-overlay {
  background: rgba(103, 218, 75, 0.6); /* dark overlay for readability */
  padding: 60px 20px;
  border-radius: 12px;
  max-width: 800px;
}

.welcome-overlay h1,
.welcome-overlay p {
  color: #230202;
}




  </style>
</head>
<body>

<!-- Welcome Section with Background Image -->
<div class="welcome-section" id="welcome">
  <div class="welcome-overlay text-center text-white">
    <h1 class="display-4 fw-bold">Welcome to <strong>BhaajiBazaar</strong> 🥦</h1>
    <p class="lead">Connecting street vendors to trusted suppliers!</p>
  </div>
</div>


  <!-- Main Section -->
  <div class="container main-section" id="main-content">
    <h2 class="text-center mt-4 mb-4">What Can You Do Here?</h2>
   <div class="container py-5">
  <div class="row justify-content-center g-4">
    <!-- Feature 1 -->
    <div class="col-md-5 col-sm-12"><a href="searchsuppliers.html">
      <div class="feature-card-custom">
        <h4>🔍 Find Suppliers</h4>
        <p>Search for nearby suppliers by location and product type.</p>
      </div>
    </div>

    <!-- Feature 2 -->
    <div class="col-md-5 col-sm-12"><a href="price_predictor.html">
      <div class="feature-card-custom">
        <h4>📈 Price Predictor</h4>
        <p>Use AI-powered tools to estimate price trends for vegetables.</p>
      </div>
    </div>
  </div>
</div>


    <!-- Add this where you want the button -->
<div class="explore-wrapper">
  <a href="VS_Login.html" class="explore-glow-btn">
    <span>🚀 Explore Now</span>
  </a>
</div>


   <div class="container my-5">
  <div class="about-enhanced p-5">
    <h3 class="mb-4 text-center">🌿 About <span class="highlight-text">BhaajiBazaar</span></h3>
    
    <p><strong>🚀 BhaajiBazaar</strong> is an innovative digital platform connecting <strong>street food vendors</strong> and <strong>local vegetable sellers</strong> to nearby trusted suppliers for seamless raw material sourcing.</p>

    <p>✅ <strong>Group Ordering:</strong> Collaborate with other vendors to get better pricing and delivery benefits.</p>

    <p>📊 <strong>AI-based Price Predictions:</strong> Stay ahead with smart insights and vegetable pricing trends using our AI dashboard.</p>

    <p>🔒 <strong>Verified Suppliers:</strong> Discover suppliers nearby based on <strong>ratings, reviews, and demand analysis</strong>.</p>

    <p>📦 <strong>Smart Inventory:</strong> Track your stock, manage orders, and reduce wastage with ease using our intuitive system.</p>

    <p class="mt-4"><strong>🌱 Join BhaajiBazaar</strong> and be part of a <span class="highlight-text">transparent, tech-powered supply chain</span> built for <strong>Bharat 🇮🇳</strong>.</p>
  </div>
</div>

  <script>
    // Automatically show main content after welcome
    setTimeout(() => {
      document.getElementById('main-content').style.display = 'block';
      document.getElementById('welcome').style.display = 'none';
    }, 4000);

    // Navigate to next page
    function goToNext() {
      window.location.href = "login.html"; // or "dashboard.html"
    }
  </script>

</body>
</html>