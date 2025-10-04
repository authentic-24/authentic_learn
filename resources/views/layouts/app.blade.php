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
                <i class="bi bi-capsule me-2"></i>Authentic Learn
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
    <footer class="border-0 mt-5 pt-5 pb-4" style="background: linear-gradient(135deg, #1e293b 0%, #334155 100%);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="fw-bold mb-3 text-white" style="font-family:'Inter',sans-serif;font-size:1.3rem;">
                        <i class="bi bi-capsule me-2 text-primary"></i>Authentic Farma
                    </div>
                    <p class="text-white-50 small mb-3" style="line-height:1.6;">
                        Transformando el reclutamiento en la industria farmacéutica con formación especializada y conexiones laborales.
                    </p>
                    <div class="d-flex justify-content-center gap-3 mb-4">
                        <a href="#" class="text-white-50 hover-text-primary" style="font-size:1.3rem;transition:color 0.3s ease;">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="#" class="text-white-50 hover-text-primary" style="font-size:1.3rem;transition:color 0.3s ease;">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="text-white-50 hover-text-primary" style="font-size:1.3rem;transition:color 0.3s ease;">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                    <div class="text-white-50 small d-flex align-items-center justify-content-center">
                        <i class="bi bi-c-circle me-2"></i>
                        {{ date('Y') }} Authentic Farma. Todos los derechos reservados.
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/custom.js"></script>
</body>
</html>
