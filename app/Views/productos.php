<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuestros Productos</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }
    .navbar {
      background-color: #333;
    }
    .navbar-brand, .navbar-nav .nav-link {
      color: #fff;
    }
    .hero {
      background: url('https://via.placeholder.com/1200x400') no-repeat center center;
      background-size: cover;
      height: 400px;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    .hero h1 {
      font-size: 3rem;
      margin-bottom: 20px;
    }
    .section-title {
      margin: 40px 0;
      text-align: center;
      font-size: 2rem;
      font-weight: bold;
      color: #ff5722;
    }
    .product-card {
      margin-bottom: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }
    .product-card:hover {
      transform: translateY(-5px);
    }
    .product-card img {
      height: 200px;
      object-fit: cover;
    }
    .product-card .card-body {
      text-align: center;
    }
    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
      margin-top: 40px;
    }
    .btn-custom {
      background-color: #ff5722;
      border-color: #ff5722;
      color: #fff;
      border-radius: 0;
      font-weight: bold;
    }
    .btn-custom:hover {
      background-color: #e64a19;
      border-color: #e64a19;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.php">Incen-Dios</a>
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

  <!-- Hero Section -->
  <div class="hero">
    <div class="container">
      <h1>Nuestros Productos</h1>
      <p>Protección y Seguridad para tu Hogar y Negocio</p>
    </div>
  </div>

  <!-- Products Section -->
  <div class="container my-5">
    <h2 class="section-title">Catálogo de Productos</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card product-card">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Detector de Incendios">
          <div class="card-body">
            <h5 class="card-title">Detector de Incendios</h5>
            <p class="card-text">Alta sensibilidad y rápida respuesta para proteger su hogar o negocio.</p>
            <a href="#" class="btn btn-custom">Más Información</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card product-card">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Detector de Gases Nocivos">
          <div class="card-body">
            <h5 class="card-title">Detector de Gases Nocivos</h5>
            <p class="card-text">Detecte gases peligrosos antes de que sea demasiado tarde.</p>
            <a href="#" class="btn btn-custom">Más Información</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card product-card">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Sistema de Alarma">
          <div class="card-body">
            <h5 class="card-title">Sistema de Alarma</h5>
            <p class="card-text">Sistemas de alarma integrados para una protección completa.</p>
            <a href="#" class="btn btn-custom">Más Información</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card product-card">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Extintor de Incendios">
          <div class="card-body">
            <h5 class="card-title">Extintor de Incendios</h5>
            <p class="card-text">Fácil de usar y efectivo contra todo tipo de incendios.</p>
            <a href="#" class="btn btn-custom">Más Información</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card product-card">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Sensor de Monóxido de Carbono">
          <div class="card-body">
            <h5 class="card-title">Sensor de Monóxido de Carbono</h5>
            <p class="card-text">Protección contra envenenamiento por monóxido de carbono.</p>
            <a href="#" class="btn btn-custom">Más Información</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card product-card">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Rociador Automático">
          <div class="card-body">
            <h5 class="card-title">Rociador Automático</h5>
            <p class="card-text">Sistema de rociadores para control de incendios.</p>
            <a href="#" class="btn btn-custom">Más Información</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p>&copy; 2024 Detectores S.A. Todos los derechos reservados.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> 