<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            color: #333;
        }
        .panel-primary {
            border-color: #ff6600;
        }
        .panel-primary .panel-heading {
            background-color: #ff6600;
            border-color: #ff6600;
            color: #fff;
        }
        .btn-success {
            background-color: #ff6600;
            border-color: #ff6600;
        }
        .btn-secondary {
            background-color: #333;
            border-color: #333;
        }
        .btn-secondary:hover {
            background-color: #555;
            border-color: #555;
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
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading p-2">Login</div>
                <div class="panel-body p-4">
                    <?php if (isset($validation)) : ?>
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <form id="loginForm" action="<?= base_url('login') ?>" method="post" onsubmit="handleSubmit(event)">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                        <button type="submit" class="btn btn-success">Logueate</button>
                        <a class="btn btn-secondary" href="<?= base_url('register') ?>">Registrate</a>
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
