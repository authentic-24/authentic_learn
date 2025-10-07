@extends('layouts.app')

@section('title', 'Authentic Learn - Registro')

@section('content')
<!-- Encabezado profesional con gradiente -->
<div class="position-relative" style="min-height: 20vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100"></div>
    <div class="container position-relative" style="z-index: 2;">
        <div class="row justify-content-center align-items-center" style="min-height: 20vh;">
            <div class="col-lg-8 text-center">
               
                
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: -90px; position: relative; z-index: 10;">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-12">
            <div class="card shadow-lg border-0 rounded-4" style="background: rgba(255, 255, 255, 0.98); backdrop-filter: blur(15px); border: 1px solid rgba(0, 87, 184, 0.1);">
                <div class="card-body p-4 p-md-5">
                    <!-- Header del formulario -->
                    <div class="text-center mb-4">
                        {{-- <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 mb-3" style="width: 70px; height: 70px;">
                            <i class="bi bi-person-plus-fill text-primary" style="font-size: 2rem;"></i>
                        </div> --}}
                        <h2 class="h3 fw-bold mb-2" style="color: #1e293b; font-family:'Inter',sans-serif;">Crear cuenta</h2>
                        <p class="text-secondary small mb-0">Completa tus datos para acceder a la plataforma</p>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success border-0 rounded-3" style="background: rgba(25, 135, 84, 0.1); border-left: 4px solid #198754 !important;">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>{{ session('success') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <!-- Información personal -->
                        <div class="mb-4">
                            <h6 class="fw-semibold text-primary mb-3">
                                <i class="bi bi-person-badge me-2"></i>Información Personal
                            </h6>
                            <div class="row g-2">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label text-secondary small fw-medium">Nombre *</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;">
                                            <i class="bi bi-person text-primary"></i>
                                        </span>
                                        <input type="text" name="nombre" class="form-control border-start-0" 
                                               style="border-color: #e2e8f0; padding-left: 0;" 
                                               placeholder="Ingresa tu nombre" 
                                               value="{{ old('nombre') }}" required>
                                    </div>
                                    @error('nombre')<div class="text-danger small mt-1"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label text-secondary small fw-medium">Apellido</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;">
                                            <i class="bi bi-person-lines-fill text-primary"></i>
                                        </span>
                                        <input type="text" name="apellido" class="form-control border-start-0" 
                                               style="border-color: #e2e8f0; padding-left: 0;" 
                                               placeholder="Ingresa tu apellido" 
                                               value="{{ old('apellido') }}">
                                    </div>
                                    @error('apellido')<div class="text-danger small mt-1"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>@enderror
                                </div>
                                
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label text-secondary small fw-medium">Email *</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;">
                                            <i class="bi bi-envelope text-primary"></i>
                                        </span>
                                        <input type="email" name="email" class="form-control border-start-0" 
                                               style="border-color: #e2e8f0; padding-left: 0;" 
                                               placeholder="ejemplo@correo.com" 
                                               value="{{ old('email') }}" required>
                                    </div>
                                    @error('email')<div class="text-danger small mt-1"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>@enderror
                                </div>
                                
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label text-secondary small fw-medium">Móvil *</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;">
                                            <i class="bi bi-phone text-primary"></i>
                                        </span>
                                        <input type="tel" name="movil" class="form-control border-start-0" 
                                               style="border-color: #e2e8f0; padding-left: 0;" 
                                               placeholder="300 000 0000" 
                                               value="{{ old('movil') }}" required>
                                    </div>
                                    @error('movil')<div class="text-danger small mt-1"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>@enderror
                                </div>
                                
                                <div class="col-12 mb-3">
                                    <label class="form-label text-secondary small fw-medium">Profesión *</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;">
                                            <i class="bi bi-briefcase text-primary"></i>
                                        </span>
                                        <input type="text" name="profesion" class="form-control border-start-0" 
                                               style="border-color: #e2e8f0; padding-left: 0;" 
                                               placeholder="ej. Químico Farmacéutico, ingeniería biomédica" 
                                               value="{{ old('profesion') }}" required>
                                    </div>
                                    @error('profesion')<div class="text-danger small mt-1"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>@enderror
                                </div>
                            </div>
                        </div>

                        <!-- Seguridad -->
                        <div class="mb-4">
                            <h6 class="fw-semibold text-primary mb-3">
                                <i class="bi bi-shield-lock me-2"></i>Seguridad
                            </h6>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label text-secondary small fw-medium">Contraseña *</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;">
                                            <i class="bi bi-lock text-primary"></i>
                                        </span>
                                        <input type="password" name="password" id="password" class="form-control border-start-0 border-end-0" 
                                               style="border-color: #e2e8f0; padding-left: 0;" 
                                               placeholder="••••••••" required>
                                        <span class="input-group-text bg-light" style="border-color: #e2e8f0; cursor: pointer;" onclick="togglePassword('password')">
                                            <i class="bi bi-eye" id="togglePassword"></i>
                                        </span>
                                    </div>
                                    @error('password')<div class="text-danger small mt-1"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>@enderror
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label class="form-label text-secondary small fw-medium">Confirmar contraseña *</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;">
                                            <i class="bi bi-lock-fill text-primary"></i>
                                        </span>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control border-start-0 border-end-0" 
                                               style="border-color: #e2e8f0; padding-left: 0;" 
                                               placeholder="••••••••" required>
                                        <span class="input-group-text bg-light" style="border-color: #e2e8f0; cursor: pointer;" onclick="togglePassword('password_confirmation')">
                                            <i class="bi bi-eye" id="togglePasswordConfirm"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Información académica/profesional -->
                        <div class="mb-4">
                            <h6 class="fw-semibold text-primary mb-3">
                                <i class="bi bi-building me-2"></i>Información Académica/Profesional
                            </h6>
                            <div class="mb-3">
                                <label class="form-label text-secondary small fw-medium">Institución u organización *</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;">
                                        <i class="bi bi-building text-primary"></i>
                                    </span>
                                    <input type="text" name="institucion" class="form-control border-start-0" 
                                           style="border-color: #e2e8f0; padding-left: 0;" 
                                           placeholder="Universidad, empresa o institución" 
                                           value="{{ old('institucion') }}" required>
                                </div>
                                @error('institucion')<div class="text-danger small mt-1"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label text-secondary small fw-medium mb-3">¿Estudias actualmente? *</label>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-check form-check-custom h-100">
                                            <input class="form-check-input" type="radio" name="estudia_actualmente" id="estudia_si" value="1" {{ old('estudia_actualmente') == '1' ? 'checked' : '' }} required>
                                            <label class="form-check-label w-100 p-3 rounded-3 border text-center" for="estudia_si" style="cursor: pointer; transition: all 0.3s ease;">
                                                <i class="bi bi-mortarboard-fill text-success d-block mb-2" style="font-size: 1.5rem;"></i>
                                                <div class="fw-semibold">Sí, estudio</div>
                                                <small class="text-muted">Actualmente estudiante</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check form-check-custom h-100">
                                            <input class="form-check-input" type="radio" name="estudia_actualmente" id="estudia_no" value="0" {{ old('estudia_actualmente') == '0' ? 'checked' : '' }} required>
                                            <label class="form-check-label w-100 p-3 rounded-3 border text-center" for="estudia_no" style="cursor: pointer; transition: all 0.3s ease;">
                                                <i class="bi bi-x-circle-fill text-secondary d-block mb-2" style="font-size: 1.5rem;"></i>
                                                <div class="fw-semibold">No estudio</div>
                                                <small class="text-muted">No soy estudiante</small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @error('estudia_actualmente')<div class="text-danger small mt-2"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="mb-4" id="semestre_carrera_fields" style="display:none;">
                                <div class="p-3 rounded-3" style="background: rgba(0, 87, 184, 0.05); border-left: 4px solid #0057b8;">
                                    <h6 class="text-primary mb-3">
                                        <i class="bi bi-book me-2"></i>Información Académica
                                    </h6>
                                    <div class="row">
                                        <div class="col-12 col-md-6 mb-3">
                                            <label class="form-label text-secondary small fw-medium">Semestre actual</label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;">
                                                    <i class="bi bi-calendar-check text-primary"></i>
                                                </span>
                                                <input type="text" name="semestre" class="form-control border-start-0" 
                                                       style="border-color: #e2e8f0; padding-left: 0;" 
                                                       placeholder="ej. 5to semestre" 
                                                       value="{{ old('semestre') }}">
                                            </div>
                                            @error('semestre')<div class="text-danger small mt-1"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>@enderror
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label class="form-label text-secondary small fw-medium">Carrera</label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;">
                                                    <i class="bi bi-award text-primary"></i>
                                                </span>
                                                <input type="text" name="carrera" class="form-control border-start-0" 
                                                       style="border-color: #e2e8f0; padding-left: 0;" 
                                                       placeholder="ej. Química Farmacéutica" 
                                                       value="{{ old('carrera') }}">
                                            </div>
                                            @error('carrera')<div class="text-danger small mt-1"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-secondary small fw-medium mb-3">¿Estás trabajando? *</label>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-check form-check-custom h-100">
                                            <input class="form-check-input" type="radio" name="trabaja_actualmente" id="trabaja_si" value="1" {{ old('trabaja_actualmente') == '1' ? 'checked' : '' }} required>
                                            <label class="form-check-label w-100 p-3 rounded-3 border text-center" for="trabaja_si" style="cursor: pointer; transition: all 0.3s ease;">
                                                <i class="bi bi-briefcase-fill text-success d-block mb-2" style="font-size: 1.5rem;"></i>
                                                <div class="fw-semibold">Sí, trabajo</div>
                                                <small class="text-muted">Actualmente empleado</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check form-check-custom h-100">
                                            <input class="form-check-input" type="radio" name="trabaja_actualmente" id="trabaja_no" value="0" {{ old('trabaja_actualmente') == '0' ? 'checked' : '' }} required>
                                            <label class="form-check-label w-100 p-3 rounded-3 border text-center" for="trabaja_no" style="cursor: pointer; transition: all 0.3s ease;">
                                                <i class="bi bi-x-circle-fill text-secondary d-block mb-2" style="font-size: 1.5rem;"></i>
                                                <div class="fw-semibold">No trabajo</div>
                                                <small class="text-muted">Sin empleo actual</small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @error('trabaja_actualmente')<div class="text-danger small mt-2"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-4" id="empresa_fields" style="display:none;">
                                <div class="p-3 rounded-3" style="background: rgba(0, 168, 107, 0.05); border-left: 4px solid #00a86b;">
                                    <h6 class="text-success mb-3">
                                        <i class="bi bi-building-fill me-2"></i>Información Laboral
                                    </h6>
                                    <div class="mb-3">
                                        <label class="form-label text-secondary small fw-medium">Nombre de la empresa</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;">
                                                <i class="bi bi-building text-success"></i>
                                            </span>
                                            <input type="text" name="nombre_empresa" class="form-control border-start-0" 
                                                   style="border-color: #e2e8f0; padding-left: 0;" 
                                                   placeholder="ej. Laboratorio XYZ, Farmacia ABC" 
                                                   value="{{ old('nombre_empresa') }}">
                                        </div>
                                        @error('nombre_empresa')<div class="text-danger small mt-1"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-secondary small fw-medium mb-3">¿Estás buscando pasantía? *</label>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-check form-check-custom h-100">
                                            <input class="form-check-input" type="radio" name="busca_pasantia" id="pasantia_si" value="1" {{ old('busca_pasantia') == '1' ? 'checked' : '' }} required>
                                            <label class="form-check-label w-100 p-3 rounded-3 border text-center" for="pasantia_si" style="cursor: pointer; transition: all 0.3s ease;">
                                                <i class="bi bi-search text-warning d-block mb-2" style="font-size: 1.5rem;"></i>
                                                <div class="fw-semibold">Sí, busco</div>
                                                <small class="text-muted">Interesado en pasantías</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check form-check-custom h-100">
                                            <input class="form-check-input" type="radio" name="busca_pasantia" id="pasantia_no" value="0" {{ old('busca_pasantia') == '0' ? 'checked' : '' }} required>
                                            <label class="form-check-label w-100 p-3 rounded-3 border text-center" for="pasantia_no" style="cursor: pointer; transition: all 0.3s ease;">
                                                <i class="bi bi-x-circle-fill text-secondary d-block mb-2" style="font-size: 1.5rem;"></i>
                                                <div class="fw-semibold">No busco</div>
                                                <small class="text-muted">No necesito pasantía</small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @error('busca_pasantia')<div class="text-danger small mt-2"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <!-- Checkbox de términos y condiciones -->
                        <div class="mb-4">
                            <div class="form-check d-flex align-items-start">
                                <input class="form-check-input me-3 mt-1" type="checkbox" name="acepta_terminos" id="acepta_terminos" value="1" {{ old('acepta_terminos') ? 'checked' : '' }} required style="border-radius: 6px; border: 2px solid #e2e8f0; width: 20px; height: 20px;">
                                <label class="form-check-label text-secondary" for="acepta_terminos" style="font-size: 0.95rem; line-height: 1.5;">
                                    He leído y acepto los 
                                    <a href="{{ route('policies-data.index') }}" class="text-primary text-decoration-none fw-medium" target="_blank">términos y condiciones</a> 
                                    y la 
                                    <a href="{{ route('policies-data.index') }}" class="text-primary text-decoration-none fw-medium" target="_blank">política de privacidad</a> 
                                    de Authentic E-learning *
                                </label>
                            </div>
                            @error('acepta_terminos')<div class="text-danger small mt-2"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>@enderror
                        </div>

                        <!-- Botón de registro -->
                        <div class="d-grid gap-2 mb-4">
                            <button type="submit" id="btnRegistro" class="btn btn-pharma btn-lg py-3" style="border-radius: 12px; box-shadow: 0 8px 25px rgba(0, 87, 184, 0.2);" disabled>
                                <i class="bi bi-person-check-fill me-2"></i>Crear mi cuenta
                            </button>
                        </div>

                        <!-- Links adicionales -->
                        <div class="text-center">
                            <p class="text-secondary small mb-0">
                                ¿Necesitas ayuda? 
                                <a href="https://wa.me/573334002303" class="text-primary text-decoration-none fw-medium" target="_blank">Contáctanos por WhatsApp</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle campos de estudiante
    function toggleStudentFields() {
        var si = document.getElementById('estudia_si');
        var fields = document.getElementById('semestre_carrera_fields');
        if (si.checked) {
            fields.style.display = 'block';
            fields.style.animation = 'fadeIn 0.3s ease';
        } else {
            fields.style.display = 'none';
        }
    }
    
    // Toggle campos de empresa
    function toggleCompanyFields() {
        var si = document.getElementById('trabaja_si');
        var fields = document.getElementById('empresa_fields');
        if (si.checked) {
            fields.style.display = 'block';
            fields.style.animation = 'fadeIn 0.3s ease';
        } else {
            fields.style.display = 'none';
        }
    }
    
    // Estilo dinámico para radio buttons
    function updateRadioStyles(groupName) {
        const radios = document.querySelectorAll(`input[name="${groupName}"]`);
        radios.forEach(radio => {
            const label = document.querySelector(`label[for="${radio.id}"]`);
            if (radio.checked) {
                label.style.borderColor = '#00a86b';
                label.style.backgroundColor = 'rgba(0, 168, 107, 0.35)';
                label.style.transform = 'scale(1.02)';
            } else {
                label.style.borderColor = '#e2e8f0';
                label.style.backgroundColor = 'transparent';
                label.style.transform = 'scale(1)';
            }
        });
    }
    
    // Event listeners para estudios
    document.getElementById('estudia_si').addEventListener('change', function() {
        toggleStudentFields();
        updateRadioStyles('estudia_actualmente');
    });
    
    document.getElementById('estudia_no').addEventListener('change', function() {
        toggleStudentFields();
        updateRadioStyles('estudia_actualmente');
    });
    
    // Event listeners para trabajo
    document.getElementById('trabaja_si').addEventListener('change', function() {
        toggleCompanyFields();
        updateRadioStyles('trabaja_actualmente');
    });
    
    document.getElementById('trabaja_no').addEventListener('change', function() {
        toggleCompanyFields();
        updateRadioStyles('trabaja_actualmente');
    });
    
    // Event listeners para pasantía
    document.getElementById('pasantia_si').addEventListener('change', function() {
        updateRadioStyles('busca_pasantia');
    });
    
    document.getElementById('pasantia_no').addEventListener('change', function() {
        updateRadioStyles('busca_pasantia');
    });
    
    // Efectos hover para inputs
    const inputs = document.querySelectorAll('.form-control');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.style.borderColor = '#0057b8';
            this.style.boxShadow = '0 0 0 0.2rem rgba(0, 87, 184, 0.1)';
        });
        
        input.addEventListener('blur', function() {
            this.style.borderColor = '#e2e8f0';
            this.style.boxShadow = 'none';
        });
    });
    
    // Manejar checkbox de términos y condiciones
    const checkboxTerminos = document.getElementById('acepta_terminos');
    const btnRegistro = document.getElementById('btnRegistro');
    
    function toggleRegistroButton() {
        if (checkboxTerminos.checked) {
            btnRegistro.disabled = false;
            btnRegistro.style.cursor = 'pointer';
        } else {
            btnRegistro.disabled = true;
            btnRegistro.style.cursor = 'not-allowed';
        }
    }
    
    checkboxTerminos.addEventListener('change', function() {
        toggleRegistroButton();
        // Estilo dinámico para el checkbox
        if (this.checked) {
            this.style.borderColor = '#00a86b';
            this.style.backgroundColor = '#00a86b';
        } else {
            this.style.borderColor = '#e2e8f0';
            this.style.backgroundColor = 'transparent';
        }
    });
    
    // Inicializar estados
    toggleStudentFields();
    toggleCompanyFields();
    updateRadioStyles('estudia_actualmente');
    updateRadioStyles('trabaja_actualmente');
    updateRadioStyles('busca_pasantia');
    toggleRegistroButton(); // Inicializar estado del botón
});

