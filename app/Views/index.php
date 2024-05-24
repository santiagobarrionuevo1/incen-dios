<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Incen-Dios</title>
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
    .hero {
      background: url('https://t1.uc.ltmcdn.com/es/posts/3/8/9/que_es_el_fuego_44983_1_600.webp') no-repeat center center;
      background-size: cover;
      height: 500px;
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
    .hero p {
      font-size: 1.5rem;
    }
    .section-title {
      margin: 40px 0;
      text-align: center;
    }
    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }
    .modal-header {
      background-color: #f8f9fa;
    }
    .modal-footer {
      background-color: #f8f9fa;
    }
    .btn-login, .btn-register {
      margin-right: 10px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="/">Incen-Dios</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index">Inicio</a>
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
          <button class="btn btn-warning btn-login" data-toggle="modal" data-target="#loginModal">Iniciar Sesión</button>
        </li>
        <li class="nav-item">
          <button class="btn btn-outline-warning btn-register" data-toggle="modal" data-target="#registerModal">Registrarse</button>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero">
    <div class="container">
      <h1>Seguridad y Protección</h1>
      <p>Detectores de Incendios y Gases Nocivos de Alta Calidad</p>
      <a href="productos" class="btn btn-warning btn-lg">Ver Productos</a>
    </div>
  </div>

  <!-- Features Section -->
  <div class="container my-5">
    <h2 class="section-title">Nuestros Productos</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Detector de Incendios">
          <div class="card-body">
            <h5 class="card-title">Detectores de Incendios</h5>
            <p class="card-text">Alta sensibilidad y rápida respuesta para proteger su hogar o negocio.</p>
            <a href="#" class="btn btn-warning">Más Información</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Detector de Gases Nocivos">
          <div class="card-body">
            <h5 class="card-title">Detectores de Gases Nocivos</h5>
            <p class="card-text">Detecte gases peligrosos antes de que sea demasiado tarde.</p>
            <a href="#" class="btn btn-warning">Más Información</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Sistema de Alarma">
          <div class="card-body">
            <h5 class="card-title">Sistemas de Alarma</h5>
            <p class="card-text">Sistemas de alarma integrados para una protección completa.</p>
            <a href="#" class="btn btn-warning">Más Información</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="loginEmail">Correo Electrónico</label>
              <input type="email" class="form-control" id="loginEmail" placeholder="Ingrese su correo">
            </div>
            <div class="form-group">
              <label for="loginPassword">Contraseña</label>
              <input type="password" class="form-control" id="loginPassword" placeholder="Ingrese su contraseña">
            </div>
            <button type="submit" class="btn btn-warning">Iniciar Sesión</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Register Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Registrarse</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="registerEmail">Correo Electrónico</label>
              <input type="email" class="form-control" id="registerEmail" placeholder="Ingrese su correo">
            </div>
            <div class="form-group">
              <label for="registerPassword">Contraseña</label>
              <input type="password" class="form-control" id="registerPassword" placeholder="Ingrese su contraseña">
            </div>
            <div class="form-group">
              <label for="registerConfirmPassword">Confirmar Contraseña</label>
              <input type="password" class="form-control" id="registerConfirmPassword" placeholder="Confirme su contraseña">
            </div>
            <button type="submit" class="btn btn-warning">Registrarse</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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
