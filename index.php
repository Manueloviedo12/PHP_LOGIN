<?php
require_once __DIR__ . "/db/conexion.php";
require_once __DIR__ . "/controllers/AuthController.php";
require_once __DIR__ . "/controllers/UserController.php";
require_once __DIR__ . "/controllers/ContactController.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$contactController = new ContactController($conn);
$controller = new UserController($conn);
$action = $_GET['action'] ?? 'login';
switch ($action) {

    case 'login':
        $auth = new AuthController($conn);
        $auth->login();
        break;

    case 'register':
        $auth = new AuthController($conn);
        $auth->register();
        break;

    case 'perfil':
        $user = new UserController($conn);
        $user->perfil();
        break;

    case 'update':
        $user = new UserController($conn);
        $user->actualizarPerfil();
        break;

    case 'formPassword':
        $user = new UserController($conn);
        $user->formPassword();
        break;

    case 'actualizarPassword':
        $user = new UserController($conn);
        $user->actualizarPassword();
        break;
    
    case 'perfilpublico':
        $controller->perfilpublico();
        break;

    case 'perfil_publico':   
        $controller->perfilpublico();
        break;

    case "contacto":
        include __DIR__ . "/views/contacto.php";
        break;

    case "enviar":
        $contactController->enviar();
        break;

    case 'logout':
        session_destroy();
        header("Location: index.php?action=login");
        exit;
        break;

    default:
        echo "Página no encontrada";
        break;
}