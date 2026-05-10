<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php include __DIR__ . "/layout/header.php"; ?>

<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-header bg-primary text-white text-center">
                    <h4>Registro</h4>
                </div>

                <div class="card-body">

                    <!--  MENSAJE -->
                    <?php if (!empty($mensaje)) : ?>
                        <div class="alert alert-danger text-center">
                            <?= $mensaje ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST">

                        <input type="text" name="cedula" class="form-control mb-2" placeholder="Cédula" required>

                        <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre" required>

                        <input type="email" name="correo" class="form-control mb-2" placeholder="Correo" required>

                        <input type="password" name="password" class="form-control mb-2" placeholder="Contraseña" required>

                        <button class="btn btn-success w-100">
                            Registrar
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>