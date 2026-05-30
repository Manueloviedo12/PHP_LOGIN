<?php

require_once __DIR__ . '/../models/ContactModel.php';

class ContactController {

    private $model;

  private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

 public function enviar() {

    $nombre = $_POST['nombre'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $mensaje = $_POST['mensaje'] ?? '';

    if (empty($nombre) || empty($correo) || empty($mensaje)) {
        header("Location: index.php?action=contacto&status=error");
        exit;
    }

    $sql = "INSERT INTO contactos (nombre, correo, mensaje)
            VALUES (?, ?, ?)";

    $stmt = $this->conn->prepare($sql);

    if (!$stmt) {
        header("Location: index.php?action=perfilpublico&status=error");
        exit;
    }

    $stmt->bind_param("sss", $nombre, $correo, $mensaje);

    if ($stmt->execute()) {
       header("Location: index.php?action=perfil_publico&status=success");
exit;
    } else {
        header("Location: index.php?action=perfilpublico&status=error");
    }

    exit;
}

}