// Función para mostrar/ocultar contraseñas
function togglePassword(fieldId) {
    const passwordField = document.getElementById(fieldId);
    const toggleIcon = fieldId === 'password' ? 
        document.getElementById('togglePassword') : 
        document.getElementById('togglePasswordConfirm');
    
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.classList.remove('bi-eye');
        toggleIcon.classList.add('bi-eye-slash');
    } else {
        passwordField.type = 'password';
        toggleIcon.classList.remove('bi-eye-slash');
        toggleIcon.classList.add('bi-eye');
    }
}
</script>

<style>
@media (max-width: 576px) {
    .card-body.p-4, .card-body.p-md-5 {
        padding: 1.2rem !important;
    }
    .rounded-4 {
        border-radius: 1.1rem !important;
    }
    .form-label, .input-group-text {
        font-size: 0.98rem !important;
    }
    .btn-pharma.btn-lg {
        font-size: 1.1rem !important;
        padding: 0.9rem 1.2rem !important;
    }
    .mb-4 {
        margin-bottom: 1.2rem !important;
    }
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}

.form-check-custom input[type="radio"] {
    display: none;
}

.form-check-custom label:hover {
    border-color: #00a86b !important;
    background-color: rgba(0, 168, 107, 0.18) !important;
}

.input-group:focus-within .input-group-text {
    border-color: #0057b8;
    background-color: rgba(0, 87, 184, 0.05);
}

/* Estilos para checkbox de términos y condiciones */
.form-check-input {
    transition: all 0.3s ease;
}

.form-check-input:checked {
    background-color: #00a86b;
    border-color: #00a86b;
}

.form-check-input:focus {
    border-color: #00a86b;
    box-shadow: 0 0 0 0.2rem rgba(0, 168, 107, 0.25);
}

.form-check-input:hover {
    border-color: #00a86b;
}

/* Botón deshabilitado */
.btn:disabled {
    background-color: #6c757d !important;
    border-color: #6c757d !important;
    color: #ffffff !important;
    opacity: 1 !important;
    cursor: not-allowed;
    transform: none !important;
}

.btn:disabled:hover {
    background-color: #6c757d !important;
    border-color: #6c757d !important;
    transform: none !important;
    box-shadow: none !important;
}
</style>

@endsection
