<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Perfil | Klever </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/stylesperfill.css">

   
</head>

<body>

<div class="update-wrapper">

    <div class="profile-brand">
        <a href="index.php">Klever<span>.</span></a>
    </div>

    <div class="update-card">

        <!-- HEADER -->
        <div class="update-header">
            <div class="header-icon">✏️</div>
            <h4>Actualizar Perfil</h4>
            <p>Modifica tu información personal</p>
        </div>

        <!-- BODY -->
        <div class="update-body">

            <form method="POST" action="index.php?action=update">

                <input type="hidden" name="id" value="<?= $user['id'] ?>">

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text"
                           name="nombre"
                           class="form-control"
                           value="<?= htmlspecialchars($user['nombre']) ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo electrónico</label>
                    <input type="email"
                           name="correo"
                           class="form-control"
                           value="<?= htmlspecialchars($user['correo']) ?>"
                           required>
                </div>

                <div class="divider"></div>

                <button type="submit" class="btn-save">Guardar cambios →</button>

                <a href="index.php?action=perfil" class="btn-cancel">Cancelar</a>

            </form>

        </div>
    </div>

</div>

</body>
</html>