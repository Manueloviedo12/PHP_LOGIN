<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<?php include __DIR__ . "/layout/header.php"; ?>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow" style="width: 100%; max-width: 400px;">

        <div class="card-header bg-dark text-white text-center">
            <h4>Login</h4>
        </div>

        <div class="card-body">

            <form method="POST">

                <div class="mb-3">
                    <label>Correo</label>
                    <input type="email" name="correo" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button class="btn btn-primary w-100">Ingresar</button>

            </form>

        </div>

    </div>

</div>

<?php if (!empty($error)): ?>
<script>
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: '<?= $error ?>'
    });
</script>
<?php endif; ?>

</body>
</html>