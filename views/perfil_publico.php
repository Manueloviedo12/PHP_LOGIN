<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Klever Oviedo | Software Developer</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<!-- NAV -->
 
<nav>
  <a href="#inicio" class="nav-logo">Klever<span>.</span></a>
  <ul>
    <li><  <a  href="<?= BASE_URL ?>index.php?action=login">Principal</a></li>
    <li><a href="#sobre">Sobre mí</a></li>
    <li><a href="#habilidades">Habilidades</a></li>
    <li><a href="#proyectos">Proyectos</a></li>
    <li><a href="#experiencia">Experiencia</a></li>
    <li><a href="#contacto" class="nav-cta">Contacto</a></li>
  </ul>
</nav>

<!-- ── HERO ── -->
<section id="inicio" class="hero">
  <div class="hero-glow"></div>
  <div class="hero-glow2"></div>
  <div class="hero-inner">
    <div class="hero-text reveal">
      <div class="hero-badge">Disponible para nuevos proyectos</div>
      <h1>Klever Oviedo<br><span class="highlight">Software Dev</span></h1>
      <p class="hero-sub">Estudiante de Sistemas apasionado por construir soluciones modernas. Backend sólido, apps móviles ágiles y visión de producto desde Ecuador 🇪🇨</p>
      <div class="hero-actions">
        <a href="#proyectos" class="btn-primary">Ver proyectos</a>
        <a href="#contacto" class="btn-secondary">Contáctame</a>
      </div>
      <div class="hero-stats">
        <div>
          <div class="stat-num">3+</div>
          <div class="stat-label">Años programando</div>
        </div>
        <div>
          <div class="stat-num">8+</div>
          <div class="stat-label">Tecnologías dominadas</div>
        </div>
        <div>
          <div class="stat-num">5+</div>
          <div class="stat-label">Proyectos personales</div>
        </div>
      </div>
    </div>

    <div class="hero-avatar reveal">
      <div class="avatar-ring">
        <div class="avatar-placeholder" style="display:flex;align-items:center;justify-content:center;border-radius:50%;width:100%;height:100%;background:var(--surface);">KC</div>
      </div>
      <div class="avatar-orbit"><div class="orbit-dot"></div></div>
    </div>
  </div>
</section>

<!-- ── SOBRE MÍ ── -->
<section id="sobre">
  <div class="container">
    <div class="about-grid">
      <div class="about-text reveal">
        <div class="section-label">Sobre mí</div>
        <h2 class="section-title">Construyo con propósito</h2>
        <p>Soy Klever Oviedo, estudiante de Ingeniería en Sistemas con mentalidad de desarrollador full-stack. Me especializo en backend robusto (Python, Go, PHP) y en crear aplicaciones móviles fluidas con Flutter.</p>
        <p>Mi enfoque va más allá del código: busco entender el problema, diseñar una solución escalable y comunicarla claramente al equipo. Creo en el trabajo colaborativo, la mejora continua y en construir software que genere impacto real.</p>
        <p>Actualmente explorando arquitecturas de microservicios, APIs RESTful y buenas prácticas de seguridad en aplicaciones web.</p>
        <div class="hero-actions" style="margin-top:28px">
          <a href="#contacto" class="btn-primary">Trabajemos juntos</a>
        </div>
      </div>
      <div class="about-values reveal">
        <div class="value-item">
          <div class="value-icon">🎯</div>
          <div>
            <h4>Orientado a resultados</h4>
            <p>Cada línea de código tiene un propósito claro. Priorizo soluciones que funcionan y escalan.</p>
          </div>
        </div>
        <div class="value-item">
          <div class="value-icon">🤝</div>
          <div>
            <h4>Trabajo en equipo</h4>
            <p>Colaboro activamente usando herramientas como Jira, GitHub y metodologías ágiles.</p>
          </div>
        </div>
        <div class="value-item">
          <div class="value-icon">🔐</div>
          <div>
            <h4>Pensamiento en seguridad</h4>
            <p>Aplico buenas prácticas de ciberseguridad desde el diseño de cada sistema.</p>
          </div>
        </div>
        <div class="value-item">
          <div class="value-icon">📈</div>
          <div>
            <h4>Mejora continua</h4>
            <p>Leo, experimento y aprendo constantemente. La tecnología avanza y yo avanzo con ella.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── HABILIDADES ── -->
