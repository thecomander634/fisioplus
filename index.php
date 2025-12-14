  <!doctype html>
  <html lang="es">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Fisioplus</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
      <link href="./assets/styles/styles.css" rel="stylesheet">
      <style> :root {
    --bs-primary: rgb(112, 112, 112);             /* tu naranja */
    --bs-primary-rgb: 158, 255, 123;    /* valores RGB del mismo color */
    --bs-secondary-rgb: 112, 112, 112;
  }
  </style>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./SPA.js"></script>
    </head>
    <body>
      <!-- nav-->
      <div class="container border-bottom py-3">
    <div class="row bg-info text-white">
      <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand fw-semibold" href="#" data-target="home-section">Fisioplus</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-0 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="#" data-target="events-section">Sobre nosotros</a></li>

              <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Ofertas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" tabindex="-1" data-target="contact-section">Contacto</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </div>
  </div>
    <!-- text cards -->
    <main>
  <section id="home-section"data-section>
    <div>
    <main class="container py-5">
    <div class="pb-3 mb-0 rounded-3">
    <div class="container-fluid py-5">
    <h2 class="display-5 fw-bold mb-3" style="color: #064e3b;">Portal Clínico FisioPlus</h2>
    
    <p class="col-md-10 fs-5 text-secondary">
      Bienvenido a la plataforma integral de gestión para tratamientos de fisioterapia avanzada. 
      Aquí conectamos nuestra tecnología de <strong>IA y Realidad Aumentada</strong> con tu recuperación diaria.
    </p>

    <div class="alert alert-light border mt-4 col-md-8" role="alert">
      <div class="d-flex align-items-center">
        <span class="fs-4 me-3">ℹ️</span>
        <div>
          <strong style="color: #059669;">Información de acceso:</strong>
          <p class="mb-0 small text-muted">
            Por seguridad clínica, las cuentas de usuario son generadas exclusivamente por nuestro equipo administrativo al iniciar un tratamiento. 
            Si ya eres paciente, utiliza las credenciales que te hemos facilitado.
          </p>
        </div>
      </div>
    </div>
    </div>
    </div>
    <div class="row g-4">
    <div class="col-12 col-md-6 col-lg-6">
    <div class="card h-100">
    <img src="./assets/images/fisioterapeuta.jpg" class="card-img-top" alt="bodikit">
    <div class="card-body">
    <h5 class="card-title fw-semibold">CLIENTES</h5>
    <p class="card-text">Inicio de sesion para usuarios</p>
    <a href="#" class="btn btn-primary bg-secondary" data-target="users-section">Iniciar Sesión</a>
    </div>
    </div>
    </div>


    <div class="col-12 col-md-6 col-lg-6">
    <div class="card h-100">
    <img src="./assets/images/fisioterapeuta1.jpg" class="card-img-top" alt="Turbos">
    <div class="card-body">
    <h5 class="card-title fw-semibold">PROFESIONALES</h5>
    <p class="card-text">inicio de sesion para terapeutas</p>
    <a href="#" class="btn btn-primary bg-secondary"data-target="terapeutas-section">Iniciar Sesión</a>
    </div>
    </div>
    </div>

    </div>
    </main>
    <!--footer-->
    </div>

  </section>
  <section id="register-section"data-section>
          <div class="container">
      <!-- FORMULARIO DE REGISTRO -->
      <main class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h1 class="h4 mb-4 text-center">Registro de usuario</h1>
                <form>
                  <!-- Nombre -->
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ej: Juan Pérez" required>
                  </div>
                  <!-- Email -->
                  <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="contact-email" placeholder="nombre@correo.com" required>
                  </div>
                  <!-- Contraseña -->
                  <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" required>
                  </div>
                  <!-- Confirmar Contraseña -->
                  <div class="mb-3">
                    <label for="password2" class="form-label">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="password2" required>
                  </div>
                  <!-- Teléfono -->
                  <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" placeholder="+34 600 000 000">
                  </div>
                  <!-- Botón -->
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary bg-primary">Crear cuenta</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
   <!-- MODAL DE CONFIRMACIÓN -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center p-4">
        <h5 class="mb-3">¡Gracias!</h5>
        <p>Tu mensaje se ha enviado correctamente.</p>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
    </div>

  </section>
  <section id="users-section"data-section>
          <div class="container">
      <!-- FORMULARIO DE REGISTRO -->
      <main class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h1 class="h4 mb-4 text-center">Registro de usuario</h1>
                <form>
                  <!-- Nombre -->
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ej: Juan Pérez" required>
                  </div>
                  <!-- Email -->
                  <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="contact-email" placeholder="nombre@correo.com" required>
                  </div>
                  <!-- Contraseña -->
                  <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" required>
                  </div>
                  <!-- Confirmar Contraseña -->
                  <div class="mb-3">
                    <label for="password2" class="form-label">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="password2" required>
                  </div>
                  <!-- Teléfono -->
                  <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" placeholder="+34 600 000 000">
                  </div>
                  <!-- Botón -->
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary bg-primary">Crear cuenta</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
    <!-- MODAL DE CONFIRMACIÓN -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center p-4">
        <h5 class="mb-3">¡Gracias!</h5>
        <p>Tu mensaje se ha enviado correctamente.</p>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
    </div>

