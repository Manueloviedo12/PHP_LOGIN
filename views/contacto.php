<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<section id="contacto">
  <div class="container">
    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div class="msg success">
        </div>
    <?php endif; ?>
    <div class="contact-grid">
      <div class="reveal">
        <div class="section-label">Hablemos</div>
        <div class="contact-info">
          <h2>¿Tienes un proyecto en mente?</h2>
          <p>Estoy abierto a oportunidades de trabajo, proyectos freelance o simplemente charlar sobre tecnología. Escríbeme.</p>
        </div>
        <div class="contact-links">
          <a href="mailto:klever@example.com" class="contact-link">
            <div class="link-icon">✉️</div>
            <div class="link-info">
              <strong>Email</strong>
              <span>klever@example.com</span>
            </div>
          </a>
          <a href="https://github.com/" class="contact-link">
            <div class="link-icon">💻</div>
            <div class="link-info">
              <strong>GitHub</strong>
              <span>github.com/klevercobos</span>
            </div>
          </a>
          <a href="https://linkedin.com/" class="contact-link">
            <div class="link-icon">🔗</div>
            <div class="link-info">
              <strong>LinkedIn</strong>
              <span>linkedin.com/in/klever</span>
            </div>
          </a>
          <a href="#" class="contact-link">
            <div class="link-icon">📍</div>
            <div class="link-info">
              <strong>Ubicación</strong>
              <span>Ecuador 🇪🇨 · Disponible remoto</span>
            </div>
          </a>
        </div>
      </div>

   
<form method="POST" action="index.php?action=enviar">
  <div class="contact-form reveal">
    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div class="msg success">Mensaje enviado correctamente 👍</div>
    <?php endif; ?>

    <div class="form-row">
      <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Tu nombre" required>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="correo" placeholder="tu@email.com" required>
      </div>
    </div>

    <div class="form-group">
      <label>Mensaje</label>
      <textarea name="mensaje" placeholder="Cuéntame sobre tu proyecto..." required></textarea>
    </div>

    <button type="submit" class="submit-btn">
      Enviar mensaje →
    </button>
  </div>
</form>
    </div>
  </div>
</section>
<?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>

<script>
Swal.fire({
    icon: 'success',
    title: '¡Enviado!',
    text: 'Tu mensaje se ha enviado correctamente',
    confirmButtonColor: '#00c896'
});
</script>

<?php endif; ?>