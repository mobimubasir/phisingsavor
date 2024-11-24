<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PhishGuard - Protect Yourself from Phishing</title>
    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    >
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-p7R9fK9PqPQJ0JxVyhNd+gY8PvMn8iEE5A8H0sJz7q1o2Gm84be+fhGmEfut3TEw99T7DckKZf+v3pXYV0MxSw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Phish<span class="text-primary">Guard</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="signup.html">Sign Up</a></li>
            <li class="nav-item"><a class="nav-link btn btn-outline-light ms-2" href="login.html">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Hero Section -->
    <section class="hero text-center text-white d-flex align-items-center">
      <div class="container">
        <h1 class="display-4 mb-4">Stay Safe Online with <span class="text-primary">PhishGuard</span></h1>
        <p class="lead mb-5">Your shield against phishing and malicious websites.</p>
        <a href="signup.html" class="btn btn-primary btn-lg">Get Started</a>
      </div>
      <!-- Hero Background Overlay -->
      <div class="hero-overlay"></div>
    </section>
    <!-- Features Section -->
    <section class="features py-5 text-white">
      <div class="container">
        <h2 class="text-center mb-5">Why Choose PhishGuard?</h2>
        <div class="row">
          <!-- Feature 1 -->
          <div class="col-md-4 text-center">
            <div class="feature-icon mb-3">
              <i class="fas fa-shield-alt fa-3x text-primary"></i>
            </div>
            <h4 class="mb-3">Real-Time Detection</h4>
            <p>Instantly analyze URLs to ensure they are safe before you visit them.</p>
          </div>
          <!-- Feature 2 -->
          <div class="col-md-4 text-center">
            <div class="feature-icon mb-3">
              <i class="fas fa-plug fa-3x text-primary"></i>
            </div>
            <h4 class="mb-3">Seamless Integration</h4>
            <p>Automatic protection with our lightweight browser extension.</p>
          </div>
          <!-- Feature 3 -->
          <div class="col-md-4 text-center">
            <div class="feature-icon mb-3">
              <i class="fas fa-users fa-3x text-primary"></i>
            </div>
            <h4 class="mb-3">Community Driven</h4>
            <p>Contribute to community safety by reporting suspicious sites.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- How It Works Section -->
    <section class="how-it-works py-5 bg-secondary text-white">
      <div class="container">
        <h2 class="text-center mb-5">How It Works</h2>
        <div class="row">
          <!-- Step 1 -->
          <div class="col-md-4 text-center">
            <div class="step-icon mb-4">
              <span class="step-number">1</span>
            </div>
            <h5 class="mb-3">Create an Account</h5>
            <p>Sign up for free and join our community.</p>
          </div>
          <!-- Step 2 -->
          <div class="col-md-4 text-center">
            <div class="step-icon mb-4">
              <span class="step-number">2</span>
            </div>
            <h5 class="mb-3">Install the Extension</h5>
            <p>Add PhishGuard to your browser for seamless protection.</p>
          </div>
          <!-- Step 3 -->
          <div class="col-md-4 text-center">
            <div class="step-icon mb-4">
              <span class="step-number">3</span>
            </div>
            <h5 class="mb-3">Browse Safely</h5>
            <p>Navigate the web with confidence, knowing PhishGuard has your back.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="py-4 bg-dark text-white text-center">
      <div class="container">
        <p>&copy; 2024 PhishGuard. All rights reserved.</p>
        <p>
          <a href="#" class="text-white me-3">About Us</a>
          <a href="#" class="text-white me-3">Contact</a>
          <a href="#" class="text-white">Privacy Policy</a>
        </p>
      </div>
    </footer>
    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    ></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>
