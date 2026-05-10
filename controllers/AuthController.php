<?php

require_once __DIR__ . "/../config.php";
require_once __DIR__ . "/../db/conexion.php";
require_once __DIR__ . "/../models/Usuario.php";

class AuthController {

    private $usuarioModel;

    // Constructor: inicializa el modelo Usuario con la conexión a BD
    public function __construct($conn) {
        $this->usuarioModel = new Usuario($conn);
    }

    // =========================
    // LOGIN DE USUARIO
    // =========================
    public function login() {

        // Inicia sesión solo si no está activa aún
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $error = null; // variable para mostrar errores en la vista

        // Si el formulario fue enviado (POST)
        if ($_POST) {

            // Captura de datos del formulario con fallback seguro
            $correo = $_POST['correo'] ?? '';
            $password = $_POST['password'] ?? '';

            // Llama al modelo para validar usuario
            $user = $this->usuarioModel->login($correo, $password);

            // Si devuelve un array, el login fue exitoso
            if (is_array($user)) {

                // 🔐 Regenera ID de sesión para evitar session fixation (seguridad)
                session_regenerate_id(true);

                // Guarda SOLO datos necesarios del usuario en sesión
                $_SESSION['user'] = [
                    "id" => $user['id'],
                    "nombre" => $user['nombre'],
                    "correo" => $user['correo']
                ];

                // Redirige al perfil después del login exitoso
                header("Location: index.php?action=perfil");
                exit;

            // Manejo de errores de login
            } elseif ($user === "no_existe") {
                $error = "El usuario no existe";

            } elseif ($user === "password_incorrecta") {
                $error = "Contraseña incorrecta";
            }
        }

        // Carga la vista del login
        include __DIR__ . "/../views/login.php";
    }

    // =========================
    // REGISTRO DE USUARIO
    // =========================
    public function register() {

        $mensaje = ""; // mensaje para la vista

        // Si se envió el formulario
        if ($_POST) {

            // Captura datos del formulario
            $cedula = $_POST['cedula'];
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];

            // ⚠️ IMPORTANTE: el password se envía sin hash aquí
            $password = $_POST['password'];

            // Llama al modelo para registrar usuario
            $result = $this->usuarioModel->register($cedula, $nombre, $correo, $password);

            // Si el correo ya existe en BD
            if ($result === "correo_existe") {
                $mensaje = "El usuario ya existe en la base de datos";
            }

            // Registro exitoso → redirige a login
            if ($result === "ok") {
                header("Location: index.php?action=login");
                exit;
            }

            // Error general de registro
            if ($result === "error") {
                $mensaje = "Error al registrar usuario";
            }
        }

        // Carga la vista de registro
        include __DIR__ . "/../views/register.php";
    }


}