<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - PhishGuard</title>
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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/login.css">
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
            <li class="nav-item"><a class="nav-link" href="signup.html">Sign Up</a></li>
            <li class="nav-item"><a class="nav-link active" href="login.html">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Login Form -->
    <section class="login-section d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-7">
            <div class="card shadow-lg">
              <div class="card-body p-5">
                <h2 class="text-center mb-4">Login to Your Account</h2>
                <form id="loginForm">
                  <!-- Email or Username -->
                  <div class="mb-3">
                    <label for="emailUsername" class="form-label">Email or Username</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                      <input
                        type="text"
                        class="form-control"
                        id="emailUsername"
                        placeholder="Enter email or username"
                        required
                      >
                    </div>
                  </div>
                  <!-- Password -->
                  <div class="mb-3">
                    <label for="loginPassword" class="form-label">Password</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                      <input
                        type="password"
                        class="form-control"
                        id="loginPassword"
                        placeholder="Password"
                        required
                      >
                    </div>
                  </div>
                  <!-- Remember Me -->
                  <div class="form-check mb-3">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="rememberMe"
                    >
                    <label class="form-check-label" for="rememberMe">Remember Me</label>
                  </div>
                  <!-- Login Button -->
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                  </div>
                  <!-- Links -->
                  <p class="text-center mt-4 mb-0">
                    <a href="#">Forgot Password?</a>
                  </p>
                  <p class="text-center" style="color: white;">
                    Don't have an account? <a href="signup.html">Sign Up</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Background Overlay -->
      <div class="login-overlay"></div>
    </section>

    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    ></script>
    <!-- Custom JS (if needed) -->
</body>
</html>
