<?php include __DIR__ . "/layout/header.php"; ?>
<link rel="stylesheet" href="css/styleslogin.css">


<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            🔐 <h4>Iniciar <span>Sesión</span></h4>
        </div>
        <div class="login-body">

            <form method="POST">

                <div class="field">
                    <label>Correo</label>
                    <input type="email" name="correo" placeholder="tu@email.com" required>
                </div>

                <div class="field">
                    <label>Contraseña</label>
                    <input type="password" name="password" placeholder="••••••••" required>
                </div>

                <button class="btn-login">Entrar</button>

            </form>

            <div class="login-footer">
                ¿No tienes cuenta?
                <a href="<?= BASE_URL ?>index.php?action=register">Regístrate</a>
            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (isset($_SESSION['error'])): ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Error de acceso',
    text: '<?= $_SESSION['error']; ?>',
    confirmButtonColor: '#ff4d4d'
});
</script>
<?php unset($_SESSION['error']); ?>
<?php endif; ?>

<?php include __DIR__ . "/layout/footer.php"; ?>