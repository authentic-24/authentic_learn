<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\BienvenidaDetallada;
use App\Models\Usuario;
use App\Models\PerfilEstudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use App\Mail\BienvenidaUsuario;
use App\Services\MoodleService;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request,  MoodleService $moodle)
    {
        // Validación de los datos del formulario
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'apellido' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios,email|unique:usuarios,username',
            'password' => 'required|string|min:8|confirmed',
            // Validación perfil estudiante
            'movil' => 'nullable|string|max:30',
            'profesion' => 'nullable|string|max:100',
            'institucion' => 'nullable|string|max:255',
            'estudia_actualmente' => 'nullable|in:0,1',
            'semestre' => 'nullable|string|max:50',
            'carrera' => 'nullable|string|max:100',
            'trabaja_actualmente' => 'nullable|in:0,1',
            'nombre_empresa' => 'nullable|string|max:255',
            'cargo' => 'nullable|string|max:100',
            'busca_pasantia' => 'nullable|in:0,1',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.string' => 'El nombre debe ser texto válido.',
            'nombre.max' => 'El nombre no puede tener más de 255 caracteres.',
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'Debe ingresar un email válido.',
            'email.unique' => 'Este email ya está registrado.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'movil.max' => 'El móvil no puede tener más de 30 caracteres.',
            'profesion.max' => 'La profesión no puede tener más de 100 caracteres.',
            'institucion.max' => 'La institución no puede tener más de 255 caracteres.',
            'semestre.max' => 'El semestre no puede tener más de 50 caracteres.',
            'carrera.max' => 'La carrera no puede tener más de 100 caracteres.',
            'nombre_empresa.max' => 'El nombre de la empresa no puede tener más de 255 caracteres.',
            'cargo.max' => 'El cargo no puede tener más de 100 caracteres.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Por favor revisa los campos e inténtalo de nuevo.');
        }

        try {
            $usuario = Usuario::create([
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'username' => $request->email,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'enabled' => true,
            ]);



            // Guardar perfil estudiante si hay datos
            PerfilEstudiante::create([
                'usuario_id' => $usuario->id,
                'movil' => $request->movil,
                'profesion' => $request->profesion,
                'institucion' => $request->institucion,
                'estudia_actualmente' => $request->estudia_actualmente ? 1 : 0,
                'semestre' => $request->semestre,
                'carrera' => $request->carrera,
                'trabaja_actualmente' => $request->trabaja_actualmente ? 1 : 0,
                'nombre_empresa' => $request->nombre_empresa,
                'cargo' => $request->cargo,
                'busca_pasantia' => $request->busca_pasantia ? 1 : 0,
                'password_temp' => $request->password,
            ]);

            $result = $moodle->createUser($usuario, $request->password);

            if (isset($result[0]['id'])) {
                $moodleUserId = $result[0]['id'];
                $moodle->assignStudentRole($moodleUserId);
            }

            Mail::to($usuario->email)->send(new BienvenidaDetallada($usuario));
            return redirect()->route('welcome')->with('success', '¡Registro exitoso! Te hemos enviado un email de bienvenida.');
        } catch (\Throwable $e) { // Usamos Throwable para capturar tanto Errores como Excepciones
            // Registro detallado para Google Cloud Logging
            \Log::error('FALLO CRÍTICO EN REGISTRO INNOVAPHARMA', [
                'mensaje' => $e->getMessage(),
                'archivo' => $e->getFile(),
                'linea'   => $e->getLine(),
                'input'   => $request->except(['password', 'password_confirmation']), // No logueamos claves por seguridad
                'trace'   => $e->getTraceAsString()
            ]);
            // dd('FALLO CRÍTICO EN REGISTRO INNOVAPHARMA : ' . $e->getMessage());
            // Devolvemos al usuario con un mensaje amigable pero con el detalle técnico oculto
            return redirect()->back()
                ->withInput()
                ->with('error', 'Lo sentimos, hubo un problema técnico: ' . $e->getMessage());
        }
    }
}
