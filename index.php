<?php

require_once __DIR__ . "/db/conexion.php";
require_once __DIR__ . "/controllers/AuthController.php";
require_once __DIR__ . "/controllers/UserController.php";

//  iniciar sesión UNA sola vez
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

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

    //  ACTUALIZAR PASSWORD
    case 'actualizarPassword':
        $user = new UserController($conn);
        $user->actualizarPassword();
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