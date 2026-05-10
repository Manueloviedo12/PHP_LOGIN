<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Sistema</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">

    <!-- Logo / Nombre -->
    <a class="navbar-brand fw-bold" href="#">
        Mi App
    </a>

    <!-- Botón hamburguesa (responsive) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menú -->
   <div class="collapse navbar-collapse" id="menu">

    <!-- empuja botones a la derecha -->
    <ul class="navbar-nav ms-auto">

        <li class="nav-item me-2">
            <a href="<?= BASE_URL ?>index.php?action=login" class="btn btn-outline-light btn-sm">
                Login
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= BASE_URL ?>index.php?action=register" class="btn btn-outline-light btn-sm">
                Registro
            </a>
        </li>

    </ul>

</div>

</nav>

<div class="container mt-4">