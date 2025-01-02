<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barangay Document Request System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">Barangay Document System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="resident-register.php">SignUp</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="bg-light text-dark p-5 text-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1>Welcome to the Barangay Document Request System</h1>
          <p class="lead">Request certificates, clearances, and other documents online, hassle-free!</p>
          <a href="#features" class="btn btn-primary btn-lg">Explore Services</a>
        </div>
        <div class="col-md-6">
          <img src="https://via.placeholder.com/500" class="img-fluid" alt="Barangay Services">
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Our Services</h2>
      <div class="row text-center">
        <!-- Certificate Request -->
        <div class="col-md-6">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Certificate Request</h5>
              <p class="card-text">Request certificates such as Barangay Clearance, Indigency Certificate, and more.</p>
              <a href="login.php" class="btn btn-primary">Request Now</a>
            </div>
          </div>
        </div>
        <!-- Business Permit -->
        <div class="col-md-6">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Business Permit</h5>
              <p class="card-text">Apply for business permits and renewals with ease.</p>
              <a href="login.php" class="btn btn-primary">Apply Now</a>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-primary text-white text-center p-3">
    <p>&copy; 2024 Barangay Document Request System. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
