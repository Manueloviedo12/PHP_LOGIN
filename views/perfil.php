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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Perfil</title>
<link rel="stylesheet" href="css/stylesperfil.css">

</head>

<body>

<div class="container">

    <div class="top">

        <div class="card">
            <div class="avatar">
                <?= strtoupper(substr($user['nombre'],0,1)) ?>
            </div>

            <h3><?= htmlspecialchars($user['nombre']) ?></h3>
            <p><?= htmlspecialchars($user['correo']) ?></p>
        </div>

        <!-- ACCIONES -->
        <div class="card">
            <h3>⚙️ Acciones</h3>

            <a class="btn" href="index.php?action=formPassword">🔑 Cambiar contraseña</a>
            <a class="btn" href="index.php?action=update">✏️ Actualizar datos</a>
            <a class="btn" href="index.php?action=logout">🚪 Cerrar sesión</a>
        </div>

    </div>

    <!-- ABAJO: COMENTARIOS -->
    <div class="comments-card">

        <div class="title">💬 Últimos 10 comentarios</div>

        <?php if ($comentarios->num_rows > 0): ?>
            <?php while($row = $comentarios->fetch_assoc()): ?>

                <div class="comment">
                    <div class="comment-top">
                        <strong><?= htmlspecialchars($row['nombre']) ?></strong>
                        <span><?= htmlspecialchars($row['correo']) ?></span>
                    </div>
                    <div><?= htmlspecialchars($row['mensaje']) ?></div>
                </div>

            <?php endwhile; ?>
        <?php else: ?>
            <p>No hay comentarios</p>
        <?php endif; ?>

    </div>

</div>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (isset($_SESSION['mensaje'])): ?>
<script>
Swal.fire({
    icon: 'success',
    title: '¡Éxito!',
    text: '<?= $_SESSION['mensaje']; ?>',
    confirmButtonColor: '#00c896',
    timer: 2500,
    showConfirmButton: false
});
</script>
<?php unset($_SESSION['mensaje']); ?>
<?php endif; ?>