<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile - PhishGuard</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="dashboard.html">Phish<span class="text-primary">Guard</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="dashboard.html">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link active" href="profile.html">Profile</a></li>
            <li class="nav-item"><a class="nav-link btn btn-outline-light ms-2" href="logout.html">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Profile Section -->
    <section class="profile-section d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
            <div class="card shadow-lg">
              <div class="card-body p-5">
                <h2 class="text-center mb-4">Your Profile</h2>
                <form id="profileForm">
                  <!-- Username (read-only) -->
                  <div class="mb-3">
                    <label for="profileUsername" class="form-label">Username</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                      <input
                        type="text"
                        class="form-control"
                        id="profileUsername"
                        value="JohnDoe123"
                        readonly
                      >
                    </div>
                  </div>
                  <!-- Email -->
                  <div class="mb-3">
                    <label for="profileEmail" class="form-label">Email Address</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                      <input
                        type="email"
                        class="form-control"
                        id="profileEmail"
                        value="johndoe@example.com"
                      >
                    </div>
                  </div>
                  <!-- Change Password -->
                  <div class="mb-3">
                    <label for="newPassword" class="form-label">New Password</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                      <input
                        type="password"
                        class="form-control"
                        id="newPassword"
                        placeholder="Enter new password"
                      >
                    </div>
                  </div>
                  <!-- Notification Preferences -->
                  <div class="mb-4">
                    <label class="form-label">Notification Preferences</label>
                    <div class="form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="emailNotifications"
                        checked
                      >
                      <label class="form-check-label" for="emailNotifications">Email Notifications</label>
                    </div>
                    <div class="form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="smsNotifications"
                      >
                      <label class="form-check-label" for="smsNotifications">SMS Notifications</label>
                    </div>
                  </div>
                  <!-- Save Changes Button -->
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Save Changes</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Background Overlay -->
      <div class="profile-overlay"></div>
    </section>

    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    ></script>
    <!-- Custom JS (if needed) -->
</body>
</html>
