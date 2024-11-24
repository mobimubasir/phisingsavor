<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Browser Extension - PhishGuard</title>
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
    <link rel="stylesheet" href="css/browser-extension.css">
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
            <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <section class="extension-section py-5 mt-5">
      <div class="container">
        <h2 class="text-center mb-5">Install the PhishGuard Browser Extension</h2>
        <!-- Instructions -->
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <ol class="instruction-list">
              <li class="mb-4">
                <div class="d-flex align-items-start">
                  <span class="instruction-icon me-3">
                    <i class="fa-solid fa-download fa-2x text-primary"></i>
                  </span>
                  <div>
                    <h5>Download the Extension</h5>
                    <p><a href="#" class="btn btn-primary">Download for Chrome</a></p>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-start">
                  <span class="instruction-icon me-3">
                    <i class="fa-solid fa-plus-square fa-2x text-primary"></i>
                  </span>
                  <div>
                    <h5>Add to Your Browser</h5>
                    <p>Click on "Add to Chrome" in the Chrome Web Store.</p>
                    <!-- Insert screenshot image -->
                    <img src="images/step2.png" alt="Add to Chrome" class="img-fluid rounded mb-3">
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-start">
                  <span class="instruction-icon me-3">
                    <i class="fa-solid fa-toggle-on fa-2x text-primary"></i>
                  </span>
                  <div>
                    <h5>Enable the Extension</h5>
                    <p>Ensure the extension is enabled in your browser settings.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-start">
                  <span class="instruction-icon me-3">
                    <i class="fa-solid fa-shield-alt fa-2x text-primary"></i>
                  </span>
                  <div>
                    <h5>Start Browsing Safely</h5>
                    <p>The extension will now protect you as you navigate the web.</p>
                  </div>
                </div>
              </li>
            </ol>
          </div>
        </div>
        <!-- FAQ Section -->
        <div class="row mt-5">
          <div class="col-lg-8 mx-auto">
            <h3 class="mb-4">Frequently Asked Questions</h3>
            <div class="accordion" id="faqAccordion">
              <!-- FAQ Item 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                    Is the extension free to use?
                  </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faqHeading1"
                     data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Yes, the PhishGuard extension is completely free to use.
                  </div>
                </div>
              </div>
              <!-- Additional FAQs -->
              <!-- FAQ Item 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                    Which browsers are supported?
                  </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faqHeading2"
                     data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Currently, PhishGuard is available for Chrome, Firefox, and Edge.
                  </div>
                </div>
              </div>
              <!-- Add more FAQ items as needed -->
            </div>
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
    <!-- Custom JS (if needed) -->
</body>
</html>
