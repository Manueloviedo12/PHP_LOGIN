<?php
require_once __DIR__ . "/config.php";

session_start();

// eliminar solo el usuario
unset($_SESSION['user']);

// opcional: destruir completamente la sesión
session_destroy();

header("Location: " . BASE_URL . "index.php?action=login");
exit;