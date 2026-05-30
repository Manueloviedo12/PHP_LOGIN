<?php include __DIR__ . "/layout/header.php"; ?>
<link rel="stylesheet" href="css/stylesregister.css">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (isset($_SESSION['error'])): ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Error',
    text: '<?= $_SESSION['error']; ?>',
    confirmButtonColor: '#ff4d4d'
});
</script>
<?php unset($_SESSION['error']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['success'])): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Registro exitoso',
    text: '<?= $_SESSION['success']; ?>',
    confirmButtonColor: '#00c896',
    timer: 2500,
    showConfirmButton: false
});
</script>
<?php unset($_SESSION['success']); ?>
<?php endif; ?>
<div class="wrapper">
    <div class="reg-card">

        <div class="reg-header">
            <div class="header-icon">🚀</div>
            <h4>Crear cuenta</h4>
            <p>Regístrate para continuar</p>
        </div>

        <div class="reg-body">

            <?php if (!empty($mensaje)) : ?>
                <div class="alert alert-danger">
                    <?= htmlspecialchars($mensaje) ?>
                </div>
            <?php endif; ?>

            <form method="POST">

                <div class="field">
                    <label>Cédula</label>
                    <input type="text" name="cedula" required>
                </div>

                <div class="field">
                    <label>Nombre</label>
                    <input type="text" name="nombre" required>
                </div>

                <div class="field">
                    <label>Correo</label>
                    <input type="email" name="correo" required>
                </div>

                <div class="field">
                    <label>Contraseña</label>
                    <input type="password" name="password" required>
                </div>

                <button class="btn-register">Crear cuenta</button>

            </form>

            <div class="login-link">
                ¿Ya tienes cuenta? <a href="<?= BASE_URL ?>index.php?action=login">Inicia sesión</a>
            </div>

        </div>
    </div>

</div>

<?php include __DIR__ . "/layout/footer.php"; ?>