<section id="habilidades">
  <div class="container">
    <div class="section-label">Stack tecnológico</div>
    <h2 class="section-title">Mis habilidades</h2>
    <p class="section-sub">Frontend visual, backend sólido y herramientas de gestión profesional.</p>

    <div class="skills-wrap reveal">
      <div class="skill-card">
        <div class="skill-card-icon">🎨</div>
        <h3>Frontend</h3>
        <div class="tech-tags">
          <span class="tag blue">HTML5</span>
          <span class="tag blue">CSS3</span>
          <span class="tag blue">Bootstrap</span>
          <span class="tag blue">JavaScript</span>
          <span class="tag blue">Flutter (UI)</span>
        </div>
      </div>
      <div class="skill-card">
        <div class="skill-card-icon">⚙️</div>
        <h3>Backend</h3>
        <div class="tech-tags">
          <span class="tag green">Python</span>
          <span class="tag green">Go</span>
          <span class="tag green">PHP</span>
          <span class="tag green">Django</span>
          <span class="tag green">Laravel</span>
          <span class="tag green">Lumen</span>
        </div>
      </div>
      <div class="skill-card">
        <div class="skill-card-icon">📱</div>
        <h3>Mobile & Otros</h3>
        <div class="tech-tags">
          <span class="tag amber">Flutter</span>
          <span class="tag amber">Dart</span>
          <span class="tag amber">REST APIs</span>
          <span class="tag amber">MySQL</span>
          <span class="tag amber">PostgreSQL</span>
          <span class="tag amber">Git</span>
        </div>
      </div>
    </div>

    <!-- SOFT SKILLS -->
    <div class="divider-line"></div>
    <div class="section-label">Habilidades blandas</div>
    <div class="soft-grid reveal">
      <div class="soft-item">
        <div class="emoji">💬</div>
        <h4>Comunicación asertiva</h4>
        <p>Expreso ideas con claridad en cualquier nivel</p>
      </div>
      <div class="soft-item">
        <div class="emoji">🧠</div>
        <h4>Pensamiento crítico</h4>
        <p>Analizo problemas antes de ejecutar soluciones</p>
      </div>
      <div class="soft-item">
        <div class="emoji">🔄</div>
        <h4>Adaptabilidad</h4>
        <p>Me ajusto rápido a nuevos contextos y tecnologías</p>
      </div>
      <div class="soft-item">
        <div class="emoji">⏱️</div>
        <h4>Gestión del tiempo</h4>
        <p>Sprints, deadlines y prioridades bajo control</p>
      </div>
    </div>

    <!-- TOOLS -->
    <div class="divider-line"></div>
    <div class="section-label">Herramientas de gestión</div>
    <div class="tools-grid reveal">
      <div class="tool-chip"><div class="dot"></div>Jira</div>
      <div class="tool-chip"><div class="dot blue"></div>GitHub / GitLab</div>
      <div class="tool-chip"><div class="dot blue"></div>Trello</div>
      <div class="tool-chip"><div class="dot amber"></div>Postman</div>
      <div class="tool-chip"><div class="dot amber"></div>VS Code</div>
      <div class="tool-chip"><div class="dot"></div>Scrum / Agile</div>
      <div class="tool-chip"><div class="dot blue"></div>Docker (básico)</div>
      <div class="tool-chip"><div class="dot amber"></div>Linux / Ubuntu</div>
    </div>
  </div>
</section>

