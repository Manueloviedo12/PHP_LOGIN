<?php

class Usuario {

    private $conn;

    // Constructor: recibe conexión a la base de datos
    public function __construct($conn) {
        $this->conn = $conn;
    }

    // =========================
    // LOGIN DE USUARIO
    // =========================
    public function login($correo, $password) {

        // Limpia espacios del correo
        $correo = trim($correo);

        // Consulta usuario por correo
        $sql = "SELECT * FROM usuarios WHERE correo = ? LIMIT 1";
        $stmt = $this->conn->prepare($sql);

        // Si falla la consulta preparada
        if (!$stmt) {
            die("Error en prepare: " . $this->conn->error);
        }

        // Asigna parámetro
        $stmt->bind_param("s", $correo);
        $stmt->execute();

        // Obtiene resultado
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        // Si no existe usuario
        if (!$user) {
            return "no_existe";
        }

        // Verifica contraseña con hash
        if (!password_verify($password, $user['password'])) {
            return "password_incorrecta";
        }

        // Retorna usuario si todo es correcto
        return $user;
    }

    // =========================
    // REGISTRO DE USUARIO
    // =========================
    public function register($cedula, $nombre, $correo, $password) {

        // Limpia correo
        $correo = trim($correo);

        // Verifica si el correo ya existe
        $sql = "SELECT id FROM usuarios WHERE correo = ?";
        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            return "error_prepare";
        }

        $stmt->bind_param("s", $correo);
        $stmt->execute();

        $result = $stmt->get_result();

        // Si ya existe usuario
        if ($result->num_rows > 0) {
            return "correo_existe";
        }

        // 🔥 IMPORTANTE: hash de contraseña en el MODEL (buena práctica MVC)
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);

        // Inserta usuario nuevo
        $sql = "INSERT INTO usuarios (cedula, nombre, correo, password)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            return "error_prepare";
        }

        $stmt->bind_param("ssss", $cedula, $nombre, $correo, $passwordHash);

        // Ejecuta inserción
        if ($stmt->execute()) {
            return "ok";
        }

        return "error";
    }
}