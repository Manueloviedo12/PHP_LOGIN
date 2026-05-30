<?php
require_once __DIR__ . "/config.php";
session_start();
unset($_SESSION['user']);
session_destroy();
header("Location: " . BASE_URL . "index.php?action=login");
exit;