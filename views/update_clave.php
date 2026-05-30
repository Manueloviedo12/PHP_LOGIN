<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña | Klever </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/stylesupdate_clave.css">


</head>

<body>

<div class="wrapper">

    <div class="profile-brand">
        <a href="index.php">Klever<span>.</span></a>
    </div>

    <div class="pass-card">

        <!-- HEADER -->
        <div class="pass-header">
            <div class="header-icon">🔑</div>
            <h4>Cambiar contraseña</h4>
            <p>Ingresa tu contraseña actual y elige una nueva</p>
        </div>

        <!-- BODY -->
        <div class="pass-body">

            <?php if (isset($_GET['error'])): ?>
            <div class="alert-error">
                ⚠️ <?= htmlspecialchars($_GET['error']) ?>
            </div>
            <?php endif; ?>

            <form method="POST" action="index.php?action=actualizarPassword">

                <div class="mb-3">
                    <label class="form-label">Contraseña actual</label>
                    <div class="input-wrap">
                        <input type="password" name="actual" class="form-control" placeholder="••••••••" required>
                        <button type="button" class="toggle-eye" onclick="togglePass(this)">👁</button>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nueva contraseña</label>
                    <div class="input-wrap">
                        <input type="password" name="nueva" id="nueva" class="form-control" placeholder="••••••••" required oninput="checkStrength(this.value)">
                        <button type="button" class="toggle-eye" onclick="togglePass(this)">👁</button>
                    </div>
                    <div class="strength-bar">
                        <span id="s1"></span>
                        <span id="s2"></span>
                        <span id="s3"></span>
                        <span id="s4"></span>
                    </div>
                    <div class="strength-label" id="strength-text"></div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirmar nueva contraseña</label>
                    <div class="input-wrap">
                        <input type="password" name="confirmar" class="form-control" placeholder="••••••••" required>
                        <button type="button" class="toggle-eye" onclick="togglePass(this)">👁</button>
                    </div>
                </div>

                <div class="divider"></div>

                <button type="submit" class="btn-save">Actualizar contraseña →</button>

                <a href="index.php?action=perfil" class="btn-cancel">← Volver al perfil</a>

            </form>

        </div>
    </div>

  

</div>

<script>
    function togglePass(btn) {
        const input = btn.previousElementSibling;
        if (input.type === 'password') {
            input.type = 'text';
            btn.textContent = '🙈';
        } else {
            input.type = 'password';
            btn.textContent = '👁';
        }
    }

    function checkStrength(val) {
        const bars = [
            document.getElementById('s1'),
            document.getElementById('s2'),
            document.getElementById('s3'),
            document.getElementById('s4')
        ];
        const label = document.getElementById('strength-text');

        let score = 0;
        if (val.length >= 8) score++;
        if (/[A-Z]/.test(val)) score++;
        if (/[0-9]/.test(val)) score++;
        if (/[^A-Za-z0-9]/.test(val)) score++;

        const colors = ['#ff4e4e', '#ff9800', '#f5c518', '#00c896'];
        const labels = ['Muy débil', 'Débil', 'Buena', 'Fuerte'];

        bars.forEach((b, i) => {
            b.style.background = i < score ? colors[score - 1] : 'rgba(255,255,255,0.08)';
        });

        label.textContent = val.length > 0 ? labels[score - 1] || '' : '';
        label.style.color = score > 0 ? colors[score - 1] : 'var(--muted)';
    }
</script>

</body>
</html>