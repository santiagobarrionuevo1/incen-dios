<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto - Incen-Dios</title>
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
    .contact-section {
      padding: 60px 0;
    }
    .contact-info {
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

  <!-- Contact Section -->
  <div class="contact-section">
    <div class="container">
      <h2 class="section-title text-center">Contacto</h2>
      <div class="row">
        <div class="col-md-6 contact-info">
          <h4>Datos de Contacto</h4>
          <p><strong>Dirección:</strong> Instituto técnico Rio Tercero</p>
          <p><strong>Teléfono:</strong> +54 9 3571 31-9833</p>
          <p><strong>Correo Electrónico:</strong> santiagobarrionuevo@alumnos.itr3.edu.ar</p>
        </div>
        <div class="col-md-6">
          <h4>Formulario de Contacto</h4>
          <form>
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" class="form-control" id="name" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
              <label for="email">Correo Electrónico</label>
              <input type="email" class="form-control" id="email" placeholder="Ingrese su correo">
            </div>
            <div class="form-group">
              <label for="message">Mensaje</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Ingrese su mensaje"></textarea>
            </div>
            <button type="submit" class="btn btn-warning">Enviar</button>
          </form>
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
