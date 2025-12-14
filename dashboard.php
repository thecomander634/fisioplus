<?php
session_start();
// Si NO hay sesión de terapeuta, lo echamos fuera (Seguridad)
if (!isset($_SESSION['terapeuta_nombre'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Profesional | FisioPlus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
          <link href="./assets/styles/styles.css" rel="stylesheet">
    <style>
        img  {
                height: 50px !important;
                width: 80px !important;
        }

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dashboard sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                 <img src="./assets/images/Gemini_Generated_Image_jh4brijh4brijh4b.png" alt="FisioPlus" class="footer-log rounded-3"><span class="badge ms-1 fs-6" style="vertical-align: middle;">PRO</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center gap-3">
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="#" style="color: var(--fisio-primary);">Pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mensajes <span class="badge bg-danger rounded-pill">2</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown">
                            <div class="avatar-circle" style="width: 32px; height: 32px; font-size: 0.9rem;">Dr</div>
                            <span>Dr. Ejemplo</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                            <li><a class="dropdown-item" href="#">Mi Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Configuración</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="logout.php">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        
        <div class="mb-4">
            <h2 class="fw-bold" style="color: var(--fisio-dark);">Panel de Control</h2>
            <p class="text-secondary">Resumen de actividad y pacientes asignados.</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="stat-card p-4 h-100 d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted mb-1 text-uppercase small fw-bold">Pacientes Activos</h6>
                        <h2 class="mb-0 fw-bold" style="color: var(--fisio-dark);">24</h2>
                    </div>
                    <div class="icon-box bg-success bg-opacity-10 text-success">
                        👥
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="stat-card p-4 h-100 d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted mb-1 text-uppercase small fw-bold">Alertas IoT</h6>
                        <h2 class="mb-0 fw-bold text-danger">3</h2>
                        <span class="small text-danger">Mala postura detectada</span>
                    </div>
                    <div class="icon-box bg-danger bg-opacity-10 text-danger">
                        ⚠️
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="stat-card p-4 h-100 d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted mb-1 text-uppercase small fw-bold">Citas Hoy</h6>
                        <h2 class="mb-0 fw-bold text-primary">5</h2>
                        <span class="small text-muted">Próxima: 16:00h</span>
                    </div>
                    <div class="icon-box bg-primary bg-opacity-10 text-primary">
                        📅
                    </div>
                </div>
            </div>
        </div>

        <div class="table-card p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold m-0" style="color: var(--fisio-dark);">Seguimiento de Pacientes</h5>
                <button class="btn btn-primary bg-primary border-0 rounded-pill px-4">+ Nuevo Paciente</button>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Paciente</th>
                            <th scope="col">Tratamiento</th>
                            <th scope="col">Progreso (IoT)</th>
                            <th scope="col">Estado</th>
                            <th scope="col" class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle">JP</div>
                                    <div>
                                        <div class="fw-bold">Juan Pérez</div>
                                        <div class="small text-muted">juan@email.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>Rehab. Rodilla</td>
                            <td style="width: 25%;">
                                <div class="d-flex align-items-center">
                                    <span class="small me-2 fw-bold">85%</span>
                                    <div class="progress flex-grow-1" style="height: 6px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%"></div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3">Activo</span></td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-primary btn-action">Ver Datos</button>
                                <button class="btn btn-sm btn-outline-secondary btn-action">Mensaje</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle bg-warning bg-opacity-25 text-warning">MG</div>
                                    <div>
                                        <div class="fw-bold">María Gómez</div>
                                        <div class="small text-muted">maria@email.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>Lumbalgia</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="small me-2 fw-bold text-danger">30%</span>
                                    <div class="progress flex-grow-1" style="height: 6px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%"></div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-warning bg-opacity-10 text-warning border border-warning rounded-pill px-3">Estancado</span></td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-primary btn-action">Ver Datos</button>
                                <button class="btn btn-sm btn-outline-secondary btn-action">Mensaje</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle">CR</div>
                                    <div>
                                        <div class="fw-bold">Carlos Ruiz</div>
                                        <div class="small text-muted">carlos@email.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>Post-operatorio</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="small me-2 fw-bold">60%</span>
                                    <div class="progress flex-grow-1" style="height: 6px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 60%"></div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3">Activo</span></td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-primary btn-action">Ver Datos</button>
                                <button class="btn btn-sm btn-outline-secondary btn-action">Mensaje</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            
            <nav class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                    <li class="page-item active" aria-current="page"><span class="page-link bg-success border-success">1</span></li>
                    <li class="page-item"><a class="page-link text-success" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-success" href="#">3</a></li>
                    <li class="page-item"><a class="page-link text-success" href="#">Siguiente</a></li>
                </ul>
            </nav>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>