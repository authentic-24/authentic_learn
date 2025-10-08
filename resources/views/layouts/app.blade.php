<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Authentic Learn')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="icon" href="https://www.authenticfarma.com/wp-content/uploads/2025/05/cropped-isotipo_color-scaled-1-32x32.png" sizes="32x32" />
	<link rel="icon" href="https://www.authenticfarma.com/wp-content/uploads/2025/05/cropped-isotipo_color-scaled-1-192x192.png" sizes="192x192" />                              
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body class="bg-light position-relative" style="overflow-x:hidden;">
    <div id="bg-animated-gradient"></div>
    <canvas id="bg-particles"></canvas>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm py-4 sticky-top" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(15px);">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/" style="font-size:1.8rem; letter-spacing:-0.5px; font-family:'Inter',sans-serif; color: #0057b8;">
                <i class="bi bi-capsule me-2"></i>Authentic E-learning
            </a>
            <div class="ms-auto">
                <a href="/" class="btn btn-outline-primary me-2">
                    <i class="bi bi-arrow-left me-2"></i>Volver al inicio
                </a>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
        
    </main>
    <footer class="border-0 mt-5 pt-5 pb-4" style="background: #2d3748;">
            <div class="container">
                <div class="row justify-content-between align-items-start">
                    <div class="col-md-5 mb-4">
                        <div class="fw-bold mb-3 text-white" style="font-family:'Inter',sans-serif;font-size:1.3rem;">
                            <i class="bi bi-capsule me-2 text-primary"></i>Authentic Farma
                        </div>
                        <p class="text-white-50 small mb-3" style="line-height:1.6;">
                            Transformando el reclutamiento en la industria farmacéutica con formación especializada y conexiones laborales.
                        </p>
                        <div class="d-flex gap-3">
                            <a href="https://co.linkedin.com/company/authenticfarma" class="text-white-50 hover-text-primary transition-all" style="font-size:1.3rem;transition:color 0.3s ease;">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            {{-- <a href="#" class="text-white-50 hover-text-primary transition-all" style="font-size:1.3rem;transition:color 0.3s ease;">
                                <i class="bi bi-twitter"></i>
                            </a> --}}
                            <a href="https://www.instagram.com/authentic_farma/" class="text-white-50 hover-text-primary transition-all" style="font-size:1.3rem;transition:color 0.3s ease;">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="https://wa.me/573334001541" target="_blank" class="text-white-50 hover-text-success transition-all" style="font-size:1.3rem;transition:color 0.3s ease;">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                        </div>
                        
                        <!-- Logos del patrocinio -->
                        <div class="mt-4">
                            <div class="text-white-50 small mb-2 fw-medium">
                                <i class="bi bi-award me-2 text-primary"></i>Patrocinado por CCB
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-start flex-wrap">
                                <img src="/images/patrocinador-1.png" alt="Patrocinio CCB" class="img-fluid opacity-75 logo-responsive" style="max-height:50px;max-width:120px;object-fit:contain;">
                                <!-- Logo Clúster Farma+ CCB -->
                                <img src="/images/cluster.png" alt="Clúster Farma+ CCB" class="img-fluid opacity-75 logo-responsive" style="max-height:50px;max-width:140px;object-fit:contain;">
                            </div>
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
                            {{-- <li class="mb-2">
                                <a href="#" class="text-white-50 text-decoration-none small hover-text-white" style="transition:color 0.3s ease;">
                                    <i class="bi bi-arrow-right me-2"></i>Blog
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="col-md-3 mb-4">
                        <h6 class="fw-semibold text-white mb-3">
                            <i class="bi bi-telephone me-2 text-primary"></i>Contacto
                        </h6>
                        <div class="text-white-50 small mb-2 d-flex align-items-center">
                            <i class="bi bi-envelope me-2 text-primary"></i>
                            <a href="mailto:info@authenticfarma.com" class="text-white-50 text-decoration-none hover-text-white" style="transition:color 0.3s ease;">
                                administrativo@authentic.com.co
                            </a>
                        </div>
                        <div class="text-white-50 small mb-3 d-flex align-items-center">
                            <i class="bi bi-whatsapp me-2 text-success"></i>
                            <a href="https://wa.me/573334001541" target="_blank" class="text-white-50 text-decoration-none hover-text-white" style="transition:color 0.3s ease;">
                                +57 333 4002303
                            </a>
                        </div>
                        <div class="text-white-50 small mb-3 d-flex align-items-center">
                            <i class="bi bi-geo-alt me-2 text-primary"></i>
                            <span>Colombia</span>
                        </div>
                        
                        <!-- Información del líder Clúster Farma+ CCB -->
                        <hr style="border-color:rgba(255,255,255,0.2); margin: 1rem 0 0.75rem 0;">
                        {{-- <div class="mb-2">
                            <div class="fw-semibold text-white small mb-1">
                                <i class="bi bi-award me-2 text-primary"></i>Proyecto financiado por:
                            </div>
                            <div class="text-white-50 small mb-1">Clúster Farma+ CCB</div>
                        </div> --}}
                        <div class="text-white-50 small mb-2">Líder Iniciativa Cluster Farmacéutico</div>
                        <div class="fw-semibold text-white small mb-1">Miguel Angel Bustos Uribe</div>
                        <div class="text-white-50 small d-flex align-items-center">
                            <i class="bi bi-envelope me-2 text-primary"></i>
                            <a href="mailto:Miguel.bustos@ccb.org.co" class="text-white-50 text-decoration-none hover-text-white" style="transition:color 0.3s ease;">
                                Miguel.bustos@ccb.org.co
                            </a>
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
                        <a href="{{ route('policies-data.index') }}" class="text-white-50 text-decoration-none small me-3 hover-text-white" style="transition:color 0.3s ease;">
                            <i class="bi bi-shield-check me-1"></i>Política de Privacidad
                        </a>
                        <a href="{{ route('policies-data.index') }}" class="text-white-50 text-decoration-none small hover-text-white" style="transition:color 0.3s ease;">
                            <i class="bi bi-file-text me-1"></i>Términos de Uso
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/custom.js"></script>
</body>
</html>
