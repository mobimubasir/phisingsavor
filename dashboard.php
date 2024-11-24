<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - PhishGuard</title>
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
    <link rel="stylesheet" href="css/dashboard.css">
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
            <li class="nav-item"><a class="nav-link active" href="dashboard.html">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="profile.html">Profile</a></li>
            <li class="nav-item"><a class="nav-link btn btn-outline-light ms-2" href="logout.html">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <section class="dashboard-section mt-5">
      <div class="container">
        <!-- URL Input -->
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="text-center mb-4">Check a URL</h2>
            <form id="urlForm">
              <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-link"></i></span>
                <input
                  type="text"
                  class="form-control"
                  id="urlInput"
                  placeholder="Enter URL to check"
                  required
                >
                <button class="btn btn-primary" type="submit">Check URL</button>
              </div>
            </form>
            <!-- Scan Result -->
            <div id="scanResult" class="alert d-none" role="alert"></div>
          </div>
        </div>
        <!-- History Section -->
        <div class="row mt-5">
          <div class="col-md-10 mx-auto">
            <h3 class="mb-4">Scan History</h3>
            <table class="table table-dark table-striped table-hover">
              <thead>
                <tr>
                  <th>URL</th>
                  <th>Status</th>
                  <th>Date Scanned</th>
                </tr>
              </thead>
              <tbody id="historyTable">
                <!-- Entries will be populated here -->
              </tbody>
        
