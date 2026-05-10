<?php
if (!isset($_SESSION['user'])) {
    header("Location: index.php?action=login");
    exit;
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow text-center">

                <!-- HEADER -->
                <div class="card-header bg-primary text-white">
                    <h4>Mi Perfil</h4>
                </div>

                <!-- BODY -->
                <div class="card-body">

                    <h5><?= $user['nombre'] ?></h5>
                    <p><?= $user['correo'] ?></p>

                    <hr>
                    
               <a href="index.php?action=formPassword">
    Cambiar contraseña
</a>

                    <a href="index.php?action=update" class="btn btn-warning btn-sm">
                        Actualizar información
                    </a>

                    <a href="index.php?action=logout" class="btn btn-danger btn-sm">
                        Cerrar sesión
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>