<?php

class ContactModel {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function guardar($nombre, $correo, $mensaje) {

        $sql = "INSERT INTO contactos (nombre, correo, mensaje)
                VALUES (:nombre, :correo, :mensaje)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':nombre' => $nombre,
            ':correo' => $correo,
            ':mensaje' => $mensaje
        ]);
    }
}