</section>
  <section id="terapeutas-section"data-section>
      <div class="container">
      <!-- FORMULARIO DE REGISTRO -->
      <main class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h1 class="h4 mb-4 text-center">Inicio de Sesion de Terapeutas</h1>
                <form id="form-login-terapeuta" action="login_terapeuta.php" method="POST">
                  <div class="mb-3">
                    <label for="tera-email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="tera-email" name="email" placeholder="nombre@correo.com" required>
                  </div>
                  
                  <div class="mb-3">
                    <label for="tera-password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="tera-password" name="password" required>
                  </div>
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary bg-primary">Iniciar Sesión</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
    <!-- MODAL DE CONFIRMACIÓN -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center p-4">
        <h5 class="mb-3">¡Gracias!</h5>
        <p>Tu mensaje se ha enviado correctamente.</p>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
    </div>

  </section>
  <section id="events-section"data-section>
        <div class="container">
    
    <div class="text-center mb-5">
      <h2 class="display-5 fw-bold mb-3" style="color: #064e3b;">Rehabilitación Digital Inteligente</h2>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <p class="fs-5 text-secondary">
            Desarrollamos sistemas de rehabilitación basados en <strong>Realidad Aumentada (RA)</strong> y <strong>sensores IoT</strong>. 
            Nuestra tecnología detecta movimientos, posturas y esfuerzo muscular, permitiendo a los pacientes realizar ejercicios desde casa con supervisión remota y corrección en tiempo real.
          </p>
        </div>
      </div>
    </div>

    <div class="row g-4 mb-5">
      <div class="col-md-6">
        <div class="card h-100 border-0 shadow-sm" style="border-left: 5px solid #10b981 !important;">
          <div class="card-body p-4">
            <h3 class="h4 fw-bold mb-3" style="color: #059669;">Nuestra Misión</h3>
            <p class="text-muted">
              Ofrecemos una solución digital que guía y corrige los ejercicios del paciente en tiempo real.
              Nos dirigimos a personas en recuperación postoperatoria, deportistas y mayores, así como a centros sanitarios que buscan eficiencia. 
              <strong>Nuestro objetivo:</strong> optimizar la recuperación física, mejorar la adherencia terapéutica y democratizar la rehabilitación de calidad clínica.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card h-100 border-0 shadow-sm" style="border-left: 5px solid #064e3b !important;">
          <div class="card-body p-4">
            <h3 class="h4 fw-bold mb-3" style="color: #064e3b;">Nuestra Visión</h3>
            <p class="text-muted">
              Aspiramos a que, en los próximos 5 a 10 años, nuestra tecnología sea el estándar para un seguimiento preciso y basado en datos. 
              Queremos impulsar un modelo de salud <strong>accesible, conectado y avanzado</strong>, mejorando la calidad de vida de millones de personas desde la comodidad de su hogar.
            </p>
          </div>
        </div>
      </div>
    </div>

    <h3 class="h4 fw-bold mb-4 text-center" style="color: #374151;">Nuestros Valores</h3>
    <div class="row g-3 mb-5">
      
      <div class="col-sm-6 col-lg-4">
        <div class="p-3 bg-white rounded-3 border shadow-sm h-100 text-center">
          <div class="fs-1 mb-2">🚀</div>
          <h5 class="fw-bold" style="color: #059669;">Innovación</h5>
          <p class="small text-muted mb-0">Aplicamos RA, IoT e IA para revolucionar la terapia.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="p-3 bg-white rounded-3 border shadow-sm h-100 text-center">
          <div class="fs-1 mb-2">❤️</div>
          <h5 class="fw-bold" style="color: #059669;">Bienestar</h5>
          <p class="small text-muted mb-0">La seguridad y progreso del paciente es la prioridad.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="p-3 bg-white rounded-3 border shadow-sm h-100 text-center">
          <div class="fs-1 mb-2">🌍</div>
          <h5 class="fw-bold" style="color: #059669;">Accesibilidad</h5>
          <p class="small text-muted mb-0">Rehabilitación de calidad para todos, desde cualquier lugar.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="p-3 bg-white rounded-3 border shadow-sm h-100 text-center">
          <div class="fs-1 mb-2">🤝</div>
          <h5 class="fw-bold" style="color: #059669;">Humanización</h5>
          <p class="small text-muted mb-0">La tecnología complementa, no sustituye al profesional.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="p-3 bg-white rounded-3 border shadow-sm h-100 text-center">
          <div class="fs-1 mb-2">🛡️</div>
          <h5 class="fw-bold" style="color: #059669;">Responsabilidad</h5>
          <p class="small text-muted mb-0">Ética, transparencia y máxima protección de datos.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="p-3 bg-white rounded-3 border shadow-sm h-100 text-center">
          <div class="fs-1 mb-2">🌱</div>
          <h5 class="fw-bold" style="color: #059669;">Sostenibilidad</h5>
          <p class="small text-muted mb-0">Optimizamos recursos y reducimos desplazamientos.</p>
        </div>
      </div>
    </div>

    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border">
      <div class="text-center mb-4">
        <h3 class="fw-bold" style="color: #064e3b;">Soluciones Integrales</h3>
        <p class="text-muted">Un ecosistema conectado para todos los actores de la salud</p>
      </div>
      
      <div class="row g-4">
        <div class="col-md-4">
          <h5 class="fw-bold border-bottom pb-2 mb-3" style="color: #10b981;">Para Pacientes</h5>
          <ul class="list-unstyled text-secondary">
            <li class="mb-2">✅ Rehabilitación correcta sin dependencia total.</li>
            <li class="mb-2">✅ Mayor motivación y compromiso.</li>
            <li class="mb-2">✅ Visualización del progreso propio en tiempo real.</li>
          </ul>
        </div>

        <div class="col-md-4">
          <h5 class="fw-bold border-bottom pb-2 mb-3" style="color: #10b981;">Para Fisioterapeutas</h5>
          <ul class="list-unstyled text-secondary">
            <li class="mb-2">⚡ Seguimiento remoto preciso.</li>
            <li class="mb-2">⚡ Optimización de tiempo y recursos.</li>
            <li class="mb-2">⚡ Datos objetivos para ajustar tratamientos.</li>
          </ul>
        </div>

        <div class="col-md-4">
          <h5 class="fw-bold border-bottom pb-2 mb-3" style="color: #10b981;">Para Centros de Salud</h5>
          <ul class="list-unstyled text-secondary">
            <li class="mb-2">📉 Reducción de costes operativos.</li>
            <li class="mb-2">🏥 Mejora de la eficiencia clínica.</li>
            <li class="mb-2">⭐ Garantía de calidad y seguridad.</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="mt-5 text-center pt-4 border-top">
      <p class="small text-muted mb-1">FisioPlus S.L. — Sociedad Limitada constituida por 2 socios.</p>
      <p class="small text-muted">Capital social aportado según normativa vigente (2022). Responsabilidad Limitada.</p>
    </div>

   </div>
  </section>
  <section id="contact-section"data-section>
      <style>
        
        /* Ajustes concretos para el hero de contacto */
        .contact-hero {
          min-height: 64vh;
          display: grid;
          align-items: center;
          gap: 1.5rem;
        }
        .contact-card {
          background: rgba(255,255,255,0.03);
          padding: 2rem;
          border-radius: .75rem;
        }
        .contact-item { margin-bottom: .75rem; }
        .contact-item strong { display:inline-block; width:110px; }
        /* iframe responsivo */
        .map-embed {
          width:100%;
          height:320px;
          border:0;
          border-radius:.5rem;
          box-shadow: 0 .5rem 1rem rgba(0,0,0,.12);
        }
        @media(min-width:992px){
          .map-embed { height:420px; }
        }
      </style>
      <!-- HERO contacto -->
      <main class="container py-5">
        <section class="contact-hero">
          <div class="row g-4 align-items-center">
            <!-- Columna info -->
            <div class="col-12 col-lg-5">
              <div class="contact-card">
                <h2 class="h4 fw-semibold mb-3">Contacto</h2>
                <p class="text-secondary mb-4">¿Tienes dudas sobre piezas, montaje o reservas? Escríbenos o pásate por el taller.</p>

                <div class="contact-item">
                  <strong>Teléfono:</strong>
                  <a class="text-decoration-none" href="tel:+34999999999">+34 999 99 99 99</a>
                </div>

                <div class="contact-item">
                  <strong>Email:</strong>
                  <a class="text-decoration-none" href="mailto:info@streettorque.example">info@fisioplus.org</a>
                </div>

                <div class="contact-item">
                  <strong>WhatsApp:</strong>
                  <a class="text-decoration-none" href="https://wa.me/34999999999" target="_blank" rel="noopener">+34 999 99 99 99</a>
                </div>

                <div class="contact-item">
                  <strong>Instagram:</strong>
                  <a class="text-decoration-none" href="https://instagram.com/fisiopluss" target="_blank" rel="noopener">@fisiopluss</a>
                </div>

                <div class="contact-item">
                  <strong>TikTok:</strong>
                  <a class="text-decoration-none" href="https://tiktok.com/@fisiopluss" target="_blank" rel="noopener">@fisiopluss</a>
                </div>

                <hr class="my-3">

                <p class="small text-muted mb-0">Horario: L-V 09:00–19:00 · Sáb 10:00–14:00</p>
              </div>
            </div>

            <!-- Columna mapa -->
            <div class="col-12 col-lg-7">
              <!-- Iframe de Google Maps -->
              <iframe
                class="map-embed"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.315883294563!2d-1.6469192845196464!3d42.816869879159665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5092eb7a5a33c7%3A0x400d0ce36b8a620!2sPamplona%2C%20Navarra!5e0!3m2!1ses!2ses!4v1696100000000!5m2!1ses!2ses"
                loading="lazy"
                allowfullscreen=""
                referrerpolicy="no-referrer-when-downgrade"
                title="Mapa - StreetTorque">
              </iframe>
            </div>
          </div>
        </section>
      </main>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      </div>
      </div>
    </nav>    
  </section>
  <footer class="container bg-info rounded-3">
    <div class="container rounded-3">
      <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
        <ul class="nav">
          <li class="nav-item a"><a class="nav-link px-2" href="#">Catálogo</a></li>
          <li class="nav-item a"><a class="nav-link px-2" href="#">Eventos</a></li>
          <li class="nav-item a"><a class="nav-link px-2" href="#" >Contacto</a></li>
        </ul>
      </div>
      <div class="small text-muted mt-3">© Fisioplus — Terapia remota y presencial</div>
    </div>
  </footer>
      <script src="./assets/js/SPA.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
  </html>