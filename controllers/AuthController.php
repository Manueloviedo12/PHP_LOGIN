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

 public function login() {

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $error = null;

    if ($_POST) {

        $correo = $_POST['correo'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = $this->usuarioModel->login($correo, $password);

        if (is_array($user)) {

            session_regenerate_id(true);

            $_SESSION['user'] = [
                "id" => $user['id'],
                "nombre" => $user['nombre'],
                "correo" => $user['correo']
            ];

            header("Location: index.php?action=perfil");
            exit;

        } elseif ($user === "no_existe") {

            $_SESSION['error'] = "El usuario no existe";
            header("Location: index.php?action=login");
            exit;

        } elseif ($user === "password_incorrecta") {

            $_SESSION['error'] = "Contraseña incorrecta";
            header("Location: index.php?action=login");
            exit;
        }
    }

    include __DIR__ . "/../views/login.php";
}

   public function register() {

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if ($_POST) {

        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        $result = $this->usuarioModel->register($cedula, $nombre, $correo, $password);

        if ($result === "correo_existe") {

            $_SESSION['error'] = "El usuario ya existe en la base de datos";
            header("Location: index.php?action=register");
            exit;
        }

        if ($result === "ok") {

            $_SESSION['success'] = "Registro exitoso, ahora inicia sesión";
            header("Location: index.php?action=login");
            exit;
        }

        if ($result === "error") {

            $_SESSION['error'] = "Error al registrar usuario";
            header("Location: index.php?action=register");
            exit;
        }
    }

    include __DIR__ . "/../views/register.php";
}

}