<!-- ── PROYECTOS ── -->
<section id="proyectos">
  <div class="container">
    <div class="section-label">Trabajo personal</div>
    <h2 class="section-title">Proyectos destacados</h2>
    <p class="section-sub">Aplicaciones que construí para aprender, resolver problemas reales y explorar nuevas tecnologías.</p>

    <div class="projects-grid">

      <!-- FEATURED -->
      <div class="project-card featured reveal">
        <div class="project-thumb" style="font-size:70px;">🏥</div>
        <div class="project-body">
          <div class="project-meta">
            <span class="demo-pill">Destacado</span>
          </div>
          <div class="project-type">Django · Python · PostgreSQL</div>
          <h3>Sistema de Gestión Hospitalaria</h3>
          <p>Plataforma web para gestión de citas médicas, historial de pacientes y administración de turnos. Backend con Django REST Framework, autenticación JWT y panel administrativo completo.</p>
          <div class="tech-tags" style="margin-bottom:16px">
            <span class="tag green">Django</span>
            <span class="tag green">Python</span>
            <span class="tag blue">PostgreSQL</span>
            <span class="tag blue">JWT Auth</span>
            <span class="tag">REST API</span>
          </div>
          <div class="project-links">
            <a href="#" class="project-link live">🔗 Ver demo</a>
            <a href="#" class="project-link">GitHub →</a>
          </div>
        </div>
      </div>

      <!-- PROJECT 2 -->
      <div class="project-card reveal">
        <div class="project-thumb" style="font-size:52px;">📦</div>
        <div class="project-body">
          <div class="project-type">Laravel · PHP · MySQL</div>
          <h3>API de Inventario con Lumen</h3>
          <p>Microservicio REST para control de inventario y reportes. Documentado con Swagger, endpoints autenticados con Passport.</p>
          <div class="tech-tags" style="margin-bottom:16px">
            <span class="tag green">Lumen</span>
            <span class="tag green">PHP</span>
            <span class="tag blue">MySQL</span>
            <span class="tag">Swagger</span>
          </div>
          <div class="project-links">
            <a href="#" class="project-link">GitHub →</a>
          </div>
        </div>
      </div>

      <!-- PROJECT 3 -->
      <div class="project-card reveal">
        <div class="project-thumb" style="font-size:52px;">📱</div>
        <div class="project-body">
          <div class="project-type">Flutter · Dart · API REST</div>
          <h3>App de Tareas con Flutter</h3>
          <p>Aplicación móvil multiplataforma con estado reactivo, sincronización con API y almacenamiento local. UI limpia e intuitiva.</p>
          <div class="tech-tags" style="margin-bottom:16px">
            <span class="tag amber">Flutter</span>
            <span class="tag amber">Dart</span>
            <span class="tag blue">REST API</span>
            <span class="tag">SQLite</span>
          </div>
          <div class="project-links">
            <a href="#" class="project-link">GitHub →</a>
          </div>
        </div>
      </div>

      <!-- PROJECT 4 -->
      <div class="project-card reveal">
        <div class="project-thumb" style="font-size:52px;">🔐</div>
        <div class="project-body">
          <div class="project-type">Go · Ciberseguridad</div>
          <h3>Escáner de Puertos en Go</h3>
          <p>Herramienta CLI para análisis de puertos y servicios en redes locales. Concurrencia con goroutines y reporte exportable.</p>
          <div class="tech-tags" style="margin-bottom:16px">
            <span class="tag green">Go</span>
            <span class="tag">CLI</span>
            <span class="tag blue">Networking</span>
          </div>
          <div class="project-links">
            <a href="#" class="project-link">GitHub →</a>
          </div>
        </div>
      </div>

      <!-- PROJECT 5 -->
      <div class="project-card reveal">
        <div class="project-thumb" style="font-size:52px;">🛒</div>
        <div class="project-body">
          <div class="project-type">Laravel · Bootstrap · MySQL</div>
          <h3>E-Commerce Simple</h3>
          <p>Tienda online con carrito de compras, pasarela de pago simulada, gestión de productos y roles de usuario.</p>
          <div class="tech-tags" style="margin-bottom:16px">
            <span class="tag green">Laravel</span>
            <span class="tag blue">Bootstrap</span>
            <span class="tag blue">MySQL</span>
          </div>
          <div class="project-links">
            <a href="#" class="project-link live">🔗 Demo</a>
            <a href="#" class="project-link">GitHub →</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ── EXPERIENCIA ── -->
