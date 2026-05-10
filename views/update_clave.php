<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Cambiar contraseña</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">

<div class="card shadow p-4" style="width: 400px">

<h4 class="text-center mb-3">🔐 Cambiar contraseña</h4>

<form method="POST" action="index.php?action=actualizarPassword">

<div class="mb-3">
<label>Contraseña actual</label>
<input type="password" name="actual" class="form-control" required>
</div>

<div class="mb-3">
<label>Nueva contraseña</label>
<input type="password" name="nueva" class="form-control" required>
</div>

<div class="mb-3">
<label>Confirmar contraseña</label>
<input type="password" name="confirmar" class="form-control" required>
</div>

<button class="btn btn-primary w-100">Actualizar</button>

<a href="index.php?action=perfil" class="btn btn-secondary w-100 mt-2">
⬅ Volver
</a>

</form>

<?php if (isset($_GET['error'])): ?>
<div class="alert alert-danger mt-3">
<?= $_GET['error'] ?>
</div>
<?php endif; ?>

</div>
</div>

</body>
</html>