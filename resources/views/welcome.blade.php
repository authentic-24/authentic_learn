<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Authentic Learn - Home</title>
        <!-- Bootstrap 5.3.8 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="icon" href="https://www.authenticfarma.com/wp-content/uploads/2025/05/cropped-isotipo_color-scaled-1-32x32.png" sizes="32x32" />
        <link rel="icon" href="https://www.authenticfarma.com/wp-content/uploads/2025/05/cropped-isotipo_color-scaled-1-192x192.png" sizes="192x192" />                              
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700&display=swap" rel="stylesheet" />

            <!-- Siempre cargamos Bootstrap y Bootstrap Icons desde CDN -->
        <link rel="stylesheet" href="/css/custom.css">
    </head>

    <body class="bg-light position-relative" style="overflow-x:hidden;">
        <!-- Fondo animado de partículas y gradiente -->
        <div id="bg-animated-gradient"></div>
        <canvas id="bg-particles"></canvas>
            <!-- ...existing code... -->
            <!-- Barra de navegación superior futurista -->
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm py-4 sticky-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#" style="font-size:1.8rem; letter-spacing:-0.5px; font-family:'Inter',sans-serif;">
                    Authentic Learn
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-4">
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-medium position-relative" href="#" style="font-size:0.95rem;">
                                Acceder
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary ms-lg-2 px-4 py-2 position-relative" href="{{ route('register') }}" style="border-radius:8px;font-weight:600;font-size:0.95rem;box-shadow:0 4px 15px rgba(0,87,184,0.25);">
                                Registrarse
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success" style="font-size:0.7rem;">
                                    Gratis
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            <!-- Encabezado principal con fondo full-screen -->
        <header class="text-center position-relative" style="background-image: url('/images/fondo.png'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 100vh; width: 100vw; margin-left: calc(-50vw + 50%); overflow: hidden;">
            <!-- Overlay para mejorar legibilidad del texto -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(1px);"></div>
            
            <div class="position-relative d-flex align-items-center justify-content-center" style="z-index: 2; min-height: 100vh;">
                <div class="container py-5">
                    <div class="mb-4">
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-medium mb-3">
                            <i class="bi bi-mortarboard me-1"></i>Formación Especializada
                        </span>
                    </div>
                    <h1 class="display-5 fw-bold text-white mb-4" style="line-height:1.2;font-family:'Inter',sans-serif;">
                        Desarrolla tu liderazgo farmacéutico:<br>
                        <span class="text-white">aprende + conéctate + auténtico</span>
                    </h1>
                    <p class="lead text-white mb-4 mx-auto" style="max-width:600px;font-size:1.1rem;line-height:1.6;">
                        E-learning + comportamientos comportamentales y técnicos
                    </p>
                    <p class="text-white mb-5 mx-auto" style="max-width:700px;font-size:1rem;line-height:1.7;">
                        Capacítate en comunicación, liderazgo, autogestión, adaptabilidad y transformación digital 
                    </p>
                    
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center align-items-center">
                        <a href="{{ route('register') }}" class="btn btn-pharma btn-lg px-5 py-3">
                            <i class="bi bi-play-circle me-2"></i>Inscríbete ahora
                        </a>
                        {{-- <a href="#modulos" class="btn btn-pharma-outline btn-lg px-5 py-3">
                            <i class="bi bi-book me-2"></i>Ver cursos --}}
                        </a>
                        <a href="#modulos" class="btn btn-pharma-outline btn-lg px-5 py-3">
                            <i class="bi bi-arrow-down me-2"></i>Explorar contenidos
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <div class="container py-5">

            <!-- Qué es Authentic Farma E-Learning -->
            <section class="mb-6">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="position-relative">
                            <!-- Fondo decorativo -->
                            <div class="position-absolute top-0 start-0 w-100 h-100" style="background:linear-gradient(135deg, rgba(0,87,184,0.03) 0%, rgba(0,168,107,0.05) 100%);border-radius:16px;"></div>
                            <div class="card border-0 position-relative" style="background:rgba(255,255,255,0.95);backdrop-filter:blur(15px);border-radius:16px;overflow:hidden;">
                                <!-- Header de la sección -->
                                <div class="card-body text-center py-5 px-4">
                                    <div class="mb-4">
                                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-medium mb-3">
                                            <i class="bi bi-stars me-2"></i>Plataforma Líder
                                        </span>
                                    </div>
                                    <h2 class="h2 fw-bold mb-4" style="font-family:'Inter',sans-serif;letter-spacing:-0.8px;color:#1e293b;">
                                        ¿Qué es <span class="text-primary">Authentic Farma</span> E-Learning?
                                    </h2>
                                    <p class="lead text-secondary mb-5 mx-auto" style="max-width:700px;line-height:1.7;font-size:1.1rem;">
                                        Una plataforma formativa diseñada para profesionales, estudiantes y empresas del sector farmacéutico y dispositivos médicos, con contenido de alto impacto, formación especializada y aprendizaje continuo.
                                    
                                    <!-- Cards de beneficios -->
                                    <div class="row g-4 mt-4">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="feature-card h-100 p-4 rounded-3 position-relative overflow-hidden">
                                                <div class="feature-bg"></div>
                                                <div class="position-relative z-1">
                                                    <div class="mb-3">
                                                        <div class="feature-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width:60px;height:60px;">
                                                            <i class="bi bi-mortarboard text-primary" style="font-size:1.5rem;"></i>
                                                        </div>
                                                    </div>
                                                    <h5 class="fw-bold mb-2" style="color:#1e293b;">Formación Especializada</h5>
                                                    <p class="text-secondary small mb-0">En competencias proyectadas para los líderes del año 2030.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="feature-card h-100 p-4 rounded-3 position-relative overflow-hidden">
                                                <div class="feature-bg"></div>
                                                <div class="position-relative z-1">
                                                    <div class="mb-3">
                                                        <div class="feature-icon bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width:60px;height:60px;">
                                                            <i class="bi bi-star-fill text-success" style="font-size:1.5rem;"></i>
                                                        </div>
                                                    </div>
                                                    <h5 class="fw-bold mb-2" style="color:#1e293b;">Mentores con experiencia real</h5>
                                                    <p class="text-secondary small mb-0">En la industria farmacéutica y dispositivos médicos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="feature-card h-100 p-4 rounded-3 position-relative overflow-hidden">
                                                <div class="feature-bg"></div>
                                                <div class="position-relative z-1">
                                                    <div class="mb-3">
                                                        <div class="feature-icon bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width:60px;height:60px;">
                                                            <i class="bi bi-clock-history text-info" style="font-size:1.5rem;"></i>
                                                        </div>
                                                    </div>
                                                    <h5 class="fw-bold mb-2" style="color:#1e293b;">Flexibilidad de horarios</h5>
                                                    <p class="text-secondary small mb-0">Modalidad 100% digital, aprende a tu ritmo</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="feature-card h-100 p-4 rounded-3 position-relative overflow-hidden">
                                                <div class="feature-bg"></div>
                                                <div class="position-relative z-1">
                                                    <div class="mb-3">
                                                        <div class="feature-icon bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width:60px;height:60px;">
                                                            <i class="bi bi-award text-warning" style="font-size:1.5rem;"></i>
                                                        </div>
                                                    </div>
                                                    <h5 class="fw-bold mb-2" style="color:#1e293b;">Certificación</h5>
                                                    <p class="text-secondary small mb-0">Completa el 100% de los módulos y obtén tu reconocimiento.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="feature-card h-100 p-4 rounded-3 position-relative overflow-hidden">
                                                <div class="feature-bg"></div>
                                                <div class="position-relative z-1">
                                                    <div class="mb-3">
                                                        <div class="feature-icon bg-danger bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width:60px;height:60px;">
                                                            <i class="bi bi-globe2 text-danger" style="font-size:1.5rem;"></i>
                                                        </div>
                                                    </div>
                                                    <h5 class="fw-bold mb-2" style="color:#1e293b;">Comunidad de networking</h5>
                                                    <p class="text-secondary small mb-0">Sectorial especializada en farma y dispositivos médicos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="feature-card h-100 p-4 rounded-3 position-relative overflow-hidden">
                                                <div class="feature-bg"></div>
                                                <div class="position-relative z-1">
                                                    <div class="mb-3">
                                                        <div class="feature-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width:60px;height:60px;">
                                                            <i class="bi bi-briefcase text-primary" style="font-size:1.5rem;"></i>
                                                        </div>
                                                    </div>
                                                    <h5 class="fw-bold mb-2" style="color:#1e293b;">Conexión con oportunidades laborales</h5>
                                                    <p class="text-secondary small mb-0">Acceso directo a ofertas exclusivas del sector farmacéutico</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Misión -->
                                    <div class="mt-5 p-4 rounded-3" style="background:linear-gradient(135deg, rgba(0,87,184,0.05) 0%, rgba(0,168,107,0.08) 100%);">
                                        <div class="d-flex align-items-center justify-content-center mb-3">
                                            <i class="bi bi-target text-primary me-2" style="font-size:1.5rem;"></i>
                                            <h6 class="fw-bold mb-0 text-primary">Nuestro Mantra</h6>
                                        </div>
                                        <p class="text-secondary mb-0" style="line-height:1.6;">
                                            Estamos transformando el reclutamiento en la industria farmacéutica, de dispositivos médicos y dermocosméticos. <strong>¡Encuentra Candidatos, Consultores y Mentores ahorrando un 55% de tiempo!</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Módulos / Contenido educativo profesional -->
            <section id="modulos" class="mb-6">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <!-- Header profesional -->
                        <div class="text-center mb-5">
                            <span class="badge bg-info bg-opacity-10 px-4 py-3 rounded-pill fw-large mb-3 fs-4">
                                <i class="bi bi-mortarboard me-2"></i>Programa Formativo
                            </span>
                            <h2 class="h2 fw-bold text-white mb-3" style="font-family:'Inter',sans-serif;letter-spacing:-0.8px;">
                                ¿Qué vas a <span class="">aprender</span>?
                            </h2>
                            <p class="lead text-white-50 mx-auto mb-4" style="max-width:700px;line-height:1.6;">
                                Desarrolla las competencias más demandadas en el sector farmacéutico
                            </p>
                        </div>

                        <!-- Carrusel mejorado -->
                        <div class="position-relative">
                            <!-- Fondo decorativo del carrusel -->
                            <div class="position-absolute top-0 start-0 w-100 h-100" style="background:linear-gradient(135deg, rgba(0,87,184,0.03) 0%, rgba(0,168,107,0.05) 100%);border-radius:20px;"></div>
                            
                            <div id="modulosCarousel" class="carousel slide position-relative" data-bs-ride="carousel" style="padding:2rem;border-radius:20px;">
                                <!-- Indicadores personalizados -->
                                <div class="carousel-indicators position-relative mb-4" style="position:relative;margin-bottom:0;">
                                    <button type="button" data-bs-target="#modulosCarousel" data-bs-slide-to="0" class="active carousel-indicator-custom" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#modulosCarousel" data-bs-slide-to="1" class="carousel-indicator-custom" aria-label="Slide 2"></button>
                                </div>

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row justify-content-center g-4">
                                            <div class="col-md-4">
                                                <div class="card border-0 shadow-lg rounded-4 h-100 mx-auto card-hover-effect" style="background:rgba(255,255,255,0.95);backdrop-filter:blur(15px);">
                                                    <div class="card-body text-center p-4">
                                                        <div class="mb-3">
                                                            <div class="icon-container d-inline-flex align-items-center justify-content-center rounded-circle  bg-opacity-15 mb-3" style="width:70px;height:70px;">
                                                                <i class="bi bi-chat-dots" style="font-size:2.5rem;color:#00a86b;"></i>
                                                            </div>
                                                        </div>
                                                        <h5 class="card-title fw-bold text-primary mb-3">Comunicación</h5>
                                                        <ul class="mb-3 text-start" style="list-style:none;padding:0;">
                                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Escucha activa</li>
                                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Comunicación efectiva</li>
                                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Negociación</li>
                                                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Retroalimentación</li>
                                                        </ul>
                                                        <div class="text-secondary small">Capacidad de expresarte claramente y persuadir en equipo</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card border-0 shadow-lg rounded-4 h-100 mx-auto card-hover-effect" style="background:rgba(255,255,255,0.95);backdrop-filter:blur(15px);">
                                                    <div class="card-body text-center p-4">
                                                        <div class="mb-3">
                                                            <div class="icon-container d-inline-flex align-items-center justify-content-center rounded-circle  bg-opacity-15 mb-3" style="width:70px;height:70px;">
                                                                <i class="bi bi-trophy-fill" style="font-size:2.5rem;color:#0057b8;"></i>
                                                            </div>
                                                        </div>
                                                        <h5 class="card-title fw-bold text-primary mb-3">Liderazgo</h5>
                                                        <ul class="mb-3 text-start" style="list-style:none;padding:0;">
                                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Liderazgo situacional</li>
                                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Motivación</li>
                                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Gestión de equipos</li>
                                                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Coaching básico</li>
                                                        </ul>
                                                        <div class="text-secondary small">Potenciar liderazgo individual y de equipo</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card border-0 shadow-lg rounded-4 h-100 mx-auto card-hover-effect" style="background:rgba(255,255,255,0.95);backdrop-filter:blur(15px);">
                                                    <div class="card-body text-center p-4">
                                                        <div class="mb-3">
                                                            <div class="icon-container d-inline-flex align-items-center justify-content-center rounded-circle bg-opacity-15 mb-3" style="width:70px;height:70px;">
                                                                <i class="bi bi-gear-fill" style="font-size:2.5rem;color:#00a86b;"></i>
                                                            </div>
                                                        </div>
                                                        <h5 class="card-title fw-bold text-primary mb-3">Autogestión</h5>
                                                        <ul class="mb-3 text-start" style="list-style:none;padding:0;">
                                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-info me-2"></i>Gestión del tiempo</li>
                                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-info me-2"></i>Productividad</li>
                                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-info me-2"></i>Resiliencia</li>
                                                            <li><i class="bi bi-check-circle-fill text-info me-2"></i>Hábitos</li>
                                                        </ul>
                                                        <div class="text-secondary small">Capacidad de autoorganización y manejo del estrés</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row justify-content-center g-4">
                                            <div class="col-md-4">
                                                <div class="card border-0 shadow-lg rounded-4 h-100 mx-auto card-hover-effect" style="background:rgba(255,255,255,0.95);backdrop-filter:blur(15px);">
                                                    <div class="card-body text-center p-4">
                                                        <div class="mb-3">
                                                            <div class="icon-container d-inline-flex align-items-center justify-content-center rounded-circle  bg-opacity-15 mb-3" style="width:70px;height:70px;">
                                                                <i class="bi bi-lightbulb" style="font-size:2.5rem;color:#0057b8;"></i>
                                                            </div>
                                                        </div>
                                                        <h5 class="card-title fw-bold text-primary mb-3">Adaptabilidad</h5>
                                                        <ul class="mb-3 text-start" style="list-style:none;padding:0;">
                                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Flexibilidad</li>
                                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Innovación</li>
                                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Cambio</li>
                                                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Mindset</li>
                                                        </ul>
                                                        <div class="text-secondary small">Afrontar retos dinámicos con agilidad</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card border-0 shadow-lg rounded-4 h-100 mx-auto card-hover-effect" style="background:rgba(255,255,255,0.95);backdrop-filter:blur(15px);">
                                                    <div class="card-body text-center p-4">
                                                        <div class="mb-3">
                                                            <div class="icon-container d-inline-flex align-items-center justify-content-center rounded-circle bg-opacity-15 mb-3" style="width:70px;height:70px;">
                                                                <i class="bi bi-cpu" style="font-size:2.5rem;color:#00a86b;"></i>
                                                            </div>
                                                        </div>
                                                        <h5 class="card-title fw-bold text-primary mb-3">Transformación digital</h5>
                                                        <ul class="mb-3 text-start" style="list-style:none;padding:0;">
                                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Herramientas digitales</li>
                                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Innovación</li>
                                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Datos</li>
                                                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Automatización</li>
                                                        </ul>
                                                        <div class="text-secondary small">Entender herramientas emergentes del sector salud / farma</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Controles personalizados -->
                                <button class="carousel-control-prev carousel-control-custom" type="button" data-bs-target="#modulosCarousel" data-bs-slide="prev">
                                    <div class="carousel-control-icon">
                                        <i class="bi bi-chevron-left"></i>
                                    </div>
                                    <span class="visually-hidden">Anterior</span>
                                </button>
                                <button class="carousel-control-next carousel-control-custom" type="button" data-bs-target="#modulosCarousel" data-bs-slide="next">
                                    <div class="carousel-control-icon">
                                        <i class="bi bi-chevron-right"></i>
                                    </div>
                                    <span class="visually-hidden">Siguiente</span>
                                </button>
                            </div>

                            <!-- Información adicional -->
                            {{-- <div class="text-center mt-4">
                                <p class="text-white-50 small mb-0">
                                    <i class="bi bi-award me-2"></i>Certificación profesional al completar cada módulo
                                </p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </section>
            <!-- Mentores / Facilitadores -->
            <section class="mb-6">
                <div class="text-center mb-5">
                    
                    <span class="badge bg-info bg-opacity-10 px-4 py-3 rounded-pill fw-large mb-3 fs-4">
                                <i class="bi bi-stars me-1"></i>Equipo Fundador
                            </span>
                    <h2 class="h3 fw-bold text-white mb-3" style="font-family:'Inter',sans-serif;letter-spacing:-0.5px;">
                        Conoce a tus mentores
                    </h2>
                    <p class="text-white-50 mx-auto" style="max-width:600px;">
                        Co-fundadoras con amplia experiencia liderando la transformación del talento en el sector farmacéutico
                    </p>
                </div>
                <div class="row justify-content-center g-4">
                    <!-- Angelica M. Santos R. -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card text-center h-100 p-4 p-lg-4 rounded-4 position-relative overflow-hidden" style="background:rgba(255,255,255,0.95);backdrop-filter:blur(15px);border:1px solid rgba(0,87,184,0.1);box-shadow:0 8px 40px rgba(0,87,184,0.12);transition:all 0.4s ease;">
                            <div class="team-bg position-absolute top-0 start-0 w-100 h-100" style="background:linear-gradient(135deg, rgba(0,87,184,0.02) 0%, rgba(0,168,107,0.04) 100%);opacity:0;transition:opacity 0.4s ease;"></div>
                            <div class="position-relative z-1">
                                <div class="mb-3">
                                    <div class="mentor-photo-container position-relative d-inline-block">
                                        <img src="/images/Mentora Angelica Santos .png" alt="Angelica M. Santos R." class="mentor-photo rounded-circle border border-primary border-opacity-20" style="width:100px;height:100px;object-fit:cover;transition:all 0.3s ease;">
                                        <div class="photo-overlay position-absolute top-0 start-0 w-100 h-100 rounded-circle d-flex align-items-center justify-content-center" style="background:rgba(0,87,184,0.1);opacity:0;transition:opacity 0.3s ease;">
                                            <i class="bi bi-award text-primary" style="font-size:1.5rem;"></i>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="fw-bold mb-2" style="color:#1e293b;font-size:1.1rem;">Angelica M. Santos R.</h5>
                                {{-- <div class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-3 fw-semibold" style="font-size:0.75rem;">
                                    Co-Fundadora
                                </div> --}}
                                <p class="text-secondary small mb-3 lh-base" style="font-size:0.8rem;">
                                    <strong>Psicóloga</strong> + Especialista en Gestión Humana y Desarrollo Organizacional + Coach Ejecutivo + Master
                                </p>
                                <div class="d-flex align-items-center justify-content-center mb-3">
                                    <div class="experience-badge bg-success bg-opacity-10 border border-success border-opacity-20 rounded-pill px-2 py-1" style="font-size:0.75rem;">
                                        <i class="bi bi-award me-1 text-success" style="font-size:0.8rem;"></i>
                                        <span class="fw-bold text-success">+15 años</span>
                                    </div>
                                </div>
                                <p class="text-muted small mb-0" style="font-size:0.8rem;">
                                    Especialista en desarrollo de talento humano especializado en la industria farmacéutica
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Natalia Vergara -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card text-center h-100 p-4 p-lg-4 rounded-4 position-relative overflow-hidden" style="background:rgba(255,255,255,0.95);backdrop-filter:blur(15px);border:1px solid rgba(0,87,184,0.1);box-shadow:0 8px 40px rgba(0,87,184,0.12);transition:all 0.4s ease;">
                            <div class="team-bg position-absolute top-0 start-0 w-100 h-100" style="background:linear-gradient(135deg, rgba(0,87,184,0.02) 0%, rgba(0,168,107,0.04) 100%);opacity:0;transition:opacity 0.4s ease;"></div>
                            <div class="position-relative z-1">
                                <div class="mb-3">
                                    <div class="mentor-photo-container position-relative d-inline-block">
                                        <img src="/images/mentora Natalia vergara.png" alt="Natalia Vergara" class="mentor-photo rounded-circle border border-success border-opacity-20" style="width:100px;height:100px;object-fit:cover;transition:all 0.3s ease;">
                                        <div class="photo-overlay position-absolute top-0 start-0 w-100 h-100 rounded-circle d-flex align-items-center justify-content-center" style="background:rgba(0,168,107,0.1);opacity:0;transition:opacity 0.3s ease;">
                                            <i class="bi bi-brain text-success" style="font-size:1.5rem;"></i>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="fw-bold mb-2" style="color:#1e293b;font-size:1.1rem;">Natalia Vergara</h5>
                                {{-- <div class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill mb-3 fw-semibold" style="font-size:0.75rem;">
                                    Coach
                                </div> --}}
                                <p class="text-secondary small mb-3 lh-base" style="font-size:0.8rem;">
                                    <strong>Psicóloga</strong> + Especialista en Administración de Empresas
                                </p>
                                <div class="d-flex align-items-center justify-content-center mb-3">
                                    <div class="specialization-badge bg-primary bg-opacity-10 border border-primary border-opacity-20 rounded-pill px-2 py-1" style="font-size:0.75rem;">
                                        <i class="bi bi-brain me-1 text-primary" style="font-size:0.8rem;"></i>
                                        <span class="fw-bold text-primary">Coaching</span>
                                    </div>
                                </div>
                                <p class="text-muted small mb-0" style="font-size:0.8rem;">
                                    Especialista en desarrollo empresarial y coaching profesional
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Otoniel Fonseca -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card text-center h-100 p-4 p-lg-4 rounded-4 position-relative overflow-hidden" style="background:rgba(255,255,255,0.95);backdrop-filter:blur(15px);border:1px solid rgba(0,87,184,0.1);box-shadow:0 8px 40px rgba(0,87,184,0.12);transition:all 0.4s ease;">
                            <div class="team-bg position-absolute top-0 start-0 w-100 h-100" style="background:linear-gradient(135deg, rgba(0,87,184,0.02) 0%, rgba(0,168,107,0.04) 100%);opacity:0;transition:opacity 0.4s ease;"></div>
                            <div class="position-relative z-1">
                                <div class="mb-3">
                                    <div class="mentor-photo-container position-relative d-inline-block">
                                        <img src="/images/mentor Otoniel Fonseca.png" alt="Otoniel Fonseca" class="mentor-photo rounded-circle border border-info border-opacity-20" style="width:100px;height:100px;object-fit:cover;transition:all 0.3s ease;">
                                        <div class="photo-overlay position-absolute top-0 start-0 w-100 h-100 rounded-circle d-flex align-items-center justify-content-center" style="background:rgba(13,202,240,0.1);opacity:0;transition:opacity 0.3s ease;">
                                            <i class="bi bi-code-slash text-info" style="font-size:1.5rem;"></i>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="fw-bold mb-2" style="color:#1e293b;font-size:1.1rem;">Otoniel Fonseca</h5>
                                {{-- <div class="badge bg-info bg-opacity-10 text-info px-3 py-2 rounded-pill mb-3 fw-semibold" style="font-size:0.75rem;">
                                    Co-Fundador
                                </div> --}}
                                <p class="text-secondary small mb-3 lh-base" style="font-size:0.8rem;">
                                    <strong>Ingeniero de Sistemas</strong> + Arquitecto de Software
                                </p>
                                <div class="d-flex align-items-center justify-content-center mb-3">
                                    <div class="tech-badge bg-info bg-opacity-10 border border-info border-opacity-20 rounded-pill px-2 py-1" style="font-size:0.75rem;">
                                        <i class="bi bi-code-slash me-1 text-info" style="font-size:0.8rem;"></i>
                                        <span class="fw-bold text-info">Tech Lead</span>
                                    </div>
                                </div>
                                <p class="text-muted small mb-0" style="font-size:0.8rem;">
                                    Arquitecto de soluciones tecnológicas para plataformas digitales especializadas
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Stats del equipo -->
                {{-- <div class="row justify-content-center mt-5">
                    <div class="col-lg-10">
                        <div class="p-4 rounded-4 text-center" style="background:rgba(255,255,255,0.9);backdrop-filter:blur(15px);border:1px solid rgba(0,87,184,0.08);box-shadow:0 4px 25px rgba(0,87,184,0.1);">
                            <div class="row text-center g-4">
                                <div class="col-6 col-md-3">
                                    <div class="stat-item">
                                        <h3 class="fw-bold text-primary mb-1">3</h3>
                                        <p class="small text-muted mb-0">Co-Fundadores</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="stat-item">
                                        <h3 class="fw-bold text-success mb-1">15+</h3>
                                        <p class="small text-muted mb-0">Años de Experiencia</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="stat-item">
                                        <h3 class="fw-bold text-info mb-1">100+</h3>
                                        <p class="small text-muted mb-0">Profesionales Formados</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="stat-item">
                                        <h3 class="fw-bold text-warning mb-1">5+</h3>
                                        <p class="small text-muted mb-0">Especializaciones</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </section>
            <!-- Plataforma Authentic / Conexión laboral -->
            <section class="mb-6">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card text-center" style="background:rgba(255,255,255,0.95);border:1px solid rgba(0,168,107,0.2);">
                            <div class="card-body py-5 px-4">
                                <div class="mb-4">
                                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 mb-3" style="width:80px;height:80px;">
                                        <i class="bi bi-briefcase" style="font-size:2.2rem;color:#0057b8;"></i>
                                    </div>
                                </div>
                                <h2 class="h3 fw-bold text-primary mb-3" style="font-family:'Inter',sans-serif;letter-spacing:-0.5px;">
                                    Plataforma Authentic / Conexión laboral
                                </h2>
                                <p class="lead text-secondary mb-4" style="max-width:600px;margin:0 auto;line-height:1.6;">
                                    Al registrarte, accedes automáticamente a la plataforma de conexión de talento especializada en la industria farmacéutica y dispositivos médicos.
                                </p>
                                <div class="row text-center mt-4">
                                    <div class="col-md-4 mb-3">
                                        <i class="bi bi-search text-primary mb-2" style="font-size:1.5rem;"></i>
                                        <div class="fw-semibold">Búsqueda especializada</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <i class="bi bi-person-workspace text-primary mb-2" style="font-size:1.5rem;"></i>
                                        <div class="fw-semibold">Predictores</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <i class="bi bi-graph-up text-primary mb-2" style="font-size:1.5rem;"></i>
                                        <div class="fw-semibold">Crecimiento profesional</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FAQ / Preguntas frecuentes -->
            <section class="mb-6">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!-- Header de la sección -->
                        <div class="text-center mb-5">
                            <span class="badge bg-primary bg-opacity-10  px-3 py-2 rounded-pill fw-medium mb-3">
                                <i class="bi bi-question-circle me-1"></i>Soporte y Ayuda
                            </span>
                            <h2 class="h2 fw-bold mb-3 text-white" style="font-family:'Inter',sans-serif;letter-spacing:-0.8px;">
                                Preguntas <span class="">Frecuentes</span>
                            </h2>
                            <p class="lead text-white-50 mx-auto" style="max-width:600px;line-height:1.6;">
                                Resolvemos las dudas más comunes para que puedas comenzar tu formación sin inconvenientes
                            </p>
                        </div>

                        <!-- FAQ Cards -->
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="faq-card h-100 p-4 rounded-3 position-relative">
                                    <div class="faq-number">01</div>
                                    <div class="mb-3">
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 mb-3" style="width:50px;height:50px;">
                                            <i class="bi bi-clock text-primary" style="font-size:1.2rem;"></i>
                                        </div>
                                    </div>
                                    <h5 class="fw-bold mb-3" style="color:#1e293b;">¿Cuánto tiempo tengo para completar los módulos?</h5>
                                    <p class="text-secondary mb-0" style="line-height:1.6;">
                                        Puedes avanzar a tu ritmo. La plataforma es flexible y 100% digital, con un límite de tiempo hasta el 1 de diciembre de 2025.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="faq-card h-100 p-4 rounded-3 position-relative">
                                    <div class="faq-number">02</div>
                                    <div class="mb-3">
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-success bg-opacity-10 mb-3" style="width:50px;height:50px;">
                                            <i class="bi bi-book-fill text-success" style="font-size:1.2rem;"></i>
                                        </div>
                                    </div>
                                    <h5 class="fw-bold mb-3" style="color:#1e293b;">¿Necesito tener experiencia previa en pharma?</h5>
                                    <p class="text-secondary mb-0" style="line-height:1.6;">
                                        No, los contenidos están diseñados para todos los niveles, desde estudiantes hasta profesionales con experiencia.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="faq-card h-100 p-4 rounded-3 position-relative">
                                    <div class="faq-number">03</div>
                                    <div class="mb-3">
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-info bg-opacity-10 mb-3" style="width:50px;height:50px;">
                                            <i class="bi bi-key text-info" style="font-size:1.2rem;"></i>
                                        </div>
                                    </div>
                                    <h5 class="fw-bold mb-3" style="color:#1e293b;">¿Cómo accedo a la plataforma Authentic Farma?</h5>
                                    <p class="text-secondary mb-0" style="line-height:1.6;">
                                        Al registrarte, recibirás acceso automático directo y soporte personalizado para comenzar inmediatamente.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="faq-card h-100 p-4 rounded-3 position-relative">
                                    <div class="faq-number">04</div>
                                    <div class="mb-3">
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning bg-opacity-10 mb-3" style="width:50px;height:50px;">
                                            <i class="bi bi-headset text-warning" style="font-size:1.2rem;"></i>
                                        </div>
                                    </div>
                                    <h5 class="fw-bold mb-3" style="color:#1e293b;">Soporte / contacto técnico</h5>
                                    <p class="text-secondary mb-0" style="line-height:1.6;">
                                        Puedes contactarnos en cualquier momento a través de WhatsApp para soporte inmediato.
                                    </p>
                                </div>
                            </div>
                        </div>

        
                    </div>
                </div>
            </section>

            <!-- Llamada a la acción simplificada -->
            <section class="text-center mb-6">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="py-5 px-4">
                            <h2 class="h2 fw-bold text-white mb-4" style="font-family:'Inter',sans-serif;">
                                ¿Listo para impulsar tu carrera en farma y desarrollar tus power skills?
                            </h2>
                            <p class="lead text-white-50 mb-4 mx-auto" style="max-width:600px;">
                                Regístrate y accede a los mejores cursos online del sector farmacéutico.
                            </p>
                            
                            <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center align-items-center">
                                <a href="{{ route('register') }}" class="btn btn-pharma btn-lg px-5 py-3">
                                    <i class="bi bi-arrow-right-circle me-2"></i>Comenzar ahora
                                </a>
                                <a href="#modulos" class="btn btn-pharma-outline btn-lg px-5 py-3">
                                    <i class="bi bi-info-circle me-2"></i>Más información
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- WhatsApp Floating Button -->
        <a href="https://wa.me/573334001541" target="_blank" class="position-fixed" style="bottom:30px;right:30px;z-index:9999;text-decoration:none;">
            <span class="d-flex align-items-center justify-content-center bg-success text-white rounded-circle shadow-lg" style="width:60px;height:60px;font-size:2rem;">
                <i class="bi bi-whatsapp"></i>
            </span>
        </a>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

            <!-- Footer profesional con fondo oscuro -->
        <footer class="border-0 mt-5 pt-5 pb-4" style="background: linear-gradient(135deg, #1e293b 0%, #334155 100%);">
            <div class="container">
                <div class="row justify-content-between align-items-start">
                    <div class="col-md-4 mb-4">
                        <div class="fw-bold mb-3 text-white" style="font-family:'Inter',sans-serif;font-size:1.3rem;">
                            <i class="bi bi-capsule me-2 text-primary"></i>Authentic Farma
                        </div>
                        <p class="text-white-50 small mb-3" style="line-height:1.6;">
                            Transformando el reclutamiento en la industria farmacéutica con formación especializada y conexiones laborales.
                        </p>
                        <div class="d-flex gap-3">
                            <a href="#" class="text-white-50 hover-text-primary transition-all" style="font-size:1.3rem;transition:color 0.3s ease;">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="#" class="text-white-50 hover-text-primary transition-all" style="font-size:1.3rem;transition:color 0.3s ease;">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="#" class="text-white-50 hover-text-primary transition-all" style="font-size:1.3rem;transition:color 0.3s ease;">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="https://wa.me/573334001541" target="_blank" class="text-white-50 hover-text-success transition-all" style="font-size:1.3rem;transition:color 0.3s ease;">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4">
                        <h6 class="fw-semibold text-white mb-3">
                            <i class="bi bi-mortarboard me-2 text-primary"></i>Formación
                        </h6>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="#modulos" class="text-white-50 text-decoration-none small hover-text-white" style="transition:color 0.3s ease;">
                                    <i class="bi bi-arrow-right me-2"></i>Módulos
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-white-50 text-decoration-none small hover-text-white" style="transition:color 0.3s ease;">
                                    <i class="bi bi-arrow-right me-2"></i>Certificaciones
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-white-50 text-decoration-none small hover-text-white" style="transition:color 0.3s ease;">
                                    <i class="bi bi-arrow-right me-2"></i>Mentores
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 mb-4">
                        <h6 class="fw-semibold text-white mb-3">
                            <i class="bi bi-building me-2 text-primary"></i>Empresa
                        </h6>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="#" class="text-white-50 text-decoration-none small hover-text-white" style="transition:color 0.3s ease;">
                                    <i class="bi bi-arrow-right me-2"></i>Acerca de
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-white-50 text-decoration-none small hover-text-white" style="transition:color 0.3s ease;">
                                    <i class="bi bi-arrow-right me-2"></i>Contacto
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-white-50 text-decoration-none small hover-text-white" style="transition:color 0.3s ease;">
                                    <i class="bi bi-arrow-right me-2"></i>Blog
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-4">
                        <h6 class="fw-semibold text-white mb-3">
                            <i class="bi bi-telephone me-2 text-primary"></i>Contacto
                        </h6>
                        <div class="text-white-50 small mb-2 d-flex align-items-center">
                            <i class="bi bi-envelope me-2 text-primary"></i>
                            <a href="mailto:info@authenticfarma.com" class="text-white-50 text-decoration-none hover-text-white" style="transition:color 0.3s ease;">
                                info@authenticfarma.com
                            </a>
                        </div>
                        <div class="text-white-50 small mb-3 d-flex align-items-center">
                            <i class="bi bi-whatsapp me-2 text-success"></i>
                            <a href="https://wa.me/573334001541" target="_blank" class="text-white-50 text-decoration-none hover-text-white" style="transition:color 0.3s ease;">
                                +57 333 400 1541
                            </a>
                        </div>
                        <div class="text-white-50 small d-flex align-items-center">
                            <i class="bi bi-geo-alt me-2 text-primary"></i>
                            <span>Colombia</span>
                        </div>
                    </div>
                </div>
                <hr class="my-4" style="border-color:rgba(255,255,255,0.2);">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="text-white-50 small d-flex align-items-center">
                            <i class="bi bi-c-circle me-2"></i>
                            {{ date('Y') }} Authentic Farma. Todos los derechos reservados.
                        </div>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="#" class="text-white-50 text-decoration-none small me-3 hover-text-white" style="transition:color 0.3s ease;">
                            <i class="bi bi-shield-check me-1"></i>Política de Privacidad
                        </a>
                        <a href="#" class="text-white-50 text-decoration-none small hover-text-white" style="transition:color 0.3s ease;">
                            <i class="bi bi-file-text me-1"></i>Términos de Uso
                        </a>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Bootstrap 5.3.8 JS Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/js/custom.js"></script>
        
        <!-- Toastify JS -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        
        <!-- Toast Messages -->
        <style>
            .toastify {
                z-index: 99999 !important;
            }
        </style>
        
        @if(session('success'))
            <script>
                Toastify({
                    text: "{{ session('success') }}",
                    duration: 5000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#28a745",
                    stopOnFocus: true,
                    className: "toast-success"
                }).showToast();
            </script>
        @endif

        @if(session('error'))
            <script>
                Toastify({
                    text: "{{ session('error') }}",
                    duration: 4000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#dc3545",
                    stopOnFocus: true,
                    className: "toast-error"
                }).showToast();
            </script>
        @endif
    </body>
</html>