<section id="experiencia">
  <div class="container">
    <div class="about-grid">
      <div class="reveal">
        <div class="section-label">Trayectoria</div>
        <h2 class="section-title">Experiencia y formación</h2>
        <p style="color:var(--muted);margin-bottom:40px">Combinando estudios, proyectos personales y aprendizaje autodidacta para crecer como desarrollador.</p>

        <div class="timeline">
          <div class="tl-item">
            <div class="tl-date">2023 – Presente</div>
            <h3>Ingeniería en Sistemas de Información</h3>
            <div class="org">Universidad · Ecuador</div>
            <p>Formación integral en programación, bases de datos, redes, seguridad informática y gestión de proyectos de software.</p>
          </div>
          <div class="tl-item">
            <div class="tl-date">2024</div>
            <h3>Desarrollo de Proyectos Backend</h3>
            <div class="org">Práctica Autodidacta</div>
            <p>Construcción de APIs RESTful con Django y Laravel, integración con bases de datos relacionales y documentación con Swagger.</p>
          </div>
          <div class="tl-item">
            <div class="tl-date">2024</div>
            <h3>Apps Móviles con Flutter</h3>
            <div class="org">Proyectos Personales</div>
            <p>Desarrollo de aplicaciones Android/iOS usando Flutter y Dart, consumo de APIs y gestión de estado.</p>
          </div>
          <div class="tl-item">
            <div class="tl-date">2025</div>
            <h3>Exploración en Go y Ciberseguridad</h3>
            <div class="org">Aprendizaje continuo</div>
            <p>Herramientas de red con Go, fundamentos de hacking ético y análisis de vulnerabilidades.</p>
          </div>
        </div>
      </div>

      <div class="reveal">
        <div class="section-label">Certificaciones</div>
        <div style="display:flex;flex-direction:column;gap:16px;margin-top:36px">
          <div class="value-item">
            <div class="value-icon">🏆</div>
            <div>
              <h4>Python para Ciencia de Datos</h4>
              <p>Udemy / Coursera · 2024</p>
            </div>
          </div>
          <div class="value-item">
            <div class="value-icon">🏆</div>
            <div>
              <h4>Django REST Framework</h4>
              <p>Platzi · 2024</p>
            </div>
          </div>
          <div class="value-item">
            <div class="value-icon">🏆</div>
            <div>
              <h4>Flutter & Dart — The Complete Guide</h4>
              <p>Udemy · 2024</p>
            </div>
          </div>
          <div class="value-item">
            <div class="value-icon">🏆</div>
            <div>
              <h4>Introducción a la Ciberseguridad</h4>
              <p>Cisco Networking Academy · 2025</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── HOBBIES ── -->
<section id="hobbies">
  <div class="container">
    <div class="section-label">Fuera del teclado</div>
    <h2 class="section-title">Pasatiempos</h2>
    <p class="section-sub">Lo que me mantiene equilibrado, curioso y con energía para crear.</p>

    <div class="hobbies-grid reveal">
      <div class="hobby-card">
        <div class="big-emoji">📚</div>
        <h4>Lectura</h4>
        <p>Libros técnicos, ciencia ficción y crecimiento personal.</p>
      </div>
      <div class="hobby-card">
        <div class="big-emoji">🏃</div>
        <h4>Deporte</h4>
        <p>Running, fútbol y ejercicio diario para mantener mente y cuerpo activos.</p>
      </div>
      <div class="hobby-card">
        <div class="big-emoji">🔐</div>
        <h4>Ciberseguridad</h4>
        <p>CTFs, análisis de vulnerabilidades y aprendizaje en TryHackMe.</p>
      </div>
      <div class="hobby-card">
        <div class="big-emoji">🚀</div>
        <h4>Emprendimiento</h4>
        <p>Ideas de producto, SaaS y el desafío de construir cosas desde cero.</p>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . "/contacto.php"; ?>

<!-- FOOTER -->
<footer>
  <span>© 2026 Klever Oviedo — Todos los derechos reservados</span>
  <span>Diseñado y construido con 💚 desde Ecuador</span>
</footer>

<script>
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((e, i) => {
      if (e.isIntersecting) {
        setTimeout(() => e.target.classList.add('visible'), i * 80);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
</script>
</body>
</html>
