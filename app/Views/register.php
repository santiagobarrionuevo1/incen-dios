<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            color: #333;
        }
        .card {
            border-color: #ff6600;
        }
        .card-header {
            background-color: #ff6600;
            color: #fff;
        }
        .btn-success {
            background-color: #ff6600;
            border-color: #ff6600;
        }
        .btn-success:hover {
            background-color: #e65c00;
            border-color: #e65c00;
        }
        .form-control {
            border-color: #ccc;
        }
        .form-control:focus {
            border-color: #ff6600;
            box-shadow: none;
        }
        .alert-danger {
            background-color: #f2dede;
            border-color: #ebccd1;
            color: #a94442;
        }
    </style>
</head>
<body>
<div class="container" style="margin-top:20px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Registro</div>
                <div class="card-body">
                    <?php if (isset($validation)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('register') ?>" method="post">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" name="Nombre" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="Email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="Telefono">Número de Teléfono</label>
                            <input type="text" class="form-control" name="Telefono" id="Telefono" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirm">Confirmar Password</label>
                            <input type="password" class="form-control" name="password_confirm" id="password_confirm" required>
                        </div>
                        <button type="submit" class="btn btn-success">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function handleSubmit(event) {
        event.preventDefault();
        const form = document.getElementById('loginForm');
        fetch(form.action, {
            method: form.method,
            body: new FormData(form)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = "<?= base_url('index') ?>";
            } else {
                alert('Error al iniciar sesión. Por favor, revise sus credenciales.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Ocurrió un error. Por favor, intente nuevamente.');
        });
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

