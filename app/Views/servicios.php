<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios - Incen-Dios</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .navbar {
      background-color: #333;
    }
    .navbar-brand, .navbar-nav .nav-link {
      color: #fff;
    }
    .services-section {
      padding: 60px 0;
    }
    .service {
      margin-bottom: 30px;
    }
    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.html">Incen-Dios</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productos">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="servicios">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto">Contacto</a>
        </li>
        <li class="nav-item">
          <a type="submit" class="btn btn-warning" href="<?= base_url('login') ?>">Logueate</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Services Section -->
  <div class="services-section">
    <div class="container">
      <h2 class="section-title text-center">Nuestros Servicios</h2>
      <div class="row">
        <div class="col-md-4 service">
          <div class="card mb-4">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Instalación de Sistemas de Detección">
            <div class="card-body">
              <h5 class="card-title">Instalación de Sistemas de Detección</h5>
              <p class="card-text">Proveemos instalación profesional de sistemas de detección de incendios y gases nocivos.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 service">
          <div class="card mb-4">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Mantenimiento y Revisión">
            <div class="card-body">
              <h5 class="card-title">Mantenimiento y Revisión</h5>
              <p class="card-text">Servicios de mantenimiento y revisión periódica para asegurar el funcionamiento óptimo de los sistemas.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 service">
          <div class="card mb-4">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Consultoría y Asesoría">
            <div class="card-body">
              <h5 class="card-title">Consultoría y Asesoría</h5>
              <p class="card-text">Ofrecemos consultoría especializada para la implementación de medidas de seguridad y protección contra incendios.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p>&copy; 2024 Incen-Dios S.A. Todos los derechos reservados.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
