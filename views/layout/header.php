<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Sistema</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* ── FULL SCREEN ── */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            background: #f8f8f5;
            font-family: "DM Sans", sans-serif;
        }

        /* ── NAVBAR ── */
        .navbar {
            background: #0f172a !important;
            padding: 12px 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-weight: 800;
            color: #fff !important;
        }

        /* ── LINKS ── */
        .nav-link-custom {
            color: #cbd5e1 !important;
            transition: 0.3s;
        }

        .nav-link-custom:hover {
            color: #fff !important;
        }

        /* ── BOTONES ── */
        .btn-nav {
            border-radius: 10px;
            padding: 6px 14px;
            font-size: 14px;
        }

        .btn-login {
            border: 1px solid #60a5fa;
            color: #60a5fa;
        }

        .btn-login:hover {
            background: #60a5fa;
            color: #fff;
        }

        .btn-register {
            background: #2563eb;
            color: #fff;
        }

        .btn-register:hover {
            background: #1d4ed8;
        }

        /* ── CONTENIDO OCUPA TODO ── */
        .content {
            flex: 1;
            width: 100%;
            padding: 30px;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">

    <a class="navbar-brand" href="#">
        ⚡ Mi App
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">

        <!-- LINKS -->
        <ul class="navbar-nav me-auto ms-3">
            <li class="nav-item">
                <a class="nav-link nav-link-custom" href="#">Inicio</a>
            </li>

            <li class="nav-item">
                <a class="nav-link nav-link-custom"
                   href="<?= BASE_URL ?>index.php?action=perfilpublico">
                    Perfil
                </a>
            </li>
        </ul>

        <!-- BOTONES -->
        <div class="d-flex gap-2">
            <a href="<?= BASE_URL ?>index.php?action=login"
               class="btn btn-sm btn-nav btn-login">
                Login
            </a>

            <a href="<?= BASE_URL ?>index.php?action=register"
               class="btn btn-sm btn-nav btn-register">
                Registro
            </a>
        </div>

    </div>
</nav>

<!-- CONTENIDO FULL SCREEN -->
<div class="content">

    <div class="container-fluid">
        <h1>Bienvenido 👋</h1>
        <p>Tu contenido ahora ocupa toda la pantalla.</p>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>