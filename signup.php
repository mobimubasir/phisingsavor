<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - PhishGuard</title>
    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    >
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap"
      rel="stylesheet"
    >
    <!-- Font Awesome Icons -->
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">Phish<span class="text-primary">Guard</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link active" href="signup.html">Sign Up</a></li>
            <li class="nav-item"><a class="nav-link btn btn-outline-light ms-2" href="login.html">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Sign Up Form -->
    <section class="signup-section d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
            <div class="card shadow-lg">
              <div class="card-body p-5">
                <h2 class="text-center mb-4">Create an Account</h2>
                <form id="signupForm">
                  <!-- Username -->
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                      <input
                        type="text"
                        class="form-control"
                        id="username"
                        placeholder="Enter username"
                        required
                      >
                    </div>
                  </div>
                  <!-- Email -->
                  <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="Enter email"
                        required
                      >
                    </div>
                  </div>
                  <!-- Password -->
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                      <input
                        type="password"
                        class="form-control"
                        id="password"
                        placeholder="Password"
                        required
                      >
                    </div>
                  </div>
                  <!-- Confirm Password -->
                  <div class="mb-4">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                      <input
                        type="password"
                        class="form-control"
                        id="confirmPassword"
                        placeholder="Confirm Password"
                        required
                      >
                    </div>
                  </div>
                  <!-- Sign Up Button -->
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                  </div>
                  <!-- Link to Login -->
                  <p class="text-center mt-4 mb-0" style="color: white;">
                    Already have an account? <a href="login.html">Login here</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Background Overlay -->
      <div class="signup-overlay"></div>
    </section>

    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    ></script>
    <!-- Custom JS for form validation -->
    <script src="js/signup.js"></script>
</body>
</html>
