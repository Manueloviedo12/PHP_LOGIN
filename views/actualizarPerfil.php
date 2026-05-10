<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Perfil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-header bg-primary text-white text-center">
                    <h4>Actualizar Perfil</h4>
                </div>

                <div class="card-body">

                    <form method="POST" action="index.php?action=update">

                        <input type="hidden" name="id" value="<?= $user['id'] ?>">

                        <div class="mb-3">
                            <label>Nombre</label>
                            <input type="text"
                                   name="nombre"
                                   class="form-control"
                                   value="<?= $user['nombre'] ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Correo</label>
                            <input type="email"
                                   name="correo"
                                   class="form-control"
                                   value="<?= $user['correo'] ?>"
                                   required>
                        </div>

                        <button class="btn btn-success w-100">
                            Guardar cambios
                        </button>

                        <a href="index.php?action=perfil" class="btn btn-secondary w-100 mt-2">
                            Cancelar
                        </a>

                    </form>

                </div>

            </div>

        </div>
    </div>

</div>

</body>
</html>